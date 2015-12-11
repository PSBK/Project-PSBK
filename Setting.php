<?php
class Setting
{
	private $url = "http://localhost/PSBK-UI/";
	
	private $urlticket = "xml/ticketlist.xml";
	private $urlpromo = "xml/promolist.xml";
	private $urlindex = "xml/listkota.xml";
	
	public function getUrl()
	{
		return $this->url;
		
	}
	public function getUrlTicket()
	{
		return $this->url.$this->urlticket;
	}
	
	public function getUrlPromo()
	{
		return $this->url.$this->urlpromo;
	}
	public function getUrlIndex()
	{
		return $this->url.$this->urlindex;
	}
}
?>