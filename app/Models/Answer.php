<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'iscorrect'
    ];
    public function questions(){
        return $this->belongsToMany(Question::class);
    }

    protected $table = 'answers';

    public $timestamps = true;

//    protected $fillable = array('text', 'iscorrect');
//
//    public function Question()
//    {
//        return $this->belongsTo('Question');
//    }

}
