<?php

namespace App\Controllers;

use App\Models\AccountModel;
use \App\Models\OrderModel;
use \App\Models\TestiModel;

class Logic extends BaseController
{

    protected $M_queue;
    protected $M_testi;
    protected $M_akun;

    public function __construct()
    {
        $this->M_queue = new OrderModel();
        $this->M_testi = new TestiModel();
        $this->M_akun = new AccountModel();
    }

    public function insert()
    {
        session();
        $this->M_queue->save([
            'pemesan' => $this->request->getPost('pemesan'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal' => $this->request->getPost('tanggal'),
        ]);

        session()->setFlashdata('success', 'Pemesanan berhasil');
        return redirect()->to('/order');
    }

    public function inserttesti()
    {
        session();
        $file = $this->request->getFile('gambar');
        $file->move('testi');
        $this->M_testi->save([
            'nama' => $this->request->getPost('nama'),
            'review' => $this->request->getPost('review'),
            'gambar' => $file->getName(),
        ]);

        session()->setFlashdata('success', 'Testimoni berhasil ditambahkan');
        return redirect()->to('/testimoni');
    }

    public function deleteQueue($id)
    {
        $this->M_queue->delete($id);
        return redirect()->to('/queue');
    }

    public function updateQueue($id)
    {
        $this->M_queue->update($id, [
            'pemesan' => $this->request->getPost('pemesan'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal' => $this->request->getPost('tanggal'),
        ]);

        return redirect()->to('/queue');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }

    public function logicLogin()
    {
        session();
        $login = $this->request->getPost('submit');

        if ($login) {
            $member_username = $this->request->getPost('member_username');
            $member_password = $this->request->getPost('member_password');

            if ($member_username == '' or $member_password == '') {
                $error = "Silahkan masukan username/password";
            }

            if (empty($error)) {
                $data = $this->M_akun->where('member_username', $member_username)->first();
                if ($data['member_password'] != $member_password) {
                    $error = "Username/password salah";
                }
            }

            if (empty($error)) {
                $dataSession = [
                    'id' => $data['id'],
                    'nama' => $data['nama'],
                    'member_username' => $data['member_username'],
                    'member_password' => $data['member_password'],
                ];
                session()->set($dataSession);
                return redirect()->to('/');
            }

            if ($error) {
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $error);
                return redirect()->to('login');
            }
        }
    }

    public function register()
    {
        $this->M_akun->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'member_username' => $this->request->getPost('member_username'),
            'member_password' => $this->request->getPost('member_password'),
        ]);
        return redirect()->to('/login');
    }
}
