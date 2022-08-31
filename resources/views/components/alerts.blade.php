@if ($successmsg = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $successmsg }}
    </div>
@endif

@if ($errormsg = Session::get('error'))
    <div class="alert alert-danger" role="alert">
        {{ $errormsg }}
    </div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif

@if ($warningmsg = Session::get('warning'))
    <div class="alert alert-warning" role="alert">
        {{ $warningmsg }}
    </div>
@endif
