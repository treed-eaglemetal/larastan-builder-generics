<?php

namespace App\Enums;

enum Type: string
{
    case Admin = 'admin';
    case Author = 'author';
    case Reviewer = 'reviewer';
}
