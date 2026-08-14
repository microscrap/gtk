<?php

use Gtk\GTK\TextView\GtkTextView;

/*
|--------------------------------------------------------------------------
| GtkTextView helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_text_view_new')) {
    function gtk_text_view_new(): int
    {
        return GtkTextView::gtkTextViewNew();
    }
}

if (! function_exists('gtk_text_view_get_buffer')) {
    function gtk_text_view_get_buffer(int $view): int
    {
        return GtkTextView::gtkTextViewGetBuffer($view);
    }
}

if (! function_exists('gtk_text_view_set_text')) {
    function gtk_text_view_set_text(int $view, string $text): void
    {
        GtkTextView::gtkTextViewSetText($view, $text);
    }
}

if (! function_exists('gtk_text_view_get_text')) {
    function gtk_text_view_get_text(int $view): string
    {
        return GtkTextView::gtkTextViewGetText($view);
    }
}

if (! function_exists('gtk_text_view_set_editable')) {
    function gtk_text_view_set_editable(int $view, bool $editable): void
    {
        GtkTextView::gtkTextViewSetEditable($view, $editable);
    }
}

if (! function_exists('gtk_text_view_get_editable')) {
    function gtk_text_view_get_editable(int $view): bool
    {
        return GtkTextView::gtkTextViewGetEditable($view);
    }
}

if (! function_exists('gtk_text_view_set_wrap_mode')) {
    function gtk_text_view_set_wrap_mode(int $view, int $wrap_mode): void
    {
        GtkTextView::gtkTextViewSetWrapMode($view, $wrap_mode);
    }
}

if (! function_exists('gtk_text_view_get_wrap_mode')) {
    function gtk_text_view_get_wrap_mode(int $view): int
    {
        return GtkTextView::gtkTextViewGetWrapMode($view);
    }
}
