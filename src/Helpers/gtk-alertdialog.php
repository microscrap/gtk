<?php

use Gtk\GTK\AlertDialog\GtkAlertDialog;

/*
|--------------------------------------------------------------------------
| GtkAlertDialog helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_alert_dialog_new')) {
    function gtk_alert_dialog_new(string $message): int
    {
        return GtkAlertDialog::gtkAlertDialogNew($message);
    }
}

if (! function_exists('gtk_alert_dialog_set_detail')) {
    function gtk_alert_dialog_set_detail(int $dialog, string $detail): void
    {
        GtkAlertDialog::gtkAlertDialogSetDetail($dialog, $detail);
    }
}

if (! function_exists('gtk_alert_dialog_set_buttons')) {
    function gtk_alert_dialog_set_buttons(int $dialog, array $labels): void
    {
        GtkAlertDialog::gtkAlertDialogSetButtons($dialog, $labels);
    }
}

if (! function_exists('gtk_alert_dialog_set_modal')) {
    function gtk_alert_dialog_set_modal(int $dialog, bool $modal): void
    {
        GtkAlertDialog::gtkAlertDialogSetModal($dialog, $modal);
    }
}

if (! function_exists('gtk_alert_dialog_show')) {
    function gtk_alert_dialog_show(int $dialog, int $parent): void
    {
        GtkAlertDialog::gtkAlertDialogShow($dialog, $parent);
    }
}

if (! function_exists('gtk_alert_dialog_choose')) {
    function gtk_alert_dialog_choose(int $dialog, int $parent, callable $callback): void
    {
        GtkAlertDialog::gtkAlertDialogChoose($dialog, $parent, $callback);
    }
}
