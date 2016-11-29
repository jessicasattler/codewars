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