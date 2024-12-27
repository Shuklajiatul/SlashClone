<?php

namespace App\Controllers;

use App\Models\CampaignModel;

class CampaignController extends BaseController
{
    protected $campaignModel;

    public function __construct()
    {
        $this->campaignModel = new CampaignModel();
    }

    public function index()
    {
        // $data['pager'] = $this->campaignModel->pager; // Add pager to the data
        // $data['campaigns'] = $this->campaignModel->paginate(2); // Use paginate() with 2 items per page
        // return view('campaign/index', $data);

        $data['campaigns'] = $this->campaignModel->paginate(2);

        $users = $this->campaignModel->paginate(2);
        $data['viewpage'] = '/campaign/index';
        $data['data'] = ['users' => $users];
        // $data['users'] = $this->userModel->paginate($perPage);
        // $pager = $this->userModel->pager; // Get the pager instance
        $data['pager'] = $this->campaignModel->pager;
        // log_message('info', 'Users retrieved: ' . json_encode($users));
        return view('template2', $data);
        
        
    }

    public function create()
    {
        return view('campaign/create');
    }

    public function store()
    {
        $this->campaignModel->save([
            'campaign_name' => $this->request->getPost('campaign_name'),
            'process' => $this->request->getPost('process'),
            'active' => $this->request->getPost('active'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date'),
        ]);
        return redirect()->to('/campaigns')->with('success', 'Campaign created successfully!'); // Updated redirect
    }

    public function edit($id)
    {
        log_message('info', 'Edit campaign request for ID: ' . $id);
        $data['campaign'] = $this->campaignModel->find($id);
        return view('campaign/edit', $data);
    }

    public function update($id)
    {
        $this->campaignModel->update($id, [
            'campaign_name' => $this->request->getPost('campaign_name'),
            'process' => $this->request->getPost('process'),
            'active' => $this->request->getPost('active'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date'),
        ]);
        return redirect()->to('/campaigns')->with('success', 'Campaign updated successfully!'); // Updated redirect
    }

    public function delete($id)
    {
        $this->campaignModel->delete($id);
        return redirect()->to('/campaigns')->with('success', 'Campaign deleted successfully!'); // Updated redirect
    }
}
