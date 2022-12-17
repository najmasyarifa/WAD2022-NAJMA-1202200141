<!-- <?php
// session_start();
?> -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD Rent Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <!-- Tampilan Form -->
    <div class="container-fluid">       
        <div class="row">
            <!-- Kolom Kanan -->
            <div class="col">
                 <div class="card border-0" >
                    <img class="my-auto mx-auto rounded-3" src="{{ asset('image/BMW.jpg') }}" style="width: 100%; height: 609px;">
                </div>
            </div>

            <!-- Kolom kiri -->
            <div class="col" style="width: 600px;">
                <div  class="my-auto">
                    <form class="mx-auto" style="width: 90%;" method="POST" action="/register">
                        
                        @csrf
                        <!-- Header -->
                        <h3 style="padding-top: 30px;"> Register </h3>
                        <p style="color: grey;"></p>
            
                        <!-- Form Input -->
                        <div class="row">
                            <div class="labeltext pt-1">
                                <label for="email"> <b>Email</b>  </label>
                            </div>
                            <div class="textinput pt-1">
                                <input class="@error('email') is-invalid @enderror" type="email" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="email" id="email" value="{{ old('email')}}" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
            
                            <div class="labeltext pt-1">
                                <label for="nama"> <b>Nama</b>  </label>
                            </div>
                            <div class="textinput pt-1">
                                <input type="text" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="nama" id="nama" value="{{ old('nama')}}" required>
                            </div>
            
                            <div class="labeltext pt-1">
                                <label for="nohp"> <b>Nomor Handphone</b>  </label>
                            </div>
                            <div class="textinput pt-1">
                                <input type="tel" max="12" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="no_hp" id="no_hp" value="{{ old('no_hp')}}" required>
                            </div>
            
                            <div class="labeltext pt-1">
                                <label for="password"> <b> Kata Sandi </b> </label>
                            </div>
                            <div class="textinput pt-1">
                                <input class="@error('password') is-invalid @enderror" type="password" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="password" id="password" value="{{ old('password')}}" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
            
                            <div class="labeltext pt-1">
                                <label for="repassword"> <b>Konfirmasi Sandi</b>  </label>
                            </div>
                            <div class="textinput pt-1">
                                <input class= "@error('repassword') is-invalid @enderror" type="password" style="width: 100%; padding: 7px; border-radius: 10px; border-width: 1px;" name="repassword" id="repassword" onkeyup="check();" required>
                                @error('repassword')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
            
                            <div class="d-grid gap-2 pt-4">
                                <button class="btn btn-dark bg-primary" type="submit" name="daftar" id="daftar" style="width:100px;"> Daftar </button>
                            </div>

                            <div class="d-flex pt-4">
                                <p>Anda sudah punya akun?</p>
                                <a style="margin-left: 5px;" href="/login">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>