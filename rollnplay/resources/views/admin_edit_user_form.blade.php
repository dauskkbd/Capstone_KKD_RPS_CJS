<!DOCTYPE html>
@include('layouts/head')
    <title>Document</title>
</head>

<style>
    body{
        font-family: "Poppins", sans-serif;
        background-color: #D9D0C1;
        }
    form{
        background-color: #D9D0C1 !important;
    }
    #edit{
        padding-top: 100px;
        font-family: "Londrina Solid", sans-serif;
        font-size: 2.5em;
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
    <h1 class="text-center" id="edit">Edit User Info</h1>

    <div class="container">
        <form action="/admin/panel/users/edit/{{$user -> user_id}}" method="POST" class="form-control">
            @csrf
            @method('PUT')

            <div class="form-outline form-white mb-3 mt-3" data-mdb-input-init>
                <input type="text" id="first_name" class="form-control" name="first_name" value="{{$user -> first_name}}" required />
                <label class="form-label" for="first_name">First Name</label>
        </div>
        <div class="form-outline form-white mb-3" data-mdb-input-init>
                <input type="text" id="last_name" class="form-control" name="last_name" value="{{$user -> last_name}}" required />
                <label class="form-label" for="last_name">Last Name</label>
        </div>
        <div class="form-outline form-white mb-3" data-mdb-input-init>
                <input type="email" id="email" class="form-control" name="email" value="{{$user -> email}}" required />
                <label class="form-label" for="email">Email Address</label>
        </div>
        <div class="form-outline form-white mb-3" data-mdb-input-init>
            <input type="text" id="mobile" class="form-control" name="mobile" value="{{$user -> mobile}}" required />
            <label class="form-label" for="description">Mobile Number</label>
        </div>
        
        {{--  --}}
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="1" required active/>
            <label class="form-check-label" for="inlineRadio1">User</label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="2" required/>
            <label class="form-check-label" for="inlineRadio2">Delivery</label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="role" id="inlineRadio3" value="3" required />
            <label class="form-check-label" for="inlineRadio3">Admin</label>
        </div>
        {{--  --}}

        <div class="form-outline form-white mb-2" data-mdb-input-init>
            <input type="text" id="province" class="form-control" name="province" value="{{$user -> province}}" required/>
            <label class="form-label" for="province">Province</label>
        </div>

        <button type="submit" class="btn mb-3"  id="submit"   data-mdb-ripple-init>Submit</button>
        </form>
    </div>
    
    
    
    @include('layouts/footer')
    @include('layouts/script')  
</body>
</html>