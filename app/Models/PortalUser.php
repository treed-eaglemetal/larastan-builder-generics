<?php

namespace App\Models;

use App\Builders\UserPortalRequestBuilder;

class PortalUser extends User
{
    public function newEloquentBuilder($query): UserPortalRequestBuilder
    {
	return new UserPortalRequestBuilder($query);
    }
}
