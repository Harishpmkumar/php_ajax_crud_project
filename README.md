<h2>Simple CRUD project using AJAX</h2>

This is a simple PHP CRUD (Create, Read, Update, Delete) application that allows you to perform basic CRUD operations on a MySQL database.

## Files

1. **index.php**: Main PHP file containing HTML markup and PHP code to display the user interface, fetch data from the database, and handle form submissions.
2. **script.js**: JavaScript file responsible for client-side interactions, such as handling form submission, editing, updating, and deleting records using AJAX requests.
3. **insert.php**: PHP script to handle the insertion of new records into the database.
4. **edit.php**: PHP script to retrieve data from the database for editing a specific record.
5. **update.php**: PHP script to handle the updating of records in the database.
6. **delete.php**: PHP script to handle the deletion of records from the database.
7. **config.php**: PHP script containing database connection details.

## Features

- Display a form for adding new records to the database.
- Display a table listing existing records from the database with options to edit or delete each record.
- Use Bootstrap 5 for styling the UI.
- Use jQuery for handling form submission and AJAX requests.

## Usage

1. **Accessing the Application**: Upload all files to your web server.
2. **Database Setup**: Import the provided SQL file (`database.sql`) into your MySQL database to create the necessary tables.
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

<h4>Project Structure</h4>

The project is organized into four main sections:
<ul>
  <li><b>Home - </b>Introduction to the website and a visually appealing landing page.</li>
  
  <li><b>About -</b> Detailed information about the creator, their skills, and background.</li>
  
  <li><b>Services - </b>A section highlighting the services offered or skills available.</li>
  
  <li><b>Contact -</b> A contact form allowing users to submit their details.</li>

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

<b>Step 4 : Create a username, password for phpmyadmin access and create a database and table (create a table with name “users“ and fields of id(primary key, int), name(varchar), email(varchar), subject(varchar), message(varchar)). If you dont know to create then refer this link. </b>
<ul>
<li><b>Create username and password - </b><a href="https://www.webserver.com.my/kb/creating-user-accounts-in-phpmyadmin/">Click !</a></li>

<li><b>Create database and table - </b><a href="https://www.geeksforgeeks.org/how-to-create-a-new-database-in-phpmyadmin/">Click !</a></li>
</ul>


<b>Step 5 : Open the project folder in your code editor. I prefer vscode for code editing.</b>

![Screenshot 2024-02-04 125821](https://github.com/Harishpmkumar/Portfolio_PHP_project/assets/94518989/3254a3f0-cc0c-443e-8833-226921bca723)

<b>Step 6 : Open <i>“config.php”</i> file and change your username, password and database in the file.</b>

 ![Screenshot 2024-02-04 131635](https://github.com/Harishpmkumar/Portfolio_PHP_project/assets/94518989/13b91691-4fca-4e7d-8813-9d7f3426f506)

🎊🥂🎉  All the configuration is over  🎊🥂🎉

<b>Step 7 : Go to your browser, then type <i>“localhost/php-project”</i>.</b>

![Screenshot 2024-02-04 132511](https://github.com/Harishpmkumar/Portfolio_PHP_project/assets/94518989/f90750b4-74cd-422e-9ed5-42dd29ea442c)
