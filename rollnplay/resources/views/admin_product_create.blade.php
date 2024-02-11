<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Create Product</title>
</head>
<style>
    body{
    font-family: "Poppins", sans-serif;
    background-color: #D9D0C1;
    }
    #product{
        padding-top: 100px;
        font-family: "Londrina Solid", sans-serif;
        font-size: 40px;
        color: #1d1c1a;
    }
    section{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    form{
    background-color: #2e2c2a !important;
    }
    #submit{
        font-family: "Londrina Solid", sans-serif;
        background-color: #8C564A;
        color: #1d1c1a;
        font-size: 20px;  
    }
</style>
<body>
    @include("layouts/navbar")
    @include('layouts/messages')
    <h1 id="product" class="text-center">Create New Product</h1>
  <div class="container mt-5 mb-5" id="section">
        <h3 class="text-center">Fill up form to create new product.</h3>
    
    <form action="/admin/products/" method="POST" class="form-control" enctype="multipart/form-data">
        @csrf
            
        <div class="form-outline form-white mb-3 mt-3" data-mdb-input-init>
                <input type="text" id="name" class="form-control" name="name" required />
                <label class="form-label" for="name">Name</label>
        </div>
        <div class="form-outline form-white mb-3" data-mdb-input-init>
                <input type="number" id="w_price" class="form-control" name="w_price" required />
                <label class="form-label" for="w_price">Whole Price</label>
        </div>
        <div class="form-outline form-white mb-3" data-mdb-input-init>
                <input type="number" id="price" class="form-control" name="price" required />
                <label class="form-label" for="price">Price</label>
        </div>
        <div class="form-outline form-white mb-3" data-mdb-input-init>
            <input type="text" id="description" class="form-control" name="description" required />
            <label class="form-label" for="description">Description</label>
        </div>
        <div class="form-outline form-white mb-3" data-mdb-input-init>
                <input type="text" id="genre" class="form-control" name="genre" required />
                <label class="form-label" for="genre">Genre</label>
        </div>
        <div class="form-outline form-white mb-3" data-mdb-input-init>
                <input type="number" id="stock" class="form-control" name="stock" required />
                <label class="form-label" for="stock">Stocks</label>
        </div>
        <div class="form-outline form-white mb-3" data-mdb-input-init>
                <input type="text" id="offers" class="form-control" name="offers" required />
                <label class="form-label" for="offers">Offers</label>
        </div>

        <label class="form-label" for="image">Upload Image</label>
            <input type="file" class="form-control mb-3" id="image" name="image" required/>

        <button type="submit" class="btn mb-3"  id="submit" data-mdb-ripple-init>Submit</button>
    </form>
</div>



@include("layouts/footer")
@include("layouts/script")
</body>
</html>
