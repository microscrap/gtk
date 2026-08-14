<?php

use Gtk\GTK\Separator\GtkSeparator;

/*
|--------------------------------------------------------------------------
| GtkSeparator helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_separator_new')) {
    function gtk_separator_new(int $orientation): int
    {
        return GtkSeparator::gtkSeparatorNew($orientation);
    }
}
