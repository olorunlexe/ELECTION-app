<?php
session_start();

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

if(isset($_SESSION['user'])){
    
    echo'
                
        <div id="banner"><center><img src="metbanner.jpg"></center>
        </div>
        
        <form method="post">
        <table width="100%">
        <tr>
            <td><div id="maindiv" align="left">
              
        <div id="title">PRESIDENT</div>
        
        <div id="opt1"><input type="radio" name="E1" value="ABATAN MICHAEL"/><b>ABATAN MICHAEL (MACKAY)</b></div>
        
        <div id="opt2"><input type="radio" name="E1" value="SAMA ADEWALE"/><b>SAMA ADEWALE (SAMA)</b></div>
        
        </div></td>
            
            <td><center>
        <div id="maindiv">
              
        <div id="title">VICE PRESIDENT</div>
        
        <div id="opt1"><input type="radio" name="E2" value="OKOH FAITH"/><b>OKOH FAITH (FAITH)</b></div>
        
        <div id="opt2"><input type="radio" name="E2" value="OWOEYE ABIDEMI"/><b>OWOEYE ABIDEMI (T.BABY)</b></div>
        
        </div>
        
        </center></td>
            
            <td> <div id="maindiv" align="right">
              
        <div id="title">GENERAL SECRETARY</div>
        
        <div id="namespace">CISSOKO BLESSING (CISSOKO)</div>
        
        <div id="opt1"><input type="radio" name="E3" value="yes"/><b>YES</b></div>
        
        <div id="opt2"><input type="radio" name="E3" value="no"/><b>NO</b></div>
        
        </div>
        </td>
            
            
            </tr>
        
        
        
        </table>
        
        <table width="100%">
        <tr>
            <td><div id="maindiv" align="left">
              
        <div id="title">PUBLIC RELATION OFFICER I</div>
    
        <div id="namespace">RASAQ OPEYEMI (HORPEYEMI)</div>
        <div id="opt1"><input type="radio" name="E4" value="yes"/><b>YES</b></div>
        
        <div id="opt2"><input type="radio" name="E4" value="no"/><b>NO</b></div>
        
        </div></td>
            
            <td><center>
        <div id="maindiv">
              
        <div id="title">DIRECTOR OF SOCIALS</div>
		<div id="namespace">AWOSODE MAYOWA (VOYCE)</div>
        
        <div id="opt1"><input type="radio" name="E5" value="yes"/><b>YES</b></div>
        
        <div id="opt2"><input type="radio" name="E5" value="no"/><b>NO</b></div>
        
        </div>
        
        </center></td>
            
            <td> <div id="maindiv" align="right">
              
        <div id="title">FINANCIAL SECRETARY</div>
        
        <div id="namespace">ADEOSUN ABIMBOLA (MR QUIN)</div>
        
        <div id="opt1"><input type="radio" name="E6" value="yes"/><b>YES</b></div>
        
        <div id="opt2"><input type="radio" name="E6" value="no"/><b>NO</b></div>
        
        </div>
        </td>
            
            
            </tr>
        
        
        
        </table>
        
        <table width="100%">
        <tr align="center">
            <td><div id="maindiv" align="left">
              
        <div id="title">PUBLIC RELATION OFFICER II</div>
        
        <div id="namespace"><p>ONOSEY KINGSLEY (KESS)</p></div>
        
        <div id="opt1"><input type="radio" name="E7" value="yes"/><b>YES</b></div>
        
        <div id="opt2"><input type="radio" name="E7" value="no"/><b>NO</b></div>
        
        </div></td>
            
            
            <td><div id="maindiv" align="left">
			<div id="title">DIRECTOR OF SPORT</div>
        
        <div id="namespace"><p>ODEYEMI OLAWALE EBENEZER</p></div>
        
        <div id="opt1"><input type="radio" name="E8" value="yes"/><b>YES</b></div>
        
        <div id="opt2"><input type="radio" name="E8" value="no"/><b>NO</b></div>
        
        </div></td>
            
            
            </tr>
        
        <div id="sub"><input type="submit" name="submit" value="Submit" action="index.php" id="submit"></div>
        
        </table>
        
        
        
        </form>
    ';
}
else{
header("location:index.php");
}


@$a = $_POST['E1'];
@$b = $_POST['E2'];
@$c = $_POST['E3'];
@$d = $_POST['E4'];
@$e = $_POST['E5'];
@$f = $_POST['E6'];
@$g = $_POST['E7'];
@$h = $_POST['E8'];

if (isset($_POST['submit'])){

$sql = mysqli_query($conn,"INSERT INTO post1 (post1)
VALUES
('$a')");

$sql2 = mysqli_query($conn,"INSERT INTO post2 (post2)
VALUES
('$b')");

$sql3 = mysqli_query($conn,"INSERT INTO post3 (post3)
VALUES
('$c')");

$sql4 = mysqli_query($conn,"INSERT INTO post4 (post4)
VALUES
('$d')");
$sql5 = mysqli_query($conn,"INSERT INTO post5 (post5)
VALUES
('$e')");
$sql6 = mysqli_query($conn,"INSERT INTO post6 (post6)
VALUES
('$f')");
$sql7 = mysqli_query($conn,"INSERT INTO post7 (post7)
VALUES
('$g')");
$sql8 = mysqli_query($conn,"INSERT INTO post8 (post8)
VALUES
('$h')");


if (!$sql) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (!$sql2) {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
if (!$sql3) {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}
if (!$sql4) {
    echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
}
if (!$sql5) {
    echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
}
if (!$sql6) {
    echo "Error: " . $sql6 . "<br>" . mysqli_error($conn);
}
if (!$sql7) {
    echo "Error: " . $sql7 . "<br>" . mysqli_error($conn);
}
if (!$sql8) {
    echo "Error: " . $sql8 . "<br>" . mysqli_error($conn);
}

if($sql && $sql2 && $sql3 && $sql4 &&$sql5 && $sql6 && $sql7 && $sql8){
	$user = $_SESSION['user'];
	$query = mysqli_query($conn,"INSERT INTO voters(id,username)VALUES(null,'$user')");
    session_destroy();
	 header('location:index.php');
}

    
}


		





	


mysqli_close($conn);
?>
<html>
    
    <head>
        <title>METEOROLOGY STUDENTS ELECTION 2016
        </title>
        <link rel="stylesheet" href="divstyle.css">
    </head>
    
    
    <body>

        
       
       
        
        
    </body>
    
    
    
    
    
    
    
    
</html>