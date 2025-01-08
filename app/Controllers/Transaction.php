<?php

namespace App\Controllers;

use App\Models\TransactionModel;
use App\Models\UserModel;

class Transaction extends BaseController
{
    protected $model, $user;

    public function __construct()
    {
        $this->model = new TransactionModel();
        $this->user = new UserModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $trans = $this->model->search($keyword);
        } else {
            $trans = $this->model->findAll();
        }
        $data = [
            'trans' => $trans
        ];
        return view('trans/index', $data);
    }

    public function show($id = null)
    {
        $book = $this->model->find($id);
        return $this->respond($book, 200);
    }

    public function save()
    {
        $data = [
            'no_bukti_transaksi' => $this->request->getVar('no_bukti_transaksi'),
            'no_polisi' => $this->request->getVar('no_polisi'),
            'pemilik' => $this->request->getVar('pemilik'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
            'tarif' => $this->request->getVar('tarif'),
            'status' => $this->request->getVar('status'),
        ];
    
        $this->model->insert($data);
    
        session()->setFlashdata('msg', 'Transaksi berhasil ditambahkan.');
        return redirect()->to('admin/transaction');
    }
    

    public function update($id)
    {
        $transLama = $this->model->getBuku($id);
        if ($transLama[0]['judul'] == $this->request->getVar('judul')) {
            $this->model->setValidationRule('judul', 'required');
        } else {
            $this->model->setValidationRule('judul', 'required|is_unique[trans.judul]');
        }

        $coverFile = $this->request->getFile('gambar');
        if ($coverFile->getError() == 4) {
            $coverName = $this->request->getVar('oldcover');
        } else {
            $coverName = $coverFile->getName();
            $coverFile->move('cover');
            if ($this->request->getVar('oldcover') != 'default.png') {
                unlink('cover/' . $this->request->getVar('oldcover'));
            }
        }

        $bookFile = $this->request->getFile('file');
        if ($bookFile->getError() == 4) {
            $fileName = $this->request->getVar('oldfile');
        } else {
            $fileName = $bookFile->getName();
            $bookFile->move('files');
            if ($this->request->getVar('oldfile') != 'default.pdf') {
                unlink('files/' . $this->request->getVar('oldfile'));
            }
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $data = [
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'id_penulis' => $this->request->getVar('id_penulis'),
            'id_penerbit' => $this->request->getVar('id_penerbit'),
            'kategori' => $this->request->getVar('kategori'),
            'genre' => $this->request->getVar('genre'),
            'gambar' => $coverName,
            'stok' => $this->request->getVar('stok'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'file' => $fileName,
        ];
        if ($this->validate($this->model->validationRules)) {
            $this->model->update($id, $data);
            session()->setFlashdata('msg', 'Data trans berhasil diubah.');
            return redirect()->to('admin/trans');
        } else {
            session()->setFlashdata('judul', $this->validator->getError('judul'));
            session()->setFlashdata('id_penulis', $this->validator->getError('id_penulis'));
            session()->setFlashdata('id_penerbit', $this->validator->getError('id_penerbit'));
            session()->setFlashdata('kategori', $this->validator->getError('kategori'));
            session()->setFlashdata('genre', $this->validator->getError('genre'));
            session()->setFlashdata('stok', $this->validator->getError('stok'));
            session()->setFlashdata('deskripsi', $this->validator->getError('deskripsi'));
            
            return redirect()->to('/trans/edit/' . $id)->withInput();
        }
        // var_dump($data);
    }

    public function delete($id)
    {
        $book = $this->model->find($id);
        if ($book) {
            if ($book['gambar'] != "default.png" && $book['file'] != "default.pdf") {
                unlink('cover/' . $book['gambar']);
                unlink('files/' . $book['file']);
            } else if ($book['file'] != "default.pdf") {
                unlink('files/' . $book['file']);
            } else if ($book['gambar'] != "default.png") {
                unlink('cover/' . $book['gambar']);
            }
            $this->model->delete($id);
            session()->setFlashdata('pesan', 'Data berhasil dihapus.');
            return redirect()->to('admin/trans');
        } else {
            return $this->fail(['message' => 'Book Data not found, can not be deleted'], 409);
        }
    }

    public function create()
    {
        return view('trans/create');
    }

    public function edit($id)
    {
        $data = [
            'title'  => "Update Buku | E-Library",
            'trans' => $this->model->getBuku($id)
        ];
        return view('trans/edit', $data);
    }

    public function detail($id)
    {
        $user = session()->get('id_user');
        $trans = $this->model->getBuku($id);
        $data = [
            'trans' => $trans,
        ];

        return view('trans/detail', $data);
    }
}