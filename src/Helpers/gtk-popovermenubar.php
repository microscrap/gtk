<?php

use Gtk\GTK\PopoverMenuBar\GtkPopoverMenuBar;

/*
|--------------------------------------------------------------------------
| GtkPopoverMenuBar helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_popover_menu_bar_new_from_model')) {
    function gtk_popover_menu_bar_new_from_model(int $model): int
    {
        return GtkPopoverMenuBar::gtkPopoverMenuBarNewFromModel($model);
    }
}
