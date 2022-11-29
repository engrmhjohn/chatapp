<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to John's Chat Room</title>
    <link rel="stylesheet" href="{{asset('assets')}}/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center bg-info">
                        <h2 class="public_header">Welcome to John's Chat Room</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-body">
                                <img src="{{asset('assets')}}/img/chat.png" alt="" style="width:100%; height:200px;">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <p style="text-align: justify;">To Chat with others just login below, if you are not resistered yet, please register!</p>
                                <a class="btn btn-outline-success" href="{{route('login')}}">Login</a>
                                <a class="btn btn-outline-info" href="{{route('register')}}">Register</a>
                                <br> <br>
                                <span>Tips:</span>
                                <span>After successful login, search "John" to find me.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-2">
            <img src="{{asset('assets')}}/img/sub.jpg" alt="" style="width:100%; height:250px; border-radius:10px;">
            </div>
            <div class="col-md-4 mb-2">
            <img src="{{asset('assets')}}/img/bitm.jpg" alt="" style="width:100%; height:250px; border-radius:10px;">
            </div>
            <div class="col-md-4">
            <img src="{{asset('assets')}}/img/ck.jpg" alt="" style="width:100%; height:250px; border-radius:10px;">
            </div>
        </div>
    </div>
    <script src="{{asset('assets')}}/bootstrap.bundle.min.css"></script>
</body>
</html>