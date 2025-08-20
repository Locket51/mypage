<?php
$a=2025;
echo $a;
$b=100;
$c=200;
$x=$b+$c;
$y="LOCKET CHATTARAJ";
$day=date("d");
$month=date("M");
?>
<br>
<?php
echo $x;
date_default_timezone_set("Asia/kolkata");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Web Page</title>
    <style>
        .welcome
        {
            background-color: white;
            color:blue;
        }
        
    </style>
</head>
<body>
        <h1>Welcome to My Website <?php echo $a; ?></h1>
        <h1> Dynamic year <span style= "color:red;"><?php echo date("Y");?></span></h1>
        <h1> Dynamic year <?php echo date("y");?></h1>
        <h1> Dynamic year <?php echo date("M");?></h1>
        <h1> Dynamic year <?php echo date("m");?></h1>
        <h1> Dynamic year <?php echo date("d");?></h1>
        <h1> Dynamic year <?php echo date("D");?></h1>
        <h1> Dynamic year <?php echo date ("Y-m-d H:i:s");?></h1>
        <h1>my name is <span style="color:green;"><?php echo $y; ?></span></h1>
        <h1> Today is <span class="welcome"> <?php echo $day." ".$month ;?></span></h1>
        <?php
            for($i=0;$i<=5;$i++)
            {?>
            <br><?php
                echo($i);
            }

            ?>
</body>
</html>