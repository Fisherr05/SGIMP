<?php 

	class usuarios{
		public function registroUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			//$pass=password_hash($datos[1],PASSWORD_BCRYPT);
			$sql="INSERT into PERSONA (CEDULA,
								password,
								NOMBRE,
								APELLIDO,
								EMAIL,
								TELEFONO,
								DIRECCION)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$datos[5]',
								'$datos[6]')";

			
			$r=mysqli_query($conexion,$sql);
			if($datos[4]=='admin'){
				$sql2="INSERT into COORDINADOR_GENERAL(ID_PERSONA)
												SELECT ID_PERSONA
												from PERSONA
												where password='$datos[1]'";
			    mysqli_query($conexion,$sql2);

				}
			
			return  $r;
		}
		
		public function loginUser($datos){
			$c=new conectar();
			$conexion=$c->conexion();
                        
			//$password=sha1($datos[1]);
                        
                  
        try {
            $conn = new mysqli('localhost', 'user4', 'fibeca0596', 'baseapp4');

        if ($conn->connect_error) {
            die('Error de Conexión (' . $conn->connect_errno . ') '
                    . $conn->connect_error);
        }
            $sql="SELECT * 
				from PERSONA 
				where EMAIL='$datos[0]'";
            $result=$conn->query($sql);
            $row=$result->fetch_array();
            if(mysqli_num_rows($result) > 0 && password_verify($datos[1], $row[2]) ){
				$_SESSION['email_persona']=$row[5];
				$_SESSION['id_persona']=$row[0];
				$sql2="INSERT into inicio_sesion(password)
												values('$row[2]') ";
			    mysqli_query($conexion,$sql2);
				
				if($row["email_persona"]=='admin'){
					return 1;
				}else{
					return 2;
				}
				
			}else{

				return 0;
			}
        } catch (Exception $e) {
            $error=$e->getMessage();
        }
        
			

			
		
		}


		public function traeID($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			//$password=sha1($datos[1]);

			$sql="SELECT  
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