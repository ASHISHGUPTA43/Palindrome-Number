<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>PALINDROME NUMBER</h1>
    <form method="post">
        Enter the number:
        <input type="text" name="number">
        <input type="submit" value="Get palindrome number">
    </form>
    </center>
</body>
</html>
<?php
if($_POST){
    $n=$_POST["number"];$c;
    $r;
    $palindrome=0;
    $c=$n;
    while($n>0){
        $r=$n%10;
        $palindrome = $r+$palindrome*10;
        $n=floor($n/10);
    }
    if($c==$palindrome){
        echo "<center>palindrome number</center>";
    }
    else{
        echo "<center>not a palindrome number</center>";
    }
}
?>
