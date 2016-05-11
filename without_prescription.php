<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 ">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

    <style>
        .image {
            color: #000000;
            background-color: #d3d3d3;
            margin-top: -8px;
        }
    </style>

</head>
<body class="image">

<form class="col s12" method="post" >
    <div class="card-panel #ffffff white" >
        <div class="row">
            <div class="input-field col s6" style="width: 100%">
                <input placeholder="Name" name="Name" id="Name" type="text" class="validate" required style="color: #000000">
                <label for="Name"></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6" style="width: 100%">
                <input placeholder="Contact Number" name="Contact_No" id="Contact_No" type="text" class="validate" required length="10" maxlength="10"                           style="color: #000000">
                <label for="Contact_No"></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6" style="width: 100%">
                <input placeholder="Email" name="Email" id="Email" type="email" class="validate" style="color: #000000">
                <label for="Contact_No"></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea placeholder="Address" name="Address" id="Address" class="materialize-textarea" required length="255" style="color:                                     #000000"></textarea>
                <label for="Address"></label>
            </div>
        </div>
    </div>

    <div class="card-panel #ffffff white">
        <div class="row">
            <div class="input-field col s4">
                <input placeholder="1st Medicine" name="Medicine_1" id="Medicine_1" type="text" required class="validate">
                <label for="Medicine_1"></label>
            </div>
            <div class="input-field col s4">
                <input placeholder="Strength" name="Strength_1" id="Strength_1" type="text" class="validate">
                <label for="Strength_1"></label>
            </div>
            <div class="input-field col s4">
                <input placeholder="Quantity" name="Quantity_1" id="Quantity_1" type="text" class="validate">
                <label for="Quantity_1"></label>
            </div>

            <div class="input-field col s4">
                <input placeholder="2nd Medicine" name="Medicine_2" id="Medicine_2" type="text" class="validate">
                <label for="Medicine_2"></label>
            </div>
            <div class="input-field col s4">
                <input placeholder="Strength" name="Strength_2" id="Strength_2" type="text" class="validate">
                <label for="Strength_2"></label>
            </div>
            <div class="input-field col s4">
                <input placeholder="Quantity" name="Quantity_2" id="Quantity_2" type="text" class="validate">
                <label for="Quantity_2"></label>
            </div>

            <div class="input-field col s4">
                <input placeholder="3rd Medicine" name="Medicine_3" id="Medicine_3" type="text" class="validate">
                <label for="Medicine_3"></label>
            </div>
            <div class="input-field col s4">
                <input placeholder="Strength" name="Strength_3" id="Strength_3" type="text" class="validate">
                <label for="Strength_3"></label>
            </div>
            <div class="input-field col s4">
                <input placeholder="Quantity" name="Quantity_3" id="Quantity_3" type="text" class="validate">
                <label for="Quantity_3"></label>
            </div>

            <div class="input-field col s4">
                <input placeholder="4th Medicine" name="Medicine_4" id="Medicine_4" type="text" class="validate">
                <label for="Medicine_4"></label>
            </div>
            <div class="input-field col s4">
                <input placeholder="Strength" name="Strength_4" id="Strength_4" type="text" class="validate">
                <label for="Strength_4"></label>
            </div>
            <div class="input-field col s4">
                <input placeholder="Quantity" name="Quantity_4" id="Quantity_4" type="text" class="validate">
                <label for="Quantity_4"></label>
            </div>

            <div class="input-field col s4">
                <input placeholder="5th Medicine" name="Medicine_5" id="Medicine_5" type="text" class="validate">
                <label for="Medicine_5"></label>
            </div>
            <div class="input-field col s4">
                <input placeholder="Strength" name="Strength_5" id="Strength_5" type="text" class="validate">
                <label for="Strength_5"></label>
            </div>
            <div class="input-field col s4">
                <input placeholder="Quantity" name="Quantity_5" id="Quantity_5" type="text" class="validate">
                <label for="Quantity_5"></label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" value="Submit" name="sumit" style="margin: 20px 0 0                                              10px">Submit</button>
            <?php
            if(isset($_POST['sumit']))
            {
            //if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
            //{
            //    echo "Please select a valid image.";
            //}
            //else
            //{

                $FirstName=$_POST['Name'];
                $phone=$_POST['Contact_No'];
                $email=$_POST['Email'];
                $address=$_POST['Address'];
                $medicine1=$_POST['Medicine_1'];
                $strength1=$_POST['Strength_1'];
                $quantity1=$_POST['Quantity_1'];
                $medicine2=$_POST['Medicine_2'];
                $strength2=$_POST['Strength_2'];
                $quantity2=$_POST['Quantity_2'];
                $medicine3=$_POST['Medicine_3'];
                $strength3=$_POST['Strength_3'];
                $quantity3=$_POST['Quantity_3'];
                $medicine4=$_POST['Medicine_4'];
                $strength4=$_POST['Strength_4'];
                $quantity4=$_POST['Quantity_4'];
                $medicine5=$_POST['Medicine_5'];
                $strength5=$_POST['Strength_5'];
                $quantity5=$_POST['Quantity_5'];




                // $image= addslashes($_FILES['image']['tmp_name']);
                // $name= addslashes($_FILES['image']['name']);
                // $image= file_get_contents($image);
                // $image= base64_encode($image);
                saveimage($FirstName,$phone,$email,$address,$medicine1,$strength1,$quantity1,$medicine2,$strength2,$quantity2,$medicine3,$strength3,$quantity3,$medicine4,$strength4,$quantity4,$medicine5,$strength5,$quantity5);//saveimage($name,$image);
           // }
            }
            //displayimage();
            function saveimage($FirstName,$phone,$email,$address,$medicine1,$strength1,$quantity1,$medicine2,$strength2,$quantity2,$medicine3,$strength3,$quantity3,$medicine4,$strength4,$quantity4,$medicine5,$strength5,$quantity5)
                //function saveimage($name,$image)
            {
                $con=@mysql_connect("localhost","username","password");
                mysql_select_db("u797227666_sujit",$con);
                $qry="insert into users (Name,Contact_No,Email,Address,Medicine_1,Strength_1,Quantity_1,Medicine_2,Strength_2,Quantity_2,Medicine_3,Strength_3,Quantity_3,Medicine_4,Strength_4,Quantity_4,Medicine_5,Strength_5,Quantity_5) values ('$FirstName','$phone','$email','$address','$medicine1','$strength1','$quantity1','$medicine2','$strength2','$quantity2','$medicine3','$strength3','$quantity3','$medicine4','$strength4','$quantity4','$medicine5','$strength5','$quantity5')";
                //$qry="insert into images (name,image) values ('$name','$image')";
                $result=mysql_query($qry,$con);
                if($result)
                {
                    header('Location: http://www.concierge4u.in/ordersuccess.html');//echo "<br/>Image uploaded.";
                }
                else
                {
                    echo "Image not uploaded";//echo "<br/>Image not uploaded.";
                }
            }
            ?>

            <?php
            $connection = @mysql_connect("localhost", "username", "password"); // Establishing Connection with Server
            $db = mysql_select_db("dbname", $connection); // Selecting Database
            //MySQL Query to read data
            $query = mysql_query("SELECT * FROM tablename WHERE id=(SELECT MAX(id) FROM users)", $connection);
            while ($row = mysql_fetch_array($query)) {
                $to = 'riteshhota.2008@gmail.com,'."{$row['Email']}";
//define the subject of the email
                $subject = 'New Order Placed for Concierge4u - Health Care';
//define the message to be sent. Each line should be separated with \n
                $message = '
    <!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <style>
        @media only screen and (max-width: 768px)	{
            #background-table {
                width: 150%;
            }
        }
    </style>
    <style type="text/css">
