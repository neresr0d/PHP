-- 1

CREATE DATABASE biblioteca

-- 2

CREATE TABLE livros (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    ano_lancamento INT NOT NULL
)

-- 3

-- a

INSERT INTO livros (titulo, descricao, ano_lancamento) VALUES
('pequeno principe', 'um conto', 2022)
('cidade de gelo', 'Romance que mistura elementos de mistério, horror e coming', 2020)
('1984', 'livro que retrata um momento da história', 2024)
('Dom Casmurro', 'Um romance psicológico', 2019)
('Orgulho e Preconceito', 'novela de romance e crítica social', 1980)
('O senhor dos Anéis', 'livro de fantasia', 1990)
('Cem Anos de Solidão', 'obra-prima do realismo mágico', 1955)
('O Grande Gatsby', 'crítica à era do jazz e ao sonho americano', 1885)
('O Apanhador no Campo de Centeio', 'um adolescente de 16 anos que é expulso de várias escolas', 1952)
 ('pequeno principe', 'um conto', 2024)


-- a
SELECT titulo, ano_lancamento FROM livros ORDER BY titulo ASC, ano_lancamento DESC;
-- I
SELECT titulo FROM livros WHERE titulo LIKE '%c%' ORDER BY titulo ASC;

UPDATE livros SET ano_lancamento  = 2023 WHERE TITULO LIKE '%'
--II
SELECT titulo,ano_lancamento FROM livros WHERE ano_lancamento ORDER BY ano_lancamento DESC;


SELECT * FROM livros









