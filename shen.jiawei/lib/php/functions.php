<?php

function queryAll($q) {
  global $db;
  $res = $db->query($q);
  if ($db->errno) die($db->error);
  $a = [];
  while($e = $res->fetch_object()) {
    $a[] = $e;
  }
  return $a;
}

function sanitize($input) {
  global $db;
  $input = mysqli_escape_string($db, $input);
  return addcslashes($input, "%_");
}

?>