#outlook a {
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

body {
  width: 100% !important;
}

.ReadMsgBody {
  width: 100%;
}

.ExternalClass {
  width: 100%;
  display: block !important;
}

body {
  background-color: #ececec;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

img {
  outline-width: medium;
  outline-style: none;
  outline-color: initial;
  text-decoration: none;
  display: block;
}

br, strong br, b br, em br, i br {
  line-height: 100%;
}

h1, h2, h3, h4, h5, h6 {
  line-height: 100% !important;
}

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
  color: blue !important;
}

h1 a:active, h2 a:active, h3 a:active, h4 a:active, h5 a:active, h6 a:active {
  color: red !important;
}

h1 a:visited, h2 a:visited, h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
  color: purple !important;
}

table td, table tr {
  border-collapse: collapse;
}

.yshortcuts, .yshortcuts a, .yshortcuts a:link, .yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span {
  color: black;
  text-decoration: none !important;
  border-bottom-width: medium !important;
  border-bottom-style: none !important;
  border-bottom-color: initial !important;
  background-color: transparent !important;
  background-image: none !important;
  background-repeat: repeat !important;
  background-attachment: scroll !important;
  background-position: 0% 0% !important;
}

code {
  white-space: normal;  -epub-word-break: break-all;
  -ms-word-break: break-all;
  word-break: break-all;
}

