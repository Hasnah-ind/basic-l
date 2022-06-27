<?php

if(empty(trim($_GET['name']))){
    header('Location: http://localhost/belajar/');
}

echo 'Selamat datang, ' , $_GET['name'];