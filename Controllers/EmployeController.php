<?php

require 'models/Empleado.php';

/**
 * controlador de productos
 */
class EmployeController
{
	private $model;

	public function __construct()
	{
		$this->model = new Empleado;
	}

	public function index()
	{
		$obj = new Empleado;
		// if (isset($_SESSION['user'])) {
			// require 'Views/Layout.php';
			$employe = $obj->getAll();
			require 'Views/Employe/list.php';
			require 'views/Scripts.php';
		//
	 }
	
	public function viewInsert()
	{
		require 'Views/Layout.php';
	}

	public function new()
	{
		// extract($_REQUEST);

		// //$id = $this->model->autoIncrement("empleado","id");
		
		// $data= array();

		// //$data[] = $id;
		// $data[] = $name;
		// $data[] = $email;
		// $data[] = $sexo;
		// $data[] = $area_id;
		// $data[] = $boletin;
		// $data[] = $descripcion;

		//$dataRol=array();

		//$dataRol[] = $id;
		//$dataRol[] = $rol_id;

		// if (isset($_SESSION['user'])) {
		
		$this->model->newEmploye($_REQUEST);
		//$this->model->newEmploye_rol($dataRol);
		header('Location: ?controller=employe&method=index');

	}

	public function edit()
	{
		// if (isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$data = $this->model->getById($id);
			// var_dump($data);
			// exit;
			//require 'Views/Layout.php';
			require 'Views/Employe/edit.php';
			require 'views/Scripts.php';
		// }
	}

	public function update()
	{
		// if ($_POST) {
			$this->model->updateEmploye($_POST);
			header('Location: ?controller=employe');
		// }
	}

	public function delete()
	{
     	$this->model->deleteEmploye($_REQUEST);
		header('Location: ?controller=product');
	}
}