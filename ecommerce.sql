CREATE TABLE tb_carrinhos (
  id int(11) NOT NULL,
  id_usuario int(11) NOT NULL,
  id_endereco int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE tb_categorias (
  id int(11) NOT NULL,
  nome varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE tb_compras (
  id int(11) NOT NULL,
  id_carrinho int(11) NOT NULL,
  id_produto int(11) NOT NULL,
  quantidade int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE tb_enderecos (
  id int(11) NOT NULL,
  id_usuario int(11) NOT NULL,
  nome varchar(40) NOT NULL,
  cep int(11) NOT NULL,
  rua varchar(80) NOT NULL,
  numero varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE tb_produtos (
  id int(11) NOT NULL,
  id_categoria int(11) NOT NULL,
  nome varchar(40) NOT NULL,
  preco float NOT NULL,
  imagem text NOT NULL,
  descricao text NOT NULL,
  quantidade int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE tb_usuarios (
  id int(11) NOT NULL,
  nome varchar(40) NOT NULL,
  email varchar(40) NOT NULL,
  senha text NOT NULL,
  foto varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE tb_carrinhos
  ADD PRIMARY KEY (id);

ALTER TABLE tb_categorias
  ADD PRIMARY KEY (id);

ALTER TABLE tb_compras
  ADD PRIMARY KEY (id);

ALTER TABLE tb_enderecos
  ADD PRIMARY KEY (id);

ALTER TABLE tb_produtos
  ADD PRIMARY KEY (id);

ALTER TABLE tb_usuarios
  ADD PRIMARY KEY (id);


ALTER TABLE tb_carrinhos
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE tb_categorias
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE tb_compras
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE tb_enderecos
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE tb_produtos
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE tb_usuarios
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
COMMIT;