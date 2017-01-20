<!DOCTYPE html>
<html>
  <head>
  	<link type='text/css' rel='stylesheet' href='style.css'/>
  	<title>Tip Calculator</title>
  </head>
  <body>
      
  
  	
  	   <?php
  	   	$title = "Tip Calculator";
        echo $title;

  	   ?>


       <br>
<!--          <form action="tipcalculator.php" method="post">
            Tip Percentage <input type = "radio" name="r" value= .18>18%
              <input type="radio" name ="r" value=.20>20%
              <input type="radio" name = "r" value = .25>25%
              <br>
              <input type ="submit" name="submit" value="Load Tip">
        </form> -->

       <br>

        <?php
         $username ="0.00";
         $c = 0;
        // echo $_POST["r"];

    
          if(isset($_POST['Submit1'])){
              $username = $_POST['username'];
              print "TIP:  ";
              print "$";
              print $username * $_POST['r'];  
              print "  ";
              print "TOTAL:  ";
              print "$";
              print ($username * $_POST['r']) + $username;
      
            
         } 
       

       
        ?>
       
       <br>
         <FORM NAME ="form1" METHOD ="post" ACTION ="tipcalculator.php">
      <!--    <input type = "radio" name="r1" value= .18>18%
         <input type="radio" name ="r2" value=.20>20%
        <input type="radio" name = "r3" value = .25>25% -->
         <input type = "radio" name="r" <?php if (isset($r) && $r== .18) echo "checked";?> value= .18> 18%
         <input type = "radio" name="r" <?php if (isset($r) && $r== .20) echo "checked";?> value= .20> 20%
         <input type = "radio" name="r" <?php if (isset($r) && $r== .25) echo "checked";?> value= .25> 25%
        <INPUT TYPE = 'TEXT' Name ='username'  value="<?PHP print $username ; ?>">
        <INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Calculate Tip">
       </FORM>

        <br>
       

      
  </body>
</html>
  	   
  	   	 
  	   	



