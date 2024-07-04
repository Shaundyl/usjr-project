<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $table = 'colleges';
    protected $primaryKey = 'collid';
    public $timestamps = false;

    protected $fillable = ['collfullname', 'collshortname'];

    public function departments()
    {
        return $this->hasMany(Department::class, 'deptcollid', 'collid');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'progcollid', 'collid');
    }
}


