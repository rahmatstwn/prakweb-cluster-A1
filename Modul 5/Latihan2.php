<?php
$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "aabun", "zevira", "pahri");

echo "Data acak sebelum diurutkan :<br>";
for ($x = 0; $x < count($data); $x++) {
  echo $data[$x] . "<br>";
}
sort($data); 

echo "<br>Data acak Setelah diurutkan :<br>";
for ($x = 0; $x < count($data); $x++) {
  echo $data[$x] . "<br>";
}
