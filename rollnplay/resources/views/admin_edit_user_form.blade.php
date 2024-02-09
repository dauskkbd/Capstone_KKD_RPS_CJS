<!DOCTYPE html>
@include('layouts/head')
    <title>Document</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Edit User Info</h1>
    <form action="/admin/panel/users/edit/{{$user -> user_id}}" method="POST" class="form-control">
        @csrf
        @method('PUT')

        <label>First Name:</label>
       <input type="text" name="first_name" value="{{$user -> first_name}}"/>
       <label>Last Name:</label>
       <input type="text" name="last_name" value="{{$user -> last_name}}"/>
       <label>Mobile Number:</label>
       <input type="text" name="mobile" value="{{$user -> mobile}}"/>
       <label>Email Address:</label>
       <input type="email" name="email" value="{{$user -> email}}"/>
       <label>Address:</label>
       <input type="text" name="province" value="{{$user -> province}}"/>

       <input type="submit" class="btn btn-success">

        
    
    </form>

    
    
    
    @include('layouts/footer')
    @include('layouts/script')  
</body>
</html>