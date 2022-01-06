<?php

/**
 * Modelo productos
 */
class Empleado
{
	private $pdo;

	public function __construct()
	{
		try {
			$this->pdo = new Conexion();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
 
	public function getAll()
	{
		try {
			$strSql = "SELECT * FROM empleado";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newEmploye($data)
	{
		try {
			$this->pdo->insert('empleado' , $data );
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	// public function newEmploye_rol($data)
	// {
	// 	try {
	// 		$this->pdo->insert('empleado_rol' , $data );
	// 	} catch (PDOException $e) {
	// 		die($e->getMessage());
	// 	}
	// }

	public function getById($id)
	{
     	try {
     		$strSql = "SELECT * FROM empleado WHERE id = :id";
     		$array = ['id' => $id];
     		$query = $this->pdo->select($strSql,$array);
     		return $query;
     	} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function updateEmploye($data)
	{
		try {
			$strWhere = 'id='.$data['id'];
			$this->pdo->update('empleado' , $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function deleteEmploye($data)
	{
		try {
			$strWhere = 'id='.$data['id'];
			$this->pdo->delete('empleado' , $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	// public function autoIncrement($table,$field){
           
	// 	try {
	// 		$strSql="SELECT MAX($field) FROM $table";
	// 		$query=$this->pdo->select($strSql);
			
	// 		//($query)+1;
	// 		return $query;
	// 	} catch (PDOException $e) {
	// 		die($e->getMessage());
	// 	}

    // }


}