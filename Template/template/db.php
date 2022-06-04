<?php
$funcmysli = new mysqli("localhost", "root","");
$bancos=mysqli_query($funcmysli,"SHOW DATABASES");
echo "Os bancos de dados existentes são: "."<br>";
while($ver=mysqli_fetch_array($bancos)){
    echo $ver[0]."<br>";
}