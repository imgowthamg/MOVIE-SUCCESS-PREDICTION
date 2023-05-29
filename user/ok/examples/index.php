<?php
require_once __DIR__ . '/../autoload.php';
$sentiment = new \PHPInsight\Sentiment();
if(isset($_POST['sub']))
{
    $string=$_POST['n'];
    $scores = $sentiment->score($string);
    $class = $sentiment->categorise($string);
    if($class=="pos")
    {
        $val=1;
    }
    if($class=="neu")
    {
        $val=2;
    }
    if($class=="neg")
    {
        $val=3;
    }
    echo "String: $string<br />";
    echo "Dominant: $class<br />scores: <br />";
    print_r($scores);
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <input type="text" required="" name="n" />
            <input type="submit" name="sub" value="ok" />
        </form>
    </body>
</html>
