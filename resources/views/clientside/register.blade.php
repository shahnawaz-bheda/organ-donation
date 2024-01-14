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
  <title>Register</title>
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
  <span class="text-center"><br><h2>Register</h2></span>
<form name="register" action="/login" method="POST">
  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Full Name">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" id="age" placeholder="Enter Age">
  </div>
  <div class="form-group">
    <label for="bloodGroup">Blood Group</label>
    <input type="text" class="form-control" id="bloodGroup" placeholder="Enter Blood Group">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label for="confPass">Confirm Password</label>
    <input type="password" class="form-control" id="confPass" placeholder="Confirm Password">
  </div>
  <div class="form-group">
    <label for="contact">Contact No.</label>
    <input type="text" class="form-control" id="contact" placeholder="Enter Contact No.">
  </div>
  Address
  <textarea class="form-control" rows="4">Type your Address here...</textarea>
  <br>
  <div class="text-center">
  <button type="submit" class="btn btn-style btn-primary">Register</button><br>
  <br>Already have an account? <a href="/login">Login</a><br>
  <a href="/">Back to home</a><br><br>  
</div>
</form>



</div>
  <!-- Template JavaScript -->
  <script src="{{url('clientside/assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('clientside/assets/js/theme-change.js')}}"></script>
  <script src="{{url('clientside/assets/js/bootstrap.min.js')}}"></script>
</body>

</html>