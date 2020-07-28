
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">  
      <title>FDP</title>
      <link href="style2.css" rel="stylesheet" type="text/css">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://www.w3schools.com/lib/w3.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">


 

   </head>
   <body>
      <div class="box">
         <h2 align="center"><u><b>Publications</b></u></h2>         

         <form method="post" action="connection1.php" autocomplete="on" class="formLayout">
            
            <div class="inputBox">
               
               <input type="text"  name="fname" required="">
               <label>Enter Faculty Name:</label><br>
            </div>
            <div class="inputBox" >
               
               <input type="text"  name="ptitle" required="">
               <label>Enter Paper Title:</label><br>
            </div>
           
            <div class="inputBox">
         
            <input name="startDate"  required="" id="startDate" class="date-picker" />
            <label>Year of Publication:</label><br>

            </div>

            <div class="formGroup">
            <label>Select the Type of Publication:</label><br>
            <input type="radio" id="journal" name="journal" value="journal" required="">
            <label for="journal">Journal</label>
            <input type="radio" id="conference" name="journal" value="conference" required="">
            <label for="conference">Conference</label><br>
            
            </div>

            <div class="formGroup">
            <label>Select National/International:</label><br>
            <input type="radio" id="national" name="national" value="national" required="">
            <label for="national">National</label>
            <input type="radio" id="inter" name="national" value="international" required="">
            <label for="inter">International</label><br>
            </div>


            <div class="inputBox">
               
               <input type="text" required="" name="jname" >
               <label>Enter Journal Name/Conference Title:</label><br>
            </div>
            
            <div class="inputBox">
               
               <input type="text" required="" name="cindex">
               <label>Enter Citation Index:</label><br>
            </div>

            <div class="inputBox">
               
               <input type="text" required="" name="hindex" >
               <label>Enter h-Index:</label><br>
            </div>

            <div class="inputBox">
               <label>Upload Paper:</label><br>
               <input type="File" required="" name="paper" accept=".pdf" />
            </div>
            
            
            <div class="formGroup" style="text-align:left">
               <input type="submit" value="Submit">
            </div>
            
           
         </form>
         
         
         <div><a href="?">Reload page</a></div>
      </div>
      <script type="text/javascript">
$(function() {
    $('.date-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
    });
});
</script>
<style>
.ui-datepicker-calendar {
    display: none;
    }
</style>

      



   </body>
</html>
