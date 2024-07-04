<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'programs';
    protected $primaryKey = 'progid';
    public $timestamps = false;

    protected $fillable = ['progfullname', 'progshortname', 'progcollid', 'progcolldeptid'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'progcolldeptid', 'deptid');
    }

    public function college()
    {
        return $this->belongsTo(College::class, 'progcollid', 'collid');
    }
}
