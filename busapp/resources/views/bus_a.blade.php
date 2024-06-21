<!-- resources/views/bus_a.blade.php -->

@extends('navbar')

@section('content')
<?php

//   Script utk list kn data drpd table passenger.
//   Bleh letak in between html codes...
//   Guna include "lists.php"; / require "lists.php";

/*require "dbconn.php";

$sql = "SELECT * FROM passenger";
$result = $conn->query($sql);
$bil = 1;
?>

<table border="1">
    <tr header>
        <td>Bil</td>
        <td>Nama/Student ID/etc... (letak apa je yg nk...)</td>
        <td>Nombor Bas</td>
        <td>Masa</td>
    </tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $bil . "</td>
            <td>" . $row["card_id"] . "</td>
            <td>" . $row["bus_id"] . "</td>
            <td>" . $row["masa"] . "</td>
          </tr>";
    $bil++;
}*/
?>

</table>

@endsection
