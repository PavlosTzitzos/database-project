#part_2
#1)Δείξε τα ονόματα των εταιρειών διανομής που αγοράζουν από την εταιρία Amgen
SELECT DISTRIBUTOR_NAME FROM BUY WHERE COMPANY_NAME = 'Amgen';
#2)Δείξε τα ονόματα των ασθενών που παίρνουν περισσότερο από 2 φάρμακα τη μέρα
SELECT PATIENT_SSN FROM CONSUME WHERE FREQUENCY >2;  
SELECT PATIENT_NAME FROM PATIENT WHERE PATIENT_SSN = 6;
#Σχόλιο: Σε αυτό το παράδειγμα κάνουμε την αναζήτηση σε δύο βήματα. Μετά το πρώτο query       παίρνουμε την απάντηση 6, το οποίο χρησιμοποιούμε ως παράμετρο στο δεύτερο query
#3)	Δείξε τα ονόματα των κρατικών φαρμακείων που διαθέτουν το φάρμακο χολέρα
SELECT SDOP_NAME FROM PROVIDES WHERE SERIAL_CODE = (SELECT SERIAL_CODE FROM DRUGS WHERE DRUG_NAME = 'xolera');
#4)	Δείξε ποσοι δουλεύουν στη Pfizer και παίρνουν πάνω από 1500 € το μήνα
SELECT COUNT(SALESMAN_SSN) FROM SALESMAN WHERE SALARY > 1500 & COMPANY_NAME = 'Pfizer';
#5)	Δείξε τα ονόματα των κρατικών φαρμακείων που περιέχουν φάρμακα για την ασθένεια με κωδικό  F9
SELECT SDOP_NAME FROM PROVIDES WHERE SERIAL_CODE = (SELECT SERIAL_CODE FROM PRESCRIPTION WHERE DISEASE_CODE = 'F9' GROUP BY SERIAL_CODE);
#
#part_3_question_1
#a) Ποιά φάρμακα την Amgen συνταγογραφούν οι γιατροί (+ποιοί γιατροί)
SELECT DR.DOCTOR_NAME, D.DRUG_NAME FROM PRESCRIBE INNER JOIN DOCTOR DR ON PRESCRIBE.DOCTOR_SSN=DR.DOCTOR_SSN INNER JOIN DRUGS  D  ON PRESCRIBE.SERIAL_CODE=D.SERIAL_CODE WHERE D.COMPANY_NAME = 'Amgen';
#εκδοχή με outer: 
SELECT DR.DOCTOR_NAME, D.DRUG_NAME FROM PRESCRIBE RIGHT JOIN DOCTOR DR ON PRESCRIBE.DOCTOR_SSN=DR.DOCTOR_SSN  RIGHT JOIN DRUGS  D  ON PRESCRIBE.SERIAL_CODE=D.SERIAL_CODE WHERE D.COMPANY_NAME = 'Amgen';
#Αυτή η πληροφορία μας βοηθάει να έχουμε μια εικόνα της επιτυχίας των φαρμάκων, καθώς και της επιτυχίας των salesmen στη προώθηση των φαρμάκων σε κάθε γιατρό
#b) 1) Ποιοί salesman λαμβάνουν μισθό μεγαλύτερο του μέσου όρου
SELECT SALESMAN_NAME FROM SALESMAN WHERE SALARY > (SELECT AVG(SALARY) FROM SALESMAN);
#Αυτή η πληροφορία βοηθάει το τμήμα Human Resources της εταιρίας. Να γνωρίζουν αν οι μισθοί είναι δίκαιοι μεταξύ των υπαλλήλων,
#καθώς και αντάξιοι της αξίας που δίνουν στην εταιρία οι salesmen με τη δουλειά τους.
#2) Το ποσοστό των φαρμκάκων της Pfizer Hellas A.E. που έχουν εγκριθεί
SELECT (SELECT COUNT(SERIAL_CODE) FROM DRUGS WHERE APPROVAL=1 AND COMPANY_NAME = 'Pfizer Hellas A.E.')/(SELECT COUNT(SERIAL_CODE) FROM DRUGS WHERE APPROVAL IS NOT NULL AND COMPANY_NAME = 'Pfizer Hellas A.E.') AS VALID FROM DRUGS GROUP BY VALID;
#Αυτή η πληροφορία μας βοηθάει να έχουμε μια εικόνα της αξιοπιστίας της εταιρίας
#c) Τα κέρδη των επιχειρήσεων ανά περιοχή
SELECT HQ_ADDRESS, AVG(INCOME_OUTCOME) FROM COMPANY GROUP BY HQ_ADDRESS;
#Αυτή η πληροφορία μας δίνει μια εικόνα για για την επιτυχία των εταιριών σε κάθε περιοχή. Βάσει αυτού μπορεί να αποφασιστεί να ανοίξει ή να κλείσει
#η εκάστοτε υπο-εταιρία.
#part_3_question_2

