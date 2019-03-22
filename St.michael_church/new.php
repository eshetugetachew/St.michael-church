<!DOCTYPE html>
<html>
<head>
	<title>My first website</title>	
       <link rel=" shortcut icon" href="./img/ab.png"/>
<style>
    #container
    {
        padding:50px;
        margin:70px;
        color:firebrick;
        background-image: url(./img/maxresdefault.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        width:60%;
    }
       img
        {
            margin-left: 350px;
            width:10%;
            height:10%;
            border-radius:120px;
        }
    </style>
    </head>

<body >
<div id="container">
    <img src="./img/ma.jpg">
<h1 align="center">	CREATE_YOUR_ACCOUNT*</h1>
<a href="index.html"><pre>if you have already an account? login here </pre></a>

<form action="c.php" method="post">
<fieldset>
<legend>CREATE_YOUR ACCOUNT_HERE!</legend>

<label>USERNAME:</label><input style="border-radius:20px;background-color:yellow" type="text" name="name" /><br>
<label >PASSWORD: </label> <input style="border-radius:20px;background-color:yellow"type="password" name="pass"  />

</fieldset>
<BR>
<BR>
<input align="center" type="submit" value="CREATE!!" style="border-radius:20px;background-color:red"/>

</fieldset>
</form>
</body>
</html>
