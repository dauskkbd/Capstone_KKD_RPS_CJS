<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Login</title>
    <style>
        body{
            font-family: "Poppins", sans-serif;
            background-color: #D9D0C1
        }
        #submit{
            font-family: "Londrina Solid", sans-serif;
            background-color: #8C564A;
        }
        #div_con{
            padding-top: 100px;
        }
        #submit{
            color: #1d1c1a;
            font-family: "Londrina Solid", sans-serif;
            font-size: 20px;
        }
        #login{
            font-family: "Londrina Solid", sans-serif;
            font-size: 40px;
        }
        
    </style>
</head>

<body>
    @include("layouts/navbar")

    <section class="vh-100 gradient-custom">
        <div class="container h-100" id="div_con">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5" >

                                <h2 class="fw-bold mb-2 text-uppercase" id="login">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>
                                <form action="/login" method="POST">
                                    @csrf
                                    <div class="form-outline form-white mb-4" data-mdb-input-init>
                                        <input type="email" id="typeEmailX" class="form-control " name="email"  />
                                        <label class="form-label" for="typeEmailX" >Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4" data-mdb-input-init>
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg" name="pw" />
                                        <label class="form-label" for="typePasswordX" >Password</label>
                                    </div>

                                    <p class="small mb-3 "><a class="text-white-50" href="#!">Forgot password?</a></p>

                                    <button type="submit" class="btn" id="submit" data-mdb-ripple-init>Submit</button>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="/register" class="text-white-50 fw-bold">Sign Up</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include("layouts/footer")
    @include("layouts/script")
</body>

</html>