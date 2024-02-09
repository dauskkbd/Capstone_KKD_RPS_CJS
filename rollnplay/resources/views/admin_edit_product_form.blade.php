<!DOCTYPE html>
@include('layouts/head')
    <title>Document</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Edit Product Info</h1>
    <form action="/admin/panel/products/edit/{{$product -> product_id}}" method="POST" class="form-control">
        @csrf
        @method('PUT')

        <label>Name:</label>
       <input type="text" name="name" value="{{$product -> name}}"/>
       <label>Price:</label>
       <input type="text" name="price" value="{{$product -> price}}"/>
       <label>Description:</label>
       <input type="textarea" name="description" value="{{$product -> description}}"/>
       <label>Genre:</label>
       <input type="text" name="genre" value="{{$product -> genre}}"/>
       <label>Offers: *if any</label>
       <input type="text" name="genre" value="{{$product -> genre}}"/>
       <input type="submit" class="btn btn-success">

        
    
    </form>

    
    
    
    @include('layouts/footer')
    @include('layouts/script')  
</body>
</html>