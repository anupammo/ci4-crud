<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    protected $table = 'person';

    protected $primaryKey = 'serial_no';

    protected $allowedFields = ['p_name', 'p_sex', 'p_age', 'cell_no', 'email_id'];
}