
<body onload="counting();">
<link rel="stylesheet" href="http://localhost/project/view/style.css">
<?php
session_start();
require_once('conn.php');
$data = new Database();
if(!isset($_SESSION['username']));
if($data->checkRoles($_SESSION['username']))
{
    header("location: https://localhost/project/login_register/login.php");
}
?>

<div class="userh">

<p><a href="">Your order</a></p>
<p><input type="text" placeholder="Wyszukaj zamowienia" name="search"></p>

<div class="userh-content">
<p><a href="">Place order</a></p>
</div>
 
 <a href="https://localhost/project/main_index.php"><button class="buttonu">Logoff</button></a>
<?php
if (isset($_SESSION['username'])) { ?>
<p><a class="login"><?= $_SESSION['username'] ?> </a></p>

 <?php
}   else {
    header("location: https://localhost/project/login_register/login.php ");
}
?>
</div>
<div id="clock">


</div>
<div class="termins">
    
<div class="termins-content">
<p>Term 1 </p>
<p>Oil replacement</p>
<p>Status</p>
<a href="https://localhost/project/main_index.php"><button class="buttont">Take order</button></a>
</div>
<div class="termins-content">
<p>Term 2 </p>
<p>Repair</p>
<p>Status</p>
<a href="https://localhost/project/main_index.php"><button class="buttont">Take order</button></a>
</div>
<div class="termins-content">
<p>Term 3 </p>
<p>Oil Replacement</p>
<p>Status</p>
<a href="https://localhost/project/main_index.php"><button class="buttont">Take order</button></a>
</div>
<div class="termins-content">
<p>Term 4</p>
<p>Cleaning</p>
<p>Status</p>
<a href="https://localhost/project/main_index.php"><button class="buttont">Take order</button></a>
</div>
</div>



<script src="https://localhost/project/scripts/script.js"></script>
</thead>
</table>
<body>