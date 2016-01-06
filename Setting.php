<?php

class Setting
{
    private $url;
    private $nPath;

    private $urlticket = "xml/ticketlist.xml";
    private $urlpromo = "xml/promolist.xml";
    private $urlindex = "xml/listkota.xml";

    function Setting(){
        $this->url = "http://$_SERVER[HTTP_HOST]/PSBK/xml/";
        $this->nPath = "http://$_SERVER[HTTP_HOST]/PSBK/";
    }

    //////////////DUMMY XML LINKS START///////////////////////////////////////////////
    //Comment Bagian Dummy xml links untuk LIVE testing//
    private $originUrl = "getOrigin.xml";
    private $destinationUrl = "getDestination.xml";
    private $login = "login.xml";
    private $trips = "getTrips.xml";
    private $cityName = "getCityName.xml";
    private $register = "setRegister.xml";
    private $detailTrip = "getDetailTrip.xml";
    private $order = "getOrder.xml";
    private $confirmPayment = "setConfirmPayment.xml";
    private $setOrder = "setOrder.xml";
    private $userDetailById = "getUserDetailById.xml";
    private $userDetailByEmail = "getUserDetailByEmail.xml";
    private $updateToPaid = "updateToPaid.xml";
    private $promo = "getPromo.xml";
    //////////////DUMMY XML LINKS END///////////////////////////////////////////////

    /////////////////REAL WEB SERVICES METHOD////////////////////////////
    //Uncomment Bagian Real web services method untuk LIVE testing//
//    private $originUrl = "getOrigin";
//    private $destinationUrl = "getDestination";
//    private $login = "login.xml";
//    private $trips = "getTrips";
//    private $cityName = "getCityName";
//    private $register = "setRegister";
//    private $detailTrip = "getDetailTrip";
//    private $order = "getOrder";
//    private $confirmPayment = "setConfirmPayment";
//    private $setOrder = "setOrder";
//    private $userDetailById = "getUserDetailById";
//    private $userDetailByEmail = "getUserDetailByEmail";
//    private $updateToPaid = "updateToPaid";
//    private $promo = "getPromo";


    public function getUrl()
    {
        return $this->url;

    }

    public function getPath()
    {
        return $this->nPath;

    }

    public function getOrigin()
    {
        return $this->url . $this->originUrl;
    }

    public function getDestination()
    {
        return $this->url . $this->destinationUrl;
    }

    public function getLoginUrl()
    {
        return $this->url . $this->login;
    }

    public function getTrips()
    {
        return $this->url . $this->trips;
    }

    public function getCityName()
    {
        return $this->url . $this->cityName;
    }

    public function setRegister()
    {
        return $this->url . $this->register;
    }

    public function getDetailTrip()
    {
        return $this->url . $this->detailTrip;
    }

    public function getOrder()
    {
        return $this->url . $this->order;
    }

    public function setConfirmPayment()
    {
        return $this->url . $this->confirmPayment;
    }

    public function setOrder()
    {
        return $this->url . $this->setOrder;
    }

    public function getUserDetailById()
    {
        return $this->url . $this->userDetailById;
    }

    public function getUserDetailByEmail()
    {
        return $this->url . $this->userDetailByEmail;
    }

    public function updateToPaid()
    {
        return $this->url . $this->updateToPaid;
    }

    public function getPromo()
    {
        return $this->url . $this->promo;
    }

    ///////////////////OTHER WORLDS///////////////////


    public function getUrlTicket()
    {
        return $this->url . $this->urlticket;
    }

    public function getUrlPromo()
    {
        return $this->url . $this->urlpromo;
    }

    public function getUrlIndex()
    {
        return $this->url . $this->urlindex;
    }
}

?>