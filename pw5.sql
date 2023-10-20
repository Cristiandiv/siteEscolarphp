create database pw2;
use pw2;

CREATE TABLE  tb_aluno (
  id int (5),
  nome varchar(50) ,
  email varchar(50) ,
  nota int (3),
  frecue int (3) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tb_aluno (id,nome,email,nota,frecue) values (23012,"Marcos","marqs@mali.com.br",80,75);
insert into tb_aluno (id,nome,email,nota,frecue) values (23002,"Marcelo","pluton.gal@gmail.com",30,50);
insert into tb_aluno (id,nome,email,nota,frecue) values (23011,"Hendew","rivera@goloco.com.br",99,100);
insert into tb_aluno (id,nome,email,nota,frecue) values (23021,"Mei","mary@starlight.com.br",75,70);
insert into tb_aluno (id,nome,email,nota,frecue) values (22011,"Carlos","caduzin@lipo.com.br",80,92);

select * from tb_aluno;

drop table tb_aluno;

CREATE TABLE tb_boletim (
id int (5),
nome varchar(50),
AvaliaçãoA  int(3),
AvaliaçãoB  int(3),
AvaliaçãoC  int(3),
AvaliaçãoD  int(3),
Total int (4), 
Frequência int(3),
obs varchar(1000) 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tb_boletim /*(id,nome,AvaliaçãoA,AvaliaçãoB,AvaliaçãoC,AvaliaçãoD, Total, Frequência)*/ values (23012,"Marcos",12,20,19,38,89,79,"O aluno Marcos teve um bom desempenho dentro do curso, alcançando a media de 89 e a frequência de 79% necessaria para a geração do seu certificado.");
insert into tb_boletim /*(id,nome,AvaliaçãoA,AvaliaçãoB,AvaliaçãoC,AvaliaçãoD, Total, Frequência)*/ values (23002,"Marcelo",9,14,25,28,76,50,"O aluno Marcelo teve um bom desempenho dentro do curso, mas por incoveniências não conseguiu alcançar a media minima e a frequência necessaria para a geração do seu certificado.");
insert into tb_boletim /*(id,nome,AvaliaçãoA,AvaliaçãoB,AvaliaçãoC,AvaliaçãoD, Total, Frequência)*/ values (23011,"Hendew",33,33,11,22,99,100,"O aluno Hendew teve um bom desempenho dentro do curso, alcançando a media de 99 e a frequência de 100% necessaria para a geração do seu certificado.");
insert into tb_boletim /*(id,nome,AvaliaçãoA,AvaliaçãoB,AvaliaçãoC,AvaliaçãoD, Total, Frequência)*/ values (23021,"Mei",25,5,20,25,75,70,"A aluna Mei teve um desempenho bom dentro do curso, mas com algumas imperfeições não alcançando a media para a emissão do certificado.");
insert into tb_boletim /*(id,nome,AvaliaçãoA,AvaliaçãoB,AvaliaçãoC,AvaliaçãoD, Total, Frequência)*/ values (22011,"Carlos",20,20,20,20,80,92,"O aluno Carlos teve um bom desempenho dentro do curso, alcançando a media de 80 e a frequência de 92% necessaria para a geração do seu certificado.");

select * from tb_boletim;

drop table tb_boletim;


CREATE TABLE tb_loginAlun (
  senha int (5),
  email varchar(50) 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tb_loginAlun /*(senha,email)*/ values (23820,"marqs@mali.com.br");
insert into tb_loginAlun /*(senha,email)*/ values (93872,"pluton.gal@gmail.com");
insert into tb_loginAlun /*(senha,email)*/ values (29384,"rivera@goloco.com.br");
insert into tb_loginAlun /*(senha,email)*/ values (23746,"mary@starlight.com.br");
insert into tb_loginAlun /*(senha,email)*/ values (02394,"caduzin@lipo.com.br");



select * from tb_loginAlun;

drop table tb_loginAlun;

CREATE TABLE tb_loginProf (
  senha int (5),
  email varchar(50) 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tb_loginProf /*(senha,email)*/ values (45734,"extrowt5@mali.com.br");
insert into tb_loginProf /*(senha,email)*/ values (23523,"vprofRiv.gal@gmail.com");
insert into tb_loginProf /*(senha,email)*/ values (12312,"riveraProftt@goloco.com.br");
insert into tb_loginProf /*(senha,email)*/ values (12344,"profmiriamstef@moonlight.com.br");
insert into tb_loginProf /*(senha,email)*/ values (78354,"jeanbest@lipo.com.br");



select * from tb_loginProf;

drop table tb_loginProf;

