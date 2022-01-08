<?php

declare(strict_types=1);

namespace App\Utilities\CharacterFilters;

use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;

class Gender extends QueryFilter implements FilterContract
{

    public function handle(mixed $value): void
    {
        $this->query->whereIn('gender', $value);
    }
}
