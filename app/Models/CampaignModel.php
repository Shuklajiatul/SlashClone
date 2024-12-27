<?php

namespace App\Models;

use CodeIgniter\Model;

class CampaignModel extends Model
{
    protected $table = 'campaigns';
    protected $primaryKey = 'id';
    protected $allowedFields = ['campaign_name', 'process', 'active', 'start_date', 'end_date'];
    // Additional methods for campaign-related logic can be added here
}
