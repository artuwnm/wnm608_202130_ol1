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
?>