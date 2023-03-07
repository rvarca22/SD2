<!DOCTYPE html>

<!--    Team7.html       Working Admin Page for Book Buyer website
    10/12/2021 JLT,RV,MV Original Program   -->


<html lang = "en">
    <head>
	<title> MySQL Reference Page </title>
        
        <table border = 1>
            <tr>
                <th> <a href = "Admin_Page.php" > Back </a> </th>
            </tr>
        </table>
        
        <h1 style = "text-align: center;color: purple;"> MYSQL Reference Page </h1>
        <HR>
        
        <style>
            table{background-color: rgb(57, 136, 57);}
            th{background-color: darkgray;}
            td{font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: white;}
            tr:nth-child(even) {background-color: darkgreen;}
            

        </style>

    </head>

    <body style = "background-color:#FCFFDB">

        <main>
            <h2> DATABASE COMMANDS </h2>

            <table border = 1>
                <tr>
                    <th> Command </th>
                    <th> Syntax  </th>
                    <th> Notes   </th>
                </tr>
                <tr>
                    <td> CREATE DATABASE </td>
                    <td> 'create databse if not exists' + 'name of database';</td>
                    <td> Creates a new database </td>
                </tr>
                <tr>
                    <td> USE </td>
                    <td> USE + 'name of database';</td>
                    <td> Tells sql which database to access </td>
                </tr>
            </table>


            <h2> TABLE COLUMN COMMANDS </h2>

            <table border = 1>
                <tr>
                    <th> Command</th>
                    <th> Syntax </th>
                    <th> Notes </th>
                </tr>
                <tr>
                    <td> ADD COLUMN  </td>
                    <td>
                        ALTER TABLE 'table name' <P>
                            ADD COLUMN + 'new col name' + 'col datatype' + 'modifiers'
                        </P>
                    </td>
                    <td> Adds a new column to a specified table </td>
                </tr>
                <tr>
                    <td> DROP COLUMN </td>
                    <td>
                        ALTER TABLE 'table name' <P>
                            DROP COLUMN('column name')
                        </P>
                    </td>
                    <td> Deletes an entire column of a table </td>
                </tr>
                <tr>
                    <td> RENAME COLUMN</td>
                    <td>
                        ALTER TABLE 'table name' <P>
                            RENAME COLUMN 'old name' TO 'new name'
                        </P>
                    </td>
                    <td> Renames a column in a table </td>
                </tr>
                <tr>
                    <td> ADD PRIMARY KEY </td>
                    <td>
                        ALTER TABLE 'table name' <P>
                            ADD PRIMARY KEY('column name')
                        </P>
                    </td>
                    <td> Adds a primary key to a specified column in a table </td>
                </tr>
                <tr>
                    <td> NOT NULL </td>
                    <td> NOT NULL </td>
                    <td> Forces user to input a value for field</td>
                </tr>
                <tr>
                    <td> UNIQUE </td>
                    <td> UNIQUE </td>
                    <td> Ensures no two records can have the same value </td>
                </tr>
                <tr>
                    <td> AUTO INCREMENT </td>
                    <td> AUTO_INCREMENT </td>
                    <td> Increments field with each record added, 
                        <p> automatically makes field the primary key </p> </td>
                </tr>

            </table>


            <h2> TABLE DATA COMMANDS </h2>

            <table border = 1> 
                <tr> 
                    <th> Command </th>
                    <th> Syntax  </th>
                    <th> Notes   </th>
                </tr>
                <tr>
                    <td> DROP TABLE </td>
                    <td> 'DROP TABLE IF EXISTS' + 'table name';</td>
                    <td> Do before creating a new table</td>
                </tr>
                <tr>
                    <td> CREATE TABLE </td>
                    <td> 'CREATE TABLE IF NOT EXISTS' + 'name of table"; </td>
                    <td> Creates a new table </td>
                </tr>
                <tr> 
                    <td> INSERT INTO <p> &nbsp&nbsp&nbsp&nbsp VALUES </p></td>
                    <td> 'INSERT INTO' 'table name' <p> &nbsp&nbsp&nbsp&nbsp 'VALUES'('values');</td>
                    <td> inserts specific values into the specified table 
                        <p> Options: </p>
                        <p> VALUES(all parameters) </p>
                        <p> VALUES(specific parameters) </p> 
                    </td>
                </tr>
                <tr> 
                    <td> SELECT </td>
                    <td> 'SELECT' + 'information to retreive' </td>
                    <td> SELECT + * retreives entire table </td>
                </tr>
                <tr> 
                    <td> FROM </td>
                    <td> 'SELECT' + 'table(s) to retreive info from' </td>
                    <td> Specify which tables are being used to retreive info </td>
                </tr>
                <tr> 
                    <td> WHERE </td>
                    <td> 'WHERE' + 'conditions' </td>
                    <td> Which records we want in answer table </td>
                </tr>
                <tr>
                    <td> SHOW TABLES</td>
                    <td> 'SHOW TABLES';</td>
                    <td> shows all tables in the database </td>
                </tr>
                <tr>
                    <td> EXPLAIN </td>
                    <td> 'EXPLAIN' + 'table name';</td>
                    <td> shows fields, types, null ('y','n'), primary key, defaults
                        <p> of the table</p>
                    </td>
                </tr>

                
            </table>

        </main>

<?php
    include "T7_footer.php";
?>
    </body>
</html>