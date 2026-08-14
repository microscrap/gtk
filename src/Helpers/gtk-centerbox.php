<?php

use Gtk\GTK\CenterBox\GtkCenterBox;

/*
|--------------------------------------------------------------------------
| GtkCenterBox helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_center_box_new')) {
    function gtk_center_box_new(): int
    {
        return GtkCenterBox::gtkCenterBoxNew();
    }
}

if (! function_exists('gtk_center_box_set_start_widget')) {
    function gtk_center_box_set_start_widget(int $box, int $child): void
    {
        GtkCenterBox::gtkCenterBoxSetStartWidget($box, $child);
    }
}

if (! function_exists('gtk_center_box_set_center_widget')) {
    function gtk_center_box_set_center_widget(int $box, int $child): void
    {
        GtkCenterBox::gtkCenterBoxSetCenterWidget($box, $child);
    }
}

if (! function_exists('gtk_center_box_set_end_widget')) {
    function gtk_center_box_set_end_widget(int $box, int $child): void
    {
        GtkCenterBox::gtkCenterBoxSetEndWidget($box, $child);
    }
}

if (! function_exists('gtk_center_box_get_start_widget')) {
    function gtk_center_box_get_start_widget(int $box): int
    {
        return GtkCenterBox::gtkCenterBoxGetStartWidget($box);
    }
}

if (! function_exists('gtk_center_box_get_center_widget')) {
    function gtk_center_box_get_center_widget(int $box): int
    {
        return GtkCenterBox::gtkCenterBoxGetCenterWidget($box);
    }
}

if (! function_exists('gtk_center_box_get_end_widget')) {
    function gtk_center_box_get_end_widget(int $box): int
    {
        return GtkCenterBox::gtkCenterBoxGetEndWidget($box);
    }
}
