<?php
$connector = mysqli_connect("localhost:3308", "root", "","wad_modul4");
?>   

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD Rent Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
    <!-- Navbar -->
    @include ('navbar')
    
    <!-- Form Tambah Mobil -->
    <div class="container-fluid py-2 mx-auto">
        <form style="margin-left: 100px; margin-right: 300px;" method="POST" action="/addcar" enctype="multipart/form-data">
            
            @csrf
            <!-- Header -->
            <h3> Tambah Mobil </h3>
            <p style="color: grey;"> Tambah mobil baru anda ke list show room</p>
            <br>

            <!-- Form Input -->
            <div class="row">
                <div class="labeltext pt-2">
                    <label for="car"> <b>Nama Mobil</b>  </label>
                </div>
                <div class="textinput pt-2">
                    <input class="@error('nama') is-invalid @enderror"type="text" style="width: 100%; padding: 7px;" name="nama" id="nama" placeholder="Nama Mobil Anda" required>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="labeltext pt-2">
                    <label for="name"> <b>Nama Pemilik</b>  </label>
                </div>
                <div class="textinput pt-2">
                    <input class="@error('owner') is-invalid @enderror" type="text" style="width: 100%; padding: 7px;" name="owner" id="owner" placeholder="Nama Anda" required>
                    @error('owner')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="labeltext pt-2">
                    <label for="merk"> <b>Merk Mobil</b>  </label>
                </div>
                <div class="textinput pt-2">
                    <input class="@error('brand') is-invalid @enderror" type="text" style="width: 100%; padding: 7px;" name="brand" id="brand" placeholder="Merk Mobil Anda" required>
                    @error('brand')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="labeltext pt-2">
                    <label for="date"> <b> Tanggal Beli </b> </label>
                </div>
                <div class="textinput pt-2">
                    <input class="form-control @error('purchase_date') is-invalid @enderror" type="date" style="width: 100%; padding: 7px;" name="purchase_date" id="purchase_date" required>
                    @error('purchase_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="labeltext pt-2">
                    <label for="desc"> <b>Deskripsi</b>  </label>
                </div>
                <div class="textinput pt-2">
                    <textarea class="@error('description') is-invalid @enderror" style="width: 100%; padding: 7px;" name="description" id="description" placeholder="Masukan Deskripsi Mobil Anda" required></textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="labeltext pt-2">
                    <label for="foto"> <b> Foto Mobil </b> </label>
                </div>
                <div class="formfile pt-2">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" style="width: 100%; padding: 7px; border-color: black; border-radius: 2px;" name="image" id="image" required>
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="labeltext pt-2">
                    <label for="status"> <b>Status Pembayaran</b> </label>
                </div>

                <div class="radio pt-2">
                    <div class="form-check">
                        <input class="form-check-input @error('status') is-invalid @enderror" " type="radio" name="status" value="Lunas" id="statuslunas" required>
                        <label class="form-check-label" for="status" style="font-weight: normal;">
                          Lunas
                        </label>
                    </div>
                
                    <div class="form-check">
                        <input class="form-check-input @error('status') is-invalid @enderror" " type="radio" name="status" value="Belum Lunas" id="statuskredit" required>
                        <label class="form-check-label" for="status" style="font-weight: normal;">
                          Belum Lunas
                        </label>
                    </div>
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-grid gap-2 pt-3">
                    <button class="btn btn-dark bg-primary" type="submit" name="submit" id="submit" style="width:100px;"> Selesai </button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
