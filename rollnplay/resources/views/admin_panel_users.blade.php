<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Admin Panel - USERS</title>
</head>
<body>
    @include('layouts/navbar')

    <h1>Users</h1>

    <table class="table text-center">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($info as $i)
        <tr>
            <td>{{$i -> first_name}}</td>
            <td>{{$i -> last_name}}</td>
            <td>{{$i -> province}}</td>
            <td>{{$i -> mobile}}</td>
            <td>{{$i -> email}}</td>
            <td>{{$i -> role}}</td>
            <td><a href="/admin/panel/users/edit/{{$i -> user_id}}" class="btn btn-warning">Edit Entry</a></td>

            <form action="/admin/panel/users/{{$i -> user_id}}" method="POST">
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