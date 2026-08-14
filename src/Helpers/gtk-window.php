<?php

use Gtk\GTK\Window\GtkWindow;

/*
|--------------------------------------------------------------------------
| GtkWindow helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
| Opaque window/widget ints. 0 is NULL.
*/

if (! function_exists('gtk_window_new')) {
    function gtk_window_new(): int
    {
        return GtkWindow::gtkWindowNew();
    }
}

if (! function_exists('gtk_application_window_new')) {
    function gtk_application_window_new(int $app): int
    {
        return GtkWindow::gtkApplicationWindowNew($app);
    }
}

if (! function_exists('gtk_window_set_title')) {
    function gtk_window_set_title(int $window, string $title): void
    {
        GtkWindow::gtkWindowSetTitle($window, $title);
    }
}

if (! function_exists('gtk_window_get_title')) {
    function gtk_window_get_title(int $window): string
    {
        return GtkWindow::gtkWindowGetTitle($window);
    }
}

if (! function_exists('gtk_window_set_default_size')) {
    function gtk_window_set_default_size(int $window, int $width, int $height): void
    {
        GtkWindow::gtkWindowSetDefaultSize($window, $width, $height);
    }
}

if (! function_exists('gtk_window_get_default_size')) {
    /**
     * @return array{width: int, height: int}
     */
    function gtk_window_get_default_size(int $window): array
    {
        return GtkWindow::gtkWindowGetDefaultSize($window);
    }
}

if (! function_exists('gtk_window_set_child')) {
    function gtk_window_set_child(int $window, int $child): void
    {
        GtkWindow::gtkWindowSetChild($window, $child);
    }
}

if (! function_exists('gtk_window_get_child')) {
    function gtk_window_get_child(int $window): int
    {
        return GtkWindow::gtkWindowGetChild($window);
    }
}

if (! function_exists('gtk_window_present')) {
    function gtk_window_present(int $window): void
    {
        GtkWindow::gtkWindowPresent($window);
    }
}

if (! function_exists('gtk_window_close')) {
    function gtk_window_close(int $window): void
    {
        GtkWindow::gtkWindowClose($window);
    }
}

if (! function_exists('gtk_window_destroy')) {
    function gtk_window_destroy(int $window): void
    {
        GtkWindow::gtkWindowDestroy($window);
    }
}

if (! function_exists('gtk_window_set_titlebar')) {
    function gtk_window_set_titlebar(int $window, int $titlebar): void
    {
        GtkWindow::gtkWindowSetTitlebar($window, $titlebar);
    }
}

if (! function_exists('gtk_window_get_titlebar')) {
    function gtk_window_get_titlebar(int $window): int
    {
        return GtkWindow::gtkWindowGetTitlebar($window);
    }
}

