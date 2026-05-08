<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height: 80vh;
            background-color: beige;
    display: flex;
    justify-content: center;
    align-items: center;}
    form{
  align-items: center;
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 30px 90px;
    border: 2px solid plum;
    border-radius: 20px;
    box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.3);
}
button{
    padding: 10px 40px;
    border-radius: 10px;
    background-color: cadetblue;
    color: white;
    font-size: 15px;
}
    input{
        padding: 10px;
    }
    
    h1{
        text-align: center;
    }
    </style>
</head>
<body>
    <form>
<h1>
    Login
</h1>
<input type="text" placeholder="Username">
<input type="password" placeholder="password">
<button type="submit">Login</button>
    </form>
</body>
</html>