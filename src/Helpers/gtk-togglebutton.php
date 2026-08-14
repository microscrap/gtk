<?php

use Gtk\GTK\ToggleButton\GtkToggleButton;

/*
|--------------------------------------------------------------------------
| GtkToggleButton helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_toggle_button_new')) {
    function gtk_toggle_button_new(): int
    {
        return GtkToggleButton::gtkToggleButtonNew();
    }
}

if (! function_exists('gtk_toggle_button_new_with_label')) {
    function gtk_toggle_button_new_with_label(string $label): int
    {
        return GtkToggleButton::gtkToggleButtonNewWithLabel($label);
    }
}

if (! function_exists('gtk_toggle_button_set_active')) {
    function gtk_toggle_button_set_active(int $button, bool $active): void
    {
        GtkToggleButton::gtkToggleButtonSetActive($button, $active);
    }
}

if (! function_exists('gtk_toggle_button_get_active')) {
    function gtk_toggle_button_get_active(int $button): bool
    {
        return GtkToggleButton::gtkToggleButtonGetActive($button);
    }
}

if (! function_exists('gtk_toggle_button_set_label')) {
    function gtk_toggle_button_set_label(int $button, string $label): void
    {
        GtkToggleButton::gtkToggleButtonSetLabel($button, $label);
    }
}

if (! function_exists('gtk_toggle_button_get_label')) {
    function gtk_toggle_button_get_label(int $button): string
    {
        return GtkToggleButton::gtkToggleButtonGetLabel($button);
    }
}
