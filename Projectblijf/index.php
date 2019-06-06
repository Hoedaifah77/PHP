

<?php
$link= mysqli_connect("localhost", "Hoedaifah","jemoeder123","challengephp", "8889" );

////////// fout melding als verbinding met Database niet werkt //////
if (mysqli_connect_errno())
{
    echo mysqli_connect_error();
}

///////// Fout melding als verbinding met Database niet werkt //////

$query="select Productnaam, Omschrijving, Prijs from hondenvoer";
$result= mysqli_query($link,$query);
if ($result== null)
{
    echo "geen result";
}

?>







            <?php

            while ($rows= mysqli_fetch_assoc($result)){

                ?>
                <tr>
                    <td ><?php echo $rows ["Product"]; ?> </td>

                <tr>


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






















