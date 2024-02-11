@if(Session::get("role") == "admin")
    @include("layouts/navbar_admin")
@elseif(Session::get("role") == "user")
    @include("layouts/navbar_user")
@elseif(Session::get("role") == "delivery")
    @include("layouts/navbar_delivery")
@else
    @include("layouts/navbar_public")
@endif()