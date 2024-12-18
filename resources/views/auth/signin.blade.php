<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signin</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <style>
      body {
          background-color: #f8f9fa;
          font-family: 'Arial', sans-serif;
      }
      .container {
          margin-top: 100px;
      }
      .form-container {
          background: #ffffff;
          border: 1px solid #ddd;
          border-radius: 10px;
          padding: 30px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      h3 {
          text-align: center;
          color: #007bff;
          margin-bottom: 20px;
          font-weight: bold;
      }
      .btn-primary {
          width: 100%;
          background-color: #007bff;
          border: none;
          padding: 10px;
          font-size: 16px;
          transition: background-color 0.3s ease;
      }
      .btn-primary:hover {
          background-color: #0056b3;
      }
      .alert {
          margin-top: 10px;
      }
      .form-text {
          color: #6c757d;
          font-size: 12px;
      }
  </style>
    
</head>
<body>
<div class="container" action="">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="padding-top:100px;"> 
            <h3>Signin</h3>
            @if (session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
    @endif
    @if($errors->any())
    @foreach ($errors->all() as $err )
    <div class="alert alert-danger">
      Gagal login!
     </div>
    @endforeach
 @endif
            <form method="POST" action="{{ route('storeSignin')}}"> 
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                @csrf
                <button class="btn btn-primary">Submit</button>
              </form>
              <div class="form-section">
                <p>Don't have an account? <a href="{{ route('signup') }}">signup</a></p>
            </div>
        
        </div>
        <div class="col-md-4"></div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLX15PILFhosVNubq5LC7Qb9DXg" crossorigin="anonymous"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>