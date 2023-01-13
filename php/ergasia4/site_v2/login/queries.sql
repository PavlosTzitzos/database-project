

COMPANY : DONE : WORKS

SET @COMP_NAME := 'Johnson n Johnson';
SELECT DRUG_NAME, SERIAL_CODE FROM DRUG WHERE COMPANY_NAME = @COMP_NAME;
SELECT DISTRIBUTOR_NAME FROM BUY WHERE COMPANY_NAME = @COMP_NAME;
SELECT SALESMAN_NAME FROM SALESMAN WHERE COMPANY_NAME = @COMP_NAME;


DISTRIBUTOR : DONE : WORKS

SET @DISTR_NAME := 'Mawdsleys';
SELECT COMPANY_NAME FROM BUY WHERE DISTRIBUTOR_NAME = @DISTR_NAME;
SELECT DRUG_NAME, SERIAL_CODE FROM DRUG WHERE SERIAL_CODE IN( SELECT SERIAL_CODE FROM DISTRIBUTE WHERE DISTRIBUTOR_NAME = @DISTR_NAME);
SELECT CITY, ADDRESS FROM SELL WHERE DISTRIBUTOR_NAME = @DISTR_NAME;


SDOP : DONE : WORKS

SET @SDOP_C = 'Volos';
SET @SDOP_A = 'Drosopoulou Ioanni 77';
SELECT COMPANY_NAME FROM PROVIDES WHERE CITY = @SDOP_C AND ADDRESS = @SDOP_A;
SELECT D.DRUG_NAME, D.SERIAL_CODE FROM DRUG D INNER JOIN PROVIDES P ON
D.SERIAL_CODE = P.SERIAL_CODE AND D.COMPANY_NAME = P.COMPANY_NAME WHERE P.CITY= @SDOP_C AND P.ADDRESS = @SDOP_A;
SELECT DISTRIBUTOR_NAME FROM SELL WHERE SELL.CITY = @SDOP_C AND ADDRESS = @SDOP_A;


SALESMAN : DONE : WORKS

SET @S_SSN := 201855904;

SELECT DOCTOR_NAME, DOCTOR_SSN FROM DOCTOR WHERE DOCTOR_SSN IN (
SELECT DOCTOR_SSN FROM VISIT WHERE SALESMAN_SSN = @S_SSN);


DOCTOR : DONE : WORKS

SET @DOC_SSN := 201980072;

SELECT SALESMAN_NAME, SALESMAN_SSN FROM SALESMAN WHERE SALESMAN_SSN IN (
SELECT SALESMAN_SSN FROM VISIT WHERE DOCTOR_SSN = @DOC_SSN);

SELECT COMPANY_NAME, DRUG_NAME, SERIAL_CODE FROM DRUG WHERE SERIAL_CODE IN(
SELECT SERIAL_CODE FROM PRESCRIBE WHERE DOCTOR_SSN = @DOC_SSN);

SELECT PAT.PATIENT_NAME, PAT.PATIENT_SSN, P.DATE_OF_PRESCRIPTION FROM PATIENT PAT
INNER JOIN PRESCRIBE P ON PAT.PATIENT_SSN = P.PATIENT_SSN
WHERE P.PATIENT_SSN IN (
SELECT PATIENT_SSN FROM GOTO WHERE DOCTOR_SSN = @DOC_SSN);



PATIENT : DONE : WORKS

SET @PAT_SSN := 201979875;

SELECT COMPANY_NAME, DRUG_NAME, SERIAL_CODE FROM DRUG WHERE SERIAL_CODE IN (
SELECT SERIAL_CODE FROM PRESCRIPTION WHERE PATIENT_SSN =@PAT_SSN);



## IGNORE BELOW CODE, IT DOESNT WORK

#SELECT A.SERIAL_CODE, A.DATE_OF_PRESCRIPTION, (B.DATE_OF_PRESCRIPTION - A.DATE_OF_PRESCRIPTION) AS timedifference
#FROM PRESCRIPTION A CROSS JOIN PRESCRIPTION B
#WHERE B.SERIAL_CODE IN (SELECT MIN (C.SERIAL_CODE) FROM PRESCRIPTION C WHERE C.SERIAL_CODE > A.SERIAL_CODE)
#ORDER BY A.SERIAL_CODE ASC;