<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$personnel= [["fonction"=>"Ingenieur","nom"=>"Hamidi","prenom"=>"Said","age"=>54],
             ["fonction"=>"Technicien","nom"=>"Alami","prenom"=>"Ahmed","age"=>40],
             ["fonction"=>"Chef de projet","nom"=>"Hassani","prenom"=>"Said","age"=>27]];
echo'<table border="2">';
echo'<tr>
        <th> Fonction </th>
        <th> Nom</th>
        <th> Prenom</th>
        <th> Age</th>
     </tr>';
foreach($personnel as  $val){
        echo "<tr>
                  <td>".$val["fonction"]."</td>
                  <td>".$val["nom"]."</td>
                  <td>".$val["prenom"]."</td>
                  <td>".$val["age"]."</td>
              </tr>";
    }
    echo "<br>";

echo '</table>';
?>
</body>
</html>
