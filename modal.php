<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Login/Sign Up </title>
      
    <link rel="icon" href="images/imglogo.jpeg">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <style>

        body{
            background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/img8.jpeg);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            
        }

        .modal-main{
                color:bisque;
                margin-top:15px;
                margin-left:20px;
        }

        nav{
           font-size: xlarge;
           font-size: 1.35rem;
           font-weight :900;
        }
     
        .login-box{
            max-width: 700px;
            float: none;
            margin: 50px 0;

        }

        .login-right{
            background: white;
            padding: 30px;
            background:rgba(211,211,211,0.25);
            color:white;
            text-decoration-color: white;
        }
        
        .login-left{
            background:white; 
            padding:30px;
            color:black;
            text-decoration-color: black;
        
        }
       


        .form-control{
            background-color: transparent !important;
        }



    .btn.peach-gradient {
    transition: 0.5s ease;
    color: white;
    }

    .btn{
        margin-top:10px;
        width : 200px;
    }

    .btn-rounded{
        border-radius:12px;
        
    }
    .peach-gradient {
    background: linear-gradient(40deg, #ffd86f, #fc6262) !important;
}


a{float: right;height: 40px;line-height: 43px;margin: 3px;padding: 0 22px;display: flex;font-size: 1rem;text-transform: uppercase;font-weight: 700;letter-spacing: 1px;border-radius: 3px;transition: 0.6s ease-in-out;color:black;flex-wrap: nowrap;}

a:hover{
background-color: rgba(219, 96, 116, 0.726);
color: rgb(0, 0, 0);
box-shadow: 5px 10px 15px rgba(236, 68, 68, 0.616);
}



    </style>
    </head>

    <body>
    <section class = "modal-main">
      <nav>
    
          <img src = "images/imglogo.jpeg" width = "90" height = "90" /> B&M
    
          <a href="index.php" >Home</a>
      </nav>   


        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2> Sign Up </h2>
                    <form action = "signup.php" method="post">
                        <div class = "form-group">
                            <label>Username</label>
                            <input type= "text" name="USERNAME" class ="form-control" required>
                        </div>
                        <div class = "form-group">
                            <label>Password</label>
                            <input type= "password" name="PASSWORD" class ="form-control" required>
                        </div>
                        <button class="btn peach-gradient btn-rounded" name="SIGNUP">SIGNUP</button>
                    </form>
</div>

                <div class="col-md-6 login-right">
                    <h2> Login Here </h2>
                    <form action = "login.php" method= "post">
                        <div class = "form-group">
                            <label>Username</label>
                            <input type= "text"  name="USERNAME" class ="form-control" required>
                        </div>
                        <div class = "form-group">
                            <label>Password</label>
                            <input type= "password" name="PASSWORD" class ="form-control" required>
                        </div>
                        <button class="btn peach-gradient btn-rounded" name="LOGIN">LOGIN</button>
                    </form>
</div>
</div>
</div>
</section>
</body>
</html>