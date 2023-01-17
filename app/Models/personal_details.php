<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal_details extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey = 'pid';
    public $incrementing = false;

}