#part_3_question_3
INSERT INTO DRUGS
VALUES();
INSERT INTO SALESMAN
VALUES();
#after some time the doctor creates a prescription:
INSERT INTO PRESCRIPTION
VALUES();
#now the patient needs the medicine:
select drugname,patient_name from consume c ,patient p where patient_ssn = 108392392;
select serial_code, company_name from drug where drug_name = drugname;
select SDOPName from provides pr , drugs d where (pr.serialcode = d.serial_code AND pr.company_name = d.company_name);
#εμφωλεμένες select:
select SDOPName1 from provides pr , drugs d where (pr.serialcode = (select serial_code from drug where drug_name = (select drugname from consume c ,patient p where patint_ssn = 108392392)) AND pr.company_name = (select company_name from drug where drug_name = (select drugname from consume c ,patient p where patint_ssn = 108392392)));
select SDOPName2 from provides pr , drugs d where (pr.serialcode = (select serial_code from drug where drug_name = (select drugname from consume c ,patient p where patint_ssn = 108392392)) AND pr.company_name = (select company_name from drug where drug_name = (select drugname from consume c ,patient p where patint_ssn = 108392392)));
select SDOPName3 from provides pr , drugs d where (pr.serialcode = (select serial_code from drug where drug_name = (select drugname from consume c ,patient p where patint_ssn = 108392392)) AND pr.company_name = (select company_name from drug where drug_name = (select drugname from consume c ,patient p where patint_ssn = 108392392)));
#another example of a transaction:
#while the doctor tries to create a new presciption the power turned off from his computer
#we will apply rollback:
commit;#we assume that everything before is safely saved.
INSERT INTO PRESCRIPTION
VALUES();
#the power is off and now the rollback:
rollback;

create index drugs_indexes on DRUGS(DRUG_NAME,COMPANY_NAME,SERIAL_CODE);

CREATE INDEX distributors_index_time ON DISTRIBUTORS(DISTRIBUTOR_NAME, TIME_O_D);
CREATE INDEX SDOP_index_time ON STATE_DEPOSIT_OF_PHARMACEUTICALS(SDOP_NAME, TIME_SDOP);

create view user_patient as 
select * 
from PATIENTS p ,CONSUME c ,GOTO g
where p.ssn = 283893257 AND c.PATIENT_SSN = 283893257 AND g.PATIENT_SSN = 283893257;

create view user_company as 
select * 
from COMPANY, CONSISTS_OF, BUY, PRODUCES
where COMPANY_NAME = 'Pfizer';

# Τι είδους query να κάνω που να έχει δύσκολη συνθήκη ?
CREATE VIEW approved_drugs AS
SELECT *
FROM DRUGS
WHERE APPROVAL == 1;

#STORED PROCEDURE
DELIMITER |
CREATE PROCEDURE PR_1
(
    IN last_date DATE,
    IN doctor_ssn int,
    OUT f int
)
BEGIN
    select COUNT(*) INTO f
    from PRESCRIPTION p , PRESCRIBES pr
    where p.DATE_OF_PRESCRIPTION > last_date AND pr.DOCTOR_SSN == doctor_ssn;
END|
DELIMITER ;

CALL PR_1 ('01/01/2023',20230484);

#STORED FUNCTION
DELIMITER |
CREATE FUNCTION FUN_1
(
    IN current_location CHAR(10),
    IN search_radius INT
)
RETURNS ARRAY(10)
BEGIN
    DECLARE search_list;
    select doctor_location INTO search_list
    from DOCTOR d;
    DECLARE distance = ACOS(COS(SIN(lat1))*SIN(lat2) + COS(lat1)*COS(lat2)*COS(lon2-lon1))*6371;
    #6371 = earth radius in km
END|
DELIMITER ;

CALL FUN_1('Lamia',5);

#trigger:
CREATE TRIGGER patient_drug_tr
BEFORE INSERT ON PRESCRIBE
REFERENCING NEW ROW AS NEW_PR, OLD ROW AS OLD_PR
FOR EACH ROW BEGIN
    IF NEW_PR.PATIENT_SSN = OLD_PR.PATIENT_SSN THEN
        IF NEW_PR.DATE_OF_PRESCRIPTION >= OLD_PR.DATE_OF_PRESCRIPTION + 3MONTHS THEN
            SET NEW_PR = OLD_PR;
        END IF;
    END IF;
END;

#.
