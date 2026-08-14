<?php

use Gtk\GTK\Label\GtkLabel;

/*
|--------------------------------------------------------------------------
| GtkLabel helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_label_new')) {
    function gtk_label_new(string $text): int
    {
        return GtkLabel::gtkLabelNew($text);
    }
}

if (! function_exists('gtk_label_set_text')) {
    function gtk_label_set_text(int $label, string $text): void
    {
        GtkLabel::gtkLabelSetText($label, $text);
    }
}

if (! function_exists('gtk_label_get_text')) {
    function gtk_label_get_text(int $label): string
    {
        return GtkLabel::gtkLabelGetText($label);
    }
}
