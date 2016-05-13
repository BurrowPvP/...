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
    // chat format von dem lobby-Core
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
        // nametags & JoinMessages aus dem Lobby-Core
    public function onJoin(PlayerJoinEvent $event){
    
    $player = $event->getPlayer();
    $NAME = $player->getName();
    
         if($player->hasPermission("Chat.Spieler")) {
            $player->setNameTag("Â§e" . $NAME);
            $event->setJoinMessage("Â§7Der Spieler Â§e" .$NAME. "Â§7 hat FFA betreten!");
        }
        if($player->hasPermission("Chat.Premium")) {
            $player->setNameTag("Â§6" . $NAME);     
            $event->setJoinMessage("Â§7Der Premium Â§6" .$NAME. "Â§7 hat FFA betreten!");       
        }
        if($player->hasPermission("Chat.Supporter")) {
            $player->setNameTag("Â§9" . $NAME);    
            $event->setJoinMessage("Â§7Der Supporter Â§9" .$NAME. "Â§7 hat FFA betreten!");          
        }
        if($player->hasPermission("Chat.Moderator")) {
            $player->setNameTag("Â§c" . $NAME);
            $event->setJoinMessage("Â§7Der Moderator Â§c" .$NAME. "Â§7 hat FFA betreten!");      
        }
        if($player->hasPermission("Chat.Admin")) {
            $player->setNameTag("Â§4" . $NAME);
            $event->setJoinMessage("Â§7Der Admin Â§4" .$NAME. "Â§7 hat FFA betreten!");   
        }
}

}
}
