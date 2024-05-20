<?php

namespace App\Models;

use App\Builders\PortalUserBuilder;

class PortalUser extends User
{
    public function newEloquentBuilder($query): PortalUserBuilder
    {
	    return new PortalUserBuilder($query);
    }
}
