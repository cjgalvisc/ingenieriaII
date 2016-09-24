<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacturaCompra extends Model
{
	protected $table='facturaCompra';
	protected $primaryKey='id';
    protected $fillable = ['id','fecha','total','foto','id_proveedor'];

    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }
    public function compra(){
        return $this->hasMany(Compra::class);
    }
}
