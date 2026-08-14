<?php

use Gtk\GTK\ColorDialog\GtkColorDialog;

/*
|--------------------------------------------------------------------------
| GtkColorDialog helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_color_dialog_new')) {
    function gtk_color_dialog_new(): int
    {
        return GtkColorDialog::gtkColorDialogNew();
    }
}

if (! function_exists('gtk_color_dialog_set_title')) {
    function gtk_color_dialog_set_title(int $dialog, string $title): void
    {
        GtkColorDialog::gtkColorDialogSetTitle($dialog, $title);
    }
}

if (! function_exists('gtk_color_dialog_set_modal')) {
    function gtk_color_dialog_set_modal(int $dialog, bool $modal): void
    {
        GtkColorDialog::gtkColorDialogSetModal($dialog, $modal);
    }
}

if (! function_exists('gtk_color_dialog_choose_rgba')) {
    function gtk_color_dialog_choose_rgba(int $dialog, int $parent, callable $callback): void
    {
        GtkColorDialog::gtkColorDialogChooseRgba($dialog, $parent, $callback);
    }
}
