<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    *{
        margin: 0px;
        padding: 0px;
    }
        .sright{
            display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: center;
    gap: 15px;
        }
        .wholepage{    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
background-color: rgba(139, 158, 252, 1);}
.signup{
    display: flex;
    justify-content: center;
   
    gap: 30px;
    background-color: rgba(122,147,242,1);
     padding: 30px 90px;
   
    border-radius: 20px;
    box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.3);
}
.sleft{
        display: flex;
    flex-direction: column;
    gap: 24px;
}
input{padding: 10px 80px 10px 12px;
    border-radius: 20px;
    border: none;}
.image{
    width:15px;
    padding-right: 10px;
}
h2 .sign{
        font-size: 40px;
    margin: 5px;
}
.sbutton{background-color: black;
    color: white;
    text-align: center;
    width:100%;
    padding: 10px;
    font-weight: 600;
    border-radius: 20px;
   }
    .google,.fb{
       
    border: 1px solid black;
    padding: 9px 40px;
    border-radius: 20px;
    }
   </style>
</head>
<body>
 <div class="wholepage">  
    <div class="signup">
        <div class="sleft">
            <h2 class="sign">Sign Up</h2>
<input type="text" placeholder="Full Name">
<input type="email" placeholder="Email Address">
<input type="password" placeholder="Password">
<input type="password" placeholder="Confirm Password">

        </div>
        <div class="sright">
    <div class="sbutton">
        Sign Up
    </div>
    <div class="txt"> Already have an account? <b><a href="login.php">Log in</a></b> </div>
    <div class="txt2">Or</div>
    <div class="google"><img class="image" src="google.png">Sign Up with Google</div>
    <div class="fb"><img class="image" src="fb.png">Sign Up with Facebook</div>
        </div>
    </div>
    </div> 
</body>
</html>