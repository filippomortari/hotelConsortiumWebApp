ALTER TABLE EUtente DROP FOREIGN KEY FKEUtente518973;
ALTER TABLE EUtente DROP FOREIGN KEY FKEUtente142595;
ALTER TABLE EUtente DROP FOREIGN KEY FKEUtente142596;
ALTER TABLE EUtente DROP FOREIGN KEY FKEUtente333265;
ALTER TABLE EPrenotazione DROP FOREIGN KEY FKEPrenotazi618338;
ALTER TABLE EPrenotazione DROP FOREIGN KEY FKEPrenotazi516313;
ALTER TABLE EStruttura DROP FOREIGN KEY FKEStruttura244550;
ALTER TABLE EStruttura DROP FOREIGN KEY FKEStruttura763223;
ALTER TABLE EStruttura DROP FOREIGN KEY FKEStruttura948931;
ALTER TABLE ERoom DROP FOREIGN KEY FKERoom974158;
ALTER TABLE ERoom DROP FOREIGN KEY FKERoom687700;
ALTER TABLE ERoom DROP FOREIGN KEY FKERoom360975;
DROP TABLE IF EXISTS EUtente;
DROP TABLE IF EXISTS EIndirizzo;
DROP TABLE IF EXISTS EContatti;
DROP TABLE IF EXISTS EPrenotazione;
DROP TABLE IF EXISTS EPrezzo;
DROP TABLE IF EXISTS EStruttura;
DROP TABLE IF EXISTS ERoom;
CREATE TABLE EUtente (ID int(10) NOT NULL AUTO_INCREMENT, EContattiID int(10), EIndirizzoID3 int(10), EIndirizzoID2 int(10) NOT NULL, EIndirizzoID int(10), Nome varchar(255), Cognome varchar(255), DataNascita date, CodFisc varchar(255), Sesso char(1) NOT NULL, Credito float NOT NULL, Username varchar(255), Password varchar(255), Discriminator varchar(255) NOT NULL, PRIMARY KEY (ID));
CREATE TABLE EIndirizzo (ID int(10) NOT NULL AUTO_INCREMENT, Via varchar(255), NumCiv int(10), Citta varchar(255), Prov varchar(255), Cap varchar(255), PRIMARY KEY (ID));
CREATE TABLE EContatti (ID int(10) NOT NULL AUTO_INCREMENT, Telefono varchar(255), Mobile varchar(255), Fax varchar(255), Email varchar(255), PRIMARY KEY (ID));
CREATE TABLE EPrenotazione (ID int(10) NOT NULL AUTO_INCREMENT, EPrezzoID int(10), EUtenteID int(10), CheckIn date, CheckOut date, Nights int(10) NOT NULL, People int(10) NOT NULL, Confermata tinyint(1) NOT NULL, PRIMARY KEY (ID));
CREATE TABLE EPrezzo (ID int(10) NOT NULL AUTO_INCREMENT, Value int(10), Currency int(10), PRIMARY KEY (ID));
CREATE TABLE EStruttura (ID int(10) NOT NULL AUTO_INCREMENT, EContattiID int(10), EIndirizzoID int(10) NOT NULL, EUtenteID int(10), Nome int(10), PIva int(10), Cf int(10), Discriminator varchar(255) NOT NULL, PRIMARY KEY (ID));
CREATE TABLE ERoom (ID int(10) NOT NULL AUTO_INCREMENT, EStrutturaID int(10) NOT NULL, EPrenotazioneID int(10), EPrezzoID int(10), Posti int(10), Descrizione int(10), Discriminator varchar(255) NOT NULL, PRIMARY KEY (ID));
ALTER TABLE EUtente ADD INDEX FKEUtente518973 (EIndirizzoID), ADD CONSTRAINT FKEUtente518973 FOREIGN KEY (EIndirizzoID) REFERENCES EIndirizzo (ID);
ALTER TABLE EUtente ADD INDEX FKEUtente142595 (EIndirizzoID2), ADD CONSTRAINT FKEUtente142595 FOREIGN KEY (EIndirizzoID2) REFERENCES EIndirizzo (ID);
ALTER TABLE EUtente ADD INDEX FKEUtente142596 (EIndirizzoID3), ADD CONSTRAINT FKEUtente142596 FOREIGN KEY (EIndirizzoID3) REFERENCES EIndirizzo (ID);
ALTER TABLE EUtente ADD INDEX FKEUtente333265 (EContattiID), ADD CONSTRAINT FKEUtente333265 FOREIGN KEY (EContattiID) REFERENCES EContatti (ID);
ALTER TABLE EPrenotazione ADD INDEX FKEPrenotazi618338 (EUtenteID), ADD CONSTRAINT FKEPrenotazi618338 FOREIGN KEY (EUtenteID) REFERENCES EUtente (ID);
ALTER TABLE EPrenotazione ADD INDEX FKEPrenotazi516313 (EPrezzoID), ADD CONSTRAINT FKEPrenotazi516313 FOREIGN KEY (EPrezzoID) REFERENCES EPrezzo (ID);
ALTER TABLE EStruttura ADD INDEX FKEStruttura244550 (EUtenteID), ADD CONSTRAINT FKEStruttura244550 FOREIGN KEY (EUtenteID) REFERENCES EUtente (ID);
ALTER TABLE EStruttura ADD INDEX FKEStruttura763223 (EIndirizzoID), ADD CONSTRAINT FKEStruttura763223 FOREIGN KEY (EIndirizzoID) REFERENCES EIndirizzo (ID);
ALTER TABLE EStruttura ADD INDEX FKEStruttura948931 (EContattiID), ADD CONSTRAINT FKEStruttura948931 FOREIGN KEY (EContattiID) REFERENCES EContatti (ID);
ALTER TABLE ERoom ADD INDEX FKERoom974158 (EPrezzoID), ADD CONSTRAINT FKERoom974158 FOREIGN KEY (EPrezzoID) REFERENCES EPrezzo (ID);
ALTER TABLE ERoom ADD INDEX FKERoom687700 (EPrenotazioneID), ADD CONSTRAINT FKERoom687700 FOREIGN KEY (EPrenotazioneID) REFERENCES EPrenotazione (ID);
ALTER TABLE ERoom ADD INDEX FKERoom360975 (EStrutturaID), ADD CONSTRAINT FKERoom360975 FOREIGN KEY (EStrutturaID) REFERENCES EStruttura (ID);