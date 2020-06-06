<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Simple Login Form</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
    <style type="text/css">
        html {
            background-color: rgb(104, 134, 118);
        }
        body {
            color: rgb(134, 128, 70);
            background-color: rgb(104, 134, 118);
            font-family: monospace;
        }
        
        .login-form {
            width: 340px;
            margin: 50px auto;
        }
        .login-form form {
            margin-bottom: 15px;
            background: lightgray;
            box-shadow: 0px 2px 2px rgba(185, 89, 89, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }
        
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        
        .btn {        
            font-size: 15px;
            font-weight: bold;
            color: cadetblue;
            background-color: darkslategrey;
        }

        .btn:hover {
            color: deeppink;
            background-color: forestgreen;
        }
    </style>
    </head>
    
    <body>
        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h2 class="text-center" >Log in</h2>
                  
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror    
                </div>

                <div class="form-group">
                    <button type="submit" id="btn-login" class="btn btn-success btn-block">Log in</button>
                </div>
            </form>
        </div>
    </body>
</html>