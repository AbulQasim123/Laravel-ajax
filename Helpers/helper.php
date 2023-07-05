<?php

// Return tomorrow date

if (! function_exists('tomorrow')) {
    function tomorrow()
    {
        return now()->tomorrow();
    }
}
// Return LoggedIn check
if (! function_exists('isLoggedIn')) {
    function isLoggedIn()
    {
        return auth()->check();
    }
}
