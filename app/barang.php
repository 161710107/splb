<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
 protected $table = 'barangs';
    protected $fillable = ['nama_barang','gambar','kondisi','stok'];
    public $timestamps = true;

 public function peminjam() 
    {
		return $this->hasMany('App\peminjam','barang_id');
	}
}