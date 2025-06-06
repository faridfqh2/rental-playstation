@include('layouts.app')

<body class="blog-details-page">
    <div class="wrap py-3">
        <div class="container-lg">
            <div class="d-flex justify-content-center mb-2">
                <h2>Register</h2>
            </div>
        </div>
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 d-none d-md-block">
                                <img src="{{ asset('img/stik.jpg') }}" alt="Register image"
                                    class="img-fluid login-image">
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5">

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('register.proses') }}" method="POST">
                                        @csrf

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="nama">Full Name</label>
                                            <input type="text" name="nama" id="nama"
                                                class="form-control form-control-lg" required
                                                value="{{ old('nama') }}" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="phone">Phone Number</label>
                                            <input type="text" name="phone" id="phone"
                                                class="form-control form-control-lg" required
                                                value="{{ old('phone') }}" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Email address</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control form-control-lg" required
                                                value="{{ old('email') }}" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" name="password" id="password"
                                                class="form-control form-control-lg" required />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password_confirmation">Confirm
                                                Password</label>
                                            <input type="password" name="password_confirmation"
                                                id="password_confirmation" class="form-control form-control-lg"
                                                required />
                                        </div>

                                        <div class="mb-4">
                                            <button class="btn btn-success btn-lg w-100 btn-dark"
                                                type="submit">Register</button>
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