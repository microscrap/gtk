<?php

use Gtk\GTK\Box\GtkBox;

/*
|--------------------------------------------------------------------------
| GtkBox helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
| orientation: Orientation::HORIZONTAL->value (0) / VERTICAL (1)
*/

if (! function_exists('gtk_box_new')) {
    function gtk_box_new(int $orientation, int $spacing): int
    {
        return GtkBox::gtkBoxNew($orientation, $spacing);
    }
}

if (! function_exists('gtk_box_append')) {
    function gtk_box_append(int $box, int $child): void
    {
        GtkBox::gtkBoxAppend($box, $child);
    }
}

if (! function_exists('gtk_box_remove')) {
    function gtk_box_remove(int $box, int $child): void
    {
        GtkBox::gtkBoxRemove($box, $child);
    }
}

if (! function_exists('gtk_box_set_spacing')) {
    function gtk_box_set_spacing(int $box, int $spacing): void
    {
        GtkBox::gtkBoxSetSpacing($box, $spacing);
    }
}
