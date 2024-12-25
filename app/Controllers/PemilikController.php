<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PetugasModel; // Tambahkan namespace model

class PemilikController extends BaseController
{
    public function index()
    {

        // Ambil data dari tabel petugas
        $petugasModel = new PetugasModel();
        $data['petugas'] = $petugasModel->findAll(); // Mengambil semua data petugas

        return view('pemilik/HomePemilik', $data); // Kirim data ke view
    }
}