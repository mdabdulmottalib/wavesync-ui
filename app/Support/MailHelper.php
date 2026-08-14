<?php

namespace App\Support;

class MailHelper
{
    /**
     * Break email auto-link detection by inserting zero-width spaces
     * after the @ symbol and around the final dot before the TLD.
     */
    public static function breakAutoLink(string $email): string
    {
        $escaped = e($email);

        // Break at @ symbol
        $escaped = str_replace('@', '&#64;&#8203;', $escaped);

        // Break at the LAST dot (before the TLD, e.g. .com, .net)
        $lastDotPos = strrpos($escaped, '.');
        if ($lastDotPos !== false) {
            $escaped = substr_replace($escaped, '&#8203;.', $lastDotPos, 1);
        }

        return $escaped;
    }
}