<?php

$searchKeyword = $_GET['search'];
$page = $_GET['page'];
$totalPages = 10;

echo '<h3>Kamu mencari dengan kata kunci : '. $searchKeyword . '</h3>' ;
echo 'Kamu ada di halaman '. $page . '<br>';

for($i=1; $i <= 10; $i++)
{
    echo '<a href="?search='. $searchKeyword . '&page='. $i . '"> ' . $i . '</a>';
}