<?php

$a = "Hello";
$Hello = " Hello world!";

// menamplkan isi variabel $a
//Hello
echo $a . "</br";

//menampilkan isi variabel $a
//Hello world!
echo $Hello . "</br>";

//menampillkan isi variabel dengan nama yang sama seperti isi variabel$a
//isi variabel $a = Hello. jadi, nanti akan menampilkan isi dari variabel $Hello
//Hello world
echo $$a . "</br";
