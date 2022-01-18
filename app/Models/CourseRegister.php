<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CourseRegister extends Authenticatable 
{
    use HasFactory,Notifiable;

    protected $table = 'course_registers';
    protected $fillable = ['name', 'phone', 'password'];
   
}
