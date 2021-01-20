<?php

namespace callum\test;

use muqsit\invmenu\InvMenu;
use muqsit\invmenu\InvMenuHandler;
use muqsit\invmenu\inventories\BaseFakeInventory;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\Player;
use pocketmine\item\Item;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;

use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\inventory\transaction\action\SlotChangeAction;
use pocketmine\event\inventory\InventoryTransactionEvent;

use pocketmine\utils\TextFormat as C;

class color extends PluginBase implements Listener
{

    public function OnEnable()
    {
        $this->getLogger()->info(C::RED . C::BOLD . "This plugin made by" . C::DARK_PURPLE . " CALLUM " . C::RED . " :)" . C::WHITE . "\n-\n-\n-\n-\n-\n-\n-\n-" . C::BLUE . "COVID-19" . C::DARK_PURPLE . " WASH YOUR HANDS" . C::WHITE . "\n-\n-\n-\n-\n-\n-\n-\n-");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        if (!InvMenuHandler::isRegistered()) {
            InvMenuHandler::register($this);
        }
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
        if ($cmd->getName() == "color") {
            if ($sender instanceof Player) {
                $this->colormenu = InvMenu::create(InvMenu::TYPE_DOUBLE_CHEST);
                $this->colormenu->readonly();
                $this->colormenu->setName(C::BOLD . "Color Menu");
                $this->colormenu->getInventory()->setContents(
                    0 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
					1 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    2 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    3 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    4 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    5 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    6 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    7 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    8 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    9 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    10 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    11 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    12 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    13 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    14 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    15 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    16 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    17 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    18 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),          
					19 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    20 => Item::get(Item::STAINED_GLASS_PANE, 4 , 1)->setCustomName(" "),
					21 => Item::get(Item::STAINED_GLASS_PANE, 5 , 1)->setCustomName(" "),
                    22 => Item::get(Item::STAINED_GLASS_PANE, 5 , 1)->setCustomName(" "),
                    23 => Item::get(Item::STAINED_GLASS_PANE, 5 , 1)->setCustomName(" "),
                    24 => Item::get(Item::STAINED_GLASS_PANE, 4 , 1)->setCustomName(" "),
                    25 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    26 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    27 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    28 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    29 => Item::get(Item::STAINED_GLASS_PANE, 4 , 1)->setCustomName(" "),
                    30 => Item::get(Item::STAINED_GLASS_PANE, 5 , 1)->setCustomName(" "),
                    31 => Item::get(Item::STAINED_GLASS_PANE, 5 , 1)->setCustomName(" "),
                    32 => Item::get(Item::STAINED_GLASS_PANE, 5 , 1)->setCustomName(" "),
                    33 => Item::get(Item::STAINED_GLASS_PANE, 4 , 1)->setCustomName(" "),
                    34 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    35 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    36 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    37 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
					38 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    39 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    40 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    41 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    42 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    43 => Item::get(Item::STAINED_GLASS_PANE, 1 , 1)->setCustomName(" "),
                    44 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    45 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    46 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    47 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    48 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    49 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName("Close the menu \n Click me!"),
                    50 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    51 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    52 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                    53 => Item::get(Item::STAINED_GLASS_PANE, 14 , 1)->setCustomName(" "),
                ]);
			}
		}
	}
}