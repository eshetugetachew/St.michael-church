<!DOCTYPE html>
<html>
<head>	
       <link rel=" shortcut icon" href="./img/ab.png"/>
    <style>
        body
        {
            background-image: url(./img/maxresdefault.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .nform
        {
          border-radius: 40px;  
        }
    .maform
    {
        padding-left:150px;
        margin:50px;
        color:blue;
        width:70%;
    }
        .form label
        {
            text-decoration: none;
        }
        img
        {
            margin-left: 350px;
            width: 8%;
            height:10%;
            border-radius:120px;
        }
        .form input[type="text"]
        {
            background-color: chartreuse;
            color: black;
        }
        .form input[type="password"]
        {
            background-color:chartreuse;
            color: black;
        }
        .form input[type="radio"]
        {
            background-color: antiquewhite;
            color: black;
        }s
        fieldset
        {
            width: 90%;
        }
    </style>
	<title>register page</title>
</head>
  
	<div class="maform" >
        <img src="./img/michael.jpg" >
<h1 align="center">REGISTER & BE A MEMBER_OF_CHURCH_ HERE!</h1>

<body>
    <div class="nform">
<form action="member.php" method="post">
<fieldset>
<legend>member information</legend>
<ol type="1">
<li><label>Name:<input type="text" name="name" /></label></li>
<li><label>idno :<input type="text" name="idno" /></label></li>
<li><label>Email:<input type="text" name="email" /></label></li>
<li> <label>PASS:<input type="password" name="pass" /></label></li>
<li><label>state:<input type="text" name="state" / ></label></li>
</ol>
</fieldset>
<fieldset>
<legend>SEX</legend>
<input type="radio" name="sex" value="male" >male
<input type="radio"  name="sex" value="female">female
</fieldset>
    <fieldset>
<legend>department</legend>
<ul>
<label> department : <input type="text" name="dept"/></label>
</ul>
</fieldset>
      <fieldset>
    <legend>year</legend>
<ul>
    <li><input type="checkbox" name="year" value="1">1<sup>st</sup></li>
    <li><input type="checkbox" name="year" value="2">2<sup>nd</sup></li>
    <li><input type="checkbox" name="year" value="3">3<sup>rd</sup></li>
     <li><input type="checkbox" name="year" value="4">4<sup>th</sup></li>
        <li><input type="checkbox" name="year" value="5">5<sup>th</sup></li>
</ul>
</fieldset>
 <fieldset>
<legend>photo</legend>
send a photo to be used as online icon(optional):<Br>
<input type="file" name="photo" value="choose file"/>
</fieldset>
<br>
<input align="center" type="submit" value="REGISTER!" name="register" style="background-color:yellow;" />
<input type="submit" value="UPDATE DATA" name="update" style="background-color:yellow;">
 <input type="submit" value="DELETE DATA" name="delete" style="background-color:yellow;">
 <input type="submit" value="VIEW DATA" name="view" style="background-color:yellow;">
      
    </fieldset>
    </form>
    </div>
    </div>
</body>
</html>
