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
        
    }
}
