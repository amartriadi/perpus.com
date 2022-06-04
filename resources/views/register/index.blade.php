@extends('layouts.app')

@section('register')
    <div class="boxRegis shadow m-auto mt-5 rounded-3 container">
        <div class="d-flex">
            <div class=" d-block justify-content-center align-items-start col-6">
                <h3 class="fs-1 fw-bold text-uppercase text-center pt-4">Perpus<span class="text-capitalize">dugam</span></h3>
                <div class="d-flex justify-content-center">
                    <img src="./img/logo.png" alt="logo.png" width="180px" class="mt-2">
                </div>
            </div>
            <form action="" class="bg-transparent py-5">
                <input type="email" class="formRegister d-block m-auto rounded-3 p-1 mb-4" id="email" placeholder="Email">
                <input type="password" class="formRegister d-block m-auto rounded-3 p-1 mt-4" id="password"
                    placeholder="Password">
                <input type="submit" id="submitRegister" class="registerSubmit m-auto mt-4 p-2">
                <div class="createAkun mt-3 text-left">
                    <p>Sudah Punya Akun? <a href="/login">Login</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
