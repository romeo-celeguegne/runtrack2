<?php 
$boolean = true;
$entier = 4;
$string = "Je suis en string";
$num = 5.25;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>

    <table>
        <tr>
        <td>Type</td><td>Nom</td><td>Valeur</td>
        </tr>

        <tr> 
        <td> Boolean </td>
        <td> boolean </td>
        <td> <?php echo $boolean;?> </td>
        </tr>
        
        <tr> 
        <td> Entier </td>    
        <td> entier </td>
        <td> <?php echo $entier;?> </td>
        </tr>

        <tr>
        <td> Chaîne de caractères </td>
        <td> string </td>
        <td> <?php echo $string;?> </td>
        </tr>

        <tr>
        <td> Nombre à virgule flottante </td>
        <td> num </td>
        <td> <?php echo $num;?> </td>
        </tr>

    </table>


</body>
</html>