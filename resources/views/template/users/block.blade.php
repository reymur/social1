
@if($users)
    @foreach($users as $user)
        <div class="card m-2 col-lg-4 float-left" style="width: 16rem;">
            <a href="">
                <img src="{{ asset('images/image.svg') }}" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <h5 class="card-title text-dark">{{ $user->getUserFullNames() }}</h5>
                <h5 class="card-title text-dark">{{ $user->email ?? '' }}</h5>
                <p class="card-text text-dark">{{ $user->location ?? 'not location' }}</p>
            </div>
        </div>
    @endforeach
@endif
