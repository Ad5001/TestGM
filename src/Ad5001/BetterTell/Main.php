<?php
namespace Ad5001\BetterTell;

/*
                         _______________________________________________________________
                        /                 BetterTell Plugin by Ad5001 !                 \
                        /               This plugin is work in progress!                \
                        /  Feel free to make issues or/and help me correcting bugs :)   \
                        -----------------------------------------------------------------
*/

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
   class Main extends PluginBase {
          public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
                 switch($cmd->getName()){ // Command name
                         case "tellraw":
                           if($sender->hasPermission("btell.command.tellraw")){
                                 $sender->sendMessage["§a§l[Tellraw]§r§a Message has been display if you had tipe EXACTLY the player name!"];
                                 $telled = $args[0];
                                 $message = $args[1]->getMessage();
                                 $telled->getPlayerExact->sendMessage("$message");
                           }
                           return true;
                           break;
                         default:
                           if($sender->hasPermission("btell.command.tellraw")){
                                 $sender->sendMessage("§4Usage: /tellraw <player> <message>");
                           }
                  }
          }
          public function onDisable() {
                 $this->getLogger()->info("Test plugin has been disable!");
          }
   }
?>
