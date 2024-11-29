<?php namespace Custom\Defaults;

use System\Classes\BaseExtension;

class Extension extends BaseExtension
{
    public function register() {} // Optional: If you need to register services or routes

    public function boot()
    {
        // Load the event listeners
        require_once __DIR__.'/events.php';
    }

    public function registerSettings() {} // Optional: Add admin settings for the extension
}
