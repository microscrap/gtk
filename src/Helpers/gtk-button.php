<?php

use Gtk\GTK\Button\GtkButton;

/*
|--------------------------------------------------------------------------
| GtkButton helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_button_new')) {
    function gtk_button_new(): int
    {
        return GtkButton::gtkButtonNew();
    }
}

if (! function_exists('gtk_button_new_with_label')) {
    function gtk_button_new_with_label(string $label): int
    {
        return GtkButton::gtkButtonNewWithLabel($label);
    }
}

if (! function_exists('gtk_button_set_label')) {
    function gtk_button_set_label(int $button, string $label): void
    {
        GtkButton::gtkButtonSetLabel($button, $label);
    }
}

if (! function_exists('gtk_button_get_label')) {
    function gtk_button_get_label(int $button): string
    {
        return GtkButton::gtkButtonGetLabel($button);
    }
}
