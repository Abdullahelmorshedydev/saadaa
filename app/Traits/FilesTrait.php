<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait FilesTrait
{
    public static function store(UploadedFile $file, string $publicStoragePath): string
    {
        $path = $file->store($publicStoragePath, 'public');
        return $path;
    }

    public static function delete(string $path)
    {
        if (Storage::exists('public/' . $path)) {
            Storage::delete('public/' . $path);
            return true;
        }
        return false;
    }
}
