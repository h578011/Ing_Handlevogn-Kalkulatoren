﻿<?php
$servername = "localhost";
$database = "handlevognkalkulator";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO kiwiprices (barcode, productcompany, producttype, productname, price) VALUES ('21234566', 'firstprice', 'vegetable',' potatoe', '18')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

/*
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>HK/InputDatabase</title>
    <link href="StyleSheet.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <div id="nav-placeholder">
    </div>
    <script>
        $(function () {
            $("#nav-placeholder").load("https://raw.githubusercontent.com/h578011/Ing_Handlevogn-Kalkulatoren/master/WebSite1/nav.html");
        });
    </script>

    <h1>Input</h1>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <form id="myForm" action="POST" target=" no-target">
        <input id="vareNavnInput" placeholder="Hva er varens navn?" name="vareNavn" /> <br> <br>
        <input id="vareStrekkodeInput" placeholder="Hva er varens strekkode?" name="vareStrekkode" /> <br> <br>
        <input id="varePrisInput" placeholder="Hva er varens pris?" name="varePris" /> <br> <br>
        <button id="formSubmit" type="submit">Klikk her for å skrive til database</button>
    </form>

    <iframe src="#" id="no-target" name="no-target" style="visibility:hidden"></iframe>
    <script>
        $('myForm').on('submit', function () {
            var baseURL = "https://docs.google.com/forms/d/e/1FAIpQLScay6E42LjCoYzZ-4KzLp6Q0jf4GKuAfX81-ojLo1SLAo267g/formResponse?";
            var submitRef = "&submit=M2UYVd";
            var vareNavn = encodeURIComponent($("#vareNavnInput").val());
            var vareNavnID = "entry.622058584";
            var vareStrekKode = encodeURIComponent($("#vareStrekkodeInput").val());
            var vareStrekKodeID = "entry.554778713";
            var varePris = encodeURIComponent($("#varePrisInput").val());
            var varePrisID = "entry.578785986";

            var submitURL = (baseURL + vareNavnID + "=" + vareNavn + "&" + vareStrekKodeID + "=" + vareStrekKode + "&" + varePrisID + "=" + varePris + submitRef);
            console.log(submitURL);

            $(this)[0].action = submitURL;
            $('#vareNavnInput').addClass('active').val("Thank Tou!");
        });
    </script>
</body>
</html>
*/
?>