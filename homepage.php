<?php 
// code changes title whnever i change a page. 
//TODO change this to a function for reusabilty
 ob_start();
 include("header.php");
 $buffer=ob_get_contents();
 ob_end_clean();
 $title = "Matthew's Website";
 $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
 echo $buffer;
?>


<h1>
			Matthew's Website
			<span><!-- image replacement --></span>
		</h1>
	
	<ul id="mainMenu">
		<li><a href="./about.php">About Me</a></li>
		<li><a href="#">Forums</a></li>
		<li><a href="#">Links</a></li>
		<li><a href="#">Contact</a></li>
    </ul>
    
    <?php include('footer.php'); ?>