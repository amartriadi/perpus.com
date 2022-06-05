@extends('layouts.app')

@section('register')
    <div class="boxRegis shadow m-auto mt-5 rounded-3 container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <h3 class="fs-1 fw-bold text-uppercase text-center pt-4 mt-3">Perpus<span class="text-capitalize">dugam</span>
                </h3>
                <div class="d-flex justify-content-center">
                    <img src="./img/logo.png" alt="logo.png" width="180px" class="mt-2 img">
                </div>
            </div>
            <div class="col-md-6">
                <form action="/register" method="post" class="bg-transparent py-5">
                    @csrf
                    <div class="formGroup mb-4">
                        <input type="text" name="text"
                            class="formRegister rounded-3 p-1 form-control @error('text') is-invalid @enderror" id="text"
                            placeholder="Username" value="{{ old('text') }}" required>
                        @error('text')
                            <div class="col-12 ms-4 invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="formGroup mb-4">
                        <input type="email" name="email"
                            class="formRegister rounded-3 p-1 form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="col-12 ms-4 invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="formGroup mb-2">
                        <input type="password" name="password"
                            class="formRegister rounded-3 p-1 form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" value="{{ old('password') }}" required>
                        @error('password')
                            <div class="col-12 ms-4 invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="show d-flex">
                        <div class="col-6">
                            <input type="checkbox" />
                            <label for="checkbox">Show Password</label>
                        </div>
                    </div>
                    <input type="submit" id="submitRegister" class="registerSubmit m-auto mt-4 p-2">
                    <div class="createAkun mt-3 text-left">
                        <p>Sudah Punya Akun? <a href="/login">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
