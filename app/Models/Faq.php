<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function faq_category()
    {
        return $this->belongsTo(FaqCategory::class);
    }
}
