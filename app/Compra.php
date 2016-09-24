<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
    protected $table='compra';
    protected $fillable = ['cantidad','subtotal','id_facturaCompra','id_producto'];
    public function faturaCompra(){
        return $this->belongsTo(FacturaCompra::class);
    }
    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
