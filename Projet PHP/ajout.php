<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poste";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $nom=$_POST["nom"];
 $prenom=$_POST["prenom"];
 $age=$_POST["age"];
 $mail=$_POST["mail"];
 $cin=$_POST["cin"];
 $pwd=$_POST["pwd"];


$sql = "INSERT INTO client (cin, nom, prenom, age, mail, pwd )
VALUES ('$cin' , '$nom', '$prenom', '$age' , '$mail' ,  '$pwd' )";
mysqli_query($conn,$sql);
require("ajouter.html"); 
 mysqli_close($conn); 

 ?>