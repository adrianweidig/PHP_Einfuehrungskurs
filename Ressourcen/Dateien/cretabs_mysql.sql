set sql_safe_updates = 0;


CREATE TABLE DEPT (
 DEPTNO              decimal(2) NOT NULL,
 DNAME               NVARCHAR(14),
 LOC                 NVARCHAR(13)
);

INSERT INTO DEPT VALUES (10,'ACCOUNTING','NEW YORK');
INSERT INTO DEPT VALUES (20,'RESEARCH','DALLAS');
INSERT INTO DEPT VALUES (30,'SALES','CHICAGO');
INSERT INTO DEPT VALUES (40,'OPERATIONS','BOSTON');

CREATE TABLE EMP (
 EMPNO               decimal(4) NOT NULL,
 ENAME               NVARCHAR(10),
 JOB                 NVARCHAR(9),
 MGR                 decimal(4),
 HIREDATE            datetime,
 SAL                 decimal(7,2),
 COMM                decimal(7,2),
 DEPTNO              decimal(2) NOT NULL
);

INSERT INTO EMP VALUES (7839,'KING','PRESIDENT',NULL,'17.11.1981',5000,NULL,10);
INSERT INTO EMP VALUES (7698,'BLAKE','MANAGER',7839,'01.05.1981',2850,NULL,30);
INSERT INTO EMP VALUES (7782,'CLARK','MANAGER',7839,'09.06.1981',2450,NULL,10);
INSERT INTO EMP VALUES (7566,'JONES','MANAGER',7839,'02.04.1981',2975,NULL,20);
INSERT INTO EMP VALUES (7654,'MARTIN','SALESMAN',7698,'02.09.1981',1250,1400,30);
INSERT INTO EMP VALUES (7499,'ALLEN','SALESMAN',7698,'20.02.1981',1600,300,30);
INSERT INTO EMP VALUES (7844,'TURNER','SALESMAN',7698,'08.09.1981',1500,0,30);
INSERT INTO EMP VALUES (7900,'JAMES','CLERK',7698,'03.12.1981',950,NULL,30);
INSERT INTO EMP VALUES (7521,'WARD','SALESMAN',7698,'22.02.1981',1250,500,30);
INSERT INTO EMP VALUES (7902,'FORD','ANALYST',7566,'03.12.1981',3000,NULL,20);
INSERT INTO EMP VALUES (7369,'SMITH','CLERK',7902,'17.12.1980',800,NULL,20);
INSERT INTO EMP VALUES (7788,'SCOTT','ANALYST',7566,'09.12.1982',3000,NULL,20);
INSERT INTO EMP VALUES (7876,'ADAMS','CLERK',7788,'12.01.1983',1100,NULL,20);
INSERT INTO EMP VALUES (7934,'MILLER','CLERK',7782,'23.01.1982',1300,NULL,10);

CREATE TABLE SALGRADE (
 GRADE               decimal(4),
 LOSAL               decimal(4),
 HISAL               decimal(4));

INSERT INTO SALGRADE VALUES (1,700,1200);
INSERT INTO SALGRADE VALUES (2,1201,1400);
INSERT INTO SALGRADE VALUES (3,1401,2000);
INSERT INTO SALGRADE VALUES (4,2001,3000);
INSERT INTO SALGRADE VALUES (5,3001,9999);



Update emp set hiredate = '1981-11-17' where ename = 'KING';
Update emp set hiredate = '1981-05-01' where ename ='BLAKE';
Update emp set hiredate = '1981-06-09' where ename ='CLARK';
Update emp set hiredate = '1981-04-02' where ename ='JONES';
Update emp set hiredate = '1981-09-02' where ename ='MARTIN';
Update emp set hiredate = '1981-02-20' where ename ='ALLEN';
Update emp set hiredate = '1981-09-08' where ename ='TURNER';
Update emp set hiredate = '1981-12-03' where ename ='JAMES';
Update emp set hiredate = '1981-02-22' where ename ='WARD';
Update emp set hiredate = '1981-12-03' where ename ='FORD';
Update emp set hiredate = '1980-12-17' where ename ='SMITH';
Update emp set hiredate = '1982-12-09' where ename ='SCOTT';
Update emp set hiredate = '1983-01-12' where ename ='ADAMS';
Update emp set hiredate = '1982-01-23' where ename ='MILLER';
