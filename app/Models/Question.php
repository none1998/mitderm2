<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'published'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function Answer()
    {
        return $this->hasMany('App\Models\Answer');
    }

    public function getQuestions(){
        return Question::all();
    }
    protected $table = 'question';
    public $timestamps = true;
//
//    protected $dates = ['deleted_at'];
//    protected $fillable = array('title', 'published');
//
//
//    public function Answer()
//    {
//        return $this->hasMany('Answer');
//    }

}
