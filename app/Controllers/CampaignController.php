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

        $campaigns = $this->campaignModel->paginate(2);
        $data['viewpage'] = '/campaign/index';
        $data['data'] = ['campaigns' => $campaigns];
        $data['pager'] = $this->campaignModel->pager;
        return view('template', $data);
    
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
        return redirect()->to('/campaigns')->with('success', 'Campaign created successfully!');
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
        return redirect()->to('/campaigns')->with('success', 'Campaign updated successfully!');
    }

    public function filter()
    {
        $filterData = $this->request->getPost();
        $campaigns = $this->campaignModel->like('id', $filterData['filterId'])
                                          ->like('campaign_name', $filterData['filterName'] . '%')
                                          ->like('process', $filterData['filterProcess'] . '%')
                                          ->like('active', $filterData['filterActive'] . '%')
                                          ->paginate(2);
        $data['viewpage'] = '/campaign/index';
        $data['data'] = ['campaigns' => $campaigns];
        $data['pager'] = $this->campaignModel->pager;
        return view('template', $data);

       
    }

    public function delete($id)
    {
        $this->campaignModel->delete($id);
        return redirect()->to('/campaigns')->with('success', 'Campaign deleted successfully!');
    }
}
