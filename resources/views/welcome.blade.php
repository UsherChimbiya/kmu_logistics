@include('layouts.welcome')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links color-white">
            @auth
                <a style="color: white" href="{{ route('login') }}">Admin</a>
            @else
                <a style="color: white" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">

        <div class="title m-b-md">
            <center>
                <h1>KMU - LOGISTICS</h1>
            </center>
            <div class="clockStyle" id="clock">123</div>

        </div>


    </div>
</div>
