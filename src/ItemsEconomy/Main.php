<?php

namespace ItemsEconomy;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

use pocketmine\Server;
use pocketmine\Player;

class Main extends pluginBase implements Listener{
	
	public function onEnable(){
		$this->getLogger()->info("=========================");
 		$this->getLogger()->info("ItemsEconomyを読み込みました");
 		$this->getLogger()->info("制作者: PawarenessC");
 		$this->getLogger()->info("バージョン:{$this->getDescription()->getVersion()}");
 		$this->getLogger()->info("=========================");
		
		$this->configInit();
		$this->registerEvents();
		$this->Init();
	}
	
	public function configInit(){
		$this->data = new Config($this->getDataFolder() . "Datas.yml", Config::YAML);
	}
	
	public function registerEvents(){
	}
	
	public function Init(){
		$api = new APIs($this);
	}
