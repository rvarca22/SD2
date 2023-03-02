## BOOK BUYERS Fictional Company Website 

Marist College CMPT 221 - Software Development II Final Project  
  Development Team: Jlthermos28, MarcusVesio, Rvarca22.

Designed webpages using HTML, CSS, and PHP for a fictional book retailer company, Book Buyers as a final project. These HTML files were run locally using
  a MAMP server, and eventually were run on an AWS EC2 instance so they could be accessed from anywhere. 
  
Using SQL, we created tables of the company's users, products, and suppliers; each table had a unique login, product, or supplier id code as the table's primary key.
  The user table held information on the company's users, including theur active/inactive status, username, password, email, etc. The products table held 
  information regarding the products the company sells (in this case books), including its publication date, price, serial number, etc. Finally, the suppliers table
  held information about the various suppliers the company buys its products from. In the case of book buyers, the suppliers were companies like Amazon, and Barnes 
  and Noble. The supplier table held information such as the supplier's name, address, phone number, etc. 
  
MySQL was used in conjunction with PHP to display the contents of these tables on the webpages, which was made available only to users with admin access.  
