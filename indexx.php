<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">

    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Masuk">

    </form>
</body>
</html> -->
<?php
 // TERNARY OPERATOR hanya bekerja di PHP

//  $page = isset($_GET['page']) ? $_GET['page'] : 1;

//  echo $page;

 // TERNARY OPERATOR yang hanya bekerja di PHP >= 7
//  $page = $_GET['page'] ?? 1;
//  echo $page;

$myMoney  = 10;
$avaibleMoney = $myMoney ?: 'habis';

echo 'uang saya ', $avaibleMoney; 