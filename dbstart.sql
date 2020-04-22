# Tvorba databáze, tebulek, zákadní příkazy.
# https://www.digitalocean.com/community/tutorials/how-to-create-and-manage-databases-in-mysql-and-mariadb-on-a-cloud-server
# Spustíme server - např. XAMPP

# přihlášení k konzoli mysql -p  (heslo) - zpustit z prikazoveho radku
mysql -u root -p
# předání příkazu klientu mysql jako parametr - vypíše seznam databází
mysql -u root -p -e "show databases"

# DÁLE UŽ PŘÍKAZY PRO KLIENTA mysql - každý příkaz nutno zakončit středníkem ;
CREATE DATABASE planeta;
CREATE DATABASE IF NOT EXISTS planeta;
SELECT database();      # která databáze je právě používána
DROP DATABASE nazev_databaze;  # smaže databázi


use planeta;       # planeta je název databáze
create table if not exists zivocich (
    id int(3) not null primary key auto_increment,
    nazev varchar(30) default null,
    latina varchar(30) default null,
    rise varchar(15) default null,
    podrise varchar(15) default null,
    domaci boolean default false,
    kontinent varchar(20) default null,
    chraneny boolean default false
);

ALTER TABLE zivocich CHANGE kontinemt kontinent varchar(20);  # když se spletu v nazvu sloupce a chci provest opravu
alter table zivocich add datum DATE;   # pridam kolonku datum

show table;
describe zivocich;   # persons je název tabulky;

INSERT INTO zivocich (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Zmije horská','Vipera monticola','plaz','had',FALSE,'ALL',TRUE);
INSERT INTO zivocich (nazev,latina,rise,podrise,domaci,kontinent,chraneny) values ('Zmije iberská','Vipera seoanei','plaz','had',FALSE,'Asie',TRUE);
# další v extra souboru: insert_zivocich.sql

select * from zivocich;      # vypíše všechny záznamy v tabulce persons
select id, nazev, latina from zivocich;
select id, nazev, latina from zivocich where nazev like 'Zmije%';
select * from zivocich where kontinent in ('Evropa','Asie');
select * from zivocich where chraneny = true;
select * from zivocich where podrise = "";


UPDATE zivocich SET datum = curdate() where datum is null;   # vloz aktualni datum do kolonky datum u vsech radku, ktere nemaji vyplnene datum

SELECT * from zivocich where id = 64;
UPDATE zivocich SET kontinent = "Antarktida" WHERE id = 64;

DELETE FROM zivocich WHERE id = 79;