<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 
</head>
<style>
    .login-box {
        border: solid 1px;
        width: 500px;
        padding: 20px;
        box-sizing: border-box;
    }
    body {
        background-color: skyblue;
    }
</style>
<body>

    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">

        @if(Session::has('status'))
        
            <p class="alert alert-danger" role="alert">
                {{ Session::get('message') }}
            </p>
        
        @endif

        <div class="login-box">
            <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="femail" class="form-label">Email</label>
                <input type="email" id="femail" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="fpassword" class="form-label">Password</label>
                <input type="password" id="fpassword" name="password" class="form-control" required>
            </div>       
                    <button class="btn btn-primary form-control" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>