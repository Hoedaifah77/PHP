

<?php
$link= mysqli_connect("localhost", "Hoedaifah","jemoeder123","challengephp", "8889" );


if (mysqli_connect_errno())
{
    echo mysqli_connect_error();
}


$query="select Productnaam, Omschrijving, Prijs from hondenvoer";
$result= mysqli_query($link,$query);
if ($result== null)
{
    echo "geen result";
}


?>


<!doctype html>
<html lang="en">
<body>

<div id="alles">

<div id="plaatjes">

<img src="nat.jpg" id="nat">
    <br> <br> <br>
<img src="droog.jpg" id="droog">
    <br> <br> <br>
    <img src="vitamines.jpg" id="vitamines">
</div>



<div id="tabel">
<style>



    #plaatjes{
        display: inline-block;
        width: 20px;

    }

    #tabel{
        width: 500px;
        margin-left: 200px;

    }



#hoofdletter{
font-size: 25px;
    font-family: "Arial";


}

table{
    width: 600px;
line-height: 30px;
}

    #alles {
        display: flex;
    }
</style>

<table align="left">
    <?php

    while ($rows= mysqli_fetch_assoc($result)){

        ?>
    <tr>
    <td ><?php echo $rows ["Product"]; ?> </td>

        <tr>

 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>
 <tr> <td>



            <tr>
            <td id="hoofdletter" > <?php echo $rows ["Productnaam"]; ?> </td>
        </tr>
<tr>
    <td ><?php echo $rows ["Omschrijving"]; ?> </td>
        </tr>

        <tr>
    <td ><?php echo $rows ["Prijs"]; ?> </td>
    </tr>

<?php }

?>

</div>

</div>
</table>
</body>
</html>























