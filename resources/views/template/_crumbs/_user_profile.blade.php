
<div class="mb-3">
    <div class="row no-gutters">
        <div class="col-md-6 mr-2">
            <img src="{{ $user->first()->getUserAvatar() }}" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $user->first()->getUserFullName() ?? $user->first()->getFirstNameOrLogin() }}
                </h5>

                <h5 class="card-title">{{ $user->first()->email ?? 'Email:' }}</h5>

                <div class="row">
                    <div class="mr-5">
                        <p class="card-text">
                            <small class="text-muted">
                                {{ $user->first()->location ?? 'location' }}
                            </small>
                        </p>
                    </div>

                    <div class="">
                        <a class="btn btn-primary" href="{{ route('profile-edit.edit', ['profile_edit' => 3]) }}">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
