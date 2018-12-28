<?php

namespace Rajaongkir;

use Illuminate\Support\ServiceProvider;

Class RajaongkirServiceProvider extends ServiceProvider{
	public function boot(){
		
		// $this->loadRoutesFrom(__DIR__.'/routes/web.php');
		// $this->loadViewsFrom(__DIR__.'/./../resources/views','rajaongkir');
	}
	public function register(){
		require_once __DIR__.'/./../app/Rajaongkir.php';
		$this->config();
	}
	private function config(){
		$path = dirname(__DIR__);

		$publishing = [
				'config' => [
					__DIR__.'/config/rajaongkir.php' =>  config_path('rajaongkir.php')
				]
				
		];
		foreach ($publishing as $toconf => $dir) {
			$this->publishes($dir,$toconf);
		}
	}

}