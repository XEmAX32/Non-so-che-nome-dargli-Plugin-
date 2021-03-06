<?php

namespace GoodJoin;
  
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerSpawnEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase{

public function OnPlayerSpawn(PlayerSpawnEvent $event){
  $players = $this->getServer()->getLevelByName("world")->getPlayers();
  $player = $event->getPlayer()->getName();
$players->SendMessage(TextFormat::GREEN "[+]" ".$this->getPlayer()->getName().");
}
public function OnPlayerQuit(PlayerQuitEvent $event){
  $players = $this->getServer()->getLevelByName("world")->getPlayers();
  $player = $event->getPlayer()->getName();
$players->SendMessage(TextFormat::RED "[-]" ".$this->getPlayer()->getName().");
}
public function OnPlayerJoin(PlayerJoinEvent $event){
  $player = $event->getPlayer();
  $message = $this->getConfig()->get("Message");
  $player->sendMessage("$message");
}
}
