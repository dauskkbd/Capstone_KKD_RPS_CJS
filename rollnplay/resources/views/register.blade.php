<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Register</title>
    <style>
       body{
            font-family: "Poppins", sans-serif;
            background-color: #D9D0C1
        }
        #div_con{
            padding-top: 120px;
            padding-bottom: 30px;
        }
        #register{
            font-family: "Londrina Solid", sans-serif;
            font-size: 40px;
        }
        #submit{
            font-family: "Londrina Solid", sans-serif;
            background-color: #8C564A;
            color: #1d1c1a;
            font-size: 20px;
        }
    </style>

    <script>
        $(document).ready(function (){
            $('#submit').click(function(){
                $password = $("#password").val();
            $con_pw = $("con_pw").val();

            if(password != con_pw){
                $("#pass").text("Password did not match, Try again.")
            } 
           
            });     
        });
    </script>
</head>

<body>

    @include("layouts/navbar")

    @include('layouts/messages')

    <section class=" gradient-custom">
        <div class="container" id="div_con">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form action="/register/new" method="POST">
                                @csrf
                                <div class="mb-md-4 mt-md-4 ">
                                    <h2 class="fw-bold mb-2 text-uppercase" id="register">Register</h2>
                                    <p class="text-white-50 mb-5">Please fill up the form to register!</p>
                                    <div class="input-group">
                                        <div class="form-outline form-white mb-2" data-mdb-input-init>
                                            <input type="text" id="first_name" class="form-control" name="first_name" required/>
                                            <label class="form-label" for="first_name">First Name</label>
                                        </div>

                                        <div class="form-outline form-white mb-2" data-mdb-input-init>
                                            <input type="text" id="last_name" class="form-control" name="last_name" required/>
                                            <label class="form-label" for="last_name">Last Name</label>
                                        </div>
                                    </div>  

                                    <div class="form-outline form-white mb-2" data-mdb-input-init>
                                        <input type="email" id="email" class="form-control" name="email" required/>
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-2" data-mdb-input-init>
                                        <input type="text" id="mobile" class="form-control" name="mobile" required/>
                                        <label class="form-label" for="mobile">Mobile Number</label>
                                    </div>

                                    <div class="form-outline form-white mb-2" data-mdb-input-init>
                                        <input type="text" id="province" class="form-control" name="province" required/>
                                        <label class="form-label" for="province">Province</label>
                                    </div>
                                    {{--  --}}
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="user" required/>
                                        <label class="form-check-label" for="inlineRadio1">User</label>
                                      </div>
                                      
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="delivery" disabled/>
                                        <label class="form-check-label" for="inlineRadio2">Delivery</label>
                                      </div>
                                      
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="role" id="inlineRadio3" value="admin" disabled />
                                        <label class="form-check-label" for="inlineRadio3">Admin</label>
                                      </div>
                                    {{--  --}}
                                    <div class="form-outline form-white mb-2" data-mdb-input-init>
                                        <input type="password" id="password" class="form-control " name="pw" required/>
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <div class="form-outline form-white mb-2" data-mdb-input-init>
                                        <input type="password" id="con_pw" class="form-control" name="con_pw" required/>
                                        <label class="form-label" for="con_pw">Confirm Password</label>
                                    </div>

                                    <input type="submit" class="btn btn-lg px-5" value="submit" id="submit"/>
                                    <p id="pass"></p>
                                </div>
                            </form>
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