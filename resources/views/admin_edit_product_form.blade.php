<!DOCTYPE html>
@include('layouts/head')
    <title>Document</title>
</head>
<style>
    body{
    font-family: "Poppins", sans-serif;
    background-color: #D9D0C1;
    }
    #div_con{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #section{
        display: flex;
        align-content: center;
        justify-content: center;
        width: 75%;
        background: #1d1c1a;
        border-radius: 25%;
    }
    form{
    background-color: #2e2c2a !important;
    }
    #edit{
        font-family: "Londrina Solid", sans-serif;
        padding-top: 120px;
        color: #1d1c1a;

    }
    #submit{
        font-family: "Londrina Solid", sans-serif;
        background-color: #8C564A;
        color: #1d1c1a;
        font-size: 20px;
    }
</style>
<body>
    @include('layouts/navbar')
    <h1 id="edit" class="text-center">Edit Product Info</h1>
    <h3 class="text-center mt-5">Fill up form to edit product.</h3>
<div class="container" id="div_con">
    
    <div id="section" class="mb-5">
        
        <form action="/admin/panel/products/edit/{{$product -> product_id}}" method="POST" class="form-control">
            @csrf
            @method('PUT')
                
            <div class="form-outline form-white mb-3 mt-3" data-mdb-input-init>
                    <input type="text" id="name" class="form-control" name="name" value="{{$product -> name}}" required />
                    <label class="form-label" for="name">Name</label>
            </div>
            <div class="form-outline form-white mb-3" data-mdb-input-init>
                    <input type="number" id="w_price" class="form-control" name="w_price" value="{{$product -> w_price}}" required />
                    <label class="form-label" for="w_price">Whole Price</label>
            </div>
            <div class="form-outline form-white mb-3" data-mdb-input-init>
                    <input type="number" id="price" class="form-control" name="price" value="{{$product -> price}}" required />
                    <label class="form-label" for="price">Price</label>
            </div>
            <div class="form-outline form-white mb-3" data-mdb-input-init>
                <input type="text" id="description" class="form-control" name="description" value="{{$product -> description}}" required />
                <label class="form-label" for="description">Description</label>
            </div>
            <div class="form-outline form-white mb-3" data-mdb-input-init>
                    <input type="text" id="genre" class="form-control" name="genre" value="{{$product -> genre}}" required />
                    <label class="form-label" for="genre">Genre</label>
            </div>
            <div class="form-outline form-white mb-3" data-mdb-input-init>
                    <input type="number" id="stock" class="form-control" name="stock" value="{{$product -> stock}}" required />
                    <label class="form-label" for="stock">Stocks</label>
            </div>
            <div class="form-outline form-white mb-3" data-mdb-input-init>
                    <input type="text" id="offers" class="form-control" name="offers" value="{{$product -> offers}}" required />
                    <label class="form-label" for="offers">Offers</label>
            </div>
            <label class="form-label" for="image">Upload Image</label>
            <input type="file" class="form-control mb-3" id="image" name="image" value="{{$product -> image}}" required/>

            <button type="submit" class="btn mb-3"  id="submit" data-mdb-ripple-init>Submit</button>
        </form>
    </div>
</div>
    
    @include('layouts/footer')
    @include('layouts/script')  
</body>
</html>