<?php

use Gtk\GTK\SpinButton\GtkSpinButton;

/*
|--------------------------------------------------------------------------
| GtkSpinButton helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_spin_button_new_with_range')) {
    function gtk_spin_button_new_with_range(float $min, float $max, float $step): int
    {
        return GtkSpinButton::gtkSpinButtonNewWithRange($min, $max, $step);
    }
}

if (! function_exists('gtk_spin_button_set_value')) {
    function gtk_spin_button_set_value(int $spin, float $value): void
    {
        GtkSpinButton::gtkSpinButtonSetValue($spin, $value);
    }
}

if (! function_exists('gtk_spin_button_get_value')) {
    function gtk_spin_button_get_value(int $spin): float
    {
        return GtkSpinButton::gtkSpinButtonGetValue($spin);
    }
}

if (! function_exists('gtk_spin_button_get_value_as_int')) {
    function gtk_spin_button_get_value_as_int(int $spin): int
    {
        return GtkSpinButton::gtkSpinButtonGetValueAsInt($spin);
    }
}

if (! function_exists('gtk_spin_button_set_digits')) {
    function gtk_spin_button_set_digits(int $spin, int $digits): void
    {
        GtkSpinButton::gtkSpinButtonSetDigits($spin, $digits);
    }
}
