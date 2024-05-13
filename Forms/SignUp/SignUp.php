<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
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

        </div>
        <div class="row form">
       <div class="col-lg-3"></div>
       <div class="col-lg-6">
      <form id="form" action="index.php" method="post">
        <h1>SIGN UP</h1>
        <div class="input-control">
          <label for="username">Username</label>
          <input id="username" name="username" type="text" />
          <div class="error"></div>
        </div>
        <div class="input-control">
          <label for="email">Email</label>
          <input id="email" name="email" type="text" />
          <div class="error"></div>
        </div>
        <div class="input-control">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" />
          <div class="error"></div>
        </div>
        <div class="input-control">
          <label for="password2">Password again</label>
          <input id="password2" name="password2" type="text" />
          <div class="error"></div>
        </div>
        <button type="submit">Sign Up</button>
           <p>Already have an account? <a href="https://quantumewr.com/Lina/Forms/LogIn/">log in instead</a></p>
        </form>
      
    </div>
      <div class="col-lg-3"></div>
   
    </div>
</div>
 Connection failed: php_network_getaddresses: getaddrinfo failed: Name or service not known