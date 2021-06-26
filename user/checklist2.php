<?php
include "header.php";
?>
<div class="g-fullheight--xs js__parallax-window" style="background: url(img/1920x1080/check.jpg) 50% 0 no-repeat fixed; background-size: cover;">
        </div>
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm g-margin-b-25--xs">
            <div class="row g-hor-centered-row--md">
                <table width="100%" height="80px" bgcolor=" #ff6319"><tr>
<?php
error_reporting(E_ERROR | E_PARSE);
include("connection.php");

?>

<?php
$add=$_POST['add'];
if(isset($_POST['submit']))
{
    
	$sql="INSERT INTO addcheck(id,c_item)VALUES(DEFAULT,'$add')";
	if(mysqli_query($con,$sql))
	{
		echo '<script> alert("Item inserted into checklist")</script>';
		header('Location: checklist2.php');
	}
	else
	{
		echo '<script> alert("Item  NOT inserted into checklist")</script>';
	}
}
	if(!empty($_POST['part']))
	{
		echo"<h2> ESSENTIAL</h2>";
		$checked_count=count($_POST['part']);
		echo "<i>you have selected".$checked_count."&nbsp;option(s)&nbsp;</i><br/>";
		
		foreach($_POST['part'] as $selected)
		{
			echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-".$selected."<p>";
		}
		
	}
	else{
		
	}
	
	//PROTECTION
	
	if(!empty($_POST['part2']))
	{
		echo"<h2>PROTECTION </h2>";
		$checked_count=count($_POST['part2']);
		echo "<i>you have selected".$checked_count."option(s)</i><br/>";
		
		foreach($_POST['part2'] as $selected)
		{
			echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-".$selected."<p>";
		}
		
	}
	else{
		
	}
	
	//KEEPING WARM
	
	if(!empty($_POST['part3']))
	{
		echo'<h2 bgcolor="#D3D3D3"> KEEPING WARM</h2>';
		$checked_count=count($_POST['part3']);
		echo "<i>you have selected".$checked_count."&nbsp;option(s)&nbsp;<br/></i>";
		
		foreach($_POST['part3'] as $selected)
		{
			echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-".$selected."<p>";
		}
		
	}
	else{
		
	}
	
	//LIGHTNING-COMMUNICATION
	
	if(!empty($_POST['part4']))
	{
		echo"<h2> LIGHTNING-COMMUNICATION</h2>";
		$checked_count=count($_POST['part4']);
		echo "<i>you have selected".$checked_count."&nbsp;option(s)&nbsp;<br/></i>";
		
		foreach($_POST['part4'] as $selected)
		{
			echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-".$selected."<p>";
		}
		
	}
	else{
	}
	
	//HYGIENE
	
	if(!empty($_POST['part5']))
	{
		echo"<h2> HYGIENE</h2>";
		$checked_count=count($_POST['part5']);
		echo "<i>you have selected".$checked_count."&nbsp;option(s)&nbsp</i>;<br/>";
		
		foreach($_POST['part5'] as $selected)
		{
			echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-".$selected."<p>";
		}
		
	}
	else{
	}
	
	//FIRST-AID
	if(!empty($_POST['part6']))
	{
		echo"<h2>FIRST-AID </h2>";
		$checked_count=count($_POST['part6']);
		echo "<i>you have selected".$checked_count."&nbsp;option(s)&nbsp;<br/></i>";
		
		foreach($_POST['part6'] as $selected)
		{
			echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-".$selected."<p>";
		}
		
	}
	else{
		
	}
	//SHELTER-TOOLS
	if(!empty($_POST['part7']))
	{
		echo"<h2> SHELTER-TOOLS</h2>"; 
		$checked_count=count($_POST['part7']);
		echo "<i>you have selected".$checked_count."&nbsp;option(s)&nbsp;<br/></i>";
		
		foreach($_POST['part7'] as $selected)
		{
			echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-".$selected."<p>";
		}
		
	}
	else{
		
	}
	

$link = mysqli_connect("localhost", "root", "", "sapds"); 
  
if ($link === false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
} 
  
$sql = "SELECT c_item FROM addcheck"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<h2>PERSONAL CHECKLIST</h2>"; 
        echo "<tr>";  
        echo "<th style='color:#13b1cd'>checklist item<br/><br/></th>"; 
        echo "</tr>"; 
        
        while ($row = mysqli_fetch_array($res)) 
		{ 
            echo "<tr>"; 
            echo "<td>".$row['c_item']."</td>"; 
			echo "<td><a href='deleteex.php?c_item=".$row['c_item']."'>Delete</a></td>";
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
	?>
                    </tr>
                </table>
            </div>
</div>
<?php
include "footer.php";
?>