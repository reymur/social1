
@if($users)
    @foreach($users as $user)
        <div class=" m-2 col-lg-2 float-left">
            <a href="{{ route('profile', ['id' => $user->id]) }}">
                <img src="{{ $user->getUserAvatar() }}" alt="Avatar">
            </a>
            <div class="card-body">
                <h5 class="text-dark">
                    {{ $user->getUserFullName() ?? $user->getUserNameOrLogin() }}
                </h5>
                <h5 class="text-dark">{{ $user->email ?? '' }}</h5>
                <p class="text-dark">{{ $user->location ?? 'not location' }}</p>
            </div>
        </div>
    @endforeach
@endif
