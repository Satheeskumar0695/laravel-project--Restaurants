<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffs_registers extends Model
{
    protected $table="staffs_register";
    protected $fillable=['firstname','lastname','email_id','password','dob','age','nationality','gender','qualification','experience','role','joining','door_no','street_name','locality','city','distict','state','country','pincode','aadharcard','pancard','passbook','image','bankname','accountnumber','ifsccode','branchname'];
}
