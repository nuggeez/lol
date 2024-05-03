<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

    protected $table = 'tab_usr';
    // column sa table
    protected $fillable = [
        'username', 'password', 'jobid'
    ];

    public $timestamps = false;
    protected $primaryKey = 'id';
    
    protected $hidden = [
        'password',
    ];
}