@extends('layouts.login.app')
@section('content')
    <div class="container"><br>
        <a href="/">
            <button class="bi bi-arrow-left-circle-fill btn" style="background-color: limegreen; color:white;"> Kembali</button>
        </a>
        <br />
        <center><img src="{{ URL::asset('images/logo_pkm.png'); }}" width="150" height="150" alt="" /></center>
        <h2 class="text-center" style="color: white;"><b>&nbsp; Pemetaan Digital Covid 19</b></h2>
        <h2 class="text-center" style="color: white;"><b>&nbsp; Puskesmas Sentani</b></h2>
                <br/>
             <h3 align="center" style="color: white;">Selamat Datang</h3>
        <div class="col-md-4 col-md-offset-4">
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label style="color: white;">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label style="color: white;">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group mb-3">
                    <div class="checkbox">
                        <label style="color: white;"><input type="checkbox" name="remember"> Remember Me</label>
                    </div>
                </div>
                <button style="background-color: #00ffff; color: white;" type="submit" class="btn btn-block"><b>Log In</b></button>
                <hr>
            </form>
        </div>
    </div>
    <br><br><br>
@endsection