#background-table {
  background-color: #0e4382;
}

#top-bar {  -webkit-border-radius: 6px 6px 0px 0px;
  border-radius: 6px 6px 0px 0px;
  background-color: #0e4382;
  color: #e7cba3;
}

#top-bar a {
  font-weight: bold;
  color: #0e4382;
  text-decoration: none;
}

#footer {  -webkit-border-radius: 0px 0px 6px 6px;
  border-radius: 0px 0px 6px 6px;
}

.header-content, .footer-content-left, .footer-content-right {
}

.header-content {
  font-size: 12px;
  color: #eeeeee;
  font-weight: bold;
}

.header-content a {
  font-weight: bold;
  color: #e7cba3;
  text-decoration: none;
}

#headline p {
  color: #eeeeee;
  font-size: 18px;
  text-align: left;
  margin-top: 0px;
  margin-bottom: 30px;
}

#headline p a {
  color: #e7cba3;
  text-decoration: none;
}

.article-title {
  font-size: 18px;
  line-height: 24px;
  color: black;
  font-weight: bold;
  margin-top: 0px;
  margin-bottom: 18px;
  font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
}

.article-title a {
  color: #9a9661;
  text-decoration: none;
}

.article-title.with-meta {
  margin-bottom: 0px;
}

.article-meta {
  font-size: 13px;
  line-height: 20px;
  color: #cccccc;
  font-weight: bold;
  margin-top: 0px;
}

.article-content {
  font-size: 13px;
  line-height: 18px;
  color: #444444;
  margin-top: 0px;
  margin-bottom: 18px;
}

.article-content a {
  color: #00707b;
  font-weight: bold;
  text-decoration: none;
}

.article-content img {
  max-width: 100%;
}

.article-content ol, .article-content ul {
  margin-top: 0px;
  margin-bottom: 18px;
  margin-left: 19px;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.article-content li {
  font-size: 13px;
  line-height: 18px;
  color: #444444;
}

.article-content li a {
  color: #00707b;
  text-decoration: underline;
}

.article-content p {
  margin-bottom: 15px;
}

.footer-content-left {
  font-size: 12px;
  line-height: 15px;
  color: #e2e2e2;
  margin-top: 0px;
  margin-bottom: 15px;
  text-align: center;
}

.footer-content-left a {
  color: #e7cba3;
  font-weight: bold;
  text-decoration: none;
}

.footer-content-right {
  font-size: 11px;
  line-height: 16px;
  color: #e2e2e2;
  margin-top: 0px;
  margin-bottom: 15px;
}

.footer-content-right a {
  color: #e7cba3;
  font-weight: bold;
  text-decoration: none;
}

#footer {
  background-color: #0e4382;
  color: #e2e2e2;
}

#footer a {
  color: #e7cba3;
  text-decoration: none;
  font-weight: bold;
}

#permission-reminder {
  white-space: normal;
}

#street-address {
  color: #e7cba3;
  white-space: normal;
}

#background-table tbody tr td .w640 tbody tr .w640 #footer tbody tr .w580 .hide #permission-reminder {
  text-align: center;
}

#background-table tbody tr td .w640 tbody tr #header .w640 tbody tr .w580 #headline p strong a singleline {
  text-align: left;
}

#background-table tbody tr td .w640 tbody tr #header {
  text-align: center;
  color: #eeeeee;
}

table th {
  text-align: left;
  background-color: #ededed;
  background-image: none;
  background-repeat: repeat;
  background-attachment: scroll;
  background-position: 0% 0%;
}

#linkcq:hover {
  font-size: larger;
}

#linkcq:hover {
  font-size: small;
}

#linkcq:hover {
  font-weight: bold;
}

#linkcq:hover {
  font-weight: lighter;
}

#linkcq:hover {
  font-weight: bolder;
}

#linkcq1 {
  color: white;
  text-align: center;
  float: none;
}

