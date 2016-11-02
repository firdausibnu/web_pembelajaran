<?php

require_once "feeder.php";

$requests = json_decode(file_get_contents("php://input"));
$q = getQuestions();
$results = array();
$ii = 0;
for($i = 0; $i < count($requests); $i++){
    for($j = 0; $j < count($q); $j++)   {
        if($requests[$i]->id == $q[$j]['id']){
            if($requests[$i]->answer == $q[$j]['answer']){
                $results[$ii] = array("id"=>$requests[$i]->id, "result"=> true);
            }else{
                $results[$ii] = array("id"=>$requests[$i]->id, "result"=> false, "correct_answer" => $q[$j]['answer']);
            }
            $ii++;
        }
    }
}
echo '{"result":' .json_encode($results) . '}';
?>