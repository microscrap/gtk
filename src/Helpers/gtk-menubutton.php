<?php

use Gtk\GTK\MenuButton\GtkMenuButton;

/*
|--------------------------------------------------------------------------
| GtkMenuButton helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_menu_button_new')) {
    function gtk_menu_button_new(): int
    {
        return GtkMenuButton::gtkMenuButtonNew();
    }
}

if (! function_exists('gtk_menu_button_set_label')) {
    function gtk_menu_button_set_label(int $button, string $label): void
    {
        GtkMenuButton::gtkMenuButtonSetLabel($button, $label);
    }
}

if (! function_exists('gtk_menu_button_get_label')) {
    function gtk_menu_button_get_label(int $button): string
    {
        return GtkMenuButton::gtkMenuButtonGetLabel($button);
    }
}

if (! function_exists('gtk_menu_button_set_popover')) {
    function gtk_menu_button_set_popover(int $button, int $popover): void
    {
        GtkMenuButton::gtkMenuButtonSetPopover($button, $popover);
    }
}

if (! function_exists('gtk_menu_button_get_popover')) {
    function gtk_menu_button_get_popover(int $button): int
    {
        return GtkMenuButton::gtkMenuButtonGetPopover($button);
    }
}

if (! function_exists('gtk_menu_button_popup')) {
    function gtk_menu_button_popup(int $button): void
    {
        GtkMenuButton::gtkMenuButtonPopup($button);
    }
}

if (! function_exists('gtk_menu_button_popdown')) {
    function gtk_menu_button_popdown(int $button): void
    {
        GtkMenuButton::gtkMenuButtonPopdown($button);
    }
}
