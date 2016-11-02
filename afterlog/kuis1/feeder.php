<?php

function getQuestions() {
    $questions = array();
    $questions[0] = array("id" => "yosh1", "question" => "Apa kepanjangan dari HTML...", "choices" => array(
            array("id" => 1, "value" => "World Wide Web"),
            array("id" => 2, "value" => "Word Wide Web"),
            array("id" => 3, "value" => "Wide World Web"),
            array("id" => 4, "value" => "WAN World Web")),
        "answer" => 1);
    $questions[1] = array("id" => "yosh2", "question" => "Kepanjangan dari HTML adalah ...", "choices" => array(
            array("id" => 1, "value" => "HyperText Mail Language"),
            array("id" => 2, "value" => "HyperText Markup Language"),
            array("id" => 3, "value" => "HyperTeam Markup Language"),
            array("id" => 4, "value" => "HyperText Mode Language")),
        "answer" => 2);
    $questions[2] = array("id" => "yosh3", "question" => "Perintah untuk mengosongkan kolom pada HTML adalah...", "choices" => array(
            array("id" => 1, "value" => "tr"),
            array("id" => 2, "value" => "br"),
            array("id" => 3, "value" => "&nsp"),
            array("id" => 4, "value" => "&nbsp")),
        "answer" => 4);
    $questions[3] = array("id" => "yosh4", "question" => "Perintah untuk mengganti baris pada HTML adalah...", "choices" => array(
            array("id" => 1, "value" => "tr"),
            array("id" => 2, "value" => "td"),
            array("id" => 3, "value" => "br"),
            array("id" => 4, "value" => "p")),
        "answer" => 3);
    $questions[4] = array("id" => "yosh5", "question" => "Berikut ini adalah Bahasa Pemrograman Web, kecuali...", "choices" => array(
            array("id" => 1, "value" => "XML"),
            array("id" => 2, "value" => "Javascript"),
            array("id" => 3, "value" => "EXL"),
            array("id" => 4, "value" => "CSS")),
        "answer" => 3);
    $questions[5] = array("id" => "yosh6", "question" => "Heading HTML mempunyai level ukuran huruf...", "choices" => array(
            array("id" => 1, "value" => "1 sampai 6"),
            array("id" => 2, "value" => "1 sampai 7"),
            array("id" => 3, "value" => "0 sampai 6"),
            array("id" => 4, "value" => "0 sampai 7")),
        "answer" => 1);
    $questions[6] = array("id" => "yosh7", "question" => "Software untuk menulis bahasa HTML yang paling sederhana adalah...", "choices" => array(
            array("id" => 1, "value" => "microsoft access"),
            array("id" => 2, "value" => "microsoft word"),
            array("id" => 3, "value" => "command prompt"),
            array("id" => 4, "value" => "notepad")),
        "answer" => 4);
    $questions[7] = array("id" => "yosh8", "question" => "Untuk memberi gambar pada  belakang web diatur dengan mengubah nilai atribut...", "choices" => array(
            array("id" => 1, "value" => "body"),
            array("id" => 2, "value" => "bgcolor"),
            array("id" => 3, "value" => "body background"),
            array("id" => 4, "value" => "head")),
        "answer" => 3);
    $questions[8] = array("id" => "yosh9", "question" => "Untuk memisahkan baris pada web dapat digunakan tag...", "choices" => array(
            array("id" => 1, "value" => " < B >"),
            array("id" => 2, "value" => " < BR >"),
            array("id" => 3, "value" => " < U >"),
            array("id" => 4, "value" => " < HR >")),
        "answer" => 2);
    $questions[] = array("id" => "yosh10", "question" => "Untuk membuat garis horizontal didalam web dapat digunakan tag...", "choices" => array(
            array("id" => 1, "value" => "< HR >"),
            array("id" => 2, "value" => "< H1 >"),
            array("id" => 3, "value" => "< P >"),
            array("id" => 4, "value" => "< BR >")),
        "answer" => 1);
    return $questions;
}

?>