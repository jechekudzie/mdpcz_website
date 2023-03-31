<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyGuideline extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function policy_category()
    {
        return $this->belongsTo(PolicyCategory::class);
    }

    public function policy_type()
    {
        return $this->belongsTo(PolicyType::class);
    }

}
