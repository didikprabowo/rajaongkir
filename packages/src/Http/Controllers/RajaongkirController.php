<?php

namespace Rajaongkir\Http\Controllers;

use App\Http\Controllers\Controller;
use Rajaongkir\app\Rajaongkir;

Class RajaongkirController extends Controller{

	public function index(){
		// return view('rajaongkir::tesku');
		$client = new Rajaongkir;
		echo $prov =  $client->atinker('city',1);

	}
	public function cost(){
		$client = new Rajaongkir;
		echo $client->cost(501,114,1700,"jne");
	}
}




