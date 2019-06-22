CREATE DATABASE workonline;
USE workonline;

create table PERSONA(
id_persona int auto_increment,
contrasenia_persona varchar(15)not null,
nombre_persona varchar(30)not null,
apellido_persona varchar(30)not null,
telefono_persona varchar(10)not null,
direccion_persona varchar(30)not null,
email_persona varchar(20)not null,
edad_persona int not null,
id_usuario int not null,
primary key (id_persona),
foreign key (id_usuario) references INICIO_SESION(id_usuario)
 );

create table INICIO_SESION(
id_usuario int not null,
contrasenia varchar(10) not null,
primary key (id_usuario)
);

create table HISTORIAL(
id_historial int auto_increment,
fecha_historial date not null,
primary key (id_historial)
);

create table PERSONA_HISTORIAL(
id_persona int not null,
id_historial int not null,
foreign key (id_persona) references PERSONA(id_persona),
foreign key (id_historial) references HISTORIAL(id_historial)
);

create table ADMINISTRADOR(
id_administrador int auto_increment,
id_persona int not null,
primary key(id_administrador),
foreign key (id_persona) references PERSONA(id_persona)
);

create table EMPLEADO(
id_empleado int auto_increment,
servicio_empleado varchar(30),
id_persona int not null,
primary key(id_empleado),
foreign key (id_persona) references PERSONA(id_persona)
);

create table EMPLEADOR(
id_empleador  int auto_increment,
plaza_laboral_empleador varchar(30),
id_persona int not null,
primary key(id_empleador),
foreign key (id_persona) references PERSONA(id_persona)
);

create table NOTIFICACION(
id_notificacion int auto_increment,
descripcion_notificacion varchar(30),
tipo_notificacion varchar(30),
primary key (id_notificacion)
);

create table ADMINISTRADOR_NOTIFICACION(
id_administrador int not null,
id_notificacion int not null,
foreign key (id_administrador) references ADMINISTRADOR(id_administrador),
foreign key (id_notificacion) references NOTIFICACION(id_notificacion)
);

create table CALIFICACION(
id_calificacion int auto_increment,
puntuacion int,
descripcion varchar(30),
primary key (id_calificacion)
);

create table EMPLEADOR_CALIFICACION(
id_empleador int not null,
id_calificacion int not null,
foreign key (id_empleador) references EMPLEADOR(id_empleador),
foreign key (id_calificacion) references CALIFICACION(id_calificacion)
);

create table SERVICIO(
id_servicio  int auto_increment,
descripcion_servicio varchar(30),
disponibilidad_servicio varchar(20),
tipo_servicio varchar(30),
primary key (id_servicio)
);

create table PERSONA_SERVICIO(
id_persona int not null,
id_servicio int not null,
foreign key (id_persona) references PERSONA(id_persona),
foreign key (id_servicio) references SERVICIO(id_servicio)
);

create table NOTIFICACION_SERVICIO(
id_notificacion int not null,
id_servicio int not null,
foreign key (id_notificacion) references NOTIFICACION(id_notificacion),
foreign key (id_servicio) references SERVICIO(id_servicio)
);