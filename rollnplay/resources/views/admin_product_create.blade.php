<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>RollNPlay-</title>
</head>
<body>
  <div class="container mt-5">
    <h1>Product Page</h1>
    <form action="/admin/products/"  method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Whole price</label><br>
        <input type="number" name="w_price"><br>
        <label>Price</label><br>
        <input type="number" name="price"><br>
        <label>Description</label><br>
        <input type="text" name="description"><br>
        <label>Genre</label><br>
        <input type="text" name="genre"><br>
        <label>Stock</label><br>
        <input type="number" name="stock"><br>
        <label>Image</label><br>
        <input type="file" name="image"><br>
        <label>Offers</label><br>
        <input type="selection" name="offers"><br><br>

        <input type="submit" class="btn btn-primary">
    </form>
</div>
</body>
</html>
