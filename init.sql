CREATE TABLE if not exists articulos (
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar(45) DEFAULT NULL,
  pais varchar(45) DEFAULT NULL,
  precio int DEFAULT NULL,
  PRIMARY KEY (id)
) ;
insert into articulos(nombre,pais,precio) values('DESTORNILLADOR','ITALIA',7);
insert into articulos(nombre,pais,precio) values('ALICATES','MARRUECOS',10);
insert into articulos(nombre,pais,precio) values('PRENSA','USA',70);
insert into articulos(nombre,pais,precio) values('TORNO','JAPON',1200);