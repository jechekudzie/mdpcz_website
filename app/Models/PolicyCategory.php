<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function policy_guidelines()
    {
        return $this->hasMany(PolicyGuideline::class);
    }
}
