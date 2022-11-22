<?php 
  session_start();
  require 'controllers/authController.php';


  if(isset($_POST['loginButton'])){
    echo '<script>alert("ADDED DATE!'.$userRegisteredTime.'")</script>';
  }
?>
<!DOCTYPE html PUBLIC "-/w3c//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Log-In & sign-up</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./controllers/style.css">
    <style>
      *, *:before, *:after{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
}
body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: -webkit-linear-gradient(left, #4890d8, #114a78);
    font-family: 'Nunito', sans-serif;
}
input, button{
    border:none;
    outline: none;
    background: none;
}
.cont{
    overflow: hidden;
    position: relative;
    width: 900px;
    height: 550px;
    background: #fff  ;
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
}
.form{
    position: relative;
    width: 640px;
    height: 100%;
    padding: 50px 30px;
    -webkit-transition:-webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}
h2{
    width: 100%;
    font-size: 30px;
    text-align: center;
}
label{
    display: block;
    width: 260px;
    margin: 25px auto 0;
    text-align: center;
}
label span{
    font-size: 14px;
    font-weight: 600;
    color: #505f75;
    text-transform: uppercase;
}
input{
    display: block;
    width: 100%;
    margin-top: 5px;
    font-size: 16px;
    padding-bottom: 5px;
    border-bottom: 1px solid rgba(109, 93, 93, 0.4);
    text-align: center;
    font-family: 'Nunito', sans-serif; 
}
input.submit{
    display: block;
    width: 50%;
    margin-left: 25%;
    margin-top: 5px;
    height: 2rem;
    padding-bottom: 5px;
    border-bottom: 1px solid rgba(109, 93, 93, 0.4);
    text-align: center;
    font-family: 'Nunito', sans-serif; 
}
input.submit{
    background-image: linear-gradient(to right, #314755 0%, #26a0da  51%, #314755  100%);
    margin-top: 40px;
    margin-bottom: 30px;
    font-weight: 600;
    padding: 1px 35px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white;            
    box-shadow: 0 0 20px #eee;
    border-radius: 10px;
    display: block;
    font-family: 'Nunito', sans-serif;
}
input.submit:hover{
    background-position: right center;
    color: #fff;
    text-decoration: none;
}
.forgot-pass{
    margin-top: 15px;
    text-align: center;
    font-size: 14px;
    font-weight: 600;
    color: #0c0101;
    cursor: pointer;
}
  
.forgot-pass:hover{
    color: red;
}
  
.social-media{
    width: 100%;
    text-align: center;
    margin-top: 20px;
}
  
.social-media ul{
    list-style: none;
}
  
.social-media ul li{
    display: inline-block;
    cursor: pointer;
    margin: 25px 15px;
}
  
.social-media img{
    width: 40px;
    height: 40px;
}
  
.sub-cont{
    overflow: hidden;
    position: absolute;
    left: 640px;
    top: 0;
    width: 900px;
    height: 100%;
    padding-left: 260px;
    background: #fff;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
}
  
.cont.s-signup .sub-cont{
    -webkit-transform:translate3d(-640px, 0, 0);
            transform:translate3d(-640px, 0, 0);
}
  
.img{
    overflow: hidden;
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 260px;
    height: 100%;
    padding-top: 360px;
}
  
.img:before{
    content: '';
    position: absolute;
    right: 0;
    top: 0;
    width: 900px;
    height: 100%;
    background-image: url(images/background.jpg);
    background-size: cover;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}
  
.img:after{
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.3);
}
  
.cont.s-signup .img:before{
    -webkit-transform:translate3d(640px, 0, 0);
            transform:translate3d(640px, 0, 0);
}
  
.img-text{
    z-index: 2;
    position: absolute;
    left: 0;
    top: 50px;
    width: 100%;
    padding: 0 20px;
    text-align: center;
    color: #fff;
    -webkit-transition:-webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}
  
.img-text h2{
    margin-bottom: 10px;
    font-weight: normal;
}
  
.img-text p{
    font-size: 14px;
    line-height: 1.5;
}
#visit{
  margin-top: 8%;
  font-weight:900px;
}
.cont.s-signup .img-text.m-up{
    -webkit-transform:translateX(520px);
            transform:translateX(520px);
}
  
.img-text.m-in{
    -webkit-transform:translateX(-520px);
            transform:translateX(-520px);
}
  
.cont.s-signup .img-text.m-in{
    -webkit-transform:translateX(0);
            transform:translateX(0);
}
  
  
.sign-in{
    padding-top: 65px;
    -webkit-transition-timing-function:ease-out;
            transition-timing-function:ease-out;
}
  
.cont.s-signup .sign-in{
    -webkit-transition-timing-function:ease-in-out;
            transition-timing-function:ease-in-out;
    -webkit-transition-duration:1.2s;
            transition-duration:1.2s; 
    -webkit-transform:translate3d(640px, 0, 0);
            transform:translate3d(640px, 0, 0);
}
  
.img-btn{
    overflow: hidden;
    z-index: 2;
    position: relative;
    width: 100px;
    height: 36px;
    margin: 0 auto;
    background: transparent;
    color: #fff;
    text-transform: uppercase;
    font-size: 15px;
    cursor: pointer;
}
  
.img-btn:after{
    content: '';
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border: 2px solid #fff;
    border-radius: 30px;
}
  
.img-btn span{
    position: absolute;
    left: 0;
    top: 0;
    display: -webkit-box;
    display: flex;
    -webkit-box-pack:center;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    -webkit-transition:-webkit-transform 1.2s;
    transition: -webkit-transform 1.2s;
    transition: transform 1.2s;
    transition: transform 1.2s, -webkit-transform 1.2s;;
}
  
.img-btn span.m-in{
    -webkit-transform:translateY(-72px);
            transform:translateY(-72px);
}
  
.cont.s-signup .img-btn span.m-in{
    -webkit-transform:translateY(0);
            transform:translateY(0);
}
  
.cont.s-signup .img-btn span.m-up{
    -webkit-transform:translateY(72px);
            transform:translateY(72px);
}
  
.sign-up{
    -webkit-transform:translate3d(-900px, 0, 0);
            transform:translate3d(-900px, 0, 0);
}
  
.cont.s-signup .sign-up{
    -webkit-transform:translate3d(0, 0, 0);
        transform:translate3d(0, 0, 0);
}



    </style>
</head>

<body>
  <div class="cont">
    <div class="form sign-in">
      <form name="f1" method="POST">
        <h2>Sign In</h2>
        <label>
          <span>Email Address</span>
          <input type="text" name="getEmail">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="getPassword">
        </label>
        <input class="submit" type="submit" name="loginButton">
        <p class="forgot-pass">Forgot Password ?</p>
      </form>
      <div class="social-media">
        <p id="visit">Visit Us</p>
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </div>


    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <form id="form1" name="form1" method="post">
          <h2>Sign Up</h2>
          <label>
            <span>Name</span>
            <input type="text" name="username">
          </label>
          <label>
            <span>Email</span>
            <input type="email" name="email">
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password">
          </label>
          <label>
            <span>Confirm Password</span>
            <input type="password" name="confirmPassword">
          </label>
          <label>
            <span>Age</span>
            <input type="text" name="age">
          </label>
          <input type="submit" class="submit" name="button">
        </form>
      </div>
    </div>
  </div>
  <script >
  document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
  );
  </script>
</body>

</html>