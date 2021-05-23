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
<div class="forumh">
 

<?php
if (isset($_SESSION['username'])) { ?>
<h1>Welcome to Forum <?= $_SESSION['username'] ?> </h1></p>
<a href="https://localhost/project/main_index.php"><button class="buttonf">Back</button></a>
 <?php
}   else {
    header("location: https://localhost/project/login_register/login.php ");
}
?>
</div>
<div id="clockf">
<button class="buttonc">Write your issue</button></a>
<button class="buttonc">Contact with support</button></a>
</div>
<div class="questions">
    <h1>your stuff here</h2>
</div>
<div class="answers">
    <h1>others stuffs</h2>
</div>
<div class="answers">
    <h1>others stuffs</h2>
</div>
<div class="answers">
    <h1>others stuffs</h2>
</div>
<div class="answers">
    <h1>others stuffs</h2>
</div>
<div class="answers">
    <h1>others stuffs</h2>
</div>


<script src="https://localhost/project/scripts/script.js"></script>
</thead>
</table>
<body>