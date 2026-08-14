<?php

use Gtk\GTK\Spinner\GtkSpinner;

/*
|--------------------------------------------------------------------------
| GtkSpinner helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_spinner_new')) {
    function gtk_spinner_new(): int
    {
        return GtkSpinner::gtkSpinnerNew();
    }
}

if (! function_exists('gtk_spinner_start')) {
    function gtk_spinner_start(int $spinner): void
    {
        GtkSpinner::gtkSpinnerStart($spinner);
    }
}

if (! function_exists('gtk_spinner_stop')) {
    function gtk_spinner_stop(int $spinner): void
    {
        GtkSpinner::gtkSpinnerStop($spinner);
    }
}

if (! function_exists('gtk_spinner_set_spinning')) {
    function gtk_spinner_set_spinning(int $spinner, bool $spinning): void
    {
        GtkSpinner::gtkSpinnerSetSpinning($spinner, $spinning);
    }
}

if (! function_exists('gtk_spinner_get_spinning')) {
    function gtk_spinner_get_spinning(int $spinner): bool
    {
        return GtkSpinner::gtkSpinnerGetSpinning($spinner);
    }
}
