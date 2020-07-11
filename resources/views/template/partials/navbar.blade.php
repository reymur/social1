<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <div class="container">
        <a class="navbar-brand" href="#">Social</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
{{--            @if(Auth::check())--}}
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Wall</a>
                </li>
                <li class="nav-item mr-md-2">
                    <a class="nav-link" href="#">Friends</a>
                </li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>
{{--            @endif--}}

                <ul class="nav nav-bar ml-auto">
    {{--            @if(Auth::check())--}}
                    <li class="nav-item"><a href="" class="nav-link">{{--{{ Auth::user()->getNameOrUserName() }}--}}</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Edit profil</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Logout</a></li>
    {{--            @else--}}
                    <li class="nav-item"><a href="" class="nav-link">Registration</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Login</a></li>
    {{--            @endif--}}
                </ul>
        </div>

    </div>
</nav>
