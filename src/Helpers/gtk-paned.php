<?php

use Gtk\GTK\Paned\GtkPaned;

/*
|--------------------------------------------------------------------------
| GtkPaned helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_paned_new')) {
    function gtk_paned_new(int $orientation): int
    {
        return GtkPaned::gtkPanedNew($orientation);
    }
}

if (! function_exists('gtk_paned_set_start_child')) {
    function gtk_paned_set_start_child(int $paned, int $child): void
    {
        GtkPaned::gtkPanedSetStartChild($paned, $child);
    }
}

if (! function_exists('gtk_paned_set_end_child')) {
    function gtk_paned_set_end_child(int $paned, int $child): void
    {
        GtkPaned::gtkPanedSetEndChild($paned, $child);
    }
}

if (! function_exists('gtk_paned_get_start_child')) {
    function gtk_paned_get_start_child(int $paned): int
    {
        return GtkPaned::gtkPanedGetStartChild($paned);
    }
}

if (! function_exists('gtk_paned_get_end_child')) {
    function gtk_paned_get_end_child(int $paned): int
    {
        return GtkPaned::gtkPanedGetEndChild($paned);
    }
}

if (! function_exists('gtk_paned_set_position')) {
    function gtk_paned_set_position(int $paned, int $position): void
    {
        GtkPaned::gtkPanedSetPosition($paned, $position);
    }
}

if (! function_exists('gtk_paned_get_position')) {
    function gtk_paned_get_position(int $paned): int
    {
        return GtkPaned::gtkPanedGetPosition($paned);
    }
}
