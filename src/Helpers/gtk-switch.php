<?php

use Gtk\GTK\GtkSwitch\GtkSwitch;

/*
|--------------------------------------------------------------------------
| GtkSwitch helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_switch_new')) {
    function gtk_switch_new(): int
    {
        return GtkSwitch::gtkSwitchNew();
    }
}

if (! function_exists('gtk_switch_set_active')) {
    function gtk_switch_set_active(int $sw, bool $active): void
    {
        GtkSwitch::gtkSwitchSetActive($sw, $active);
    }
}

if (! function_exists('gtk_switch_get_active')) {
    function gtk_switch_get_active(int $sw): bool
    {
        return GtkSwitch::gtkSwitchGetActive($sw);
    }
}
