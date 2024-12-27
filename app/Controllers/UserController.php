<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function filter()
    {
        $filterData = $this->request->getPost();
$users = $this->userModel->like('id', $filterData['filterId'])
                          ->like('name', $filterData['filterName'] . '%')
                          ->like('email', $filterData['filterEmail'] . '%')
                          ->like('phone', $filterData['filterPhone'] . '%')
                          ->like('role', $filterData['filterRole'] . '%')
                          ->paginate(2);
        $data['viewpage'] = '/user/index';
        $data['data'] = ['users' => $users];  
        $data['pager'] = $this->userModel->pager;
        return view('template', $data);
    }

    public function index()
    {
        $users = $this->userModel->paginate(2);
        $data['viewpage'] = '/user/index';
        $data['data'] = ['users' => $users];
        $data['pager'] = $this->userModel->pager;
        return view('template', $data);
    }

    public function create()
    {
        return view('user/create');
    }

    public function store()
    {
        $this->userModel->save($this->request->getPost());
        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);
        return view('user/edit', $data);
    }

    public function update($id)
    {
        $this->userModel->update($id, $this->request->getPost());
        return redirect()->to('/users');
    }

    public function destroy($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/users');
    }
}
