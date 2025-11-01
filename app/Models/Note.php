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

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // ✅ Importation du trait

class Note extends Model
{
    use HasFactory, SoftDeletes; // ✅ Activation du soft delete

    protected $fillable = ['title', 'content'];
}


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // ✅ à importer

class Note extends Model
{
    use HasFactory, SoftDeletes; // ✅ activation du soft delete

    protected $fillable = ['title', 'content'];
}
