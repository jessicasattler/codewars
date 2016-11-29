solutions to HackerRank MySQL Challenges:


Query all columns for all American cities in CITY with populations larger than 100000. The CountryCode for America is USA.

link: https://www.hackerrank.com/challenges/revising-the-select-query

Solution:

SELECT * FROM city WHERE countrycode = 'USA' AND population > 100000;