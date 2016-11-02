<?php

require_once "feeder.php";

$requests = json_decode(file_get_contents("php://input"));
$gQ = getQuestions();
$output = array();
$i = 0;
foreach($gQ as $q){
    $output[$i] = array("id"=>$q['id'], "question"=>$q['question'], "choices"=>$q['choices']);
    $i++;
}
echo '{"result":' .json_encode($output) . '}';
?>