<?php

use Gtk\GTK\PopoverMenu\GtkPopoverMenu;

/*
|--------------------------------------------------------------------------
| GtkPopoverMenu helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_popover_menu_new_from_model')) {
    function gtk_popover_menu_new_from_model(int $model): int
    {
        return GtkPopoverMenu::gtkPopoverMenuNewFromModel($model);
    }
}
