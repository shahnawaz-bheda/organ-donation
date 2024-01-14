<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords"
    content="Medick Responsive web template, Bootstrap Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <title>Login</title>
  <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('clientside/assets/css/style-starter.css')}}">
  <style>
  .vertical-center {
  		min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  		min-height: 100vh; /* These two lines are counted as one :-)       */
  		display: flex;
  		align-items: center;
	}
  </style>
</head>

<body class="vertical-center">
  <div class="container">
  <span class="text-center"><h2>Login</h2></span>
              <br>
<!-- <form action="/" method="post" class="signin-form">
            <div class="input-grids text-center">
              
              
              <input type="email" placeholder="Email" name="email" id="w3lSender" class="contact-input"
                required="" /><br><br>
              
              <input type="password" placeholder="Password" name="password" id="w3lSubect" class="contact-input"
                required="" /><br><br>
              
            </div>
            
            <div class="w3l-submit text-center">
            <button type="submit" class="btn btn-style btn-primary">Login</button>
            <br><br>
            Don't have an account? <a href="/register">Register here</a>
            </div>
          </form> -->
          

<form name="login" action="/" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <br>
  <div class="text-center">
  <button type="submit" class="btn btn-style btn-primary">Login</button><br>
  <br>Don't have an account? <a href="/register">Register here</a>
</div>
</form>



</div>
  <!-- Template JavaScript -->
  <script src="{{url('clientside/assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('clientside/assets/js/theme-change.js')}}"></script>
  <script src="{{url('clientside/assets/js/bootstrap.min.js')}}"></script>
</body>

</html>