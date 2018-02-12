<html>

<head>
	<title>Registration Form</title>
<style>
body{
			background: #333;
			font-family:arial;
		}
form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:500px;
		}
fieldset{
        padding: 20px;
      }

label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
input{
        margin-bottom: 20px;
      }
      
textarea{
        width: 146px;
        height: 40px;
        resize: none;
        margin-bottom: 20px;
      }
select{
        width: 146px;
        margin-bottom: 20px;
      }
	</style>

</head>

<body>
	<form action="" method="POST">
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label>Username: </label> <input id="uname" type="text" name="uname" required/><br />
		<label>Email: </label> <input id="email" type="text" name="email" required/><br />
		<label>Password: </label> <input id="pass" type="password" name="pass" required/><br />
		<label>Confirm Password: </label> <input id="cpass" type="password" name="cpass" />
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
      
		<label>Firstname: </label> <input id="fname" type="text" name="fname" /><br />
		<label>Lastname: </label> <input id="lname" type="text" name="lname" /><br />
        <label>D.O.B: </label> <input type="date" name="dob" id="dob" min="1970-01-01" max="<?php echo date("Y-m-d"); ?>" /><br />
		<label>Contact: </label> <input id="contact" type="text" name="contact" /><br />
		<label>Address: </label> <textarea id="address" rows="2" cols="20" name="address" ></textarea><br />
		<label>City: </label> 
      
      <select name="cityselect" id="cityselect" onchange="something()">
        <?php
        require_once('config.inc.php');
        $sql1= mysqli_query($con,"SELECT * FROM refcitymun");
        
        
          
          echo '
               
                <option value="">Please select...</option>';
                while($row = mysqli_fetch_array($sql1)) {
                echo '<option name="city" value="'.$row['id'].'">'.$row['citymunDesc']."</option> ";
                  
                }
          
        ?>
          </select>               
		   <label>Region</label> 
      <select name="regionselect" id="regionselect">
         <?php
        require_once('config.inc.php');
        
        
        
        
      
      
            $sql2= mysqli_query($con,"SELECT * FROM refregion");
             echo '
               
                <option value="">Please select...</option>';
                while($row = mysqli_fetch_array($sql2)) {
                echo '<option name="region" value="'.$row['id'].'">'.$row['regDesc']."</option> ";
                }
          
             
        ?>
         </select>
         
		<label>Zip Code</label> <input id="zip" type="text" name="zip" />
      
                 
	</fieldset>
	<button id="btn1" type="submit" value="Register" name="btn1">Register</button>
	
	</form>
	<br>
	<br>
<a href="login.php">Return</a>
	<script type="text/javascript">
		function submit_form(){
			alert("Thank you for registering...");
		}
	</script>
  

</body>

</html>