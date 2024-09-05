<?php

if (!function_exists('isDeveloper')){
    function isDeveloper(): bool
    {
        return auth()->user()->role === 'developer' ?? false;
    }
}

if (!function_exists('isCompany')){
    function isCompany(): bool
    {
        return auth()->user()->role === 'company' ?? false;
    }
}

if (!function_exists('isCandidate')){
    function isCandidate(): bool
    {
        return auth()->user()->role === 'candidate' ?? false;
    }
}
