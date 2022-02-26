<?php
$answer = 0;
$firsttime = 0;
//$file = 'Editornotes_utf8.txt';

$row = 0;
if (($fh = fopen($file, "r")) !== FALSE) {
    while ((($data = fgetcsv($fh, 0, ",")) !== FALSE)  & ($answer == 0)) {
     $row++;
     $value = $data[3];
//    echo $key," ", $row," ", $value," ", $answer, PHP_EOL;
    if ($key < $value)
     {
      $answer = 1;
     }
    if ($key == $value)
     {
//      $book = $data[0];
//      $chap = $data[1];
//      $verse = $data[2];
      $text = $data[4];
      if ($firsttime == 0)
      {
       echo '<p>The Editor\'s Comments are:</p>';
       $firsttime = 1;
      }
      echo '<p dir="rtl" lang="he">' . $text . PHP_EOL . '</p>';
     }
    }
    fclose($fh);
}
?>
