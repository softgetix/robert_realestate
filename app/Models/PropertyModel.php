<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class PropertyModel extends Model
{
    use HasFactory;

    protected $table = 'property';
    protected $primaryKey = 'id';

    // public function propertiesTax(): HasOne
    // {
    //     return $this->hasOne('\App\Models\PropertyTaxModel','property_id');
    // }
}
