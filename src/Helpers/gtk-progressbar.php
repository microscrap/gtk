<?php

use Gtk\GTK\ProgressBar\GtkProgressBar;

/*
|--------------------------------------------------------------------------
| GtkProgressBar helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_progress_bar_new')) {
    function gtk_progress_bar_new(): int
    {
        return GtkProgressBar::gtkProgressBarNew();
    }
}

if (! function_exists('gtk_progress_bar_set_fraction')) {
    function gtk_progress_bar_set_fraction(int $bar, float $fraction): void
    {
        GtkProgressBar::gtkProgressBarSetFraction($bar, $fraction);
    }
}

if (! function_exists('gtk_progress_bar_get_fraction')) {
    function gtk_progress_bar_get_fraction(int $bar): float
    {
        return GtkProgressBar::gtkProgressBarGetFraction($bar);
    }
}

if (! function_exists('gtk_progress_bar_set_text')) {
    function gtk_progress_bar_set_text(int $bar, string $text): void
    {
        GtkProgressBar::gtkProgressBarSetText($bar, $text);
    }
}

if (! function_exists('gtk_progress_bar_get_text')) {
    function gtk_progress_bar_get_text(int $bar): string
    {
        return GtkProgressBar::gtkProgressBarGetText($bar);
    }
}

if (! function_exists('gtk_progress_bar_set_show_text')) {
    function gtk_progress_bar_set_show_text(int $bar, bool $show_text): void
    {
        GtkProgressBar::gtkProgressBarSetShowText($bar, $show_text);
    }
}

if (! function_exists('gtk_progress_bar_pulse')) {
    function gtk_progress_bar_pulse(int $bar): void
    {
        GtkProgressBar::gtkProgressBarPulse($bar);
    }
}
