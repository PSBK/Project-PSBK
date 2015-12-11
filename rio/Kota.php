<?php

class Kota
{
	public function loadKotaAsal($url)
	{
		//$data = file_get_contents($url);
		$data = simplexml_load_file($url);
 		
		return $data;
	}
	
	public function loadPromo ($url)
	{
		$data = simplexml_load_file($url);
 		
		return $data;
	}
	
	public function loadPromoList ($url)
	{
		$data = simplexml_load_file($url);
 		
		return $data;
	}
	
}

?>