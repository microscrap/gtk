<?php

use Gtk\GTK\FileDialog\GtkFileDialog;

/*
|--------------------------------------------------------------------------
| GtkFileDialog helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_file_dialog_new')) {
    function gtk_file_dialog_new(): int
    {
        return GtkFileDialog::gtkFileDialogNew();
    }
}

if (! function_exists('gtk_file_dialog_set_title')) {
    function gtk_file_dialog_set_title(int $dialog, string $title): void
    {
        GtkFileDialog::gtkFileDialogSetTitle($dialog, $title);
    }
}

if (! function_exists('gtk_file_dialog_get_title')) {
    function gtk_file_dialog_get_title(int $dialog): string
    {
        return GtkFileDialog::gtkFileDialogGetTitle($dialog);
    }
}

if (! function_exists('gtk_file_dialog_set_initial_name')) {
    function gtk_file_dialog_set_initial_name(int $dialog, string $name): void
    {
        GtkFileDialog::gtkFileDialogSetInitialName($dialog, $name);
    }
}

if (! function_exists('gtk_file_dialog_open')) {
    function gtk_file_dialog_open(int $dialog, int $parent, callable $callback): void
    {
        GtkFileDialog::gtkFileDialogOpen($dialog, $parent, $callback);
    }
}

if (! function_exists('gtk_file_dialog_save')) {
    function gtk_file_dialog_save(int $dialog, int $parent, callable $callback): void
    {
        GtkFileDialog::gtkFileDialogSave($dialog, $parent, $callback);
    }
}

if (! function_exists('gtk_file_dialog_select_folder')) {
    function gtk_file_dialog_select_folder(int $dialog, int $parent, callable $callback): void
    {
        GtkFileDialog::gtkFileDialogSelectFolder($dialog, $parent, $callback);
    }
}