</style>
<style>.article-content ol, .article-content ul {   margin: 0 0 0 24px;   padding: 0;   list-style-position: inside;}</style><![endif]-->
  </head>
  <body>
    <table id="background-table" border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody>
        <tr>
          <td align="center" bgcolor="#ececec">
            <table class="w640" style="margin: 0px 10px; width: 640px; height: 688px;"

              border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td style="width: 640px; height: 10px;" class="w640" height="10"

                    width="640"><br>
                  </td>
                </tr>
                <tr>
                  <td class="w640" width="640">
                    <table style="width: 100%; height: 38px;" id="top-bar" class="w640"

                      bgcolor="#00707b" border="0" cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td class="w15" width="15"><br>
                          </td>
                          <td class="w325" align="left" valign="middle" width="350">
                            <div class="header-content"><webversion><!--<img id="customHeaderImage"

                                  label="Header Image" src="http://parsons-ptc.com/images/logo1.133408.png"

                                  class="w325" style="display: inline" align="top"

                                  border="0" width="130">--></webversion></div>
                          </td>
                          <td class="w255" align="right" valign="middle" width="255">
                            <table border="0" cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td valign="middle" width="107">
                                    <div class="header-content"> <forwardtoafriend

                                        lang="en"><!--<img id="customHeaderImage" label="Header Image"

                                          src="http://parsons-ptc.com/images/parsonscm2.png"

                                          class="w325" style="display: inline" align="top"

                                          border="0" width="102">--></forwardtoafriend></div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td class="w15" width="15"><br>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr bgcolor="#00A300">
                  <td class="w640" id="header" align="center" bgcolor="#00A300"

                    height="30" width="640"><span style="font-family: Arial Rounded MT;"><span

                        style="font-weight: bold;;font-size: 20px">Concierge4u</span></span></td>
                </tr>
                <tr id="simple-content-row">
                  <td style="width: 640px; height: 708px; vertical-align: top;"

                    class="w640" bgcolor="#ffffff" width="640">
                    <table style="width: 640px; height: 500px;" class="w640" align="left"

                      border="0" cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td class="w30" height="781" width="30"><br>
                          </td>
                          <td class="w580" width="580"> <repeater> <layout label="Text only">
                                <table style="width: 580px;" class="w580" border="0"

                                  cellpadding="4" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="w580" width="580">
                                        <p class="article-title" align="left"><singleline

                                            label="Title"></singleline></p>
                                        <br>
                                      </td>
                                      <td style="width: 580px; vertical-align: top;"

                                        align="left" valign="top" width="80%"><br>
                                        <div style="text-align: left;">
                                        Dear '."{$row['Name']}".', <!--('."{$row['Email']}".')-->
											<singleline> </singleline></div>
                                        <singleline>
                                          <div class="article-content" align="left"><multiline

                                              label="Description"></multiline><br>
                                            &nbsp;&nbsp;&nbsp;  We have received your order. Thank you for trusting Concierge4u to help you look after your health. Please find below a summary of your order.<br><br><br>

                                            <multiline label="Description"><font

                                                style="font-family: Verdana, Geneva, sans-serif; color:#666766; font-size:13px; line-height:21px">
                                              </font>
                                              <table border="1" width="600" cellpadding="3">
                                                <tbody>
                                            <tr>
												<th><strong>Order No. :</strong></th>
												<td>#'."{$row['id']}".'</td>
											</tr>
											<tr>
												<th style="width: 203.25px;"><strong>Contact No :</strong></th>
												<td style="width: 381.95px;">'."{$row['Contact_No']}".'</td>
											</tr>
											<!--<tr>
												<th><strong>Door No./Flat No. :</strong></th>
												<td>'."{$row['Door_No']}".'</td>
											</tr>-->
											<tr>
												<th><strong>Address :</strong></th>
												<td>'."{$row['Address']}".'</td>
											</tr>

											<!--<tr>
												<th><strong>Landmark :</strong></th>
												<td>'."{$row['Landmark']}".'</td>
											 </tr>
											<tr>
												<th><strong>Mode of Delivery :</strong></th>
												<td>'."{$row['Home_Delivery']}{$row['Collect_From_Shop']}".'</td>
											 </tr>
											 <tr>
												<th><strong>Date (YY-MM-DD) :</strong></th>
												<td>'."{$row['Date']}".'</td>
											</tr>
											<tr>
												<th><strong>Time :</strong></th>
												<td>'."{$row['Time']}".'</td>
											</tr>-->
											<tr>
												<th><strong>Medicine 1 :</strong></th>
												<td>'."{$row['Medicine_1']}".'</td>
											</tr>
											<tr>
												<th><strong>Strength :</strong></th>
												<td>'."{$row['Strength_1']}".'</td>
											</tr>
											<tr>
												<th><strong>Quantity :</strong></th>
												<td>'."{$row['Quantity_1']}".'</td>
											</tr>
											<tr>
												<th><strong>Medicine 2 :</strong></th>
												<td>'."{$row['Medicine_2']}".'</td>
											</tr>
											<tr>
												<th><strong>Strength :</strong></th>
												<td>'."{$row['Strength_2']}".'</td>
											</tr>
											<tr>
												<th><strong>Quantity :</strong></th>
												<td>'."{$row['Quantity_2']}".'</td>
											</tr>
											<tr>
												<th><strong>Medicine 3 :</strong></th>
												<td>'."{$row['Medicine_3']}".'</td>
											</tr>
											<tr>
												<th><strong>Strength :</strong></th>
												<td>'."{$row['Strength_3']}".'</td>
											</tr>
											<tr>
												<th><strong>Quantity :</strong></th>
												<td>'."{$row['Quantity_3']}".'</td>
											</tr>
											<tr>
												<th><strong>Medicine 4 :</strong></th>
												<td>'."{$row['Medicine_4']}".'</td>
											</tr>
											<tr>
												<th><strong>Strength :</strong></th>
												<td>'."{$row['Strength_4']}".'</td>
											</tr>
											<tr>
												<th><strong>Quantity :</strong></th>
												<td>'."{$row['Quantity_4']}".'</td>
											</tr>
											<tr>
												<th><strong>Medicine 5 :</strong></th>
												<td>'."{$row['Medicine_5']}".'</td>
											</tr>
											<tr>
												<th><strong>Strength :</strong></th>
												<td>'."{$row['Strength_5']}".'</td>
											</tr>
											<tr>
												<th><strong>Quantity :</strong></th>
												<td>'."{$row['Quantity_5']}".'</td>
											</tr>
                                          </table>
                                            </multiline> </div>
                                        </singleline></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </layout> <layout label="Text with full-width image">
                                <p class="article-title" align="left"><singleline

                                    label="Title">If you have any queries, do one of the following:</singleline></p>
                                <table style="width: 580px;" class="w580" border="0"

                                  cellpadding="6" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td><br>
                                      </td>
                                      <td style="width: 580px; vertical-align: top;"

                                        class="w580" width="580">
                                        <div class="article-content" align="left">
                                          <ul>
                                          <li><multiline label="Description">
											Call us at 9439532222
												</multiline>
                                          </li>


                                          <li><multiline label="Description">
											Email us at sujit.tour@gmail.com
												</multiline>
                                          </li></ul>

                                          <p> <multiline label="Description">Thank you again for your order. We look forward to serving your health needs for years to come.</multiline> </p>
                                          <p>P. S.: To ensure delivery of our emails to your inbox (not junk folders), please add Concierge4u@concierge4u.in to your address book.</p>
                                          <p> </p>
                                          <table style="width: 295px; height: 37px; text-align: center; margin-left: auto; margin-right: auto;"

                                            border="0">
                                            <tbody>
                                              <tr>
                                                <td style="width: 273px; height: 31px; text-align: center; background-color: #D4FFA3;"><span

                                                    style="font-family: Times New Roman,Times,serif;"><a

                                                      id="linkcq1" target="_blank"

                                                      href="http://www.concierge4u.in/health-care.html">Click
                                                      here to order medicines </a></span></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <p> </p>
                                          <p>Wishing you the best of health!<br>
                                            - Team Concierge4u</p>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </layout></repeater></td>
                          <td class="w30" width="30"><br>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td class="w640" width="640">
                    <table style="width: 640px; height: 19px;" id="footer" class="w640"

                      bgcolor="#043948" border="0" cellpadding="2" cellspacing="0">
                      <tbody>
                        <tr>
                          <td style="width: 640px; height: 19px; vertical-align: middle; background-color: #1F9EC7;"

                            class="w580" height="55" valign="center" width="640">
                            <p class="footer-content-center" style="text-align: center">Copyright &copy; 2009-2015 Concierge4u. All Rights Reserved.<br>
                                Developed by &copy; Ubiquos Inc.</p>
                          </td>
                          <td class="w30" width="1"><br>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td><br>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>

';
//define the headers we want passed. Note that they are separated with \r\n
                $headers = "From: Concierge4u@concierge4u.in\r\nReply-To: Concierge4u@concierge4u.in\r\n" .
                    "Content-type: text/html; charset=UTF-8 \r\n";
//send the email
                $mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
//    echo $mail_sent ? "Mail sent" : "Mail failed";
            }
            ?>

        </div>
    </div>
</form>


</body>
</html>
