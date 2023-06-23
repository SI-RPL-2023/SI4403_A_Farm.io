<?php

namespace App\Models;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";

    protected $fillable =[
        'id','user_id','guruTernak_id', 'course_id', 'username','status','evidence','cover','title','price','type','created_at'
    ];


    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    public function guru () {
        return $this->belongsTo(Guru::class, 'guruTernak_id', 'id');
    }
    public function course () {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }
}