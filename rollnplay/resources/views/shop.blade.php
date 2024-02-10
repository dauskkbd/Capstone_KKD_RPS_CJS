<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <style>
        body{
            background-color: grey 
        }

        .shop-banner-container{
            margin-top: 10%;
        }

        .sorting-section-container{
            display: block;
            margin-top: 5%;
            width: 94%;
        }


        .filters-cards-container{
            width: 95%;
            margin-top: 2%;

        }

        .filters{
            background-color: white;
            border-radius: 10px;
            padding: 1%
        }

        .cards{
            margin-left: 1%;
        }

        .custom-dropdown .custom-select {
        border: none;
        border-radius: 5px;
        padding: 8px 15px;
        background-color: #f8f9fa;
        color: #000;
        font-size: 16px;
        font-weight: bold;
        }

        .custom-dropdown .custom-select:focus {
        outline: none;
        box-shadow: none;
        }

        .custom-dropdown .custom-select option {
        background-color: #fff; 
        color: #000;
        font-size: 16px;
        font-weight: bold;
        }
    </style>
    <script type="module">
        import { Ripple, initMDB } from "mdb-ui-kit";
        initMDB({ Ripple }); 
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        let maxLength = 100;
        let descriptionElements = document.querySelectorAll(".card-text.description");
        
        descriptionElements.forEach(function(element) {
            let description = element.textContent.trim();
            if (description.length > maxLength) {
                let truncatedText = description.substring(0, maxLength) + "...";
                element.textContent = truncatedText;
            }
        });
      });
    </script>
    <title>RollNPlay-Shop</title>
</head>
<body>
    @include('layouts/navbar')


    {{-- hero banner section --}}
    
    <div class="container-fluid shop-banner-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <img src="images/shop_banner_resize.webp" alt="blank image" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid sorting-section-container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-6 order-1">
                <div class="btn-group dropend custom-dropdown">
                    <select class="btn btn-primary custom-select" onchange="location = this.value;">
                        <option value="#">Filter By</option>
                        <option value="?genre=All">All</option>
                        <option value="?genre=Living+Card+Games">Living Card Games</option>
                        <option value="?genre=Adventure+Games">Adventure Games</option>
                        <option value="?genre=Family+Games">Family Games</option>
                        <option value="?genre=Escape+Games">Escape Games</option>
                        <option value="?genre=Party+Games">Party Games</option>
                        <option value="?genre=Expert+Games">Expert Games</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 order-1 ">    
                <div class="btn-group dropend custom-dropdown">
                    <select class="btn btn-primary custom-select" onchange="location = this.value;">
                        <option value="#">Sort By</option>
                        <option value="?sort=az">A-Z Alphabetically</option>
                        <option value="?sort=za">Z-A Alphabetically</option>
                        <option value="?sort=high">Highest Price</option>
                        <option value="?sort=low">Lowest Price</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    

    {{-- filter and cards section --}}

    <div class="container-fluid filters-cards-container">
        <div class="row">
            <div class="col-lg-12 cards-container">
                <div class="cards">
                    <div class="row">
                      @foreach ($products as $p)
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                  <img src="/images/{{$p -> image}}" class="img-fluid"/>
                                  <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                  </a>
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$p -> name}}</h5>
                                  <p class="card-text description"> {{$p -> description}}</p>
                                  <a href="/shop/product/{{$p -> product_id}}" class="btn btn-primary" data-mdb-ripple-init>View details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- {{$products -> links('pagination::bootstrap-5')}} --}}

    @include('layouts/script')
    @include('layouts/footer')
</body>
</html>
