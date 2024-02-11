<style>
    p {
        margin-top: 90px;
        
    }
</style>


@if (Session::has('success'))
<p class="notif bg bg-success text-light text-center">{{Session::get('success')}}</p>
@elseif (Session::has('fail'))
<p class="notif bg bg-danger text-light text-center">{{Session::get('fail')}}</p>
@endif
@foreach ($errors -> all() as $error)
    <p class="notif bg bg-danger text-light text-center">{{$error}}</p>
@endforeach

<script>
setTimeout(hide_notif, 4000);

function hide_notif() {
    $(document).ready(function () {
        $(".notif").slideUp();
    });
}
</script>