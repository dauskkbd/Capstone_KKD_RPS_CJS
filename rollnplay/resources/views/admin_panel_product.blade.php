<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Admin Panel - PRODUCTS</title>
</head>
<body>
    @include('layouts/navbar')

    <h1>Products</h1>

    <a href="/admin/products" class="btn btn-success">+Add a product</a>

    <table class="table text-center">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Genre</th>
            <th>Offers</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($info as $i)
        <tr>
            <td>{{$i -> name}}</td>
            <td>{{$i -> price}}</td>
            <td>{{$i -> genre}}</td>
            <td>{{$i -> offers}}</td>
           
            
            <td><a href="/admin/panel/products/edit/{{$i -> product_id}}" class="btn btn-warning">Edit Entry</a></td>

            <form action="/admin/panel/products/{{$i -> product_id}}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete Entry</button></td>
            </form>   
        </tr>
        @endforeach

    </table>

    @include('layouts/footer')
    @include('layouts/script')
    
</body>
</html>