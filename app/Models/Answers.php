<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questions;
class Answers extends Model
{
    use HasFactory;
     public function questions()
{
    return $this->hasOne(Questions::class, 'id', 'question_id');
}
}
