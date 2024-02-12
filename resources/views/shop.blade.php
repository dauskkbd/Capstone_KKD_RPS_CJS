<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/shop.css">
    <script type="module">
        import { Ripple, initMDB } from "mdb-ui-kit";
        initMDB({ Ripple }); 
    </script>
    <script src="/js/shop.js">
    </script>
    <title>Shop</title>
</head>
<body>
    @include('layouts/navbar')


    {{-- hero banner section --}}
    
    <div
          class="p-5 bg-image"
          style="
            background-image: url('https://newywithkids.com.au/wp-content/uploads/2019/09/FamilyBestBoardGames.jpg');
            height: 400px;
            /* z-index: -1; */
          "
        >
          <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
              
              <div class="text-white mt-5">
                <h1 id="shop">SHOP</h1>
              </div>
            </div>
          </div>
        </div>

    <div class="container-fluid sorting-section-container">
        <div class="row">
            <a href="/shop/view/"><button type="button" class="btn cart ms-1 mb-3" data-mdb-ripple-init><i class="fas fa-cart-shopping"></i> CART</button></a>
            <div class="text-start">
                

                <div class="btn-group dropend custom-dropdown">
                    <select class="btn custom-select ms-1 me-2"  onchange="location = this.value;">
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

                

                <div class="btn-group dropend custom-dropdown" id="filter">
                    <select class="btn custom-select" onchange="location = this.value;">
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
                <div class="cards mb-5">
                    <div class="row gy-3">
                      @foreach ($products as $p)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card h-100">
                                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                  <img src="/images/{{$p -> image}}" class="img-fluid"/>
                                  <a href="#!">
                                    <div class="mask"></div>
                                  </a>
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$p -> name}}</h5>
                                  <p class="card-text description"> {{$p -> description}}</p>
                                  
                                </div>
                                <div class="card-footer"><a href="/shop/product/{{$p -> product_id}}" class="btn btn-center" id="view" data-mdb-ripple-init>View Details</a><span class="text-end" id="price">₱{{$p -> price}}</span></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{$products -> links('pagination::bootstrap-5')}}
    </div>

    {{-- {{$products -> links('pagination::bootstrap-5')}} --}}

    @include('layouts/script')
    @include('layouts/footer')
</body>
</html>
