<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Social</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if( Auth::check() )
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Wall</a>
                    </li>
                    <li class="nav-item mr-md-2">
                        <a class="nav-link" href="{{ route('friends') }}">Friends</a>
                    </li>

                    @include('template.partials.forms.search_form')
                </ul>
            @endif

            <div class=" ml-auto">
                <ul class="nav nav-bar">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a href="" class="nav-link text-light">
                                {{ Auth::user()->getUserFullName() ?? Auth::user()->getFirstNameOrLogin() }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile', ['id' => Auth::user()->id]) }}" class="nav-link text-light">Profile edit</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link text-light">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('register.index') }}" class="nav-link text-light">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login.index') }}" class="nav-link text-light">Login</a>
                        </li>
                    @endif
                </ul>
            </div>

        </div>

    </div>
</nav>
