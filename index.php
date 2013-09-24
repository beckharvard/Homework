<!DOCTYPE html>
<html>
<head>
    <?php require_once('date.php'); ?>

    <?php    

    session_start();
    $timezone = $_SESSION['time'];
    	if(isset($_SESSION['views']))
		$_SESSION['views']=$_SESSION['views']+1;
		else
		$_SESSION['views']=1;

	?>	
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function() {
        if("<?php echo $timezone; ?>".length==0){
            var visitortime = new Date();
            var visitortimezone = "GMT " + -visitortime.getTimezoneOffset()/60;
            $.ajax({
                type: "GET",
                url: "timezone.php",
                data: 'time='+ visitortimezone,
                success: function(){
                    location.reload();
                }
            });
        }
    });
</script>

</head>

<body style="background-color:<?=sun() ?>;">
<form onsubmit="doOnSubmit(this)" id="myform" action="timezone.php" >
		<p style="color: gray;"> 
			It is currently 
			
			<? echo date('g:i  A  l, F j, o');?>
			
			in Boston.
	   
	        <?
				//retrieve session data
				echo "Page views = ". $_SESSION['views'];
			?>
 	   </p>
       <p>
    		<input type="submit" name="Submit" value="Submit"/>
       </p>
</form>
</body>
</html>
