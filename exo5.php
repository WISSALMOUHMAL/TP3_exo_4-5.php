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
$taux=array(
        array("hp"=>0.8,"reference"=>"ref001","designation"=>"hp","prix_unitaire"=>7500,"quantite"=>13),
        array("mac"=>0.9,"reference"=>"ref002","designation"=>"mac","prix_unitaire"=>12000,"quantite"=>9),
        array("toshiba"=>0.7,"reference"=>"ref003","designation"=>"toshiba","prix_unitaire"=>8500,"quantite"=>12),
        array("samsung"=>0.6,"reference"=>"ref004","designation"=>"samsung","prix_unitaire"=>9000,"quantite"=>8)
);
echo '<table border ="2">';
echo '<tr>
        <th> Reference </th>
        <th> Designation </th>
        <th> Prix unitaire 5DH </th>
        <th> Quantite </th>
        <th> Prix unitaire </th>
        <th> Montant(DH) </th>
      </tr>';

foreach($taux as $val) {
        echo"<tr>";
              echo"<td>".$val["reference"]."</td>";
              echo"<td>".   $val["designation"]."</td>";
              echo"<td>".  $val["prix_unitaire"]."</td>";
              echo"<td>". $val["quantite"]."</td>";
               
                if ($val["quantite"]>10){
                   echo "<td>".$val["prix_unitaire"]=$val["prix_unitaire"]*$val[$val["designation"]]."</td>";
                }else {
                    echo "<td>" . $val["prix_unitaire"] . "</td>";
                }
              echo"<td>". $val["quantite"]*$val["prix_unitaire"]  ."</td>";
                echo" </tr>";

}


 echo"</table>";
?>
</body>
</html>
