<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style>

        .header {
            border-bottom: 1px solid #d3d3d3;
        }
        .image {
            background-color: #d3d3d3;
            margin-top: -5px;
        }

    </style>
</head>
<body class="image">

<?php
$connection = @mysql_connect("localhost", "root", "pass");
$db = mysql_select_db("db", $connection);
$query = mysql_query("select count(1) FROM prescription_upload", $connection);
while ($row = mysql_fetch_array($query)) {

    $total = $row[0];
    echo '<div class="col s12 m13">
    <div class="card-panel #fafafa grey lighten-5">
        <h3 style="color: #b71c1c">Total number of orders : #' . $total.'</h3>
    </div>
</div>';
}
?>

<?php
$con=@mysql_connect("localhost","root","pass");
mysql_select_db("db",$con);
$qry="select * from prescription_upload ORDER BY id DESC";//$qry="select * from images";images
$result=mysql_query($qry,$con);
while($row = mysql_fetch_array($result))
{
    //echo 'Order No: #'."{$row['id']}".'';
    //echo '<img height="300" width="360" src="data:image;base64,'.$row[2].' "> ';
    echo '
    <div class="col s12 m13">
    <div class="card-panel #fafafa grey lighten-5">
    <h3 style="color: #b71c1c">Order No : #'."{$row['id']}".'</h3>';
    echo '<div class="header">Name : '."{$row['Name']}".'</div>';
    echo '<div class="header">Contact No : '."{$row['Contact_No']}".'</div>';
    echo '<div class="header">Email : '."{$row['Email']}".'</div>';
    echo '<div class="header">Address : '."{$row['Address']}".'</div></div></div>';
    echo '<img height="300" width="360" src="data:image;base64,'.$row[6].' "> ';
}
mysql_close($con);
?>

</body>
</html>
