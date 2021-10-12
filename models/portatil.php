<?php

class ordenador
{
	private $tipo;
	private $ram;
	private $peso;
	private $almacenamiento;
	private $pulgadas;
	private $id; //No se muentra ni en pantalla ni en el formualrio, son datos internos
	private $usb;
	private $conectorVideo;
	private $hz;
	private $resolusion;
	private $precioAmazon; //No se muentra en el formulario pero si en la tabla a modo de boton 
	private $precioPcomponentes; //No se muentra en el formulario pero si en la tabla a modo de boton
	private $sistemaOperativo; //Es un bolean, es un dato primario
	private $conectorRed; //Es un bolean
	private $usb_C; //Es un bolean
	private $thunderbolt; //Es un bolean
	private $precio;



	/**
	 * Constructor para los portatiles de edicion
	 */

	// public   function __construct($tipo, $ram, $peso, $almacenamiento, $pulgadas,  $usb, $conectorVideo, $hz, $resolusion, $sistemaOperativo, $conectorRed, $usb_C, $thunderbolt, $precio)
	// {
	// 	$this->tipo = $tipo;
	// 	$this->ram = $ram;
	// 	$this->peso = $peso;
	// 	$this->almacenamiento = $almacenamiento;
	// 	$this->pulgadas = $pulgadas;
	// 	$this->usb = $usb;
	// 	$this->conectorVideo = $conectorVideo;
	// 	$this->hz = $hz;
	// 	$this->resolusion = $resolusion;
	// 	$this->sistemaOperativo = $sistemaOperativo;
	// 	$this->conectorRed = $conectorRed;
	// 	$this->usb_C = $usb_C;
	// 	$this->thunderbolt = $thunderbolt;
	// 	$this->precio = $precio;
	// }

public function __construct()
{
	
}


	public function getTipo()
	{
		return $this->tipo;
	}

	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}

	public function  getRam()
	{
		return $this->ram;
	}

	public function  setRam($ram)
	{
		$this->$ram = $ram;
	}

	public function  getPeso()
	{
		return $this->peso;
	}

	public function  setPeso($peso)
	{
		$this->$peso = $peso;
	}

	public function getAlmacenamiento()
	{
		return $this->almacenamiento;
	}

	public function  setAlmacenamiento($almacenamiento)
	{
		$this->$almacenamiento = $almacenamiento;
	}

	public function  getPulgadas()
	{
		return $this->pulgadas;
	}

	public function  setPulgadas($pulgadas)
	{
		$this->$pulgadas = $pulgadas;
	}

	public function Getid()
	{
		return $this->id;
	}

	public function  setId($id)
	{
		$this->id = $id;
	}

	public function  getUsb()
	{
		return $this->usb;
	}

	public function  setUsb($usb)
	{
		$this->$usb = $usb;
	}

	public function  getConectorVideo()
	{
		return $this->conectorVideo;
	}

	public function  setConectorVideo($conectorVideo)
	{
		$this->$conectorVideo = $conectorVideo;
	}

	public function  getHz()
	{
		return $this->hz;
	}

	public function  setHz($hz)
	{
		$this->$hz = $hz;
	}

	public function  getResolusion()
	{
		return $this->resolusion;
	}

	public function  setResolusion($resolusion)
	{
		$this->$resolusion = $resolusion;
	}

	public function getPrecioAmazon()
	{
		return $this->precioAmazon;
	}

	public function  setprecioAmazon($precioAmazon)
	{
		$this->precioAmazon = $precioAmazon;
	}

	public function GetprecioPcomponentes()
	{
		return $this->precioPcomponentes;
	}

	public function  setprecioPcomponentes($precioPcomponentes)
	{
		$this->precioPcomponentes = $precioPcomponentes;
	}

	public function GetsistemaOperativo()
	{
		return $this->sistemaOperativo;
	}

	public function  setsistemaOperativo($sistemaOperativo)
	{
		$this->sistemaOperativo = $sistemaOperativo;
	}

	public function getconectorRed()
	{
		return $this->conectorRed;
	}

	public function  setconectorRed($conectorRed)
	{
		$this->conectorRed = $conectorRed;
	}

	public function getusb_C()
	{
		return $this->usb_C;
	}

	public function  setusb_C($usb_C)
	{
		$this->usb_C = $usb_C;
	}

	public function thunderbolt()
	{
		return $this->thunderbolt;
	}

	public function  setthunderbolt($thunderbolt)
	{
		$this->thunderbolt = $thunderbolt;
	}

	public function  getPrecio()
	{
		return $this->precio;
	}

	public function  setPrecio($precio)
	{
		$this->$precio = $precio;
	}
}

