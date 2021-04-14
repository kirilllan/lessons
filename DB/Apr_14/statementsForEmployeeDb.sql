show databases;
use employeeDb;
show tables;
select * from employee;
select firstname from employee where department is null;
select * from employee where department is not null and salary is not null; 
update employee set salary=1000 where salary is null;

select count(department) from employee;
select count(firstname) as names from employee;
select count(*)-count(department) as 'departments missing :' from employee;
select lastname, count(*) as amount from employee group by lastname order by amount desc;
select lastname, count(*) as amount from employee group by lastname having lastname in ('Ma', 'Baws');
select avg(salary) as 'average salary' from employee;

select firstname, lastname, salary, case when salary > 6000 then 'big number' else '-' end as notes from employee order by salary desc, lastname, firstname;