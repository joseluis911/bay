<?php

require_once "../controladores/hours.controlador.php";
require_once "../modelos/hours.modelos.php";

class AjaxHours{

	public  $hr;
	public  $date;
	public  $rate;
	public  $user;

	private $data;
	private $response;
	private $total;

 
/*=============================================
	      Guardar Horas
=============================================*/
	public function ajaxStoreShift(){

		$this->total = $this->hr * $this->rate; 

		 $data = array(
		   "hr"=>$this->hr,
		   "date"=>$this->date,
		   "rate"=>$this->rate,		   
		   "total"=>$this->total
		   "user"=>$this->user
		 );



		$response = ControladorHoras::ctrStoreShift($data);

		echo $response;
	}
}


/*=============================================
	      Guardar Horas
=============================================*/

if(isset($_POST["hr"])){
	$store = new AjaxHours();
	$store -> hr = $_POST["hr"];
	$store -> date = $_POST["date"];
	$store -> rate = $_POST["rate"];
	$store -> rate = $_POST["user"];
	$store -> ajaxStoreShift();
}
