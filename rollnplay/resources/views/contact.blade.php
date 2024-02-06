<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Roll&Play - Contact us</title>

    <style>  
        #map{
            border-radius: 5%;
        }  
        .about_logo {
            max-width: 50px;
        }

    </style>

    
</head>
<body>
    @include('layouts/navbar')


    <h1 class="mt-5 text-center">Let's connect!</h1>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                    <iframe id="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61909.113347404294!2d120.92773288232813!3d14.117293696144706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite!5e0!3m2!1sen!2sph!4v1707055212672!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        <div class="col-lg-6">
            <div class="row mt-5 text-center">
                <div class="col-lg-6 col-md-6 mt-2">
                    <img src="images/phone.png" class="mx-auto about_logo">
                    <p>Telephone number</p>
                    <p>+ 48 234 567 88</p>
                </div>
                <div class="col-lg-6 col-md-6 mt-2">
                    <img src="images/dollar2.png" class="mx-auto about_logo">
                    <p>Sales Inquiry</p>
                    <p>02-1231735</p>
                </div>
                <div class="col-lg-6 col-md-6 mt-2">
                    <img src="images/mail.png" class="mx-auto about_logo">
                    <p>Email Address</p>
                    <p>services@rollandplay.com</p>
                </div>
                <div class="col-lg-6 col-md-6 mt-2">
                    <img src="images/store.png" class="mx-auto about_logo">
                    <p>Store Location</p>
                    <p>Cavite, 00-967, Tagaytay</p>
                </div>
                <div class="col-lg-6 col-md-6 mt-2">
                    <form>
                        <div class="form-outline" data-mdb-input-init>
                            <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                            <label class="form-label" for="textAreaExample">Reach out to us for any concerns!</label>
                        </div>
                    </form>      
                </div>
                <div class="col-lg-6 col-md-6 mt-2">
                    <input type="submit" class="btn btn-success d-flex justify-content-right" value="Submit"/>
                </div>
            </div>
        </div>
    </div>      
</div>

    @include ('layouts/footer') 
    @include('layouts/script')
</body>
</html>