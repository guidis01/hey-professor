<?php

use App\Models\User;

//helper functions!!

function user(): ?User
{
    if (auth()->check()) {
        return auth()->user();
    }

    return null;
}
