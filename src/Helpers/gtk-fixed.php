<?php

use Gtk\GTK\Fixed\GtkFixed;

/*
|--------------------------------------------------------------------------
| GtkFixed helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
| x/y are ints. Child w/h is gtk_widget_set_size_request.
*/

if (! function_exists('gtk_fixed_new')) {
    function gtk_fixed_new(): int
    {
        return GtkFixed::gtkFixedNew();
    }
}

if (! function_exists('gtk_fixed_put')) {
    function gtk_fixed_put(int $fixed, int $child, int $x, int $y): void
    {
        GtkFixed::gtkFixedPut($fixed, $child, $x, $y);
    }
}

if (! function_exists('gtk_fixed_move')) {
    function gtk_fixed_move(int $fixed, int $child, int $x, int $y): void
    {
        GtkFixed::gtkFixedMove($fixed, $child, $x, $y);
    }
}

if (! function_exists('gtk_fixed_remove')) {
    function gtk_fixed_remove(int $fixed, int $child): void
    {
        GtkFixed::gtkFixedRemove($fixed, $child);
    }
}

if (! function_exists('gtk_fixed_get_child_position')) {
    /**
     * @return array{x: int, y: int}
     */
    function gtk_fixed_get_child_position(int $fixed, int $child): array
    {
        return GtkFixed::gtkFixedGetChildPosition($fixed, $child);
    }
}
