<?php

use Gtk\GTK\Scale\GtkScale;

/*
|--------------------------------------------------------------------------
| GtkScale helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_scale_new_with_range')) {
    function gtk_scale_new_with_range(int $orientation, float $min, float $max, float $step): int
    {
        return GtkScale::gtkScaleNewWithRange($orientation, $min, $max, $step);
    }
}

if (! function_exists('gtk_scale_set_value')) {
    function gtk_scale_set_value(int $scale, float $value): void
    {
        GtkScale::gtkScaleSetValue($scale, $value);
    }
}

if (! function_exists('gtk_scale_get_value')) {
    function gtk_scale_get_value(int $scale): float
    {
        return GtkScale::gtkScaleGetValue($scale);
    }
}

if (! function_exists('gtk_scale_set_draw_value')) {
    function gtk_scale_set_draw_value(int $scale, bool $draw_value): void
    {
        GtkScale::gtkScaleSetDrawValue($scale, $draw_value);
    }
}

if (! function_exists('gtk_scale_set_digits')) {
    function gtk_scale_set_digits(int $scale, int $digits): void
    {
        GtkScale::gtkScaleSetDigits($scale, $digits);
    }
}
