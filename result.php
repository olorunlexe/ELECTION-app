
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "met_election";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$querya = mysqli_query($conn,"SELECT * FROM post1");
$totala = mysqli_num_rows($querya);

$querya1 = mysqli_query($conn,"SELECT * FROM post1 WHERE post1='ABATAN MICHAEL'");
$adenoa = mysqli_num_rows($querya1);

$querya2 = mysqli_query($conn,"SELECT * FROM post1 WHERE post1='SAMA ADEWALE'");
$obanoa = mysqli_num_rows($querya2);

$querya3 = mysqli_query($conn,"SELECT * FROM post1 WHERE post1=''");
$voidnoa = mysqli_num_rows($querya3);


$queryb = mysqli_query($conn,"SELECT * FROM post2");
$totalb = mysqli_num_rows($queryb);

$queryb1 = mysqli_query($conn,"SELECT * FROM post2 WHERE post2='OKOH FAITH'");
$adenob = mysqli_num_rows($queryb1);

$queryb2 = mysqli_query($conn,"SELECT * FROM post2 WHERE post2='OWOEYE ABIDEMI'");
$obanob = mysqli_num_rows($queryb2);

$queryb3 = mysqli_query($conn,"SELECT * FROM post2 WHERE post2=''");
$voidnob = mysqli_num_rows($queryb3);



$queryc = mysqli_query($conn,"SELECT * FROM post3");
$totalc = mysqli_num_rows($queryc);

$queryc1 = mysqli_query($conn,"SELECT * FROM post3 WHERE post3='yes'");
$adenoc = mysqli_num_rows($queryc1);

$queryc2 = mysqli_query($conn,"SELECT * FROM post3 WHERE post3='no'");
$obanoc = mysqli_num_rows($queryc2);

$queryc3 = mysqli_query($conn,"SELECT * FROM post3 WHERE post3=''");
$voidnoc = mysqli_num_rows($queryc3);



$queryd = mysqli_query($conn,"SELECT * FROM post4");
$totald = mysqli_num_rows($queryd);

$queryd1 = mysqli_query($conn,"SELECT * FROM post4 WHERE post4='yes'");
$adenod = mysqli_num_rows($queryd1);

$queryd2 = mysqli_query($conn,"SELECT * FROM post4 WHERE post4='no'");
$obanod = mysqli_num_rows($queryd2);

$queryd3 = mysqli_query($conn,"SELECT * FROM post4 WHERE post4=''");
$voidnod = mysqli_num_rows($queryd3);



$querye = mysqli_query($conn,"SELECT * FROM post5");
$totale = mysqli_num_rows($querye);

$querye1 = mysqli_query($conn,"SELECT * FROM post5 WHERE post5='yes'");
$adenoe = mysqli_num_rows($querye1);

$querye2 = mysqli_query($conn,"SELECT * FROM post5 WHERE post5='no'");
$obanoe = mysqli_num_rows($querye2);

$querye3 = mysqli_query($conn,"SELECT * FROM post5 WHERE post5=''");
$voidnoe = mysqli_num_rows($querye3);



$queryf = mysqli_query($conn,"SELECT * FROM post6");
$totalf = mysqli_num_rows($queryf);

$queryf1 = mysqli_query($conn,"SELECT * FROM post6 WHERE post6='yes'");
$adenof = mysqli_num_rows($queryf1);

$queryf2 = mysqli_query($conn,"SELECT * FROM post6 WHERE post6='no'");
$obanof = mysqli_num_rows($queryf2);

$queryf3 = mysqli_query($conn,"SELECT * FROM post6 WHERE post6=''");
$voidnof = mysqli_num_rows($queryf3);



$queryg = mysqli_query($conn,"SELECT * FROM post7");
$totalg = mysqli_num_rows($queryg);

$queryg1 = mysqli_query($conn,"SELECT * FROM post7 WHERE post7='yes'");
$adenog = mysqli_num_rows($queryg1);

$queryg2 = mysqli_query($conn,"SELECT * FROM post7 WHERE post7='no'");
$obanog = mysqli_num_rows($queryg2);

$queryg3 = mysqli_query($conn,"SELECT * FROM post7 WHERE post7=''");
$voidnog = mysqli_num_rows($queryg3);



$queryh = mysqli_query($conn,"SELECT * FROM post8");
$totalh = mysqli_num_rows($queryh);

$queryh1 = mysqli_query($conn,"SELECT * FROM post8 WHERE post8='yes'");
$adenoh = mysqli_num_rows($queryh1);

$queryh2 = mysqli_query($conn,"SELECT * FROM post8 WHERE post8='no'");
$obanoh = mysqli_num_rows($queryh2);

$queryh3 = mysqli_query($conn,"SELECT * FROM post8 WHERE post8=''");
$voidnoh = mysqli_num_rows($queryh3);


