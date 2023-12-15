<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyModel extends Model
{
    use HasFactory;

    protected $table = 'properties';


    public function propertiesTax(): HasMany
    {
        return $this->hasMany('\App\Models\PropertyTaxModel', 'property_id');
    }
    public function propertyImage(): HasMany
    {
        return $this->hasMany('\App\Models\PropertyImageModel', 'property_id');
    }
    public function propertiesDocument(): HasMany
    {
        return $this->hasMany('\App\Models\PropertyTaxModel', 'property_id');
    }
}
