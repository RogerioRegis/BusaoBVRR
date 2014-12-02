-- CREATE TABLE linha
-- (
--   id serial PRIMARY KEY,
--   numero int,
--   nome varchar,
--   favorito boolean
-- )

-- CREATE TABLE users
-- (
--   id serial PRIMARY KEY,
--   nome varchar,
--   email varchar,
--   password varchar,
--   salt varchar
-- );

-- CREATE TABLE rota
-- (
--   id serial PRIMARY KEY,
--   numero varchar,
--   rota varchar,
--   password varchar,
--   salt varchar
-- );

-- CREATE TABLE categorias
-- (
--   id serial PRIMARY KEY,
--   nome varchar(60)
-- );

-- CREATE TABLE araceli (
--  id serial PRIMARY KEY,
--  numero int,
--  nome varchar,
--  araceli_intinerario_ida varchar,
--  araceli_intinerario_volta varchar,
--  araceli_saida_bairro_uteis varchar,
--  araceli_saida_centro_uteis varchar,
--  araceli_saida_bairro_sabado varchar,
--  araceli_saida_centro_sabado varchar,
--  araceli_saida_bairro_domingo varchar,
--  araceli_saida_centro_domingo varchar
-- );

-- CREATE TABLE horario (
--  id serial PRIMARY KEY,
--  linha int,
--  nome varchar,
--  intinerario_ida varchar,
--  intinerario_volta varchar,
--  saida_bairro_uteis varchar,
--  saida_centro_uteis varchar,
--  saida_bairro_sabado varchar,
--  saida_centro_sabado varchar,
--  saida_bairro_domingo varchar,
--  saida_centro_domingo varchar
-- );
-- 
-- 
-- CREATE TABLE intinerario (
--  id serial PRIMARY KEY,
--  linha int,
--  nome varchar,
--  intinerario_ida varchar,
--  intinerario_volta varchar,
-- );

CREATE TABLE uniao
(
  id serial PRIMARY KEY,
  numero integer,
  nome varchar,
  uniao_intinerario_ida varchar,
  uniao_intinerario_volta varchar,
  uniao_saida_bairro_uteis varchar,
  uniao_saida_centro_uteis varchar,
  uniao_saida_bairro_sabado varchar,
  uniao_saida_centro_sabado varchar,
  uniao_saida_bairro_domingo varchar,
  uniao_saida_centro_domingo varchar
);
