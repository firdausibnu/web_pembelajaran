<?php

function getQuestions(){
$questions = array();
$questions[0] = array("id"=> "kumkum10", "question"=>"Apakah kepanjangan dari HTML?", "choices"=>array(
                array("id"=> 1, "value"=>"hyper text markup language"),
                array("id"=> 2, "value"=>"hyper text mark language"),
                array("id"=> 3, "value"=>"hight text mark language"),
                array("id"=> 4, "value"=>"high true mobile language")), 
                "answer"=> 1);
$questions[1] = array("id"=> "kumkum12", "question"=>"Software berikut ini termasuk Software Browser, kecuali….. ", "choices"=>array(
                array("id"=> 1, "value"=>"Netscape Navigator"),
                array("id"=> 2, "value"=>"Opera"),
                array("id"=> 3, "value"=>"Macromedia Dreamweaver"),
                array("id"=> 4, "value"=>"Internet Explorer")), 
                "answer"=>3);
$questions[2] = array("id"=> "kumkum13", "question"=>"Perintah <BR> digunakan untuk ...", "choices"=>array(
                array("id"=> 1, "value"=>"membuat efek tulisan"),
                array("id"=> 2, "value"=>"menulis teks pada baris berikutnya (ganti baris)"),
                array("id"=> 3, "value"=>"memasang background"),
                array("id"=> 4, "value"=>"membuat garis")), 
                "answer"=> 2);
$questions[3] = array("id"=> "kumkum41", "question"=>"Berikut ini adalah Software untuk mendesain Halaman Web (Web Design Software), kecuali…", "choices"=>array(
                array("id"=> 1, "value"=>"Microsoft Frontpage"),
                array("id"=> 2, "value"=>"macromedia dreamweaver"),
                array("id"=> 3, "value"=>"Adobe Image Ready"),
                array("id"=> 4, "value"=>"google chrome")), 
                "answer"=> 4);
$questions[4] = array("id"=> "kumkum15", "question"=>"Apakah browser bawaan dari Sistem Operasi Windows?", "choices"=>array(
                array("id"=> 1, "value"=>"Internet Explorer"),
                array("id"=> 2, "value"=>"Mozilla Firefox"),
                array("id"=> 3, "value"=>"Safari"),
                array("id"=> 4, "value"=>"Opera")), 
                "answer"=>1);
$questions[5] = array("id"=> "kumkum16", "question"=>"Heading HTML mempunyai level ukuran huruf...", "choices"=>array(
                array("id"=> 1, "value"=>"1 sampai 6"),
                array("id"=> 2, "value"=>"1 sampai 7"),
                array("id"=> 3, "value"=>"0 sampai 6"),
                array("id"=> 4, "value"=>"0 sampai 7")), 
                "answer"=> 1);
$questions[6] = array("id"=> "kumkum17", "question"=>"Bahasa pemrograman yang biasa digunakan untuk membuat halaman web adalah . . .", "choices"=>array(
                array("id"=> 1, "value"=>"HTML"),
                array("id"=> 2, "value"=>"www"),
                array("id"=> 3, "value"=>"Internet"),
                array("id"=> 4, "value"=>"Program")), 
                "answer"=>1);
$questions[7] = array("id"=> "kumkum18", "question"=>"Untuk memberi gambar pada  belakang web diatur dengan mengubah nilai atribut …", "choices"=>array(
                array("id"=> 1, "value"=>"body"),
                array("id"=> 2, "value"=>"bgcolor"),
                array("id"=> 3, "value"=>"body background"),
                array("id"=> 4, "value"=>"head")), 
                "answer"=> 3);
$questions[8] = array("id"=> "kumkum19", "question"=>"Tipe file video yang dapat ditampilkan di halaman web berformat . . .", "choices"=>array(
                array("id"=> 1, "value"=>" MP3, OGG, AVI"),
                array("id"=> 2, "value"=>"AVI, MKV, MP4"),
                array("id"=> 3, "value"=>"AVI, MKV, MID"),
                array("id"=> 4, "value"=>"MP3, AVI, OGG")), 
                "answer"=> 2);
$questions[9] = array("id"=> "kumkum101", "question"=>"Untuk membuat garis horizontal didalam web dapat digunakan tag …", "choices"=>array(
                array("id"=> 1, "value"=>"< HR >"),
                array("id"=> 2, "value"=>"< H1 >"),
                array("id"=> 3, "value"=>"< P >"),
                array("id"=> 4, "value"=>"< BR >")), 
                "answer"=>1);
                return $questions;
                }
?>