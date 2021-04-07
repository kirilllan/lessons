use superherodb;

select * from superhero;
select name, heroID, costume from superhero;
select name, heroID, costume from superhero order by name asc;
select name, heroID , costume from superhero order by yearOfBirth desc;
select name from superhero order by name;
select * from superhero where name="rustman";
select * from superhero where name="rustman" or name="datamaster";
select * from superhero where yearOfBirth >= 2000;
select * from superhero where yearOfBirth <= 2000;

select name from superhero where name like 's%';
select name from superhero where name like '%n';
select name from superhero where name like '%er_%';
select name, gear from superhero where gear like '_e%';
select yearofbirth from superhero where yearofbirth like '_9_0';

update superhero set name="superMo_Ron" where heroID=1;
select * from superhero where name in ('supergenious', 'superql');
select * from superhero where name not in('supergenious', 'superql');
select min(yearOfBirth) as oldest, max(yearOfBirth) as youngest from superhero;
select year(current_date) - min(yearofbirth) as greatestage from superhero;
select name from superhero where yearofbirth=(select min(yearofbirth)from superhero);
select name , year(current_date) - yearOfBirth as age from superhero order by age asc;