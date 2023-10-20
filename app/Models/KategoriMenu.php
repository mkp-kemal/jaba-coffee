<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriMenu extends Model
{
    use HasFactory;
    protected $primaryKey = "id_kategori_menu";
    public function menu()
    {
        return $this->hasMany(Menu::class,"id_menu","id_menu");
    }

}
