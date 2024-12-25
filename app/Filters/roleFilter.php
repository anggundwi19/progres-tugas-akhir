<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $role = session()->get('role');  // Pastikan role disimpan di session
        if ($role == 'pegawai') {
            return redirect()->to('/pegawai/homePegawai'); 
        } else if ($role == 'pemilik') {
            return redirect()->to('pemilik/homePemilik');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu apa-apa di sini
    }
}
