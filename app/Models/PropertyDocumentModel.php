<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDocumentModel extends Model
{
    use HasFactory;

    protected $table = 'properties_document';

    protected $fillable = ['document_key', 'document_value'];


    public function propertyModel()
    {
        return $this->belongsTo(PropertyModel::class, 'property_id');
    }

}
