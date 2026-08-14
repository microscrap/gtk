<?php

use Gtk\GTK\Popover\GtkPopover;

/*
|--------------------------------------------------------------------------
| GtkPopover helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_popover_new')) {
    function gtk_popover_new(): int
    {
        return GtkPopover::gtkPopoverNew();
    }
}

if (! function_exists('gtk_popover_set_child')) {
    function gtk_popover_set_child(int $popover, int $child): void
    {
        GtkPopover::gtkPopoverSetChild($popover, $child);
    }
}

if (! function_exists('gtk_popover_get_child')) {
    function gtk_popover_get_child(int $popover): int
    {
        return GtkPopover::gtkPopoverGetChild($popover);
    }
}

if (! function_exists('gtk_popover_popup')) {
    function gtk_popover_popup(int $popover): void
    {
        GtkPopover::gtkPopoverPopup($popover);
    }
}

if (! function_exists('gtk_popover_popdown')) {
    function gtk_popover_popdown(int $popover): void
    {
        GtkPopover::gtkPopoverPopdown($popover);
    }
}

if (! function_exists('gtk_popover_set_autohide')) {
    function gtk_popover_set_autohide(int $popover, bool $autohide): void
    {
        GtkPopover::gtkPopoverSetAutohide($popover, $autohide);
    }
}
