<?php

// enable debugging
ini_set('display_errors', 'On');
error_reporting(E_ALL);

  $name8 = trim ($_POST["name8"]);
  $name9 = trim ($_POST["name9"]);
  $name10 = trim ($_POST["name10"]);
  $name11 = trim ($_POST["name11"]);
  $name12 = trim ($_POST["name12"]);
  $name1 = trim ($_POST["name1"]);
  $name2 = trim ($_POST["name2"]);
  $name3 = trim ($_POST["name3"]);
  $name4 = trim ($_POST["name4"]);
  $name5 = trim ($_POST["name5"]);
  $namelist = array ($name8, $name9, $name10, $name11, $name12, $name1, $name2, $name3,$name4, $name5);

  $ftemp = "./signup.txt";
  $file1 = fopen("./signup.txt", "w");
  if (0 == filesize($ftemp))
  {
    $newline = "_\r\n";
    for ($a = 0; $a < 8; $a++)
    {
      fwrite ($file1, $newline);
    }
    fclose ($file1);
  }
/*
  $file2 = fopen("./signup.txt", "w");
  $masterlist = array ("", "", "", "", "", "", "", "", "", "");
  for ($n = 0; $n < 8; $n++)
  {
    $masterlist[$n] = fgets($file2);
  }

  for ($x = 0; $x < 8; $x++)
  {
    if ($masterlist[$x] == "\n")
    {
      $masterlist[$x] = $namelist[$x] . "\n";
    }
  }

  for ($y = 0; $y < 8; $y++)
  {
    fwrite ($file2, $namelist[$y]);
  }
  fclose ($file2);*/


function success ()
{
  print <<<PAGE
  <html>
  <head>
  <title> Success </title>
  </head>
  <body>
  <h3> Yay, it worked! </h3>
  </body>
  </html>
PAGE;
}

//success ();

?>