<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedAsset extends Model
{ 
    use HasFactory;

    protected $table            = 'fixed_assets';
    protected $primaryKey       = 'id';     
    protected $useAutoIncrement = true;
    protected $returnType       = 'array'; 
    protected $useSoftDeletes   = false;  
    protected $protectFields    = true; 
    protected $fillable    = ['code','name','description','serial_number','class','status','model','supplier_name','current_value','disposal_date','warranty_code','warranty_start_date','warranty_end_date','warranty_period'];
}
           