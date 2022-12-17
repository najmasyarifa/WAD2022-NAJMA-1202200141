<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showrooms;

class CarController extends Controller
{
    public function AddCar(Request $tambah) {
        $insert = $tambah -> validate([
            'nama' => 'max:255',
            'owner' => 'max:255',
            'brand' => 'max:255',
            'purchase_date' => '',
            'description' => '',
            'image' => 'image|file',
            'status' => ''
        ]);

        Showrooms::create($insert);

        return redirect('/homepage')->with('success', 'Selamat! Anda berhasil menambahkan list showrooms.');
    }

    // public function MyCar() {
    //     $car = new Showrooms;

    //     $index = $car::all();

    //     $nama = $index->nama;
    // }
}
