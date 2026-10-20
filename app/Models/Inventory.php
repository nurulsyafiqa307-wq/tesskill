<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'inventaris_id', 'barang', 'type', 'serial_number', 
        'spesifikasi', 'status', 'assign', 'department'
    ];
}