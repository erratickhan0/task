<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table='employee';
    protected $fillable = ['name', 'email', 'company_id'];
    public function empCompany()
    {
        return $this->hasOne(Company::class,'id','company_id');
    }
}
