<?php

namespace App\Models;

use App\Filters\Trait\EloquentFilterTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory, SoftDeletes, EloquentFilterTrait;

    protected $fillable = [
        'poll_id',
        'question_theme_id',
        'type',
        'image',
        'video',
        'bg_image',
        'status',
    ];

    public function translation(): HasOne
    {
        return $this->HasOne(QuestionTranslation::class, 'question_id', 'id')->where('locale', App::getLocale());
    }

    public function translations(): HasMany
    {
        return $this->hasMany(QuestionTranslation::class, 'question_id', 'id');
    }

    public function options(): HasMany
    {
        return $this->hasMany(Option::class, 'question_id', 'id');
    }
}
