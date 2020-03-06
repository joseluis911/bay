<?php


class ControladorHoras {

	private $table;
	private $response;

    /*=============================================
	CREAR TURNO
	=============================================*/

	static public function ctrStoreShift($data){

		$table = "hours";

		$response = ModeloHoras::mdlStoreHours($table, $data);


		return $response;

	}
}