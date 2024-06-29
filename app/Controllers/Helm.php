<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HelmModel;
use CodeIgniter\HTTP\ResponseInterface;

class Helm extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new HelmModel();
        $this->helpers = ['form', 'url'];

    }

    public function index()
    {
        $data = [
            'posts' => $this->model->paginate(10),
            'pager' => $this->model->pager,
            'title' => 'List Helm'
        ];

        return view('dashboard', $data);
    }
}
