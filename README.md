# mythicalCar
<h1>Description</h1>
<p>That is a university project,4th semestry,according to relational databases.The main focus is to build a system for a company who sales seond-hand cars.The company cooperates with a lot of salesmen and each salesman has a lot of cars.This system will help the main company to stores the informations about the cars and the salesmen, to search each of the previous that mentioned.So i have used delete,create and update (CRUD) to succeed it.It contains also ftp server to upload a picture for a car only.Then,the administrator will can see the car's price , the salesmen of,the model and the mark of each car.It's only for educational purposes so I haven't seperate the user and the admin roles.Every user of this system sign in and act as administrator.

<h1>How it works</h1>
<p>To run this project please download the xampp(or your favourite localhost control panel).Save the project into the xampp folder.Load database schema from db file.Start the apache server and the mysql server.Finally,load the project local.</p>


Change the db configuration in renameToconn.php file: 

```
<?php
$conn = mysqli_connect("localhost","yourusername","yourpassword","dbname");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>

```

To login use the below informations:
```
username:admin
password:admin

```

<h1>EER Model</h1>
      <dl>
  <dt>The relationship between the objects.</dt>
  <dd><p align="center">
  <img src="screenshots/er.png" >
</p><dd>
	</dl>
	
	
<h1>Screenshots</h1>
  <dt>The user interface of the project.</dt>
  <dd><p align="center">
  <img src="screenshots/1.jpg" >
</p><dd>
	 
  <dt>Read</dt>
  <dd><p align="center">
  <img src="screenshots/2.jpg" >
</p><dd>
	 
  <dt>Create</dt>
  <dd><p align="center">
  <img src="screenshots/3.jpg" >
</p><dd>
	 
  <dt> Update</dt>
  <dd><p align="center">
  <img src="screenshots/4.jpg" >
</p><dd>
	 
  <dt> Delete</dt>
  <dd><p align="center">
  <img src="screenshots/5.jpg" >
</p><dd>
	</dl>

<h1>Techonology Stack</h1>

<ul>
  <li><ul>Serverside
	  <li>php 5</li>
	  </ul
	</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>

<h1>Licence</h1>
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
