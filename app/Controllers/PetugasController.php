<?php
namespace App\Controllers;

use App\Models\PetugasModel;
use CodeIgniter\Controller;

class PetugasController extends Controller
{
    public function index()
    {
        $petugasModel = new PetugasModel();
        $data['petugas'] = $petugasModel->findAll();
        return view('petugas/index', $data);
    }

    public function create()
    {
        return view('petugas/create');
    }

    public function store()
    {
        $petugasModel = new PetugasModel();
        $data = [
            'id_user' => $this->request->getPost('id_user'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'status' => $this->request->getPost('status'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
        ];
        $petugasModel->insert($data);
        return redirect()->to('/petugas');
    }

    public function edit($id)
    {
        $petugasModel = new PetugasModel();
        $data['petugas'] = $petugasModel->find($id);
        return view('petugas/edit', $data);
    }

    public function update($id)
    {
        $petugasModel = new PetugasModel();
        $data = [
            'id_user' => $this->request->getPost('id_user'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'status' => $this->request->getPost('status'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
        ];
        $petugasModel->update($id, $data);
        return redirect()->to('/petugas');
    }

    public function delete($id)
    {
        $petugasModel = new PetugasModel();
        $petugasModel->delete($id);
        return redirect()->to('/petugas');
    }
}
