<?php

use Gtk\GTK\HeaderBar\GtkHeaderBar;

/*
|--------------------------------------------------------------------------
| GtkHeaderBar helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_header_bar_new')) {
    function gtk_header_bar_new(): int
    {
        return GtkHeaderBar::gtkHeaderBarNew();
    }
}

if (! function_exists('gtk_header_bar_set_title_widget')) {
    function gtk_header_bar_set_title_widget(int $bar, int $title_widget): void
    {
        GtkHeaderBar::gtkHeaderBarSetTitleWidget($bar, $title_widget);
    }
}

if (! function_exists('gtk_header_bar_get_title_widget')) {
    function gtk_header_bar_get_title_widget(int $bar): int
    {
        return GtkHeaderBar::gtkHeaderBarGetTitleWidget($bar);
    }
}

if (! function_exists('gtk_header_bar_pack_start')) {
    function gtk_header_bar_pack_start(int $bar, int $child): void
    {
        GtkHeaderBar::gtkHeaderBarPackStart($bar, $child);
    }
}

if (! function_exists('gtk_header_bar_pack_end')) {
    function gtk_header_bar_pack_end(int $bar, int $child): void
    {
        GtkHeaderBar::gtkHeaderBarPackEnd($bar, $child);
    }
}

if (! function_exists('gtk_header_bar_remove')) {
    function gtk_header_bar_remove(int $bar, int $child): void
    {
        GtkHeaderBar::gtkHeaderBarRemove($bar, $child);
    }
}

if (! function_exists('gtk_header_bar_set_show_title_buttons')) {
    function gtk_header_bar_set_show_title_buttons(int $bar, bool $show): void
    {
        GtkHeaderBar::gtkHeaderBarSetShowTitleButtons($bar, $show);
    }
}

if (! function_exists('gtk_header_bar_get_show_title_buttons')) {
    function gtk_header_bar_get_show_title_buttons(int $bar): bool
    {
        return GtkHeaderBar::gtkHeaderBarGetShowTitleButtons($bar);
    }
}
