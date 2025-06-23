<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/regular.min.css">
    <style>
        body
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .button:active,.employer:active
        {
            border-color: gold;
        }
        input[type=email]::placeholder,
        input[type=password]::placeholder
        {
            color: white;
        }
        .login_header>.login
        {
            display: none;
        }
    </style>
</head>
<body>
    <section style="background-image:url('./img/teamworks.png');height:100vh;background-size: cover;background-position:center">
        <div style="width:40%;height:100%;background-color:darkblue;" class="d-flex justify-content-center align-items-center">
            <div class="container" style="width:90%">
                <div class="d-flex justify-content-between" style="margin-bottom:120px">
                        <button class="user btn border border-info d-flex justify-content-center align-items-center" style="width:220px;height:60px;">
                            <a href="" style="color: gold;text-decoration:none;">User</a>
                        </button>
                        <div class="employer border border-info d-flex justify-content-center align-items-center" style="width:220px;height:60px;">
                            <a href="" style="color: gold;text-decoration:none;">Employer</a>
                        </div>
                </div>
                <div class="login_header">
                    <div class="login">
                        <form action="" style="width: 80%;margin:auto" class="user_login">
                            <div class="form-group mb-3">
                                <label for="email" class="text-light fw-bold mb-2">Email</label>
                                <div class="d-flex border border-info rounded">
                                    <i class="fa-regular fa-user" style="font-size:20pt;color:white;background-color: blue;padding:8px;margin:5px;border-radius:7px"></i>
                                    <input type="email" class="form-control" style="background-color: inherit;border:none" id="email" placeholder="User Email">
                                </div>
                                <small id="emailHelp" class="form-text text-danger">Email Invalid</small>
                            </div>
                            <div class="form-group mb-5">
                                <label for="email" class="text-light fw-bold mb-2">Email</label>
                                <div class="d-flex border border-info rounded">
                                    <i class="fa-solid fa-key" style="font-size:20pt;color:white;background-color: blue;padding:8px;margin:5px;border-radius:7px"></i>
                                    <input type="password" class="form-control" style="background-color: inherit;border:none" id="email" placeholder="Enter Password">   
                                </div>
                                <small id="emailHelp" class="form-text text-danger">Email Invalid</small>
                            </div>
                            <button type="submit" style="background-color:gold" class="btn btn-lg w-100 text-light">Login</button>
                            <div class="d-flex justify-content-center mt-5">
                                <h5 class="text-light">New to Join? </h5>
                                <a href="" style="color: gold;text-decoration:none"> Create an account</a>
                            </div>
                        </form>
                    </div>
                    <div class="login active show">
                        <form action="" style="width: 80%;margin:auto" class="user_login">
                            <div class="form-group mb-3">
                                <label for="email" class="text-light fw-bold mb-2">Email</label>
                                <div class="d-flex border border-info rounded">
                                    <i class="fa-regular fa-user" style="font-size:20pt;color:white;background-color: blue;padding:8px;margin:5px;border-radius:7px"></i>
                                    <input type="email" class="form-control" style="background-color: inherit;border:none" id="email" placeholder="User Email">
                                </div>
                                <small id="emailHelp" class="form-text text-danger">Email Invalid</small>
                            </div>
                            <div class="form-group mb-5">
                                <label for="email" class="text-light fw-bold mb-2">Email</label>
                                <div class="d-flex border border-info rounded">
                                    <i class="fa-solid fa-key" style="font-size:20pt;color:white;background-color: blue;padding:8px;margin:5px;border-radius:7px"></i>
                                    <input type="password" class="form-control" style="background-color: inherit;border:none" id="email" placeholder="Enter Password">   
                                </div>
                                <small id="emailHelp" class="form-text text-danger">Email Invalid</small>
                            </div>
                            <button type="submit" style="background-color:gold" class="btn btn-lg w-100 text-light">Login</button>
                            <div class="d-flex justify-content-center mt-5">
                                <h5 class="text-light">New to Join? </h5>
                                <a href="" style="color: gold;text-decoration:none"> Create an account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./bootstrap-5.3.6-dist/js/bootstrap.min.js"></script>
</body>
</html>