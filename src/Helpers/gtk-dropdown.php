<?php

use Gtk\GTK\DropDown\GtkDropDown;

/*
|--------------------------------------------------------------------------
| GtkDropDown helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_drop_down_new_from_strings')) {
    function gtk_drop_down_new_from_strings(array $labels): int
    {
        return GtkDropDown::gtkDropDownNewFromStrings($labels);
    }
}

if (! function_exists('gtk_drop_down_set_selected')) {
    function gtk_drop_down_set_selected(int $drop, int $selected): void
    {
        GtkDropDown::gtkDropDownSetSelected($drop, $selected);
    }
}

if (! function_exists('gtk_drop_down_get_selected')) {
    function gtk_drop_down_get_selected(int $drop): int
    {
        return GtkDropDown::gtkDropDownGetSelected($drop);
    }
}
