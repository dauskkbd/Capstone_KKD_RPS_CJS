<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Admin Panel - USERS</title>

    <style>
        body{
        font-family: "Poppins", sans-serif;
        background-color: #D9D0C1;
        }
        table,th,tr,td{
            background-color: #D9D0C1 !important;
        }
        #div_con{
            padding-top: 120px;
        }
        #users{
            font-family: "Londrina Solid", sans-serif;
            font-size: 2.5em;
            color: #1d1c1a;
        }
        th{
            font-family: "Londrina Solid", sans-serif;
            font-size: 1.5em;
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
        #actions{
            display: inline-flex;
        }
    </style>

</head>
<body>
    @include('layouts/navbar')
    @include('layouts/messages')
    <div class="container" id="div_con">
    <h1 class="text-center" id="users">Users</h1>

    <table class="table text-center">
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
            
        </tr>
        @foreach($info as $i)
        <tr>
            <td>{{$i -> user_id}}</td>
            <td>{{$i -> first_name}}</td>
            <td>{{$i -> last_name}}</td>
            <td>{{$i -> province}}</td>
            <td>{{$i -> mobile}}</td>
            <td>{{$i -> email}}</td>
            <td>{{$i -> role}}</td>
            
            <td id="actions">
                <a href="/admin/panel/users/edit/{{$i -> user_id}}" class="btn btn-warning" id="edit">Edit Entry</a>

                <button type="button" class="btn" id="delete" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#user_{{$i -> user_id}}">
                    Delete Entry
                </button>
            </td>

              
        </tr>

        <!-- Modal -->
<div class="modal fade" id="user_{{$i -> user_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to "Delete Entry?"</h5>
          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Caution: Deleting user is a permanent action that cannot be undone.</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>

          <form action="/admin/panel/users/{{$i -> user_id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Entry</button>
        </td>
        </form> 

        </div>
      </div>
    </div>
  </div>
        @endforeach

    </table>
</div>






    @include('layouts/footer')
    @include('layouts/script')
    
</body>
</html>