CREATE DATABASE Library;
use Library;
CREATE TABLE Autor(
	Id INT AUTO_INCREMENT,
    Nome VARCHAR(100),
    Data_Nascimento DATE,
    CPF CHAR(11),
    PRIMARY KEY(Id)
);

CREATE TABLE Categoria(
	Id INT PRIMARY KEY AUTO_INCREMENT,
    Descricao VARCHAR(100)
);

CREATE TABLE Livro(
	Id INT PRIMARY KEY AUTO_INCREMENT,
    Id_Categoria INT NOT NULL,
    Titulo VARCHAR(100) NOT NULL,
    Editora VARCHAR(100) NOT NULL,
    Ano YEAR NOT NULL,
    ISBN VARCHAR(50) NOT NULL,
    FOREIGN KEY(Id_Categoria) REFERENCES Categoria(Id)
);

CREATE TABLE Livro_Autor(
	Id_Livro INT NOT NULL,
    Id_Autor INT NOT NULL,
    FOREIGN KEY(Id_Livro) REFERENCES Livro(Id),
    FOREIGN KEY(Id_Autor) REFERENCES Autor(Id),
    PRIMARY KEY (Id_Livro, Id_Autor)
);

CREATE TABLE Aluno(
	Id INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(150),
    Email VARCHAR(50),
    RA int,
    Curso VARCHAR(30)
);

CREATE TABLE Usuario(
	Id INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(150),
    Email VARCHAR(50),
    Senha VARCHAR(30)
);

CREATE TABLE Emprestimo(
	Id int PRIMARY KEY auto_increment,
    Data_Emprestimo Date,
    Data_Devolucao Date,
    Id_Usuario int not null,
    Id_Aluno int not null,
    Id_Livro int not null,
    FOREIGN KEY(Id_Usuario) REFERENCES Usuario(Id),
	FOREIGN KEY(Id_Aluno) REFERENCES Aluno(Id),
	FOREIGN KEY(Id_Livro) REFERENCES Livro(Id)
);