?>
<html>
    <head>
        <title>ELECTION RESULT
        </title>
        <style>
            body{border: 10px solid cornflowerblue;
                background-color: darkblue;color: white;
                padding: 20px;
            }
            hr{
                height: 10px;
                background-color: cornflowerblue;
                color: cornflowerblue;
            }
        </style>
    </head>
<body>
<center>
<h1><b>PRESIDENT</b></h1><br>
<h1><?php echo 'ABATAN MICHAEL (MACKAY)='.$adenoa.' votes'; ?>
</h1><br>
<h1>
<?php
echo 'SAMA ADEWALE (SAMA)='.$obanoa.' votes';
?>
</h1><br>
<h1>
<?php
echo 'null and void='.$voidnoa.' votes';
?>
</h1><br>
<h1>
<?php
echo 'Total votes='.$totala.' votes';
?>
</h1>
    
<hr> 
    
<h1><b>VICE PRESIDENT</b></h1><br>
<h1><?php echo 'OKOH FAITH (FAITH)='.$adenob.' votes'; ?>
</h1><br>
<h1>
<?php
echo 'OWOEYE ABIDEMI (T.BABY)='.$obanob.' votes';
?>
</h1><br>
<h1>
<?php
echo 'null and void='.$voidnob.' votes';
?>
</h1><br>
<h1>
<?php
echo 'Total votes='.$totalb.' votes';
?>
</h1>
    
<hr> 
    
<h1><b>GENERAL SECRETARY</b></h1><br>
    <h1>CISSOKO BLESSING (CISSOKO)</h1><br>
<h1><?php echo 'Yes='.$adenoc.' votes'; ?>
</h1><br>
<h1>
<?php
echo 'No='.$obanoc.' votes';
?>
</h1><br>
<h1>
<?php
echo 'null and void='.$voidnoc.' votes';
?>
</h1><br>
<h1>
<?php
echo 'Total votes='.$totalc.' votes';
?>
</h1>    


<hr> 
    
<h1><b>PUBLIC RELATION OFFICER I</b></h1><br>
    <h1>RASAQ OPEYEMI (HORPEYEMI)</h1><br>
<h1><?php echo 'Yes='.$adenod.' votes'; ?>
</h1><br>
<h1>
<?php
echo 'No='.$obanod.' votes';
?>
</h1><br>
<h1>
<?php
echo 'null and void='.$voidnod.' votes';
?>
</h1><br>
<h1>
<?php
echo 'Total votes='.$totald.' votes';
?>
</h1>

<hr> 
    
<h1><b>DIRECTOR OF SOCIALS</b></h1><br>
    <h1>AWOSODE MAYOWA (VOYCE)</h1><br>
<h1><?php echo 'Yes='.$adenoe.' votes'; ?>
</h1><br>
<h1>
<?php
echo 'No='.$obanoe.' votes';
?>
</h1><br>
<h1>
<?php
echo 'null and void='.$voidnoe.' votes';
?>
</h1><br>
<h1>
<?php
echo 'Total votes='.$totale.' votes';
?>
</h1>

 
<hr> 
    
<h1><b>FINANCIAL SECRETARY</b></h1><br>
    <h1>ADEOSUN ABIMBOLA (MR QUIN)</h1><br>
<h1><?php echo 'Yes='.$adenof.' votes'; ?>
</h1><br>
<h1>
<?php
echo 'No='.$obanof.' votes';
?>
</h1><br>
<h1>
<?php
echo 'null and void='.$voidnof.' votes';
?>
</h1><br>
<h1>
<?php
echo 'Total votes='.$totalf.' votes';
?>
</h1>    
<hr> 
    
<h1><b>PUBLIC RELATION OFFICER II</b></h1><br>
    <h1>ONOSEY KINGSLEY (KESS)</h1><br>
<h1><?php echo 'Yes='.$adenog.' votes'; ?>
</h1><br>
<h1>
<?php
echo 'No='.$obanog.' votes';
?>
</h1><br>
<h1>
<?php
echo 'null and void='.$voidnog.' votes';
?>
</h1><br>
<h1>
<?php
echo 'Total votes='.$totalg.' votes';
?>
</h1> 

<hr> 
    
<h1><b>DIRECTOR OF SPORTS</b></h1><br>
    <h1>ODEYEMI OLAWALE EBENEZER</h1><br>
<h1><?php echo 'Yes='.$adenoh.' votes'; ?>
</h1><br>
<h1>
<?php
echo 'No='.$obanoh.' votes';
?>
</h1><br>
<h1>
<?php
echo 'null and void='.$voidnoh.' votes';
?>
</h1><br>
<h1>
<?php
echo 'Total votes='.$totalh.' votes';
?>
</h1>
    
    </center>
    </body>
</html>