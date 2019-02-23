<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    
 protected $table='user_information';
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
   

}
