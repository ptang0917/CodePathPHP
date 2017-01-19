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
       <FORM NAME ="form1" METHOD ="POST" ACTION ="tipcalculator.php">
        <INPUT TYPE = 'TEXT' Name ='username'  value=0>
        <!-- <INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Calculate Tip"> -->
       </FORM>

       <br>
         <form method="post">
            Tip Percentage <input type = "radio" name="r" value= .18>18%
              <input type="radio" name ="r" value=.20>20%
              <input type="radio" name = "r" value = .25>25%
              <br>
              <input type ="submit" name="submit" value="Calculate">
        </form>

        <br>
        <?php
       
        // echo $_POST["r"];
          if(isset($_POST['submit'])){
              // if(isset($_POST['r']) and isset($_POST['username'])){
                $_c = isset($_POST['username']); //This is supposed to set the textbox to be checked ? :/
                //echo $_c;
                $_b = isset($_POST['r']); //This suppose to set the radio button to be checkd :/
                //echo $_b;
                $_a = ($_c * $_b)  + $_c; 
                
              // }
              print "Your Tip :" .$_c * $_b;
              print "Your Total :" .$_a;
            
         } 

       
        ?>

      
  </body>
</html>
  	   
  	   	 
  	   	



