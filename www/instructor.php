<?php
   include('session.php');

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $day = mysqli_real_escape_string($db,$_POST['weekday']);
      $term = mysqli_real_escape_string($db,$_POST['termCode']);

      $sql = "SELECT userID FROM users WHERE name = '$myusername' and userpassword = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      
      if ($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      } else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   <head>
      <title>Welcome Page</title>
      <style>
         body { font-family:sans-serif; }
         label { font-weight:bold; width:100px; }
         .box { border:#666666 solid 1px; }
      </style>
      <script>
	      //This Script will create Term Codes and a function to populate the term code drop down selection
         function getCurrentYear()
	      {
		      var todaysDate = new Date();		//create a date object with current date
		      return todaysDate.getFullYear();	//get the four digit year from the current date
         }
         let termCode = [getCurrentYear() + "01", getCurrentYear() + "02", getCurrentYear() + "03", getCurrentYear() + 1 + "01", getCurrentYear() + 1 + "02", getCurrentYear() + 1 + "03"];
         
         function createTermCodeDropdown() {
	         for (let i=0; i < termCode.length; i++){
		         let output = ("<option value='" + termCode[i]+ "'>" + termCode[i] + "</option>");
			      document.querySelector("#termCode").innerHTML += output; 
				}
	      }
      </script>
   </head>
   <body onLoad="createTermCodeDropdown()">
      <h1>Welcome <?php echo $login_user; ?></h1> 
      <a href = "logout.php">Sign Out</a>
      <div align="center">
         <div style="width:300px; border:solid 1px #333333;" align="left">
            <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Office Hours Input</b></div>
            <div style="margin:30px">
               <form action="" method="post">
                  <label>Term Code: </label>
                  <select name="termCode" id="termCode" required class="box">
                     <option value="">Please select a term</option>
                  </select></br></br>
                  <label>Day of Week: </label>
                  <select name="weekday" required class="box">
                      <option value="Monday" selected>Monday</option>
                      <option value="Tuesday">Tuesday</option>
                      <option value="Wednesday">Wednesday</option>
                      <option value="Thursday">Thursday</option>
                      <option value="Friday">Friday</option>
                  </select><br/><br/>
                  <label>Time Start: </label><input type="time" name="timeStart" min="09:00" max="18:00" required class="box" /><br/><br/>
                  <label>Time End: </label><input type="time" name="timeEnd" min="09:00" max="18:00" required class="box" /><br/><br/>
                  <input type="submit" value=" Add "/><br/>
               </form>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
            </div>
         </div>
      </div>
   </body>
</html>