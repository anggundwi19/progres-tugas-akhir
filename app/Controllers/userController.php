<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    // Menampilkan halaman login
    public function login()
    {
        return view('login');
    }

    // Proses login
    public function processLogin()
{
    $session = session();
    $userModel = new UserModel();

    // Ambil data input
    $userId = $this->request->getPost('id_user');
    $password = $this->request->getPost('password');

    // Cek apakah user ada
    $user = $userModel->where('id_user', $userId)->first();

    if ($user) {
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Simpan informasi ke session
            $session->set([
                'id_user' => $user['id_user'],
                'name' => $user['name'],
                'role' => $user['role'],
                'logged_in' => true
            ]);

            $session->setFlashdata('success', 'Berhasil login.');

            // Arahkan berdasarkan role
            switch ($user['role']) {
                case 'kasir':
                    return redirect()->to('/KasirController/index');
                case 'pemilik':
                    return redirect()->to('/PemilikController/index');
                
                default:
                    return redirect()->to('/user/login')->with('error', 'Role tidak valid.');
            }
        } else {
            return redirect()->to('/user/login')->with('error', 'ID User atau Password salah.');
        }
    }
}



    // Menampilkan halaman register
    public function register()
    {
        return view('register');
    }

    // Proses registrasi
    public function processRegister()
    {
        $session = session();
        $userModel = new UserModel();

        // Validasi input
        $validationRules = [
            'id_user' => 'required', 
            'name' => 'required',
            'password' => 'required', 
            'role' => 'required|in_list[kasir,pemilik]',
        ];

        if (!$this->validate($validationRules)) {
            $session->setFlashdata('error', 'Validasi gagal. Pastikan semua data benar.');
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Simpan ke database
        $userModel->insert([
            'id_user' => $this->request->getPost('id_user'),
            'name' => $this->request->getPost('name'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role'),
        ]);

        // Pesan sukses dan arahkan ke halaman login
        $session->setFlashdata('success', 'Registrasi berhasil. Silakan login.');
        return redirect()->to('/user/login');
    }

    // Logout
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/user/login');
    }
}
