<?php
require_once('connect.php');
$resul444 = mysql_query("SELECT CURRENT_DATE as dd");
$cur='';
if($ro444 = mysql_fetch_array($resul444))
  {
$cur=$ro444['dd'];
  }


	if(isset($_POST['submit']))
	{

        $regno=$_POST['regno'];
        //$surname=$_POST['surname'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $mobnum=$_POST['mobnum'];
        $pwd=$_POST['pwd'];
        $dob=$_POST['date1'];
        $fromDate=$dob;
        //$appid=$_POST['appid'];
        $dob=$_POST['regdate'];
        $var = $fromDate;
        $date = str_replace('/', '-', $var);
        $date1=date('Y-m-d', strtotime($date));
//echo $date1;
	}
?>






<?php
	$query="insert into appprime values('0','".$fname."','".$mobile."','".$date1."','".$coursepref."','".$cur."')";

//echo $query;

$result=mysql_query($query);

$query1= "select * from appprime where pmobile='".$mobile."' and dob='".$date1."'";
