<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
 

    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
   public function category(){
        return $this->hasOne( 'App\Category', 'id', 'category_id' )->withDefault();
    }

    public function option(){
        return $this->hasMany( 'App\QuestionOption', 'question_id', 'id' );
    }

}
