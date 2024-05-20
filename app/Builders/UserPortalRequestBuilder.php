<?php

namespace App\Builders;

use App\Enums\Type;

class PortalUserBuilder extends UserBuilder
{
    public function whereType(Type|string $type): static
    {
        if (is_string($type)) {
    	    $type = Type::from(strtolower($type));
    	}

	    return parent::whereType($type);
    }
}
