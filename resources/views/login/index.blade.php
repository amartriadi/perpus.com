@extends('layouts.app')

@section('login')
    <div class="box shadow m-auto mt-5 p-4 rounded-3">
        <div class="text-center">
            <div class="itemsLogin d-flex justify-content-center">
                <h3 class="fs-1 fw-bold text-uppercase m-4 p-3">Perpus<span class="text-capitalize">dugam</span></h3>
            </div>
            <form action="" class="text-center bg-transparent">
                <input type="email" class="formRegister d-block m-auto rounded-3 p-1 mb-4" id="email" placeholder="Email">
                <input type="password" class="formRegister d-block m-auto rounded-3 p-1 mt-4" id="password"
                    placeholder="Password">
                <input type="submit" id="submitRegister" class="registerSubmit m-auto mt-5 p-2">
                <div class="createAkun mt-3 text-left">
                    <p>Belum Punya Akun? <a href="/register">Buat Akun</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
