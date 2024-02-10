<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Contact Us</title>

    <style> 
        body{
            font-family: "Poppins", sans-serif;
            background-color: #D9D0C1
        }
        #map{
            border-radius: 0%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
        }  
        .about_logo {
            max-width: 50px;
        }
        #head_text{
            padding-top: 40px;
            color: #1d1c1a;
            font-family: "Londrina Solid", sans-serif;
        }
        #contact{
            color: #D9D0C1;
            font-family: "Londrina Solid", sans-serif;
        }

        #submit{
            font-family: "Londrina Solid", sans-serif;
            background-color: #8C564A;
            color:#1d1c1a;
            margin-top: 20px;
            font-size: 1.1em;
            
        }
    </style>

    
</head>
<body>
    @include('layouts/navbar')
    <div
          class="p-5 bg-image"
          style="
            background-image: url('https://newywithkids.com.au/wp-content/uploads/2019/09/FamilyBestBoardGames.jpg');
            height: 400px;
            /* z-index: -1; */
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              
              <div class="mt-5">
                <h1 id="contact">CONTACT US</h1>
              </div>
            </div>
          </div>
        </div>

    <h1 class="text-center" id="head_text">Let's connect!</h1>

    <div class="container mb-3">
        <div class="row">
            <div class="col-xl-6" >
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61909.113347404906!2d120.92773286917625!3d14.11729369614247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite!5e0!3m2!1sen!2sph!4v1707378754143!5m2!1sen!2sph" width="500dvw" height="500dvh" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-xl-6" >
                <div class="row">
                    <div class="col-lg-6 col-xs-6 text-center mt-4">
                        <i class="fas fa-house fa-2x  me-2"></i>
                        <p>Cavite, 00-967, Tagaytay</p>
                    </div>
                    <div class="col-lg-6 col-xs-6 text-center mt-4">
                        <i class="fas fa-envelope fa-2x  me-2"></i>
                        <p>services@rollandplay.com</p>
                    </div>
                    <div class="col-lg-6 col-xs-6 text-center mt-4">
                        <i class="fas fa-phone fa-2x  me-2"></i>
                        <p>+ 48 234 567 88</p></div>
                    <div class="col-lg-6 col-xs-6 text-center mt-4">
                        <i class="fas fa-comments-dollar fa-2x  me-2"></i>
                        <p>+6394586****</p>
                        </div>
                </div>
                <h3 class="text-center" id="message">Message Us</h3>
                <div class="form-outline" data-mdb-input-init>
                    <textarea class="form-control" id="textAreaExample" rows="7"></textarea>
                    <label class="form-label" for="textAreaExample">How can we help?</label>
                  </div>
                  <button type="submit" class="btn" data-mdb-ripple-init id="submit">Submit</button>
            </div>
        </div>
    </div>

    

    @include ('layouts/footer') 
    @include('layouts/script')
</body>
</html>