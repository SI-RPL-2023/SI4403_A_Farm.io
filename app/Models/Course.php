<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Guru;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "courses";

    protected $fillable =[
        'id',
        'title',
        'guruTernak_id', 
        'skillLevel',
        'video', 
        'description',
        'rating',
        'price',
        'type',
        'created_at',
        'thumbnail'
    ];


    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    public function guruternak() {
        return $this->belongsTo(Guruternak::class, 'guruTernak_id', 'id');
    }
    public function order () {
        return $this->belongsTo(Order::class, 'id', 'course_id');
    }
}
