-- Drop table

-- DROP TABLE public.cadgamers;

CREATE TABLE public.cadgamers (
	cad_cpf varchar(45) NULL unique,
	cad_nome varchar(45) NULL,
	games varchar(45) NULL,
	estilo_g varchar(45) NULL,
	console_g varchar(45) NULL,
	plataforma_g varchar(45) NULL,
	idcad serial4 NOT NULL,
	CONSTRAINT cadgamers_pk PRIMARY KEY (idcad)
);