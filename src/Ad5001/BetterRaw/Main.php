<?php
namespace Ad5001\BetterRaw;

/*
                         _______________________________________________________________
                        /                 BetterRaw Plugin by Ad5001 !                  \
                        /               This plugin is work in progress!                \
                        /  Feel free to make issues or/and help me correcting bugs :)   \
                        -----------------------------------------------------------------
*/

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\Player;
use pocketmine\server;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;
   class Main extends PluginBase {
          public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
                 switch($cmd->getName()) {
                         case "getgm":
                           $sender->sendMessage($this->getPlayer()->$sender->getGamemode());
                           return true;
                           break;
                 }
          }
   }
?>
