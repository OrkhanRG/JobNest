<?php

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

if (!function_exists('isRole')){
    function isRole(string|array $role, User|null $user=null): bool
    {
        $current_role = $user ? $user->role : auth()->user()->role;

        if (is_array($role)) {
          return in_array($current_role, $role);
        }

        return $current_role === $role ?? false;
    }
}

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

if (!function_exists('fileUpload')){
    function fileUpload(UploadedFile $file, string $folder = ''): string
    {
        $path = 'assets/custom/'.$folder;
        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fullPath = $path.'/'.$name.'.'.$extension;

        if (file_exists($fullPath)) {
            $uniqueName  = $name. '-' . Str::random(40);
            $fullPath = $path.'/'.$uniqueName.'.'.$extension;
        }

        $file->move(public_path($path), ($uniqueName ?? $name).'.'.$extension);
        return $fullPath;
    }
};
