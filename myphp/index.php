<!DOCTYPE html>
<html lang="en">
   <head>
     <title>GFG- Store Data</title>
   </head>
   <body> <center>
    <h1>Storing Form data in Database</h1>
 <form action="insert.php" method="post">
            
<p>
<label for="firstName">First Name:</label>  
<input type="text" name="first_name" id="firstName" placeholder="enter your first name">
</p>
         
<p>
 <label for="lastName">Last Name:</label>
 <input type="text" name="last_name" id="lastName" placeholder="enter your last name">
  </p>

            
<p>
 <label for="Gender">Gender:</label>
    <input type="checkbox" name="gender" id="Gender" value="male">male
    <input type="checkbox" name="gender" id="Gender" value="female">female
  </p>
<p>
 <label for="Address">Address:</label>
 <input type="text" name="address" id="Address" placeholder="enter your address">
   </p>

            
<p>
 <label for="emailAddress">Email Address:</label>
 <input type="text" name="email" id="emailAddress" placeholder="enter your email">
 <br><br>
  password:<input type="password" name="PASSWORD" placeholder= "enter your password " required>
</p>
   <input type="submit" value="Submit">
</form>
</center>
   </body>
</html>