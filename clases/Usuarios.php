<?php 

	class usuarios{
		public function registroUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into persona (contrasenia_persona,
								nombre_persona,
								apellido_persona,
								telefono_persona,
								direccion_persona,
								email_persona,
								edad_persona)
						values ('$datos[6]',
								'$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$datos[5]')";
			$r=mysqli_query($conexion,$sql);

			if($datos[4]=='admin'){
				$sql2="INSERT into administrador(id_persona)
												SELECT id_persona
												from persona 
												where contrasenia_persona='$datos[6]'";
			    mysqli_query($conexion,$sql2);

				}
			
			return  $r;
		}
		
		public function loginUser($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			//$password=sha1($datos[1]);

			$_SESSION['email_persona']=$datos[0];
			$_SESSION['id_persona']=self::traeID($datos);

			$sql="SELECT * 
				from persona 
				where email_persona='$datos[0]'
				and contrasenia_persona='$datos[1]'";

			$result=mysqli_query($conexion,$sql);
			$row = $result->fetch_array();

			

			if(mysqli_num_rows($result) > 0){
				$sql2="INSERT into inicio_sesion(contrasenia)
												values('$datos[1]') ";
			    mysqli_query($conexion,$sql2);
				
				if($row["email_persona"]=='admin'){
					return 1;
				}else{
					return 2;
				}
				
			}else{

				return 0;
			}
		
		}


		public function traeID($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			//$password=sha1($datos[1]);

			$sql="SELECT id_persona 
					from persona 
					where email_persona='$datos[0]'
					and contrasenia_persona='$datos[1]'"; 
			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_row($result)[0];
		}


		public function obtenDatosUsuario($idpersona){

			$c=new conectar();
			$conexion=$c->conexion();

			$sql="SELECT id_persona,
							nombre_persona,
							apellido_persona,
							email_persona,
							contrasenia_persona,
							telefono_persona,
							direccion_persona,
							edad_persona
					from persona 
					where id_persona='$idpersona'";
			$result=mysqli_query($conexion,$sql);

			$ver=mysqli_fetch_row($result);

			$datos=array(
						'id_persona' => $ver[0],
							'nombre_persona' => $ver[1],
							'apellido_persona' => $ver[2],
							'email_persona' => $ver[3],
							'contrasenia_persona' => $ver[4],
							'telefono_persona' => $ver[5],
							'direccion_persona' => $ver[6],
							'edad_persona' => $ver[7]
						);

			return $datos;
		}

		public function actualizaUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE persona set nombre_persona='$datos[1]',
									apellido_persona='$datos[2]',
									email_persona='$datos[6]',
									contrasenia_persona='$datos[7]',
									telefono_persona='$datos[3]',
									direccion_persona='$datos[4]',
									edad_persona='$datos[5]'
						where id_persona='$datos[0]'";
			return mysqli_query($conexion,$sql);	
		}

		public function eliminaUsuario($idpersona){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="DELETE from persona 
					where id_persona='$idpersona'";
			return mysqli_query($conexion,$sql);
		}
	


	}


 ?>