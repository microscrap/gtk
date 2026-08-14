<?php

use Gtk\GTK\Gtk;
use Gtk\GTK\GtkError;

/*
|--------------------------------------------------------------------------
| GTK core helpers — 1:1 over ext-gtk (Gtk\GTK\Gtk, GtkError)
|--------------------------------------------------------------------------
| Helper names match the C ABI (gtk_*).
*/

if (! function_exists('gtk_init_check')) {
    function gtk_init_check(): bool
    {
        return Gtk::gtkInitCheck();
    }
}

if (! function_exists('gtk_get_major_version')) {
    function gtk_get_major_version(): int
    {
        return Gtk::gtkGetMajorVersion();
    }
}

if (! function_exists('gtk_get_minor_version')) {
    function gtk_get_minor_version(): int
    {
        return Gtk::gtkGetMinorVersion();
    }
}

if (! function_exists('gtk_get_micro_version')) {
    function gtk_get_micro_version(): int
    {
        return Gtk::gtkGetMicroVersion();
    }
}

if (! function_exists('gtk_get_binary_age')) {
    function gtk_get_binary_age(): int
    {
        return Gtk::gtkGetBinaryAge();
    }
}

if (! function_exists('gtk_last_message')) {
    function gtk_last_message(): string
    {
        return GtkError::gtkLastMessage();
    }
}
