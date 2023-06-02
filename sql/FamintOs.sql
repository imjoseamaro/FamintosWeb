create database bd_famintOs;
use bd_famintOs;

CREATE TABLE `tbl_comidas` (
    `cd_comida` int primary key auto_increment,
    `nm_comida` varchar(70) not null,
    `vl_preco` decimal (6,2) not null,
    `nm_categoria` varchar(20) not null,
    `img_comida` varchar(70) not null,
    `qt_estoque` int not null
);

CREATE TABLE `tbl_usuario` (
    `cd_usuario` int(11) auto_increment primary key,
    `nm_usuario` varchar(80) not null,
    `ds_email` varchar(80) not null,
    `ds_senha` varchar(16) not null,
    `ds_status` boolean not null
);

CREATE TABLE `tbl_venda` (
	  `cd_venda` int(11) primary key auto_increment,
	  `no_Ticket` varchar(13) not null,
	  `cd_cliente` int(11) not null,
	  `cd_comida` int(11) not null,
	  `qt_comida` int(11) not null,
	  `vl_item` decimal(10,2) not null,
	  `vl_total_item` decimal  (10,2) generated always as ((qt_comida * vl_item)) virtual,
	  `dt_venda` date not null
);

create view vw_venda
as select
		tbl_venda.no_ticket,
        tbl_venda.cd_cliente,
        tbl_venda.dt_venda,
        tbl_comidas.nm_comida,
        tbl_venda.qt_comida,
        tbl_venda.vl_total_item
from tbl_venda inner join tbl_comidas
on tbl_venda.cd_comida = tbl_comidas.cd_comida;
        
        select * from vw_venda;