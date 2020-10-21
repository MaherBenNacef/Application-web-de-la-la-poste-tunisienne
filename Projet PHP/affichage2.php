<?php
$con = mysqli_connect("localhost","root","","poste");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_select_db("test",$con);

mysqli_query($con,"SELECT * FROM client "); ?>
<table border='1' width=100% >
        <tr bgcolor="purple" >
            <th style="text-align:center;">ID CLIENT</th>
            <th style="text-align:center;">NOM CLIENT</th>
            <th style="text-align:center;">PRENOM CLIENT</th>
            <th style="text-align:center;">AGE CLIENT</th>
            <th style="text-align:center;">MAIL CLIENT</th>
        </tr>
         <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">page précédente</a>
   <?php
    while($row=mysqli_fetch_array($con,MYSQLI_BOTH))
            {
                ?>
        <tr bgcolor="pink" style="text-align:center;">
            <td ><?php echo $row['id'];?></th>
            <td ><?php echo $row['nom'];?></th>
            <td><?php echo $row['prenom'];?></th>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['mail'];?></td>
        </tr>  

                <?php
            }
            
// Déconnexion
 mysqli_close($con);
 ?>






