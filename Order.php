<?php

/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/29/15
 * Time: 7:30 PM
 */
class Order
{
    private $origin;
    private $destination;
    private $seat;
    private $dDate;
    private $rDate;
    private $type;
    private $idDeparture;
    private $idReturn;

    /**
     * Order constructor.
     * @param $origin
     * @param $destination
     * @param $seat
     * @param $dDate
     * @param $rDate
     * @param $type
     */
    public function __construct($origin, $destination, $seat, $dDate, $rDate, $type)
    {
        $this->origin = $origin;
        $this->destination = $destination;
        $this->seat = $seat;
        $this->dDate = $dDate;
        $this->rDate = $rDate;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return mixed
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * @param mixed $seat
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;
    }

    /**
     * @return mixed
     */
    public function getDDate()
    {
        return $this->dDate;
    }

    /**
     * @param mixed $dDate
     */
    public function setDDate($dDate)
    {
        $this->dDate = $dDate;
    }

    /**
     * @return mixed
     */
    public function getRDate()
    {
        return $this->rDate;
    }

    /**
     * @param mixed $rDate
     */
    public function setRDate($rDate)
    {
        $this->rDate = $rDate;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getIdDeparture()
    {
        return $this->idDeparture;
    }

    /**
     * @param mixed $idDeparture
     */
    public function setIdDeparture($idDeparture)
    {
        $this->idDeparture = $idDeparture;
    }

    /**
     * @return mixed
     */
    public function getIdReturn()
    {
        return $this->idReturn;
    }

    /**
     * @param mixed $idReturn
     */
    public function setIdReturn($idReturn)
    {
        $this->idReturn = $idReturn;
    }


}