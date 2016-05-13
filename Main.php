<?php


namespace onevsone;


Class Main extends Pluginbase implements Listener{
    
    public function onLoad(){
        $this->getLogger()->info(TextFormat::YELLOW."Kits-Saving");
        @mkdir($this->getDataFolder() . "Kits/");
            }
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    }
}
