@extends('admin.layout')

@section('contenu')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            
        <div class="modal-dialog text-center">
            <div class="col-sm-9 main-section" style="margin: 0 auto; margin-top: 50px; padding: 0;">
                <div class="modal-content" style="background-color: #3F704D; padding: 0 5px; border-radius: 10px;">
                    <div class="col-12 logo">
                        <img src="{{ asset('images/monlogo.png') }}" class="lelogo" alt="le logo" 
                        style=" height : 120px; width : 120px; background-color: white; border-radius: 50%">
                    </div>
                    <div class="col-12 form-input">
                 <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="text-center col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="row">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                placeholder="Votre email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-center col-form-label">{{ __('Password') }}</label>

                            <div class="row">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                placeholder="Mot de passe" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Se connecter
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Mot de passe oublié
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection
