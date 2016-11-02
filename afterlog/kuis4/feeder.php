<?php

function getQuestions(){
$questions = array();
$questions[0] = array("id"=> "kumkum10", "question"=>"Tombol yang berfungsi untuk membatalkan pengisian dalam form adalah...", "choices"=>array(
                array("id"=> 1, "value"=>"preset"),
                array("id"=> 2, "value"=>"undo"),
                array("id"=> 3, "value"=>"submit"),
                array("id"=> 4, "value"=>"reset")), 
                "answer"=> 1);
$questions[1] = array("id"=> "kumkum12", "question"=>"Software berikut ini termasuk Software Browser, kecuali….. ", "choices"=>array(
                array("id"=> 1, "value"=>"Netscape Navigator"),
                array("id"=> 2, "value"=>"Opera"),
                array("id"=> 3, "value"=>"Macromedia Dreamweaver"),
                array("id"=> 4, "value"=>"Internet Explorer")), 
                "answer"=>3);
$questions[2] = array("id"=> "kumkum13", "question"=>"Dalam form, isi attribute dari type untuk menerima masukan berupa pilihan dengan hanya satu pilihan dalam satu waktu adalah...", "choices"=>array(
                array("id"=> 1, "value"=>"text"),
                array("id"=> 2, "value"=>"radio"),
                array("id"=> 3, "value"=>"password"),
                array("id"=> 4, "value"=>"checkbox")), 
                "answer"=> 2);
$questions[3] = array("id"=> "kumkum41", "question"=>"Berikut ini adalah Software untuk mendesain Halaman Web (Web Design Software), kecuali…", "choices"=>array(
                array("id"=> 1, "value"=>"Microsoft Frontpage"),
                array("id"=> 2, "value"=>"macromedia dreamweaver"),
                array("id"=> 3, "value"=>"Adobe Image Ready"),
                array("id"=> 4, "value"=>"google chrome")), 
                "answer"=> 4);
$questions[4] = array("id"=> "kumkum15", "question"=>"Berikut ini adalah Bahasa Pemrograman Web, kecuali...", "choices"=>array(
                array("id"=> 1, "value"=>"XML"),
                array("id"=> 2, "value"=>"Javascript"),
                array("id"=> 3, "value"=>"EXL"),
                array("id"=> 4, "value"=>"CSS")), 
                "answer"=>3);
$questions[5] = array("id"=> "kumkum16", "question"=>"Attribute yang digunakan untuk menentukan sumber berkas audio atau video adalah . . .", "choices"=>array(
                array("id"=> 1, "value"=>"preload"),
                array("id"=> 2, "value"=>"muted"),
                array("id"=> 3, "value"=>"controls"),
                array("id"=> 4, "value"=>"src")), 
                "answer"=> 1);
$questions[6] = array("id"=> "kumkum17", "question"=>"Software untuk menulis bahasa HTML yang paling sederhana adalah …", "choices"=>array(
                array("id"=> 1, "value"=>"microsoft access"),
                array("id"=> 2, "value"=>"microsoft word"),
                array("id"=> 3, "value"=>"command prompt"),
                array("id"=> 4, "value"=>"notepad")), 
                "answer"=>4);
$questions[7] = array("id"=> "kumkum18", "question"=>"Berikut ini beberapa model layout yang biasa digunakan dalam mendesain suatu halaman web, kecuali..", "choices"=>array(
                array("id"=> 1, "value"=>"Layout Split"),
                array("id"=> 2, "value"=>"Bottom Index"),
                array("id"=> 3, "value"=>"Left Index"),
                array("id"=> 4, "value"=>"Corner Index")), 
                "answer"=> 4);
$questions[8] = array("id"=> "kumkum19", "question"=>"Untuk memisahkan baris pada web dapat digunakan tag …", "choices"=>array(
                array("id"=> 1, "value"=>" < B >"),
                array("id"=> 2, "value"=>" < BR >"),
                array("id"=> 3, "value"=>" < U >"),
                array("id"=> 4, "value"=>" < HR >")), 
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