<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel 10 Custom Login and Registration - Register Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>

<link rel="stylesheet" href="assets/css/style1.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<!--<div class="row justify-content-center mt-5">
<div class="col-lg-4">
<div class="card">
<div class="card-header">
<h1 class="card-title text-center">Register</h1>
</div>-->
<div class="login-form">
         <div class="text">
            REGISTER
         </div>

<div class="card-body">
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
{{ Session::get('success') }}
</div>
@endif
<form action="{{ route('register') }}" method="POST">
@csrf
<div class="field">
<input type="text" placeholder="Name" id="name"
class="form-control" name="name"
required autofocus>
@if ($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</span>
@endif
</div>



<div class="field">
<div class="fas fa-envelope"></div>
<input type="text" placeholder="Email"
id="email_address" class="form-control"
name="email" required autofocus>
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
<div class="field">
<div class="fas fa-lock"></div>
<input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password') }}</span>
@endif
</div>

<div class="field">
<div class="checkbox">
</div>
</div>
<div class="mb-3">
<div class="d-grid">
<button>REGISTER</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
