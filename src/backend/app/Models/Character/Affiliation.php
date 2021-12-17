<?php

namespace App\Models\Character;

use App\Traits\HasUniqueIdentifier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Affiliation extends Model
{
    use HasFactory, HasUniqueIdentifier;

    public $primaryKey = '_id';

    public $timestamps = false;

    protected $casts = [
        '_id'       => 'string',
        '_parentId' => 'string',
    ];

    public function parentAffiliation(): BelongsTo
    {
        return $this->belongsTo(Affiliation::class, '_parentId', '_id');
    }

    public function subAffiliations(): HasMany
    {
        return $this->hasMany(Affiliation::class, '_parentId', '_id');
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(
            Character::class,
            'character_affiliations',
            '_affiliationId',
            '_characterId'
        );
    }
}
