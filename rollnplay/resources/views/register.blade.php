<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(64, 162, 227), rgba(120, 148, 97));
        }
    </style>
</head>

<body>
    @include("layouts/navbar")

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form action="/register" method="POST">
                                @csrf

                                <div class="mb-md-5 mt-md-5 ">
                                    <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                    <p class="text-white-50 mb-5">Please fill up the form to register!</p>
                                    
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="first_name" class="form-control form-control-lg" name="first_name"/>
                                        <label class="form-label" for="first_name">First Name</label>
                                    </div>

                                    <div class="form-outline form-white mb-2">
                                        <input type="text" id="last_name" class="form-control form-control-lg" name="last_name"/>
                                        <label class="form-label" for="last_name">Last Name</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg" name="email"/>
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="mobile" class="form-control form-control-lg" name="mobile"/>
                                        <label class="form-label" for="mobile">Mobile Number</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="province" class="form-control form-control-lg" name="province"/>
                                        <label class="form-label" for="province">Province</label>
                                    </div>

                                    <select class="browser-default custom-select" name="role">
                                        <option selected disabled>Open this select menu</option>
                                        <option value="user">User</option>
                                        <option value="admin" disabled>Admin</option>
                                        <option value="delivery" disabled>Delivery</option>
                                    </select>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg" name="pw" />
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="con_pw" class="form-control form-control-lg" name="con_pw" />
                                        <label class="form-label" for="con_pw">Confirm Password</label>
                                    </div>

                                    <input class="btn btn-outline-light btn-lg px-5" type="submit" value="submit"/>
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