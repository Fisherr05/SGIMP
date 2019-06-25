<?php 

	class conectar{
		private $servidor="localhost";
		private $usuario="user4";
		private $password="fibeca0596";
		private $bd="baseapp4";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}
	}


 ?>