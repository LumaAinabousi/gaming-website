<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
               <img id="logoIMG" src="../../HomePage/images/logoP.png ">
          </div>
        </div>
        
        <div class="row form">
            <div id="form">
                <form action="index.php" method="post">
                        <h1>LOG IN</h1>
                        <div class="input-control">
                            <label for="emuser">Username or Email</label>
                            <input id="emuser" name="emuser" type="text" />
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" />
                            <div class="error"></div>
                        </div>
                        <button type="submit">Log in</button>
                </form>
   
  
      <p>Don't have an account yet? <a href="https://quantumewr.com/Lina/Forms/SignUp/">sign up instead</a></p>
     
    </div>
    
    
    Connection failed: Access denied for user 'root'@'localhost' (using password: YES)