<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Admin Panel - PRODUCTS</title>

    <style>
        body{
        font-family: "Poppins", sans-serif;
        background-color: #D9D0C1;
        }
        #games_img{
            width: 80px;
        }
        table, th, tr, td{
        background: #D9D0C1 !important;
        }
        #div_con{
            padding-top: 120px;
        }
        #products{
        font-family: "Londrina Solid", sans-serif;
        font-size: 2.5em;
        color: #1d1c1a;

        }
        th{
        font-family: "Londrina Solid", sans-serif;
        font-size: 25px;
        }
        #actions{
            display: inline-flex;
        }
        #delete{
            background-color: #FF3333;
            font-family: "Londrina Solid", sans-serif;
            font-size: 15px;
            color: #1d1c1a
        }
        #edit{
            margin-right: 10px;
            background-color: #FDD91F;
            font-family: "Londrina Solid", sans-serif;
            font-size: 15px;
            color: #1d1c1a
        }
        #add{
            
            
            background-color: #00BF63;
            font-family: "Londrina Solid", sans-serif;
            font-size: 20px;
            color: #1d1c1a;
            
        }
    </style>
</head>
<body>
    @include('layouts/navbar')
    <div class="container" id="div_con">
    <h1 class="text-center" id="products">Products</h1>

    <a href="/admin/products" class="btn" id="add">+Add New Product</a>

        <table class="table text-center">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Whole Price</th>
                <th>Price</th>
                <th>Genre</th>
                <th>Offers</th>
                <th>Actions</th>
                
            </tr>
            @foreach($info as $i)
            <tr>
                <td ><img id="games_img" src="/images/{{$i -> image}}" alt="{{$i -> name}}"></td>
                <td>{{$i -> name}}</td>
                <td>{{$i -> w_price}}</td>
                <td>{{$i -> price}}</td>
                <td>{{$i -> genre}}</td>
                <td>{{$i -> offers}}</td>
            
                
                <td id="actions">
                <a href="/admin/panel/products/edit/{{$i -> product_id}}" class="btn" id="edit">Edit Entry</a>

                <!-- Button trigger modal -->
                <button type="button" class="btn" id="delete" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">
                    Delete Entry
                </button>
                </td>   
            </tr>
            @endforeach

        </table>
    </div>


    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to "Delete Entry?"</h5>
          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Caution: Deleting products is a permanent action that cannot be undone.</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>

        <form action="/admin/panel/products/{{$i -> product_id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Entry</button>
        </form>

        </div>
      </div>
    </div>
  </div>

    @include('layouts/footer')
    @include('layouts/script')
    
</body>
</html>