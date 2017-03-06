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
$connection = @mysql_connect("localhost", "u797227666_sujit", "9439532222");
$db = mysql_select_db("u797227666_sujit", $connection);
$query = mysql_query("select count(1) FROM users", $connection);
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
$connection = @mysql_connect("localhost", "root", "pass");
$db = mysql_select_db("db", $connection);
$query = mysql_query("select * from users ORDER BY id DESC", $connection);
while ($row = mysql_fetch_array($query)) {
    echo '
    <div class="col s12 m13">
    <div class="card-panel #fafafa grey lighten-5">
    <h3 style="color: #b71c1c">Order No : #'."{$row['id']}".'</h3>';
    echo '<div class="header">Name : '."{$row['Name']}".'</div>';
    echo '<div class="header">Contact No : '."{$row['Contact_No']}".'</div>';
    echo '<div class="header">Email : '."{$row['Email']}".'</div>';
    echo '<div class="header">Address : '."{$row['Address']}".'</div>';
    echo '<table class="bordered">
        <thead>
          <tr>
              <th data-field="id">Medicine</th>
              <th data-field="name">Strength</th>
              <th data-field="price">Quantity</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>'."{$row['Medicine_1']}".'</td>
            <td>'."{$row['Strength_1']}".'</td>
            <td>'."{$row['Quantity_1']}".'</td>
          </tr>
          <tr>
            <td>'."{$row['Medicine_2']}".'</td>
            <td>'."{$row['Strength_2']}".'</td>
            <td>'."{$row['Quantity_2']}".'</td>
          </tr>
          <tr>
            <td>'."{$row['Medicine_3']}".'</td>
            <td>'."{$row['Strength_3']}".'</td>
            <td>'."{$row['Quantity_3']}".'</td>
          </tr>
          <tr>
            <td>'."{$row['Medicine_4']}".'</td>
            <td>'."{$row['Strength_4']}".'</td>
            <td>'."{$row['Quantity_4']}".'</td>
          </tr>
          <tr>
            <td>'."{$row['Medicine_5']}".'</td>
            <td>'."{$row['Strength_5']}".'</td>
            <td>'."{$row['Quantity_5']}".'</td>
          </tr>
        </tbody>
      </table></div></div>';
    // echo '<div class="header"><a href="'."{$row['Image']}".'">Prescription</a> : <img src="'."{$row['Image']}".'"width=320px height=100px/></div>
    //  </div>
    //  </div>';
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/{{JQUERY_VERSION}}/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>
</html>
