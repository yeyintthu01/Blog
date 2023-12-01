<?php

namespace App\Models;

class Blog
{
    public static function find($slug)
    {
        // $path=__DIR__."/../resources/";
        $path=resource_path("blogs/$slug.html");
        if(!file_exists($path)) {
            abort(404);
        }

        return cache()->remember("posts.$slug", now()->addMinutes(1), function () use ($path) {
            return file_get_contents($path);
        });
    }
}