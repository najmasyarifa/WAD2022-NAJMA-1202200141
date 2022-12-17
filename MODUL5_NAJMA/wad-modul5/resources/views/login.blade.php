<?php
    session_start();
    $connector = mysqli_connect("localhost:3308", "root", "","wad_modul4");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD Rent Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <!-- Tampilan Login -->
    <div class="container-fluid">
        <div class="row">

            <!-- Alert Notification -->
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('failed'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Kolom Kanan -->
            <div class="col">
                 <div class="card border-0" >
                    <img class="my-auto mx-auto rounded-3" src="{{ asset('image/BMW.jpg') }}" style="width: 100%; height: 609px;">
                </div>
            </div>

            <!-- Kolom kiri -->
            <div class="col" style="width: 600px;">
                <div  class="my-auto">
                    <form class="mx-auto" style="width: 90%;" method="POST" action="/login">

                        @csrf
                        <!-- Header -->
                        <h3 style="padding-top: 120px;"> Login </h3>
                        <p style="color: grey;"></p>
            
                        <!-- Form Input -->
                        <div class="row">
                            <div class="labeltext pt-1">
                                <label for="email"> <b>Email</b>  </label>
                            </div>
                            <div class="textinput pt-1">
                                <input class="@error('email') is-invalid @enderror" type="email" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="email" id="email" autofocus required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
            
                            <div class="labeltext pt-1">
                                <label for="password"> <b> Kata Sandi </b> </label>
                            </div>
                            <div class="textinput pt-1">
                                <input class= "@error('repassword') is-invalid @enderror" type="password" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="password" id="password" required>
                                @error('repassword')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="textinput pt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value="remember" id="remember">
                                    <label class="form-check-label" for="remember" style="font-weight: normal;">
                                      Remember me
                                    </label>
                                  </div>
                            </div>
            
                            <div class="d-grid gap-2 pt-4">
                                <button class="btn btn-dark bg-primary" type="submit" name="login" id="login" style="width:100px;"> Login </button>
                            </div>

                            <div class="d-flex pt-4">
                                <p>Anda belum punya akun?</p>
                                <a style="margin-left: 5px;" href="/register">Register</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>