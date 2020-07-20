


<div class="row mt-4 mb-5">
    <div class="col-lg-4">
        <img class="phone-register" src="{{ asset('images/phone3.1.jpg') }}" alt="Phone">
    </div>
    <div class="col-lg-4 ml-center">

        <form action="{{ route('profile-edit.update', ['profile_edit' => Auth::user()->id]) }}" method="post" class="mx-center" novalidate>
            @method('PUT')
            @csrf()

            <div class="form-group">
                <label for="login">Login *</label>
                <input type="text" name="login" class="form-control {{ $errors->has('login') ? 'is-invalid': '   ' }}" id="login" value="{{ old('login') ?? Auth::user()->login}}">
                @if($errors->has('login'))
                    <apan class="invalid-feedback">{{ $errors->first('login') }}</apan>
                @endif
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid': ''}}" id="email" value="{{ old('email') ?? Auth::user()->email }}" placeholder="your email">
                @if($errors->has('email'))
                    <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" name="first_name" class="form-control {{ $errors->has('first_name') ? 'is-invalid': '' }}"  {{ old('first_name') ? Auth::user()->first_name : '' }}id="first_name">
                <div class="invalid-feedback">
                    @if($errors->has('first_name'))
                        {{ $errors->first('first_name') }}
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" class="form-control {{ $errors->has('last_name') ? 'is-invalid': '' }}"  {{ old('last_name') ? Auth::user()->last_name : '' }} id="last_name">
                <div class="invalid-feedback">
                    @if($errors->has('last_name'))
                        {{ $errors->first('last_name') }}
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="Location">Location</label>
                <input type="text" name="location" class="form-control {{ $errors->has('location') ? 'is-invalid': '' }}"  {{ old('location') ? Auth::user()->location : '' }} id="location">
                <div class="invalid-feedback">
                    @if($errors->has('location'))
                        {{ $errors->first('location') }}
                    @endif
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>

    </div>
</div>
