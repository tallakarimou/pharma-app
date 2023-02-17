@extends('master.loginex')

@section('content')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="post" action="{{ route('login') }}">
        @csrf
        <div class="card card-login card-hidden">
          <div class="card-header card-header-rose text-center">
            <h4 class="card-title">Login</h4>

          </div>
          <div class="card-body ">
            <p class="card-description text-center">Or Be Classical</p>

            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
            </span>
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </span>
         </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-rose">
                {{ __('Let\'s go') }}
            </button>

          </div>
        </div>
      </form>
    </div>
  </div>

@endsection

