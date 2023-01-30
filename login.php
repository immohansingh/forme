<?php include("connectdb.php") ;  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
            * {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
            font-family: 'Roboto', sans-serif;

        }
        body{
            background-color: rgb(223, 116, 116);
        }
        .container{
         /* display: flex;
         flex-direction: column; */
         background-color: white;
         position: relative;
         justify-content: center;
         margin: 30px auto 0px auto;
         width: 80%;
         align-items: center;
         padding: 10px;
         top:136px ;
        height:380px ;
        /* display:none; */

        }
        .heading{
            margin: 0px;
            width: 90%;
            align-self: center;
            height: 50px;
            /* font-size: medium; */
            padding-left: 5px;
        }
        .email , .password  {
            margin: 10px;
            width: 90%;
            align-self: flex-start;
            height: 50px;
            font-size: medium;
            padding: 5px;
        }
        .forget{
            margin: 0px;
            width: 90%;
            align-self: center;
            height: 50px;
            font-size: medium;
            padding: 20px;
            text-decoration: none;
            color: rgb(197, 193, 193);
            position: relative;
            left: 424px;

        }
        .btn{
            background-color: rgb(247, 160, 0);
            padding: 10px;
            font-size: large;
            /* align-self: ; */
            border: none;
            height:40px ;
            width : 102px ;
            /* display:flex ; */
        }
        /* .end{
            display: grid;
            grid-template-columns: 1fr 1fr;
        } */
        #login{
           /* align-self: flex-start;  */
           margin: 5px;
           display:inline ;
           position: relative;
           left: 427px;
           
        }
        #register{
           /* align-self: flex-end; */
           margin: 5px ;
           display:inline ;
           position: relative;
             left: 439px;
        }
        


    </style>
</head>
<body>
    <div >
       <form class="container" method="POST" action="login1.php">
        <h1 class="heading">Login</h1>
        <input type="email" class="email" placeholder="EMAIL" required="" name="email" >
        <input type="password" class="password" placeholder="PASSWORD" required="" name="password">
        <p ><a href="#" class="forget">FORGET YOUR PASSWORD ?</a></p>
       
            <!-- <label for="register">REGISTER</label> -->
            <!-- <input type="button" id="register">
            <label for="login">LOGIN</label>
            <input type="button" id="login"  > -->
             
             <input type="button" id="register" class="btn" name="register" value="Register"  onclick="redirect()" > 
             <input type="submit" id="login" class="btn" name="login" value="login"  >
            
       </form>
    </div>
    <script>
        function redirect(){
        //    let bttn = document.getElementById("register") ;
             location.href='form.php' ;
        }
    </script>
</body>
</html>

