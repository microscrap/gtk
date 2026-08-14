<?php

use Gtk\GTK\Overlay\GtkOverlay;

/*
|--------------------------------------------------------------------------
| GtkOverlay helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_overlay_new')) {
    function gtk_overlay_new(): int
    {
        return GtkOverlay::gtkOverlayNew();
    }
}

if (! function_exists('gtk_overlay_set_child')) {
    function gtk_overlay_set_child(int $overlay, int $child): void
    {
        GtkOverlay::gtkOverlaySetChild($overlay, $child);
    }
}

if (! function_exists('gtk_overlay_get_child')) {
    function gtk_overlay_get_child(int $overlay): int
    {
        return GtkOverlay::gtkOverlayGetChild($overlay);
    }
}

if (! function_exists('gtk_overlay_add_overlay')) {
    function gtk_overlay_add_overlay(int $overlay, int $child): void
    {
        GtkOverlay::gtkOverlayAddOverlay($overlay, $child);
    }
}

if (! function_exists('gtk_overlay_remove_overlay')) {
    function gtk_overlay_remove_overlay(int $overlay, int $child): void
    {
        GtkOverlay::gtkOverlayRemoveOverlay($overlay, $child);
    }
}
