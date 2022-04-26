<?php
$data = [
  'IP' => $_SERVER['REMOTE_ADDR'],
  'time' => date('Y-m-s'), 
  'heading' => 'Hello, PHP!', 
  'message' => 'This page was generated with the PHP programming language',
  'title' => 'Hello, PHP!', 
];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);

#echo json_encode(array_reverse($data));
?>
