@if(count($errors) > 0)
        <div class="alert alert-danger mb-0 text-center tiishop_alert" >
            <ul >
                @foreach($errors->all() as $error)
                <li >{{$error}}</li>
                @endforeach
            </ul>
        </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success text-center mb-0 tiishop_alert">{{Session::get('success')}}</div>
@elseif(Session::has('error'))
    <div class="alert alert-danger text-center mb-0 tiishop_alert">{{Session::get('error')}}</div>
@endif
