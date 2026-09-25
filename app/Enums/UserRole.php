<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case READER = 'reader';
    case EDITOR = 'editor';
}
