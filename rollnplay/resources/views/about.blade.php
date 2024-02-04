<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>RollNPlay - About</title>

    <style>
      #bottom-banner {
        margin-left: 0px !important;
        margin-right: 0px !important;
        
      }

      #roll {
        max-width: 250px;
      }
      
    </style>
   
</head>
<body>
    <header>
        <!-- Navbar -->
       @include('layouts/navbar')
        <!-- Navbar -->
        
        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('https://newywithkids.com.au/wp-content/uploads/2019/09/FamilyBestBoardGames.jpg');
            height: 400px;
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              
              <div class="text-white">
                <img src="images/Roll.png" alt="roll" id="roll">
                <h1 class="mb-3">Roll & Play</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>

      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <img src="images/integrity.jpeg" alt="intergrity" class="img-fluid" />
            
            <h3 class="text-center">Because we believe there is never a reason to compromise on our ethics, we always choose to do what we believe is right, even when faced with compelling reason to do what is easy.</h3>
          </div>
          <div class="col-lg-6 col-md-6">
            <img src="images/community.jpeg" alt="community" class="img-fluid"/>
            <h3 class="text-center">Because we believe in the importance of meaningful connections, we always choose to bring people together and build relationships through shared experiences.</h3>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <img src="images/compassion.jpeg" alt="compassion" class="img-fluid"/>
            <h3 class="text-center">Because we believe every person is undeniably inherently valuable, we always choose to act with empathy, lean into vulnerability, take care of ourselves, and celebrate the successes of others.</h3>
          </div>
          <div class="col-lg-6 col-md-6">
            <img src="images/curiosity.jpeg" alt="curiosity" class="img-fluid"/>
            <h3 class="text-center">Because our passion for progress outweighs our fear of failure, we always choose to listen actively, seek opportunities to learn, and challenge accepted thinking.</h3>
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <p class="fs-3 text-center">
          As we grow, we find new opportunities to test and strengthen these values, and we wouldn't be who we are without them. These values have meant turning away opportunities that weren't aligned with who we are, always questioning ourselves to see if we can be better, and putting an emphasis on the input of our fans and followers to help shape what we become. <p>

          <p class="fs-3 text-center">We hope you enjoy what we create, and we will continue striving to delight you every single day.</p>
      </div>

      <div class="container-fluid mt-5 p-0">
            <a href="#"><img src="images/about-btm.jpeg" alt="about" class="img-fluid w-100" id="bottom-banner"/></a> 
      </div>
    
      @include ('layouts/footer') 
</body>
</html>


