<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Login</title>

    @include('_partials.backend_css')

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  {{-- <form class="user"> --}}
                    {!! Form::open(['url'=>route('store'),'method'=>'POST','class'=>'user']) !!}
                        <div class="form-group">
                            {{-- <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                            placeholder="Enter Email Address"> --}}
                            {{form::text('email','',['class'=>'form-control','id'=>'exampleInputEmail','placeholder'=>'Enter Email Address'])}}
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{-- <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password"> --}}
                            {{form::password('password',['class'=>'form-control','id'=>'exampleInputPassword','placeholder'=>'Password'])}}
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            {{-- <button class="btn btn-primary btn-block">Login</button> --}}
                            {{form::submit('Login',['class'=>'btn btn-primary btn-block'])}}
                        </div>
                        <hr>
                        <a href="index.html" class="btn btn-google btn-block">
                            <i class="fab fa-google fa-fw"></i> Login with Google
                        </a>
                        <a href="index.html" class="btn btn-facebook btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                        </a>
                    {!! Form::close() !!}

                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="register.html">Create an Account!</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->

</body>

</html>
