<h2>Simple CRUD project using AJAX</h2>

This is a simple PHP CRUD (Create, Read, Update, Delete) application that allows you to perform basic CRUD operations on a MySQL(phpmyadmin) database.

## Files

1. **index.php**: Main PHP file containing HTML markup and PHP code to display the user interface, fetch data from the database, and handle form submissions.
2. **script.js**: JavaScript file responsible for client-side interactions, such as handling form submission, editing, updating, and deleting records using AJAX requests.
3. **insert.php**: PHP script to handle the insertion of new records into the database.
4. **edit.php**: PHP script to retrieve data from the database for editing a specific record.
5. **update.php**: PHP script to handle the updating of records in the database.
6. **delete.php**: PHP script to handle the deletion of records from the database.
7. **config.php**: PHP script containing database connection details.
8. **table_data.php**: PHP script containing table for loading(refreshing).
9. **style.css**: Style sheet having the simple css for the index page.

## Features

- Display a form for adding new records to the database.
- Display a table listing existing records from the database with options to update or delete each record.
- Use Bootstrap 5 for styling the UI.
- Use jQuery for handling form submission and AJAX requests.

## Usage

1. **Accessing the Application**: Upload all files to your web server.
2. **Database Setup**: Create the necessary tables in your phpmyadmin.
3. **Configuration**: Edit the `config.php` file and provide your MySQL database connection details.
4. **Running the Application**: Access the `index.php` file through your web browser to use the CRUD application.

## Functionality

- **Create**: Fill out the form with the required information and click the "Submit" button to add a new record to the database.
- **Read**: View the list of records in the database.
- **Update**: Click the "Edit" button next to a record to modify its information.
- **Delete**: Click the "Delete" button next to a record to remove it from the database.

<h4>Technologies Used</h4>

The technologies we have used
<ul>
  <li><b>HTML:</b> Used for structuring the content of the website.</li>

  <li><b>CSS:</b> Applied for styling and layout design.</li>

  <li><b>JavaScript:</b> Employed for dynamic and interactive elements.</li>

  <li><b>Bootstrap 5: </b>Utilized for responsive and mobile-friendly design.</li>

  <li><b>JQuery:</b> Implemented for simplifying JavaScript code and enhancing interactivity.</li>

  <li><b>PHP:</b> Process the data in the backend side and store it in the database.</li>
</ul>

<h2>How to run the project</h2>

<h4>Prerequisite</h4>
<ul>
  <li>Xampp</li>
  
  <li>HTML</li>
  
  <li>CSS</li>
  
  <li>JS</li>
  
  <li>Bootstrap5</li>
  
  <li>Jquery</li>
  
  <li>PHP</li>
  
  <li>MySQL</li>
  
  <li>phpmyadmin</li>
</ul>


<b>Step 1 : Download and unzip this project repository in your <i>"xampp → htdocs"</i> folder.</b>

<b>Step 2 : Start Apache and MySQL in Xampp control panel. 

![Screenshot 2024-02-04 125411](https://github.com/Harishpmkumar/Portfolio_PHP_project/assets/94518989/ae1aabcd-7346-4831-b2fb-13ee331d6e77)

<b>Step 3 : Type <i>“localhost/phpmyadmin”</i> in your browser, it will open the phpmyadmin panel.</b>

![Screenshot 2024-02-04 130333](https://github.com/Harishpmkumar/Portfolio_PHP_project/assets/94518989/f4f6c1db-f6db-461a-aa03-371825f25b90)

<b>Step 4 : Create a username, password for phpmyadmin access and create a database and table (create a table with name “crud“ and fields of id(primary key, int), email(varchar), password(varchar). If you dont know to create then refer this link. </b>
<ul>
<li><b>Create username and password - </b><a href="https://www.webserver.com.my/kb/creating-user-accounts-in-phpmyadmin/">Click !</a></li>

<li><b>Create database and table - </b><a href="https://www.geeksforgeeks.org/how-to-create-a-new-database-in-phpmyadmin/">Click !</a></li>
</ul>

Note:- Make sure your table structure looks like below

![Screenshot (7)](https://github.com/Harishpmkumar/php_ajax_crud_project/assets/94518989/399200db-c2f7-407a-8b74-ac29dd49c9c8)

<b>Step 5 : Open the project folder in your code editor. I prefer vscode for code editing.</b>

![Screenshot (5)](https://github.com/Harishpmkumar/php_ajax_crud_project/assets/94518989/390676a4-844e-4e69-89cf-8ed9a9aac42d)


<b>Step 6 : Open <i>“config.php”</i> file and change your username, password and database in the file.</b>

 ![Screenshot (6)](https://github.com/Harishpmkumar/php_ajax_crud_project/assets/94518989/fbfde0ea-b9ad-4404-a580-1dd2dae9706e)


🎊🥂🎉  All the configuration is over  🎊🥂🎉

<b>Step 7 : Go to your browser, then type <i>“[localhost/PHP_crud_ajax](http://localhost/PHP_crud_ajax/index.php)”</i>.</b>
![Screenshot_11-3-2024_205514_localhost](https://github.com/Harishpmkumar/php_ajax_crud_project/assets/94518989/577f8612-2bd2-4d97-a01f-545801852d0f)



