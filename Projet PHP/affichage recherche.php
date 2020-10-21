<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poste";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $cin=$_POST["cin"];
    $pwd=$_POST["pwd"];
// traitement de la requette
    $q= mysqli_query(("SELECT * FROM client  "),$conn);?>
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<table border='5' width=100% >
        <tr bgcolor="purple" >
            <th style="text-align:center;">CIN CLIENT</th>
            <th style="text-align:center;">NOM CLIENT</th>
            <th style="text-align:center;">PRENOM CLIENT</th>
            <th style="text-align:center;">AGE CLIENT</th>
            <th style="text-align:center;">MAIL CLIENT</th>
        </tr>
         <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">page précédente</a>
   <?php
    while($d=mysqli_fetch_array($q)) 
            { // début de la boucle while
                if ($d['cin'] == $cin)
                {
                ?>
        <tr bgcolor="pink" style="text-align:center;">
            <td><?php echo $d['cin'];?></td>
            <td ><?php echo $d['nom'];?></th>
            <td><?php echo $d['prenom'];?></th>
            <td><?php echo $d['age'];?></td>
            <td><?php echo $d['mail'];?></td>
        </tr>  

                <?php
            }

            } //la fin la boucle while
            
// Déconnexion
 
 ?>
