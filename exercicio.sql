-- criação da base de nome SENAC
CREATE DATABASE senac

-- criação da tabela aluno
CREATE TABLE aluno (
    id_matricula INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (60) NOT NULL
)

-- inserção das informações da tabela aluno
INSERT INTO aluno (nome) 
VALUES ('antonio'), ('marcia'), ('lucas'), ('matheus')

-- criação da tabela curso
CREATE TABLE curso (
    id_do_curso INT PRIMARY KEY AUTO_INCREMENT,
    nome_do_curso VARCHAR (100) NOT NULL
    id_matricula INT
    FOREIGN KEY (id_matricula) REFERENCES aluno(id_matricula)
)

-- inserção das informações da tabela curso
INSERT INTO curso (id_do_curso, nome_do_curso)
VALUES ('programador web'), ('costura'), ('estética'), ('cozinha')













