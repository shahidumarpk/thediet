<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    
 protected $table='question_answers';
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
   public function question(){
        return $this->hasOne( 'App\Question', 'id', 'question_id' )->withDefault();
    }

     public function answer(){
        return $this->hasOne( 'App\QuestionOption', 'id', 'answer_id' )->withDefault();
    }

}
