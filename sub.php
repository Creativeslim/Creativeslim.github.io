<!doctype>  
<html>  
<head>  
<title>Login</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: lightgreen ;  
    color: black;  
    font-family: verdana;  
    font-size: 100%  
      
        } 

    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

 
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
} </style>  
</head>  
<body>  
     <center><h1>CREATE LOGIN FORM</h1></center>  
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
<h3>Login Form</h3>  
<form action="" method="POST">  
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Login" name="submit" /> 
</form> 
  
</body>  
</html>