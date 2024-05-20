<?php

namespace App\Builders;

use App\Enums\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

/** @extends Builder<User> */
class UserBuilder extends Builder
{
    public function whereType(Type $type): static
    {
        return $this->where('type', $type->value);
    }
}

