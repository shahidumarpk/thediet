<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    
    protected $table = 'siteconfigs';
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
   

}
