<?php 

	class conectar{
		private $servidor="localhost";
		private $usuario="user";
		private $password="fibeca0596";
		private $bd="workonline";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}
	}


 ?>