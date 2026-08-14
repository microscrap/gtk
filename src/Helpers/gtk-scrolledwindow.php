<?php

use Gtk\GTK\ScrolledWindow\GtkScrolledWindow;

/*
|--------------------------------------------------------------------------
| GtkScrolledWindow helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_scrolled_window_new')) {
    function gtk_scrolled_window_new(): int
    {
        return GtkScrolledWindow::gtkScrolledWindowNew();
    }
}

if (! function_exists('gtk_scrolled_window_set_child')) {
    function gtk_scrolled_window_set_child(int $scrolled, int $child): void
    {
        GtkScrolledWindow::gtkScrolledWindowSetChild($scrolled, $child);
    }
}

if (! function_exists('gtk_scrolled_window_get_child')) {
    function gtk_scrolled_window_get_child(int $scrolled): int
    {
        return GtkScrolledWindow::gtkScrolledWindowGetChild($scrolled);
    }
}

if (! function_exists('gtk_scrolled_window_set_policy')) {
    function gtk_scrolled_window_set_policy(int $scrolled, int $hscrollbar, int $vscrollbar): void
    {
        GtkScrolledWindow::gtkScrolledWindowSetPolicy($scrolled, $hscrollbar, $vscrollbar);
    }
}

if (! function_exists('gtk_scrolled_window_set_min_content_height')) {
    function gtk_scrolled_window_set_min_content_height(int $scrolled, int $height): void
    {
        GtkScrolledWindow::gtkScrolledWindowSetMinContentHeight($scrolled, $height);
    }
}

if (! function_exists('gtk_scrolled_window_set_min_content_width')) {
    function gtk_scrolled_window_set_min_content_width(int $scrolled, int $width): void
    {
        GtkScrolledWindow::gtkScrolledWindowSetMinContentWidth($scrolled, $width);
    }
}
