create table inmobiliaria( 
        id int not null auto_increment primary key, 
        fecha_alta date not null, 
        nombre_vivienda varchar(60) not null, 
        provincia varchar(30) not null, 
        direccion varchar(60) not null, 
        telefono varchar(20),
        mail varchar(20) not null, 
        tipo enum('alquiler', 'venta') not null default 'alquiler', 
        precio int not null, 
        m2 int, 
        n_hab tinyint(1), 
        
        descripcion varchar(200)
) engine=innodb charset=utf8 collate=utf8_unicode_ci


