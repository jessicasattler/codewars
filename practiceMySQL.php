Solutions to HackerRank MySQL Challenges:

#Practice with the Select Query I
Query all columns for all American cities in CITY with populations larger than 100000. The CountryCode for America is USA.

link: https://www.hackerrank.com/challenges/revising-the-select-query

Solution:

SELECT * FROM city WHERE countrycode = 'USA' AND population > 100000;

#Revising the Select Query II

Query the names of all American cities in CITY with populations larger than 120000. The CountryCode for America is USA.

Solution:
SELECT name FROM city WHERE countrycode = 'USA' AND population > 120000;

#Select All
Query all columns (attributes) for every row in the CITY table.

Solution:

SELECT * FROM city;

#Select by id
Query all columns for a city in CITY with the ID 1661

SELECT * FROM city WHERE id = 1661;

#Japanese Cities Attributes
Query all attributes of every Japanese city in the CITY table. The COUNTRYCODE for Japan is JPN.

SELECT * FROM city WHERE countrycode = 'JPN';

#Query the names of all the Japanese cities in the CITY table. The COUNTRYCODE for Japan is JPN.

SELECT name FROM city WHERE countrycode = "JPN";

#Weather Observation Station 1
Query a list of CITY and STATE from the STATION table.

SELECT city, state FROM station;


#Weather Observation 3
Query a list of CITY names from STATION with even ID numbers only. You may print the results in any order, but must exclude duplicates from your answer.

SELECT DISTINCT city FROM station WHERE id % 2 = 0 

#Weather Observation Station 4 
Let  be the number of CITY entries in STATION, and let  be the number of distinct CITY names in STATION; query the value of  from STATION. In other words, find the difference between the total number of CITY entries in the table and the number of distinct CITY entries in the table.

AKA Find the difference between the number of city entrees and the number of unique city entries

SELECT COUNT(city) - COUNT(DISTINCT city) FROM station;

#weather observation station 5
select city, length(city) from station order by length(city) asc, city asc limit 1; select city, length(city) from station order by length(city) desc, city asc limit 1;

SELECT city, CHAR_LENGTH(city) FROM station ORDER BY CHAR_LENGTH(city) asc, city asc limit 1; 
SELECT city, CHAR_LENGTH(city) FROM station ORDER BY CHAR_LENGTH(city) desc, city asc limit 1;

#weather observation station 6
Query the list of CITY names starting with vowels (a, e, i, o, u) from STATION. Your result cannot contain duplicates.

SELECT DISTINCT city FROM station WHERE city LIKE 'a%' OR city LIKE 'e%' OR city LIKE 'i%' OR city LIKE 'o%'OR city LIKE'u%';

#weather observation station 7
Query the list of CITY names ending with vowels (a, e, i, o, u) from STATION. Your result cannot contain duplicates.

SELECT DISTINCT city FROM station WHERE city LIKE '%a' OR city LIKE '%e' OR city LIKE '%i' OR city LIKE '%o' OR city LIKE '%u';

#weather observation station 8
Query the list of CITY names from STATION which have vowels (i.e., a, e, i, o, and u) as both their first and last characters. Your result cannot contain duplicates.

select distinct CITY from STATION where substr(CITY,1,1) in ('A','E','I','O','U') and substr(CITY,-1,1) in ('A','E','I','O','U');

#weather observation station 9
Query the list of CITY names from STATION that do not start with vowels. Your result cannot contain duplicates.

SELECT DISTINCT city FROM station WHERE city NOT LIKE 'a%' AND city NOT LIKE 'e%' AND city NOT LIKE 'i%' AND city NOT LIKE 'o%' AND city NOT LIKE 'u%';
