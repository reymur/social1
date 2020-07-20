
<div class="mb-3">
    <div class="row no-gutters">
        <div class="col-md-2 mr-2">
            <img class="friend-block-image" src="{{ $user->getUserAvatar() }}" alt="Avatar">
        </div>

        <div class="mt-auto">
            <h5 class="mb-2">
                {{ $user->getUserFullName() ?? $user->getFirstNameOrLogin() }}
            </h5>
        </div>
    </div>
</div>
