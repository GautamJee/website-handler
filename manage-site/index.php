
    <html>
    <head>
	<title>ADMIN LOGIN PAGE</title>
 <link rel="icon" href="/website-maker/images/logo.png" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1 ,user-scalable=no"/>
</head>
<a href="http://localhost/website-maker/" target="_blank"><img src="/website-maker/images/logo.png"  id="HEADER" class="nav navbar navbar-fixed-top  col-lg-12 " style="padding: 0px;background-color:white;box-shadow: 1px 2px 5px 0px #8d8d8d;height: 150px;width: 100%; " /></a>

<body style="background-color: whitesmoke;">
   
    <section id="BODY" style=" background-color: whitesmoke;margin-top: 10px;padding:5px;">
        
        <div style="padding: 40px;background-color: white;border-radius: 10px">
            <center><h3 style="font-family:Georgia"><b>ADMIN LOGIN</b></h3>
            <div class="col-lg-12" style="border-top:1px solid grey"></div>
            <form action="functions/logincheck.php" method="POST" style="margin-top: 40px">
                <input type="text" placeholder="Username" name="ADMIN_USERNAME" class=" form-control input-lg " autocomplete="off"><br><br>
                <input type="password" placeholder="Password" name="ADMIN_PASSWORD" class=" form-control input-lg" autocomplete="off"><br><br>
                <input type="submit" value="LOGIN" name="LOGIN_SUBMIT" class=" form-control btn input-lg " style="background-color:yellowgreen;font-size: 15px;font-weight: bold">
            </form>
        </div></center>
    </section>
   
     
</body>

</html>
