<?php

namespace App\Models;

use App\Builders\UserPortalRequestBuilder;

class PortalUser extends User
{
    public function newEloquentBuilder($query): PortalUserBuilder
    {
	    return new PortalUserBuilder($query);
    }
}
