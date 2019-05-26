<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ClasseViews extends Model {
    
   protected $fillable = ['nom_classe'];
   protected $table = 'cdt_classe';

}