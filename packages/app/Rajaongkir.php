<?php
namespace Rajaongkir\app;

class Rajaongkir {
	public function __construct(){
		$this->end_point = config('rajaongkir.rajaongkir_url', 'https://rajaongkir.com/api/starter');
		$this->key = config('rajaongkir.rajaongkir_key','6141096f7c8fed1a3226cc03ac3dab0b');
	}

	public function atinker($path,$id=null){

		 if($id == null){
		 	$uri =$this->end_point.'/'.$path;
		 }else{
		 	$uri = $this->end_point.'/'.$path.'?id='.$id;
		 }

		return $this->get($this->end_point."/city");
	}
	public function get($req){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => $req,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"key: ".$this->key
		),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  return $response;
		}
	}
	public function cost($from,$send,$weight,$kurir){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "origin=".$from."&destination=".$send. "&weight=".$weight."&courier=".$kurir,
		CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: ".$this->key
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
	}
}