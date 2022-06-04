@extends('layouts.app')

@section('login')
    <div class="box shadow m-auto mt-5 p-4 rounded-3">
        <div class="">
            <div class="itemsLogin d-flex text-center justify-content-center">
                <h3 class="fs-1 fw-bold text-uppercase m-4 p-3">Perpus<span class="text-capitalize">dugam</span></h3>
            </div>
            <form action="" class="bg-transparent">
                <input type="email" class="formRegister d-block m-auto rounded-3 p-1 mb-4" id="email" placeholder="Email">
                <input type="password" class="formRegister d-block m-auto rounded-3 p-1 mt-4" id="password"
                    placeholder="Password">
                <div class="mt-2 ms-2 ms-md-5">
                    <input type="checkbox" class="ms-2"> Show Password</input>
                </div>
                <input type="submit" id="submitRegister" class="registerSubmit m-auto mt-4 p-2">
                <div class="createAkun mt-3 text-center">
                    <p>Belum Punya Akun? <a href="/register">Buat Akun</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
