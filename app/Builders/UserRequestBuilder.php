<?php

namespace App\Builders;

use App\Enums\Type;

class UserRequestBuilder extends UserBuilder
{
    public function whereType(Type|string $type): static
    {
        if (is_string($type)) {
	    $type = Type::from($type);
	}

	return parent::whereType($type);
    }
}
