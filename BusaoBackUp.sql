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

CREATE TABLE categorias
(
  id serial PRIMARY KEY,
  nome varchar(60)
);

