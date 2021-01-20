<?php

namespace callum\games;

use muqsit\invmenu\InvMenu;
use muqsit\invmenu\InvMenuHandler;
use muqsit\invmenu\transaction\InvMenuTransaction;
use muqsit\invmenu\transaction\InvMenuTransactionResult;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

	public function onEnable(){
		$this->getLogger()->info("GameGUI has been enabled");
		if(!InvMenuHandler::isRegistered()){
			InvMenuHandler::register($this);
		}
		$command = new PluginCommand("games", $this);
		$command->setDescription("Open GameGUI");
		$this->getServer()->getCommandMap()->register("game", $command);
	}

	public function onDisable(){
		$this->getLogger()->info("GameGUI has been disabled");
	}

	public function onCommand(CommandSender $player, Command $cmd, string $label, array $args) : bool{
		switch($cmd->getName()){
			case "games":
				if(!$player instanceof Player){
					$player->sendMessage("Opening");
					return true;
				}
				$this->games($player);
				break;
		}
		return true;
	}

	public function games(Player $player){
		$menu = InvMenu::create(InvMenu::TYPE_CHEST);
		$menu->readOnly();
		$menu->setListener(\Closure::fromCallable([$this, "GUIListener"]));
		$menu->setName("GameGUI");
		$menu->send($player);
		$inv = $menu->getInventory();
        $lava = Item::get(Item::STILL_LAVA)->setCustomName("HotBlock");
        $axe = Item::get(Item::IRON_AXE)->setCustomName("Murder Mystery");
		$pearl = Item::get(Item::ENDER_PEARL)->setCustomName("The Bridge");
		$stone = Item::get(Item::STONE)->setCustomName("Hub");
		$inv->setItem(2, $lava);
		$inv->setItem(4, $axe);
        $inv->setItem(6, $pearl);
		$inv->setItem(8, $stone);
	}

	public function GUIListener(InvMenuTransaction $action) : InvMenuTransactionResult{
		$itemClicked = $action->getOut();
		$player = $action->getPlayer();
		if($itemClicked->getId() == 11){
			$action->getAction()->getInventory()->onClose($player);
			$player->sendMessage("Joining");
			\pocketmine\Server::getInstance()->dispatchCommand($player, "mw tp HotBlock");
			return $action->discard();
		}
		if($itemClicked->getId() == 258){
			$action->getAction()->getInventory()->onClose($player);
			$player->sendMessage("Joining");
			\pocketmine\Server::getInstance()->dispatchCommand($player, "mdr join MMHUB");
			return $action->discard();
		}
        if($itemClicked->getId() == 368){
			$action->getAction()->getInventory()->onClose($player);
			$player->sendMessage("Joining");
			\pocketmine\Server::getInstance()->dispatchCommand($player, "sw random");
			return $action->discard();
		}
        if($itemClicked->getId() == 1){
			$action->getAction()->getInventory()->onClose($player);
			$player->sendMessage("Joining");
			\pocketmine\Server::getInstance()->dispatchCommand($player, "mw tp "Sea Temple" ");
			return $action->discard();
		}
		return $action->discard();
	}
}
