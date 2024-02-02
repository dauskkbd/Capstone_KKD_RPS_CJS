<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head_section')
    <style>
        body{
            background-color: #878787
        }

        /* hero banner section */
        #hero_banner_section{
            margin-top: 6%;
        }

       .hero-banner {
            margin-bottom: 3%;
            border-radius: 10px;
            /* box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.5); */
        }

        .square-banner{
            border-radius: 10px;
            /* box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.5); */
        }

        .square-banner:hover {
            transition: transform 0.5s ease;
            transform: scale(1.05);
        }

        .landscape-banner-section{
            margin-top: 2%;    
        }

        #landscape_banner{
            height: 100%;
            width: 100%;
            border-radius: 10px;
            /* box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.5); */
        }

        #landscape_banner:hover{
            transition: transform 0.5s ease;
            transform: scale(1.05);
        }

        #shop_by_category_header{
            margin-top: 8%;
        }

        #shop_by_category_section{
            background-color: rgb(228, 228, 228);
            border-radius: 10px;
            padding: 30px 30px 0px 30px;
        }

        #shop_by_category_section a{
            text-decoration: none;
            color: rgb(29, 28, 26);
            transition: color 0.5s ease;
        }

        #shop_by_category_section a:hover {
            color:rgb(54, 54, 255)
        }

        .category {
            text-align: center;
            font-size: 23px;
        }

        .category p {
           margin-top: 7px;
        }

        .category .img-fluid{
            border-radius: 10px;
            transition: transform 0.5s ease;
        }

        .category .img-fluid:hover{
            transition: transform 0.5s ease;
            transform: scale(1.03);
        }

        #suggested_game_container{
            margin-top: 5%;
        }
    </style>
    <script>
     
    </script>
    <title>Document</title>
</head>
<body>
    @include('layouts/navbar')
    {{-- hero banner section --}}
    <div class="container-fluid" id="hero_banner_section">
        <p class="fs-3">Some additionals in this area</p>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href=""><img src="/images/septima.jpg" alt="blank image" class="img-fluid hero-banner"></a>
                    </div>
                    <div class="carousel-item">
                        <a href=""><img src="/images/lord_of_the_rings.jpg" alt="blank image" class="img-fluid hero-banner"></a>
                    </div>
                    <div class="carousel-item">
                        <a href=""><img src="/images/the-witcher.jpg" alt="blank image" class="img-fluid hero-banner"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="row d-flex">
                    <div class="col-lg-6 col-md-6 col-6 square-banner-section">
                        <a href=""><img src="/images/sleeping-gods.webp" alt="blank image" class="img-fluid square-banner"></a>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-6 square-banner-section">
                        <a href=""><img src="/images/ticket-to-ride.jpg" alt="blank image" class="img-fluid square-banner"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 landscape-banner-section">
                       <a href=""><img src="/images/tribes-of-the-wind.webp" id="landscape_banner" alt="blank image" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- shop by category section --}}
    
    <div class="container-fluid" id="shop_by_category_container">
        <h1 class="mb-4" id="shop_by_category_header">Shop by Category</h1>
        <div id="shop_by_category_section">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="#">
                        <img src="/images/aftermath.jpg" alt="blank image" class="img-fluid">
                        <p><strong>All Board Games</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/ankh-gods-of-egypt.jpg" alt="blank image" class="img-fluid">
                        <p><strong>New Arrivals</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/arkham-horror.jpg" alt="blank image" class="img-fluid">
                        <p><strong>Best Sellers</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/azul-master-chocolatier.webp" alt="blank image" class="img-fluid">
                        <p><strong>Incoming Games</strong></p></a>
                    </div>
                </div>
                <div class="mt-3">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/bloodborne.webp" alt="blank image" class="img-fluid">
                        <p><strong>Crowdfunded Games</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/century-spice-road.jpg" alt="blank image" class="img-fluid">
                        <p><strong>Special Editions</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/chronicles-of-crime.jpg" alt="blank image" class="img-fluid">
                        <p><strong>Expansions</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/coatl.webp" alt="blank image" class="img-fluid">
                        <p><strong>For the Kids</strong></p></a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <div class="container" id="suggested_game_container">
        <h3>Will you find the werewolf before he finds you?</h3>
        <div class="row">
            <div class="col-lg-2">
                <img src="images/one-night-ultimate-werewolf-daybreak_resize.jpg" alt="blank image" id="image_1" class="img-fluid">
                <img src="images/one-night-ultimate-werewolf-daybreak-side.png" alt="blank image" id="image_2" class="img-fluid">
                <img src="images/one-night-ultimate-werewolf-daybreak-overview.png" alt="blank image" id="image_3" class="img-fluid">
                <img src="images/one-night-ultimate-werewolf-daybreak-contents.png" alt="blank image" id="image_4" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <img src="images/one-night-ultimate-werewolf-daybreak_resize.jpg" alt="blank image" id="main_image" class="img-fluid">
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
    
</body>
</html>