Create database hospital DEFAULT CHARACTER SET utf8  DEFAULT COLLATE utf8_general_ci ;
Use hospital;


CREATE TABLE `Up` (
`Uname`  char(11) NOT NULL ,
`Password`  char(6) NOT NULL ,
PRIMARY KEY (`Uname`)
)
;
CREATE TABLE `Ato`
(
`Aname`  char(20) NOT NULL ,
`Atele`  char(11) NOT NULL ,
PRIMARY KEY (`Aname`)
)
;
CREATE TABLE `Doctor`
(
`Dno`  char(11) NOT NULL ,
`Dname`  char(10) NOT NULL ,
`Dsex`  char(2) NOT NULL ,
`Dzc`  char(20) NOT NULL ,
`lz_Aname`  char(20) NOT NULL ,
`Dstate`  int(1) NOT NULL ,
PRIMARY KEY (`Dno`)
)
;
CREATE TABLE `Bed`
(
`Cno`  char(5) NOT NULL ,
`Cuse`  int(1) NOT NULL ,
`bc_Aname`  char(20) NOT NULL ,
PRIMARY KEY (`Cno`)
)
;
CREATE TABLE `Patient`
(
`Pno`  char(11) NOT NULL ,
`Pname`  char(20) NOT NULL ,
`Psex`  char(2) NOT NULL ,
`Pbirth`  date NOT NULL ,
`Padd`  char(50) NOT NULL ,
`Ptele`  char(11) NOT NULL ,
`Dno`  char(11) NOT NULL ,
`Cno`  char(5) NOT NULL ,
`Idate`  date NOT NULL ,
`Pmark`  char(200)  NULL ,
`Odate`  datetime  NULL ,
PRIMARY KEY (`Pno`)
)
;
ALTER TABLE `Doctor` ADD CONSTRAINT `lz_Aname` FOREIGN KEY (`lz_Aname`) REFERENCES `Ato` (`Aname`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `Bed` ADD CONSTRAINT `bc_Aname` FOREIGN KEY (`bc_Aname`) REFERENCES `Ato` (`Aname`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `Patient` ADD CONSTRAINT `p_Dno` FOREIGN KEY (`Dno`) REFERENCES `Doctor` (`Dno`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `Patient` ADD CONSTRAINT `p_Cno` FOREIGN KEY (`Cno`) REFERENCES `Bed` (`Cno`) ON DELETE NO ACTION ON UPDATE CASCADE;
CREATE
VIEW `kesearch`AS
SELECT
Doctor.lz_Aname,
Doctor.Dstate,
Doctor.Dzc,
Doctor.Dname,
Ato.Atele,
Doctor.Dno
FROM
Ato
INNER JOIN Doctor ON Doctor.lz_Aname = Ato.Aname ;
CREATE
VIEW `Doctorsearch`AS
SELECT
Doctor.Dno,
Doctor.Dname,
Doctor.Dsex,
Doctor.Dzc,
Doctor.lz_Aname,
Doctor.Dstate,
Patient.Pname
FROM
Doctor
INNER JOIN Patient ON Patient.Dno = Doctor.Dno ;
CREATE
VIEW `Patientsearch`AS
SELECT
Patient.Pno,
Patient.Pname,
Patient.Psex,
Patient.Pbirth,
Patient.Padd,
Patient.Ptele,
Patient.Dno,
Patient.Cno,
Patient.Idate,
Patient.Pmark,
Patient.Odate,
Doctor.Dname,
Doctor.lz_Aname
FROM
Patient
INNER JOIN Doctor ON Patient.Dno = Doctor.Dno ;

INSERT
INTO Up (Uname,Password)
VALUES ('20161004186','123456');
INSERT
INTO Ato (Aname,Atele)
VALUES ('内科','67881231');
INSERT
INTO Ato (Aname,Atele)
VALUES ('外科','67881232');
INSERT
INTO Ato (Aname,Atele)
VALUES ('儿科','67881233');
INSERT
INTO Doctor (Dno,Dname,Dsex,Dzc,lz_Aname,Dstate)
VALUES ('20131004321','李明','男','科主任','内科','1');
INSERT
INTO Doctor (Dno,Dname,Dsex,Dzc,lz_Aname,Dstate)
VALUES ('20131004322','李红','女','护士长','内科','1');
INSERT
INTO Doctor (Dno,Dname,Dsex,Dzc,lz_Aname,Dstate)
VALUES ('20131004323','李平','男','医生','内科','1');
INSERT
INTO Doctor (Dno,Dname,Dsex,Dzc,lz_Aname,Dstate)
VALUES ('20131004324','王平','女','医生','内科','1');
INSERT
INTO Doctor (Dno,Dname,Dsex,Dzc,lz_Aname,Dstate)
VALUES ('20131004325','王明','男','医生','外科','1');
INSERT
INTO Doctor (Dno,Dname,Dsex,Dzc,lz_Aname,Dstate)
VALUES ('20131004326','王红','女','科主任','外科','1');
INSERT
INTO Doctor (Dno,Dname,Dsex,Dzc,lz_Aname,Dstate)
VALUES ('20131004327','张明','女','护士长','外科','1');
INSERT
INTO Doctor (Dno,Dname,Dsex,Dzc,lz_Aname,Dstate)
VALUES ('20131004328','张阳','女','科主任','儿科','1');
INSERT
INTO Doctor (Dno,Dname,Dsex,Dzc,lz_Aname,Dstate)
VALUES ('20131004329','张红','女','护士长','儿科','1');
INSERT
INTO Doctor (Dno,Dname,Dsex,Dzc,lz_Aname,Dstate)
VALUES ('20131004330','张强','男','医生','儿科','1');
INSERT
INTO Bed (Cno,Cuse,bc_Aname)
VALUES ('20101','0','内科');
INSERT
INTO Bed (Cno,Cuse,bc_Aname)
VALUES ('20102','0','内科');
INSERT
INTO Bed (Cno,Cuse,bc_Aname)
VALUES ('20103','0','内科');
INSERT
INTO Bed (Cno,Cuse,bc_Aname)
VALUES ('20201','0','外科');
INSERT
INTO Bed (Cno,Cuse,bc_Aname)
VALUES ('20202','0','外科');
INSERT
INTO Bed (Cno,Cuse,bc_Aname)
VALUES ('20203','0','外科');
INSERT
INTO Bed (Cno,Cuse,bc_Aname)
VALUES ('20301','0','儿科');
INSERT
INTO Bed (Cno,Cuse,bc_Aname)
VALUES ('20302','0','儿科');
INSERT
INTO Bed (Cno,Cuse,bc_Aname)
VALUES ('20303','0','儿科');

INSERT INTO Patient(Pno,Pname,Psex,Pbirth,Padd,Ptele,Dno,Cno,Idate,Pmark,Odate) VALUES ('20150501001', '王甲', '男', '1994-01-01', '洪山区', '18812344321', '20131004321', '20101', '2015-05-01', '', '0000-00-00');
INSERT INTO Patient(Pno,Pname,Psex,Pbirth,Padd,Ptele,Dno,Cno,Idate,Pmark,Odate) VALUES ('20150502002', '王乙', '男', '1995-02-02', '洪山区', '18812344322', '20131004323', '20102', '2015-05-02', '', '0000-00-00');
INSERT INTO Patient(Pno,Pname,Psex,Pbirth,Padd,Ptele,Dno,Cno,Idate,Pmark,Odate) VALUES ('20150503003', '王丙', '女', '1994-03-03', '洪山区', '18812344323', '20131004325', '20201', '2015-05-03', '', '0000-00-00');
INSERT INTO Patient(Pno,Pname,Psex,Pbirth,Padd,Ptele,Dno,Cno,Idate,Pmark,Odate) VALUES ('20150504004', '王丁', '男', '1993-04-04', '洪山区', '18812344324', '20131004326', '20202', '2015-05-04', '', '0000-00-00');
INSERT INTO Patient(Pno,Pname,Psex,Pbirth,Padd,Ptele,Dno,Cno,Idate,Pmark,Odate) VALUES ('20150505005', '王戊', '女', '1994-05-05', '洪山区', '18812344325', '20131004328', '20301', '2015-05-05', '', '0000-00-00');
INSERT INTO Patient(Pno,Pname,Psex,Pbirth,Padd,Ptele,Dno,Cno,Idate,Pmark,Odate) VALUES ('20150506006', '王辛', '男', '1993-06-06', '洪山区', '18812344326', '20131004330', '20302', '2015-05-06', '', '0000-00-00');

UPDATE Bed SET Cuse ='1' WHERE Cno ='20101';
UPDATE Bed SET Cuse ='1' WHERE Cno ='20102';
UPDATE Bed SET Cuse ='1' WHERE Cno ='20201';
UPDATE Bed SET Cuse ='1' WHERE Cno ='20202';
UPDATE Bed SET Cuse ='1' WHERE Cno ='20301';
UPDATE Bed SET Cuse ='1' WHERE Cno ='20302';
