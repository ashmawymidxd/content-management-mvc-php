<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>
<body style="background-color:#eee">
    <div class="card w-50 p-3 my-5" style="margin:auto">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1">
            <li class="nav-item">
                <a class="nav-link active" id="tab-login"  href="<?= URL.'/user/login'?> "
                aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" id="tab-register"  href="<?= URL.'/user/register'?>"
                aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form action="<?= URL.'/user/registerRequest'?>" method="POST">
                    <!-- Name input -->
                    <div class="form-outline mb-4 bg-light">
                        <input type="username" id="loginName" class="form-control" name="name"/>
                        <label class="form-label" for="loginName">Name</label>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4 bg-light">
                        <input type="email" id="loginEmail" class="form-control" name="email"/>
                        <label class="form-label" for="loginEmail">Email</label>
                    </div>
            
                    <!-- Password input -->
                    <div class="form-outline mb-4 bg-light">
                        <input type="password" id="loginPassword" class="form-control" name="password"/>
                        <label class="form-label" for="loginPassword">Password</label>
                    </div>
            
                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                        </div>
                        </div>
            
                        <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                        </div>
                    </div>
            
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                </form>
            </div>
    </div>

    
</body>
</html>