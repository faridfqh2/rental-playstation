@include('layouts.app')
@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<body class="blog-details-page">
  <div class="wrap py-3">
    <div class="container-lg">
      <div class="d-flex justify-content-center mb-2">
        <h2>Login</h2>
      </div>
    </div>
    <div class="container py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card">
            <div class="row g-0">
              <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('img/stik.jpg') }}" alt="Login image" class="img-fluid login-image">
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5">

                  @if ($errors->has('loginError'))
            <div class="alert alert-danger">{{ $errors->first('loginError') }}</div>
          @endif
                  @if ($errors->has('kosong'))
            <div class="alert alert-warning">{{ $errors->first('kosong') }}</div>
          @endif

                  <form action="{{ route('login.proses') }}" method="POST">
                    @csrf

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-user-shield fa-2x me-2" style="color: #e0a800;"></i>
                      <span class="h1 fw-bold mb-0">Rental Playstation</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3">Sign into your account</h5>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="email">Email address</label>
                      <input type="email" name="email" id="email" class="form-control form-control-lg" required
                        value="{{ old('email') }}" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control form-control-lg"
                        required />
                    </div>

                    <div class="form-check mb-3">
                      <input type="checkbox" name="remember" class="form-check-input" id="remember">
                      <label class="form-check-label" for="remember">Remember me</label>
                    </div>

                    <div class="mb-4">
                      <button class="btn btn-primary btn-lg w-100 btn-dark" type="submit">Login</button>
                    </div>

                    <div class="text-center">
                      {{-- <a class="small text-muted" href="#">Forgot password?</a> --}}
                      <p class="mt-3 mb-2">Don't have an account? <a href="{{route('register')}}">Register
                          here</a></p>
                      <a href="#" class="small text-muted me-2">Terms of use</a>
                      <a href="#" class="small text-muted">Privacy policy</a>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>