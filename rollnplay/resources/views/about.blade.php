<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>About Us</title>

    <style>
      body{
        font-family: "Poppins", sans-serif;
        background-color: #D9D0C1
      }
      #roll {
        max-width: 250px;
      }
      #integrity, #community, #compassion, #curiosity, #about{
        font-size: 3rem;
      }
      #integrity{
        color: #2148D1;
        font-family: "Londrina Solid", sans-serif;
      }
      #community{
        color: #FF3333;
        font-family: "Londrina Solid", sans-serif;
      }
      #compassion{
        color: #e9c615;
        font-family: "Londrina Solid", sans-serif;
      }
      #curiosity{
        color: #00BF63;
        font-family: "Londrina Solid", sans-serif;
      }

      #about{
        color: #D9D0C1;
        font-family: "Londrina Solid", sans-serif;
      }
      
      .content{
        font-size: 1.5em;
      }

      #our_team{
        color: #1d1c1a;
        font-family: "Londrina Solid", sans-serif;
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
          class="p-5 bg-image"
          style="
            background-image: url('https://newywithkids.com.au/wp-content/uploads/2019/09/FamilyBestBoardGames.jpg');
            height: 400px;
            /* z-index: -1; */
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              
              <div class="text-white mt-5">
                <h1 id="about">ABOUT US</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>

      <div class="container mt-5">
        <div class="row">
          <div class="col-xl-6 ">
            <h1 class="text-center" id="integrity">Integrity</h1>
            
            <p class="text-center content">Because we believe there is never a reason to compromise on our ethics, we always choose to do what we believe is right, even when faced with compelling reason to do what is easy.</p>
          </div>
          <div class="col-xl-6 ">
            <h1 class="text-center" id="community" >Community</h1>
            <p class="text-center content">Because we believe in the importance of meaningful connections, we always choose to bring people together and build relationships through shared experiences.</p>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-xl-6 ">
            <h1 class="text-center" id="compassion">Compassion</h1>
            <p class="text-center content">Because we believe every person is undeniably inherently valuable, we always choose to act with empathy, lean into vulnerability, take care of ourselves, and celebrate the successes of others.</p>
          </div>
          <div class="col-xl-6 ">
            <h1 class="text-center" id="curiosity">Curiosity</h1>
            <p class="text-center content">Because our passion for progress outweighs our fear of failure, we always choose to listen actively, seek opportunities to learn, and challenge accepted thinking.</p>
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <p class="fs-4 text-center content">
          As we grow, we find new opportunities to test and strengthen these values, and we wouldn't be who we are without them. These values have meant turning away opportunities that weren't aligned with who we are, always questioning ourselves to see if we can be better, and putting an emphasis on the input of our fans and followers to help shape what we become. <p>

          <p class="fs-4 text-center">We hope you enjoy what we create, and we will continue striving to delight you every single day.</p>
      </div>

      

      <div class="container">
        <h1 class="text-center" id="our_team">OUR TEAM</h1>
        <div class="row">
          <div class="col-lg-4 mb-3">
            <div class="card">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/>
              <div class="card-body">
                <h5 class="card-title">Kevin Kenneth Daus <br/>CEO</h5>
                <p class="card-text">Brings a wealth of experience and a passion for gaming. His strategic vision and keen understanding of market dynamics have propelled the company to new heights.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-3">
            <div class="card">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/>
              <div class="card-body">
                <h5 class="card-title">Rendell Soberano <br/> COO</h5>
                <p class="card-text">With a proven track record in optimizing production processes, and operational efficiency. Ensuring seamless execution across all facets of the company's operations.</p>
              </div>
            </div>
          </div>


          <div class="col-lg-4 mb-3">
            <div class="card">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/>
              <div class="card-body">
                <h5 class="card-title">Christian Jay Salvino <br>Marketing Director</h5>
                <p class="card-text">Brings a dynamic blend of creativity and comprehensive strategic insight to the forefront of promotional efforts.  Fostering engagement within the gaming community</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
      @include ('layouts/footer')
      @include ('layouts/script')
</body>
</html>


