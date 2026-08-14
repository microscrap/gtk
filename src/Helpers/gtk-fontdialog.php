<?php

use Gtk\GTK\FontDialog\GtkFontDialog;

/*
|--------------------------------------------------------------------------
| GtkFontDialog helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_font_dialog_new')) {
    function gtk_font_dialog_new(): int
    {
        return GtkFontDialog::gtkFontDialogNew();
    }
}

if (! function_exists('gtk_font_dialog_set_title')) {
    function gtk_font_dialog_set_title(int $dialog, string $title): void
    {
        GtkFontDialog::gtkFontDialogSetTitle($dialog, $title);
    }
}

if (! function_exists('gtk_font_dialog_set_modal')) {
    function gtk_font_dialog_set_modal(int $dialog, bool $modal): void
    {
        GtkFontDialog::gtkFontDialogSetModal($dialog, $modal);
    }
}

if (! function_exists('gtk_font_dialog_choose_font')) {
    function gtk_font_dialog_choose_font(int $dialog, int $parent, callable $callback): void
    {
        GtkFontDialog::gtkFontDialogChooseFont($dialog, $parent, $callback);
    }
}
