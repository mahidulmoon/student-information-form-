<!doctype html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Student Information Form</title>
</head>

<body>
<div id="container">
 <h1> Student Registration Form </h1>
 
 <form method="post" action="datainsert.php">
 
  <div class="userinput">
   <label> First Name </label>
   <input type="text" name="firstName" value="" />
  </div>
  
  <div class="userinput">
   <label> Last Name  </label>
   <input type="text" name="lastName" value="" />
  </div>
  
  <div class="userinput">
   <label> Email </label>   
   <input type="text" name="email" value="" />
  </div>
  
  <div class="userinput">
   <label> Gender </label>
   <input type="radio" name="gender" value="male"/> Male
   <input type="radio" name="gender" value="female" /> Female    
  </div>
  
  <div class="userinput">
   <label> Choose Subjects </label>    
   <input type="checkbox" name="subject" value="OOP"/> OOP
   <input type="checkbox" name="subject" value="DB" /> Database
   <input type="checkbox" name="subject" value="Web"/> Web Technologies
   <input type="checkbox" name="subject" value="Android"/> Android Dev. 
  </div>
  
  <div class="userinput">
   <label>Comments </label>
   <textarea name="comments" palceholder="Search here" rows="7" cols="40"></textarea>
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
  
 </form>
 
 </div>
 
</body>

</html>