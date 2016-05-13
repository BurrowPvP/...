<?php


namespace onevsone;


Class Main extends Pluginbase implements Listener{
    
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    }
}