
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">  
      <title>FDP</title>
      <link href="style1.css" rel="stylesheet">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://www.w3schools.com/lib/w3.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
   </head>
   
   <body>
      <p>
      
      <div class="box">
         <h3 align="center"><b><u>Faculty Development Program</u></b></h3>         
         
         <form method="post" action="connection.php" autocomplete="on" class="formLayout">
         
            <div class="inputBox">
               <input type="email" required  name="email">
               <label>Enter Email ID:</label>
            </div>
            <div class="inputBox">
               
               <input type="text" required=""  name="fname" class="textbox"  >
                      <label>Enter Faculty Name:</label>                 
                     </div>
            <div class="inputBox" >
               
               <input type="text" required=""  name="lname" class="textbox"  >
                       <label>Enter FDP Title:</label>
            </div>
            
            <div class='input-group date' id='datepicker' style="width: 330px">
                
		               <input type='text' name="durFrom" class="form-control" autofocus required >
                     <label>Duration From:</label> 
                     <div class="input-group-btn">
                        <button class="btn btn-default btn-sm" type="submit">
                           <i class="glyphicon glyphicon-calendar"></i></button>
                     </div>
            </div>
            
            <div class='input-group date' id='datepicker1' style="width: 330px">
                
                     <input type='text' name="durTo" class="form-control" autofocus required >
                     <label>Duration To:</label>
                     <div class="input-group-btn">
                        <button class="btn btn-default btn-sm" type="submit">
                           <i class="glyphicon glyphicon-calendar"></i></button>
                     </div>
		      </div>
		      
	
            <div class="inputBox">
               
               <input type="text" required=""  name="organizedBy" class="textbox">
                      <label>Organized by:</label>
            </div>

            <div class="formGroup">
            
               <input type="File" name="certificate" accept=".pdf" required="" />
               
            </div>
            <br>
            
            <div class="formGroup" >
               <input type="submit" value="Submit">
            </div>
            
            
         </form>
         
         
         
         <div><a href="?">Reload page</a></div>
      
      </div>
</p>
      
      
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script >
	    $(function () {
	        $('#datepicker').datepicker({
	            format: "dd/mm/yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        autoclose: true,
		        changeMonth: true,
		        changeYear: true,
		        orientation: "button"
	        });
       });
       $(function () {
	        $('#datepicker1').datepicker({
	            format: "dd/mm/yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        autoclose: true,
		        changeMonth: true,
		        changeYear: true,
		        orientation: "button"
	        });
	    });
	</script>

      


      
   </body>
   
</html>
