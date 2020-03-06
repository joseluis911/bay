<?php

require_once "conexion.php";


class ModeloHoras{

	private $stmt;

	static public function mdlStoreHours($table, $data){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $table(day, hour, rate, total, user) VALUES (:day, :hr, :rate, :total, :user)");
		$stmt->bindParam(":day", $data["date"], PDO::PARAM_STR);
		$stmt->bindParam(":hr", $data["hr"], PDO::PARAM_STR);
		$stmt->bindParam(":rate", $data["rate"], PDO::PARAM_STR);
		$stmt->bindParam(":total", $data["total"], PDO::PARAM_STR);
		$stmt->bindParam(":user", $data["user"], PDO::PARAM_STR);

		if ($stmt -> execute()) {
		
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();

		$stmt = null;


	}

	
}