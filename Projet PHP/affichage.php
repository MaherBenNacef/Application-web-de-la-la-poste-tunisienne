<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poste";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * From client";
    $q= mysqli_query($conn,$sql);?>
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
        <tr bgcolor="LightSkyBlue " >
            <th style="text-align:center;">NOM CLIENT</th>
            <th style="text-align:center;">PRENOM CLIENT</th>
            <th style="text-align:center;">AGE CLIENT</th>
            <th style="text-align:center;">MAIL CLIENT</th>
        </tr>
         <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">page précédente</a>
   <?php
    while($d=mysqli_fetch_array($q)) 
            { // début de ldap_add(link_identifier, dn, entry) boucle while
                
                ?>
        <tr bgcolor="pink" style="text-align:center;">
            <td style="text-align:center;"><?php echo $d['nom'];?></th>
            <td style="text-align:center;"><?php echo $d['prenom'];?></th>
            <td style="text-align:center;"><?php echo $d['age'];?></td>
            <td style="text-align:center;"><?php echo $d['mail'];?></td>
        </tr>  

                <?php
            

            } //la fin la boucle while
            
// Déconnexion
 
 ?>
