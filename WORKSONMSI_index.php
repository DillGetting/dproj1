<?php
require_once "con.php";


?>




<html>
<head>
    <title>proj 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="flexContainer">


</div>
<h2>proj1dil</h2>

<table>Transaction
    <tr>
        <th>ID</th>
        <th>Object</th>
        <th>Value</th>
        <th>Payment</th>
    </tr>

</table>

<div>
    <?php
    $ID = $Object = $Value = $Payment = "";

    if (isset($_POST['Submit'])) {
//        $ID = $_POST['ID'];
        $Object = $_POST['Object'];
        $Value = $_POST['Value'];
        $Payment = $_POST['Payment'];

        $sql ="insert into Transaction (Object, Value, Payment) values (:Object, :Value, :Payment)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":Object", $Object);
        $stmt->bindParam(":Value", $Value);
        $stmt->bindParam(":Payment", $Payment);
        $stmt->execute();

        if(!$stmt) {
            echo "Error inserting data";

        }
        else {
            echo "SUCCESSFUL POST";
        }
    }
    ?>


</div>
<h2>BookOfSecrets</h2>
<form action="index.php" method="post">

    Object: <input type="text" name="Object">
    <br>
    Value: <input type="text" name="Value">
    <br>
    Payment: <input type="text" name="Payment">
    <br>
    Button: <input type="submit" name="Submit">
</form>


</body>
</html>

