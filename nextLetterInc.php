<!-- //ايمان على عبدالهادى محمد
//task2....get the next letter to the input letter -->
<!DOCTYPE html>

<head>
    <title> next letter </title>
</head>
<?php
function nextLetter() //function to get the letter from form and get the next letter
{
    // if (strlen($_GET["fname"])){
    //     echo "please enter only one character!!";
    // }
    $next_ch = ++$_GET["fname"];
    if (strlen($next_ch) > 1) { // to get only the first character
        $next_ch = $next_ch[0];
    }
    echo $next_ch;
}


?>

<body>
    <div id="page-wrap">
        <h1> next letter</h1>
        <form action="" method="get">
            Letter: <input type="character" name="fname">
        </form>
        <div>
            <?php echo '<br />' . nextLetter(); ?>

        </div>
    </div>
</body>

</html>