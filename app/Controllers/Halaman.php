<?php

namespace App\Controllers;

use \App\Models\OrderModel;
use \App\Models\TestiModel;
use \App\Models\AccountModel;

class Halaman extends BaseController
{

    protected $M_queue;
    protected $M_testi;
    protected $M_akun;
    protected $table = 'order_cukur';
    private $db;

    public function __construct()
    {
        $this->M_queue = new OrderModel();
        $this->M_testi = new TestiModel();
        $this->M_akun = new AccountModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data = [
            'judul' => "Home",
        ];
        return view('Home', $data);
    }

    public function testimoni()
    {
        $data = [
            'judul' => "Testimoni",
            'antrian' => $this->M_testi->paginate(6, 'antrian'),
            'pager' => $this->M_testi->pager
        ];
        return view('Testimoni', $data);
    }

    public function order()
    {
        $data = [
            'judul' => "Order",
        ];
        return view('Order', $data);
    }

    public function queue()
    {
        $data = [
            'judul' => "Queue",
            'antrian' => $this->db->table($this->table)->orderBy('tanggal', 'asc')->get()->getResult()
        ];
        return view('Queue', $data);
    }

    public function login()
    {

        $data = [
            'judul' => "Login",
        ];
        return view('Login', $data);
    }

    public function register()
    {
        $data = [
            'judul' => "Register",
        ];
        return view('Register', $data);
    }

    public function tambahtesti()
    {
        $data = [
            'judul' => "Tambah Testimoni",
        ];
        return view('AddTesti', $data);
    }

    public function editantrean($id)
    {
        $data = [
            'judul' => "Edit Antrean",
            'antrian' => $this->M_queue->getQueue($id)
        ];
        return view('EditQueue', $data);
    }
}
