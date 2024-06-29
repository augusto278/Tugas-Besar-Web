<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class RegisterController extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $data = [
            'title' => 'Register | Trio Coding'
        ];

        return view('auth/register', $data);
    }

    public function store()
    {
        $data = $this->request->getPost(['nama', 'email', 'password']);

        if (! $this->validateData($data, $this->model->validationRules)) {
            return $this->index();
        }

        $user = $this->validator->getValidated();

        $save = $this->model->save($user);

        if ($save) {
            session()->setFlashdata('success', 'Registrasi Berhasil');
            return redirect()->to(base_url('login'));
        }else {
            session()->setFlashdata('error', $this->model->errors());
            return redirect()->back();
        }
    }
}

