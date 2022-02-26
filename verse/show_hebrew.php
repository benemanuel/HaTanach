<?php
$answer = 0;
$firsttime = 0;
// hebrew translation exists only for Daniel & Ezra
if (($book == "15") | ($book == "27"))
{
$row = 0;
if (($fh = fopen($file, "r")) !== FALSE) {
    while ((($data = fgetcsv($fh, 0, "\t")) !== FALSE)  & ($answer == 0)) {
     $row++;
//  hebrew is double tabbed
    $value = $data[4];
//  echo $key," ", $row," ", $value," ", $answer, PHP_EOL;
    if ($key < $value)
     {
      $answer = 1;
     }
    if ($key == $value)
     {
//      $book = $data[0];
//      $chap = $data[1];
//      $verse = $data[2];
      $text = $data[5];
      if ($firsttime == 0)
      {
       echo '<p>The Hebrew Translation is:</p>';
       $firsttime = 1;
      }
      echo '<p dir="rtl" lang="he">' . $text . PHP_EOL . '</p>';
     }  
    }
    fclose($fh);
 }
}
?>


