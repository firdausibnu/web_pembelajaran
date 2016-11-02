<?php

function getQuestions(){
$questions = array();
$questions[0] = array("id"=> "yosh11", "question"=>"Type yang berfungsi untuk menerima masukan berupa teks dari pengguna adalah...", "choices"=>array(
                array("id"=> 1, "value"=>"Checkbox"),
                array("id"=> 2, "value"=>"Submit"),
                array("id"=> 3, "value"=>"Button"),
                array("id"=> 4, "value"=>"Text")), 
                "answer"=> 4);
$questions[1] = array("id"=> "yosh12", "question"=>"Atribut ACTION digunakan untuk...", "choices"=>array(
                array("id"=> 1, "value"=>"Menetukan metode pengiriman yang dipakai"),
                array("id"=> 2, "value"=>"Menentukan alamat halaman web yang akan memproses masukkan dari Form"),
                array("id"=> 3, "value"=>"Menentukan nama form"),
                array("id"=> 4, "value"=>"Internet Explorer")), 
                "answer"=>2);
$questions[2] = array("id"=> "yosh13", "question"=>"Perintah HTML untuk menentukan tebal garis table adalah...", "choices"=>array(
                array("id"=> 1, "value"=>"colspan"),
                array("id"=> 2, "value"=>"rowspan"),
                array("id"=> 3, "value"=>"br"),
                array("id"=> 4, "value"=>"Table border")), 
                "answer"=> 4);
$questions[3] = array("id"=> "yosh14", "question"=>"Perintah HTML untuk membuat teks berjalan adalah...", "choices"=>array(
                array("id"=> 1, "value"=>"Marquee"),
                array("id"=> 2, "value"=>"Form"),
                array("id"=> 3, "value"=>"Body"),
                array("id"=> 4, "value"=>"tr")), 
                "answer"=> 1);
$questions[4] = array("id"=> "yosh15", "question"=>"Apa perintah yang harus dijalankan agar dapat menampilkan table? ", "choices"=>array(
                array("id"=> 1, "value"=>"<table border=2>"),
                array("id"=> 2, "value"=>"<body>"),
                array("id"=> 3, "value"=>"<tr>"),
                array("id"=> 4, "value"=>"CSS")), 
                "answer"=>1);
$questions[5] = array("id"=> "yosh16", "question"=>"Dalam Pembutan HTML, Kita mengenal bahasa yang digunakan. Kata <body>
menunjukkan...", "choices"=>array(
                array("id"=> 1, "value"=>"Kepala dari HTML"),
                array("id"=> 2, "value"=>"Kaki dari HTML"),
                array("id"=> 3, "value"=>"Badan dari HTML"),
                array("id"=> 4, "value"=>"Header and Footer dari HTML")), 
                "answer"=> 3);
$questions[6] = array("id"=> "yosh17", "question"=>"Perintah untuk mengubah warna huruf menjadi merah dalam HTML adalah...", "choices"=>array(
                array("id"=> 1, "value"=>"<img src = “red”>"),
                array("id"=> 2, "value"=>"<font size = “20”>"),
                array("id"=> 3, "value"=>"<bg color = “red”>"),
                array("id"=> 4, "value"=>"<font color = “red”>")), 
                "answer"=>4);
$questions[7] = array("id"=> "yosh18", "question"=>"Perintah untuk menampilakan tanda © adalah...", "choices"=>array(
                array("id"=> 1, "value"=>"&amp;"),
                array("id"=> 2, "value"=>"&circ;"),
                array("id"=> 3, "value"=>"&nbsp"),
                array("id"=> 4, "value"=>"&copy")), 
                "answer"=> 1);
$questions[8] = array("id"=> "yosh19", "question"=>"Tag <textarea> memiliki atribut di bawah ini adalah...", "choices"=>array(
                array("id"=> 1, "value"=>"Method"),
                array("id"=> 2, "value"=>"Action"),
                array("id"=> 3, "value"=>"Name"),
                array("id"=> 4, "value"=>"Value")), 
                "answer"=> 3);
$questions[9] = array("id"=> "yosh20", "question"=>"Untuk membuat sebuah website dibutuhkan bahasa pemrograman yang disebut dengan script. Dan script yang paling mendasar dalam pembuatan web adalah...", "choices"=>array(
                array("id"=> 1, "value"=>"link"),
                array("id"=> 2, "value"=>"HTML"),
                array("id"=> 3, "value"=>"jQuery"),
                array("id"=> 4, "value"=>"css")), 
                "answer"=>1);
                return $questions;
                }
?>