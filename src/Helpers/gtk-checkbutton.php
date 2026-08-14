<?php

use Gtk\GTK\CheckButton\GtkCheckButton;

/*
|--------------------------------------------------------------------------
| GtkCheckButton helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_check_button_new')) {
    function gtk_check_button_new(): int
    {
        return GtkCheckButton::gtkCheckButtonNew();
    }
}

if (! function_exists('gtk_check_button_new_with_label')) {
    function gtk_check_button_new_with_label(string $label): int
    {
        return GtkCheckButton::gtkCheckButtonNewWithLabel($label);
    }
}

if (! function_exists('gtk_check_button_set_label')) {
    function gtk_check_button_set_label(int $button, string $label): void
    {
        GtkCheckButton::gtkCheckButtonSetLabel($button, $label);
    }
}

if (! function_exists('gtk_check_button_get_label')) {
    function gtk_check_button_get_label(int $button): string
    {
        return GtkCheckButton::gtkCheckButtonGetLabel($button);
    }
}

if (! function_exists('gtk_check_button_set_active')) {
    function gtk_check_button_set_active(int $button, bool $active): void
    {
        GtkCheckButton::gtkCheckButtonSetActive($button, $active);
    }
}

if (! function_exists('gtk_check_button_get_active')) {
    function gtk_check_button_get_active(int $button): bool
    {
        return GtkCheckButton::gtkCheckButtonGetActive($button);
    }
}
