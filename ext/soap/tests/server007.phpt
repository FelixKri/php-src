--TEST--
SOAP Server 7: addfunction and getfunctions
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
function Add($x,$y) {
  return $x+$y;
}
function Sub($x,$y) {
  return $x-$y;
}

$server = new soapserver("http://testuri.org");
$server->addfunction(array("Sub","Add"));
var_dump($server->getfunctions());
echo "ok\n";
?>
--EXPECT--
array(2) {
  [0]=>
  string(3) "Sub"
  [1]=>
  string(3) "Add"
}
ok
