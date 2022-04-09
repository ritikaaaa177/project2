<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $str = "This is ";
    echo $str. "<br>";
    $str_len=strlen($str);
  //  echo "The length of this string is ";
  //  echo $str_len;
    //how to concatenate a string in php ?
    //by using . operator for example
    echo "the length of this string is " .$str_len . " Thank you <br>";
    echo "the length of words in this string are " .str_word_count($str) . " Thank you <br>";
    echo "the reverse of this string is " .strrev($str) . " Thank you <br>";
    echo "the search for is in this string is " .strpos($str , "is") . " Thank you <br>";
    echo "the replaced string is  " .str_replace("is" , "at", $str) . " Thank you <br>";


    ?>
</body>
</html>