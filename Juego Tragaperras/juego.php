<?php
session_start();

if(!isset($_SESSION["moneda"]) && !isset($_SESSION["jugar"]))
{
if (!isset($_SESSION["moneda"]))
{
    $_SESSION["moneda"] = 0;
}


if (isset($_REQUEST["jugar"]))
{
    $_SESSION["moneda"]--;
}else {
    $_SESSION["moneda"]++; 
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">s
    <title>Juego Tragaperras</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
   
    <table>
        <tr>
            <td><img src="img/<?php $rand1 = rand(1,5); echo $rand1;?>.jpg"></td>
            <td><img src="img/<?php $rand2 = rand(1,5); echo $rand2;?>.jpg"></td>
            <td><img src="img/<?php $rand3 = rand(1,5); echo $rand3;?>.jpg"></td>            
        </tr>
    </table>
   
    <form action="juego.php" method="post">
    <h1>Introduce 1 €</h1> 
        <button type="submit">Euros Introducidos :
            <?php
            echo $_SESSION["moneda"];
            ?>
        </button>
        <button type="submit" name="jugar">Jugar</button>
            <?php
                if ($rand1 == $rand2 && $rand2 == $rand3)
                {
                    echo "<h1>Premio, has hecho pleno, te llevas 1.000.000 de €</h1>";
                }elseif ($rand1 == $rand2 || $rand2 == $rand3 || $rand1 == $rand3)
                {
                    echo "<h1>Premio, dos de tres, te llevas 500.000 de €</h1>";
                }else{
                    echo "<h1>A la siguiente seguro te toca</h1>";
                }
            ?>

    </form>

</body>


</html>
