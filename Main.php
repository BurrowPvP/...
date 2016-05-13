<?php

/*
 ____ _____  _    ____ _____ 
/ ___|_   _|/ \  |  _ \_   _|
\___ \ | | / _ \ | |_) || |  
 ___) || |/ ___ \|  _ < | |  
|____/ |_/_/   \_\_| \_\|_| 
 */ 
                             
namespace onevsone;
                             
Class Main extends Pluginbase implements Listener{
    
    public function onLoad(){
        $this->getLogger()->info(TextFormat::YELLOW."Kits-Saving");
        @mkdir($this->getDataFolder() . "Kits/");
            }
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    }
    public function onDisable(){
        // onDisable
    }
    //wenn der Spieler auf das schild klickt..
    public function onPlayerInteract(PlayerInteractEvent $event){
	$b = $event->getBlock();
        $player = $event->getPlayer();
        if($b->getID() == 63 || $b->getID() == 68){
                        }
    }
    // chat format von dem lobby-core
    public function onChat(PlayerChatEvent $event){
    
    $player = $event->getPlayer();
    $nachricht = $event->getMessage();
    
        if($player->hasPermission("Chat.Spieler")) {
            $event->setFormat( "Â§e" . $player->getName() . " Â§8Â»Â§7 " .$nachricht);      
        }

        if($player->hasPermission("Chat.Premium")) {
            $event->setFormat( "Â§6" . $player->getName() . " Â§8Â»Â§7 " .$nachricht);       
        }
        if($player->hasPermission("Chat.Supporter")) {
            $event->setFormat( "Â§9" . $player->getName() . " Â§8Â»Â§7 " .$nachricht);       
        }
        if($player->hasPermission("Chat.Moderator")) {
            $event->setFormat( "Â§c" . $player->getName() . " Â§8Â»Â§7 " .$nachricht);       
        }
        if($player->hasPermission("Chat.Admin")) {
            $event->setFormat( "Â§4" . $player->getName() . " Â§8Â»Â§7 " .$nachricht);       
        }

}
}
