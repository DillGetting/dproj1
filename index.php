<?php
require_once "con.php";


?>




<html lang="">
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
        <th>Date</th>
    </tr>

</table>

<div>
<?php

    $ID = $Object = $Value = $Payment = $Date = "";

    if(isset($_POST['Submit'])){

        $ID = $_POST['ID'];
        $Object = $_POST['Object'];
        $Value = $_POST['Value'];
        $Payment = $_POST['Payment'];
        $Date = $_POST['Date'];
        $sql = "insert into Transaction (ID, Object, Value, Payment, Date) values (:ID, :Object, :Value, :Payment, :Date)";
        $con = "";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":ID", $ID);
        $stmt->bindParam(":Object", $Object);
        $stmt->bindParam(":Value", $Value);
        $stmt->bindParam(":Payment", $Payment);
        $stmt->bindParam(":Date", $Date);
        $stmt->execute();

    if(!$stmt)
        echo "Error inserting data";


    else
        echo "SUCCESSFUL POST";
    }
?>
</div>

<div>
<h2>BookOfSecrets</h2>
<form action="index.php" method="post">
    ID: <input type="hidden" name="ID">
    <br><br>
    Object: <input type="text" name="Object">
    <br>
    Value: <input type="text" name="Value">
    <br>
    Payment: <input type="text" name="Payment">
    <br>
    Date: <input type="Date" name="Date">
    <br>
    Button: <input type="submit" name="Submit">
</form>
</div>

</body>
</html>
