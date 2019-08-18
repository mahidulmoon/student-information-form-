<!doctype html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Update Student Information</title>
</head>

<body>
<div id="container">
 <h1>Update Student Registration </h1>
 
 <form method="post" action="update.php">

      <?php
        include('db_connect.php');
        $id=$_REQUEST['id'];
        $query="SELECT * FROM `infotable` WHERE `id`='$id'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result); {
      ?>
    <div class="userinput">
     <label> Id:<?php echo $row['id']; ?>  </label>
     <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    </div>
 
    <div class="userinput">
     <label> First Name  </label>
     <input type="text" name="firstName" value="<?php echo $row['fname']; ?>" />
    </div>
    
    <div class="userinput">
     <label> Last Name  </label>
     <input type="text" name="lastName" value="<?php echo $row['lname']; ?>" />
    </div>
    
    <div class="userinput">
     <label> Email </label>   
     <input type="text" name="email" value="<?php echo $row['email']; ?>" />
    </div>
    
    <div class="userinput">
     <label> Gender </label>
     <input type="radio" name="gender" value="male" checked /> Male
     <input type="radio" name="gender" value="female" /> Female    
    </div>
    
    <div class="userinput">
     <label> Choose Subjects </label>    
     <input type="checkbox" name="subject" value="OOP" checked /> OOP
     <input type="checkbox" name="subject" value="DB" /> Database
     <input type="checkbox" name="subject" value="Web"/> Web Technologies
     <input type="checkbox" name="subject" value="Android"/> Android Dev. 
    </div>
    
    <div class="userinput">
     <label>Comments </label>
     <textarea name="comments" palceholder="Search here"  rows="7" cols="40"><?php echo $row['comment']; ?></textarea>
    </div>
    
    <div class="userinput">
     <label>City </label>
     <select name="city">
      <option value="Lahore">Lahore</option>
      <option value="Karachi">Karachi</option>
      <option value="Islamabad">Islamabad </option>
     </select>
    </div>
    
    <div style="text-align:center">
     <input type="reset" class="sampleBtn"/>
     <input type="submit" class="sampleBtn"/>   
    </div>
    <?php
      }
    ?>
 </form>
 
 </div>
 
</body>

</html>