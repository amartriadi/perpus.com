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
                <form action="" class="bg-transparent py-5">
                    <input type="email" class="formRegister rounded-3 p-1 mb-4" id="email" placeholder="Email">
                    <input type="password" class="formRegister rounded-3 p-1 mb-2" id="password" placeholder="Password">
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
