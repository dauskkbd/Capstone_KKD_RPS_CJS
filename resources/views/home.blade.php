<!DOCTYPE html>
<html lang="en">
<head>
   
    @include('layouts/head')
    
    
    <link rel="stylesheet" href="css/home.css">
    <script src="js/home.js"></script>
    <title>RollNPlay-Home</title>
</head>
<body>
    
@include('layouts/navbar')
@include('layouts/messages')
    {{-- hero banner section --}}
<div class="seperator">
    <div class="container" id="hero_banner_section">
        <div id="banner_header">
            <h1 class="text_heading">Ready to Roll&Play?</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init data-mdb-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="{{ url('/shop/product/28') }}"><img src="/images/septima_resize.jpg" alt="blank image" class="img-fluid hero-banner"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="{{ url('/shop/product/3') }}"><img src="/images/lord_of_the_rings_resize.jpg" alt="blank image" class="img-fluid hero-banner"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="{{ url('/shop/product/14') }}"><img src="/images/the-witcher-resize.jpg" alt="blank image" class="img-fluid hero-banner"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="row d-flex">
                    <div class="col-lg-6 col-md-6 col-6 square-banner-section">
                        <a href="{{ url('/shop/product/2') }}"><img src="/images/sleeping-gods.webp" alt="blank image" class="img-fluid square-banner"></a>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-6 square-banner-section">
                        <a href="{{ url('/shop/product/19') }}"><img src="/images/ticket-to-ride.jpg" alt="blank image" class="img-fluid square-banner"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 landscape-banner-section">
                       <a href="{{ url('/shop/product/29') }}"><img src="/images/tribes-of-the-wind-resize.webp" id="landscape_banner" alt="blank image" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- shop by category section --}}
    
    <div class="container" id="shop_by_category_container">
        <div id="shop_by_category_header">
            <h1 class="text_heading">Shop by Category</h1>
        </div>
        <div id="shop_by_category_section">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div>
                        <a href="/shop"><img src="/images/aftermath.jpg" alt="blank image" class="img-fluid image-category">
                        <p><strong>All Board Games</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="/shop?genre=Family+Games">
                        <img src="/images/ankh-gods-of-egypt.jpg" alt="blank image" class="img-fluid image-category">
                        <p><strong>Family Games</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="/shop?genre=Adventure+Games">
                        <img src="/images/arkham-horror.jpg" alt="blank image" class="img-fluid image-category">
                        <p><strong>Adventure games</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="/shop?genre=Expert+Games">
                        <img src="/images/azul-master-chocolatier.webp" alt="blank image" class="img-fluid image-category">
                        <p><strong>Expert Games</strong></p></a>
                    </div>
                </div>
                <div class="mt-3">
                </div>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="/shop?genre=Escape+Games">
                        <img src="/images/bloodborne.webp" alt="blank image" class="img-fluid image-category">
                        <p><strong>Escape Games</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="/shop?genre=Party+Games">
                        <img src="/images/century-spice-road-resize.jpg" alt="blank image" class="img-fluid image-category">
                        <p><strong>Party Games</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="/shop?genre=Living+Card+Games">
                        <img src="/images/chronicles-of-crime.jpg" alt="blank image" class="img-fluid image-category">
                        <p><strong>Living Card Games</strong></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- suggested game section --}}

    <div class="container" id="something_you_might_like">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <h1 class="text_heading">Something you might like</h1>
            </div>
        </div>
    </div>
        <div class="container d-lg-block d-md-none d-none suggested-game-container-lg">
            <h3>Will you find the werewolf before he finds you?</h3>
            <div class="row">
                <div class="col-lg-2 col-md-12 col-12">
                        <img src="images/one-night-ultimate-werewolf-daybreak_resize.jpg" alt="blank image" class="img-fluid image-1">
                        <img src="images/one-night-ultimate-werewolf-daybreak-side_resize.png" alt="blank image" class="img-fluid image-2">
                        <img src="images/one-night-ultimate-werewolf-daybreak-overview_resize.png" alt="blank image" class="img-fluid image-3">
                        <img src="images/one-night-ultimate-werewolf-daybreak-contents_resize.png" alt="blank image" class="img-fluid image-4">                              
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div>
                        <img src="images/one-night-ultimate-werewolf-daybreak_resize.jpg" alt="blank image" class="img-fluid main-image">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="suggested_game_description">
                        <h4 id="lg_description"><strong> One Night Ultimate Werewolf Daybreak by Ted Alspach</strong></h4>
                        <p class="suggested_game_price"><strong>₱1,400.00</strong></p>
                        <a href="{{ url('/shop/product/32') }}"><button type="button" class="btn" data-mdb-ripple-init>View Details</button></a>
                    </div>
                </div>
            </div>
        </div>
        <hr/>


    <div class="container d-lg-none d-md-block d-block suggested-game-container-sm">
        <h3>Will you find the werewolf before he finds you?</h3>
            <div class="row">
                <div class="col-md-12 col-12">
                    <img src="images/one-night-ultimate-werewolf-daybreak_resize.jpg" alt="blank image" class="img-fluid main-image">          
                </div>
                    <div class="col-md-12 col-12 mt-3">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <img src="images/one-night-ultimate-werewolf-daybreak_resize.jpg" alt="blank image" class="img-fluid image-1">
                            </div>
                            <div class="col-md-3 col-6">
                                <img src="images/one-night-ultimate-werewolf-daybreak-side_resize.png" alt="blank image" class="img-fluid image-2">
                            </div>
                            <div class="col-md-3 col-6">
                                <img src="images/one-night-ultimate-werewolf-daybreak-overview_resize.png" alt="blank image" class="img-fluid image-3">
                            </div>
                            <div class="col-md-3 col-6">
                                <img src="images/one-night-ultimate-werewolf-daybreak-contents_resize.png" alt="blank image" class="img-fluid image-4">  
                            </div>
                        </div>
                    </div>
                <div class="col-md-12">
                    <div class="suggested_game_description">
                        <h4 id="sm_description"><strong>One Night Ultimate Werewolf Daybreak by Ted Alspach</strong></h4>
                        <p class="suggested_game_price"><strong>₱1,400.00</strong></p>
                        <a href="{{ url('/shop/product/32') }}"><button type="button" class="btn suggested" data-mdb-ripple-init>View Details</button></a>
                    </div>
                </div>
            </div>
        </div>
    
    <div class="container visit-shop">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <h1 class="text_heading">Visit our shop to find out more...</h1>
                <a href="/shop"><button type="button" class="btn " data-mdb-ripple-init><span id="text_button">SHOP</span></button></a>
            </div>
        </div>
    </div>
   @include('layouts/script')
   @include('layouts/footer')
</body>


</html>