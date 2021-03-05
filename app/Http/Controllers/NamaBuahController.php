<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaBuahController extends Controller
{
    //
    private function namabuah($id)
    {

        switch($id)
        {
        case("2"):
            return "Nama buah bilangan genap: mangga";
            break;
        case("4"):
            return "Nama buah bilangan genap: apel";
            break;
        case("6"):
            return "Nama buah bilangan genap: nanas";
            break;
        case("8"):
            return "Nama buah bilangan genap: jeruk";
            break;
        case("10"):
            return "Nama buah bilangan genap: kelengkeng";
            break;

        case(1):
            return "Nama buah bilangan ganjil: duren";
            break;
        case(3):
            return "Nama buah bilangan ganjil: rambutan";
            break;
        case(5):
            return "Nama buah bilangan ganjil: markisa";
            break;
        case(7):
            return "Nama buah bilangan ganjil: anggur";
            break;
        case(9):
            return "Nama buah bilangan ganjil: chery";
            break;

        default:
            return "Nama-nama buah";
        }
    }

    public function get(Request $request, $id)
    {
        $namabuah = $this->namabuah($id);
        return view('denny.namabuah')
        ->with('namabuah',$namabuah);
    }
}