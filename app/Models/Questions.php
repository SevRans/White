<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answers;
class Questions extends Model
{
    use HasFactory;
    public function answers()
    {
        return $this->hasMany(Answers::class, 'question_id', 'id');
    }

}
