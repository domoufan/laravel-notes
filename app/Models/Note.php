<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Note extends Model
{
    protected $fillable = ['title', 'content'];

}
use Spatie\Permission\Models\Role;

Role::create(['name' => 'admin']);
Role::create(['name' => 'etudiant']);
Role::create(['name' => 'professeur']);