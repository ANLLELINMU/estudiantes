<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myfirstmodel extends Model
{
    protected $table="estudiante";
    public $timestamps=false;
    protected $primarykey="RollNo";
   
    
    
    use HasFactory;
    


}
