

<?php 
	class articulos{
		
		public function insertaArticulo($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$fecha=date("Y-m-d");

			$sql="INSERT into servicio (descripcion_servicio,
										disponibilidad_servicio,
										tipo_servicio) 
							values ('$datos[1]',
									'$datos[2]',
									'$datos[0]')";
			$r=mysqli_query($conexion,$sql);
			$sql2="INSERT into persona_servicio(id_persona,
												id_servicio)
												SELECT id_persona,S.id_servicio
												from servicio S, persona P
												where S.descripcion_servicio='$datos[1]' and P.id_persona= '13' ";
			mysqli_query($conexion,$sql2);

			$sql3="INSERT into historial(fecha_historial)
											values('$fecha') ";
			mysqli_query($conexion,$sql3);

			$sql4="INSERT into persona_historial(id_persona,
												id_historial)
												SELECT id_persona,H.id_historial
												from historial H, persona P
												where H.fecha_historial='$fecha' and P.id_persona= '13' ";
			mysqli_query($conexion,$sql4);


			return  $r;
		}

		public function obtenDatosArticulo($idservicio){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="SELECT id_servicio,
						 descripcion_servicio,
						 disponibilidad_servicio,
						 tipo_servicio 
				from servicio
				where id_servicio='$idservicio'";
			$result=mysqli_query($conexion,$sql);

			$ver=mysqli_fetch_row($result);

			$datos=array(
					"id_servicio" => $ver[0],
					"descripcion_servicio" => $ver[1],
					"disponibilidad_servicio" => $ver[2],
					"tipo_servicio" => $ver[3]
						);

			return $datos;
		}

		public function actualizaArticulo($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE servicio set descripcion_servicio='$datos[2]', 
										disponibilidad_servicio='$datos[3]',
										tipo_servicio='$datos[1]'
						where id_servicio='$datos[0]'";

			return mysqli_query($conexion,$sql);
		}

		public function eliminaArticulo($idservicio){
			$c=new conectar();
			$conexion=$c->conexion();
			$sql2="DELETE from persona_servicio
							where id_servicio='$idservicio'";
			mysqli_query($conexion,$sql2);

			$sql="DELETE from servicio 
					where id_servicio='$idservicio'";
			$r=mysqli_query($conexion,$sql);


			$sql3="DELETE from historial
						where id_historial in (SELECT id_historial
												from persona_historial
												where id_persona in (SELECT id_persona
																		from persona
																		where id_persona in (SELECT id_persona
																								from persona_servicio
																									where id_servicio='$idservicio'))) ";
			mysqli_query($conexion,$sql3);

			$sql4="DELETE from persona_historial
								where id_persona in (SELECT id_persona
																		from persona
																		where id_persona in (SELECT id_persona
																								from persona_servicio
																									where id_servicio='$idservicio'))";
			mysqli_query($conexion,$sql4);


			return  $r;
			
		}


	}

 ?>