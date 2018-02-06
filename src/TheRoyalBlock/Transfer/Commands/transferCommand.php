<?php 
namespace TheRoyalBlock\Transfer\Commands;
use pocketmine\Player;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
class transferCommand extends VanillaCommand {
    
	private $plugin;
	const PREFIX = C::GOLD . "[" . C::BLUE . "Transfer" . C::GOLD . "] ". C::RESET . C::WHITE;
 
	public function __construct(\TheRoyalBlock\Transfer\Main $plugin){
		$this->plugin = $plugin;
		parent::__construct('Transfer', 'Resize Yourself', '/transfer <player> <ip> <port> <message>');
		$this->setPermission('plugins.command');
	}
	public function execute(CommandSender $sender, $alias, array $args){
  switch(strtolower($command->getName())){
 $args[0] = $player;
$args[1] = $address;
$args[2] = $port;
$args[3] = $message;
$player->transfer($address, $port, $message); 
 }
			}
}
