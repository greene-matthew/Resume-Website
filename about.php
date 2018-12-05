<?php 
// code changes title whnever i change a page. 
//TODO change this to a function for reusabilty
 ob_start();
 include("header.php");
 $buffer=ob_get_contents();
 ob_end_clean();
 $title = "About Me";
 $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
 echo $buffer;
?>
<h1>
			About Me
			<span><!-- image replacement --></span>
		</h1>
	
<?php include('footer.php');?>