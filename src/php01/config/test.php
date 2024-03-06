<?php

$test_score=[
  "英語"=>86,
  "数学"=>90,
  "国語"=>73
];

foreach($test_score as $subject=>$score){
  echo$subject."の点数は".$score."点です。"."<br>";
}