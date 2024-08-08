# Robot-controller

This repository is a python codes contains all the supporting project files necessary to work through the robot controller project from start to finish.


# About the Project

This project is about building and designing a web page for a robot controller in Python that controls the movement of a robot and stores the movement data inside a database and retrieves the last value that has been entered inside the database. The project has four different parts: 

1-	Building the control web page.

2-	Build a retrieve page.

3-	Creating a database using phpMyAdmin and SQL. 

4-	Connect everything to the database.


### Control Page Purpose:

The control page allows users to send directional commands (Forward, Backward, Left, Right, Stop) to a robot.


### Structure:

#### 1.	HTML File (index.html):
 - Creates a simple web interface with buttons for each command.
 - Sends the command to the server using JavaScript and the Fetch API.
#### 2.	CSS File (styles.css):
- Styles the buttons and layout to ensure a user-friendly interface.
#### 3.	PHP File (control.php):
- Connects to the MySQL database.
-	Inserts the command into the commands table.


### Retrieve Page Purpose:

The retrieve page displays the last command stored in the commands table.


### Structure:

#### 1.	HTML File (retrieve.html)
  - Fetches the last command using JavaScript and displays it on the page.
#### 2.	CSS File (styles2.css)
  - Styles the retrieve page similarly to the control page for a consistent look.
#### 3.	PHP File (retrieve.php)
  - Connects to the MySQL database.
  - Retrieves the last command from the commands table.


## Instructions and Navigation

- Install a web server (Apache).

- Install a database (MySQL).

- Use a server-side scripting language (Python).

### [Download and Install XAMPP]: (https://www.apachefriends.org/download.html)

### [Download and Install Visual Studio Code]: (https://code.visualstudio.com/download)


### Step 1: set up XAMPP & Create database .
•  Start XAMPP Control Panel: Open XAMPP and start the Apache and MySQL modules.

•	Open your web browser and go to http://localhost/phpmyadmin/.

•	Create a new database named Robot_controller and a table named commands with the following SQL:

```
CREATE TABLE commands (
    Id INT(11) AUTO_INCREMENT PRIMARY KEY,
    RobotDirections VARCHAR(255) NOT NULL
);

```


### Step 2: Set Up Your Project in Visual Studio Code

•  Create a New Project Folder: Create a folder named robot_control.

•  Open the Folder in Visual Studio Code and Create Necessary Files:

#### - index.html
To Develop the Frontend (HTML + JavaScript).
#### -	control.php
To Develop the Backend (PHP).
#### - styles.css 
For Basic Styling of page and control buttons.


### Step 3: Testing the Setup
1.	Open Your Web Browser: Navigate to http://localhost/robot_control/index.html.
2.	Test Buttons: Click on each button and check if data is being inserted into the database.
3.	Check Data in Database
4.	Open phpMyAdmin: Go to http://localhost/phpmyadmin.
5.	Select Database: Choose Robot_controller from the list.
6.	View Table: Click on the commands table and check if the commands are being logged correctly.

#### The website will be as shown in the pictures below:

<div> 
   
<img src="https://github.com/user-attachments/assets/af3953c2-9e71-46a5-beb2-3a667c14e703" width="400" height="400">

<img src="https://github.com/user-attachments/assets/c39ad0bf-5f53-4452-a1ba-15e050994db2" width="400" height="400">

<img src="https://github.com/user-attachments/assets/85679d60-c00b-4f1d-b79f-c1485e911381" width="500" height="400">

</div>
   
   
### Step 4: Create the last input retrieveing Page
#### - retrieve.html 
To Develop the Frontend (HTML + JavaScript).
#### -	retrieve.php
To Develop the Backend (PHP).
#### - styles2.css
For Basic Styling of the retrieve link.


### Step 5: Testing the second Setup
1.	Open Your Web Browser: Navigate to http://localhost/robot_control/retrieve.html.
2.	Test Button: Click on button and check if data is being inserted into the database.
3.	Check Data in Database
4.	Open phpMyAdmin: Go to http://localhost/phpmyadmin.
5.	Select Database: Choose Robot_controller from the list.
6.	View Table: Click on the commands table and check if the last command showing is the same as what last command on the retrieve button displayed correctly.

 #### The website will be as shown in the pictures below:

 <div> 
   
<img src="https://github.com/user-attachments/assets/457e5714-e19a-428f-8280-d8b7649310ce" width="400" height="400">

<img src="https://github.com/user-attachments/assets/ab53529e-ee7c-4d72-a7c5-7503b4cbea43" width="300" height="200">

<img src="https://github.com/user-attachments/assets/c39ad0bf-5f53-4452-a1ba-15e050994db2" width="400" height="400">

<img src="https://github.com/user-attachments/assets/be50cd9a-4412-42a5-99a0-e615dfbb8448" width="400" height="500">

</div>


# Summary:
The Robot Controller project consists of two primary web pages: a control page to send movement commands to a robot and a retrieve page to display the last sent command. The project uses a MySQL database to store and retrieve these commands.


### Technologies Used:

•	HTML, CSS, JavaScript

•	PHP

•	MySQL

•	XAMPP (for local server and MySQL database)

•	Visual Studio Code

## Thank You!

