## mySql syntax cheatsheet

> unix shell <br>
`mysql>`

syntax|function
---|---
`./mysql -u root -p`|login to mySql
`create database [databasename];`|create database
`show databases;`| list all database on server
`use [db name];`|Switch to a database.
`show tables;`|To see all the tables in the db.
`describe [table name];`|To see database's field formats.
`drop database [database name];`|To delete a db.
`drop table [table name];`|To delete a table.
`SELECT * FROM [table name];`|Show all data in a table.
`show columns from [table name];`|Returns the columns and column information pertaining to the designated table.
`SELECT * FROM [table name] WHERE [field name] = "whatever";`|Show certain selected rows with the value "whatever".
`SELECT * FROM [table name] WHERE name = "Bob" AND phone_number = '3444444';`|Show all records containing the name "Bob" AND the phone number '3444444'.
`SELECT * FROM [table name] WHERE name != "Bob" AND phone_number = '3444444' order by phone_number;`|Show all records not containing the name "Bob" AND the phone number '3444444' order by the phone_number field.
`SELECT * FROM [table name] WHERE name like "Bob%" AND phone_number = '3444444';`|Show all records starting with the letters 'bob' AND the phone number '3444444'.
`SELECT * FROM [table name] WHERE name like "Bob%" AND phone_number = '3444444' limit 1,5;`|Show all records starting with the letters 'bob' AND the phone number '3444444' limit to records 1 through 5.
`SELECT * FROM [table name] WHERE rec RLIKE "^a";`|Use a regular expression to find records. Use "REGEXP BINARY" to force case-sensitivity. This finds any record beginning with a.
`SELECT DISTINCT [column name] FROM [table name];`|Show unique records.
`add more syntax`|Add more

**Source**
> www.pantz.org