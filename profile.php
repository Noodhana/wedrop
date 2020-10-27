<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;}

* {box-sizing: border-box;}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: lightgrey;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid black;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.submitbtn {
  background-color:black;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.submitbtn:hover {
  opacity: 1;
}

</style>
</head>
<body>

<form action="/home.php">
  <div class="container">
    <h1>Profile</h1>
    <p>Update your profile.</p>
    <hr>
    
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="Address" id="Address" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw-confirm" id="psw-confirm" required>

    </hr>
    <button type="save" class="submitbtn">Save</button>
  </div>
  
</form>

</body>
</html>
