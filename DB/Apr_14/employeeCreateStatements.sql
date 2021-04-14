drop database if exists employeeDb;
create database employeeDb;

create table employeeDb.employee(
  employeeId integer not null primary key,
  firstname varchar(20) not null,
  lastname varchar(30) not null,
  department varchar(15),
  salary decimal(6,2)
);

drop user if exists 'mary'@'localhost';
create user 'mary'@'localhost' identified by 'secret';
grant all privileges on employeeDb.* to 'mary'@'localhost';

insert into employeeDb.employee values(1, 'Mary', 'Ma', 'every', 09);
insert into employeeDb.employee values(2, 'Jony', 'Pony', 'sysadmin', 9999.99);
insert into employeeDb.employee values(3, 'Do', 'Doo', 'janitor', 1234.56);
insert into employeeDb.employee values(4, 'Anony', 'Mouse',
'hiree');
insert into employeeDb.employee values(5, 'Anony', 'Mouse',
'hiree');
insert into employeeDb.employee values(6, 'Anony', 'Mouse',
'hiree', 0099.00);
insert into employeeDb.employee (employeeId, firstname, lastname) values(7, 'Vera', 'Grybd');
insert into employeeDb.employee (employeeId, firstname, lastname, departmens) values(8, 'A', 'B', 'accountant');
insert into employeeDb.employee (employeeId, firstname, lastname, department, salary) values(9, 'Fat', 'Baws', 'Bawws', 9999.99);









