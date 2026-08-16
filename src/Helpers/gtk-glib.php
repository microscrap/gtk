<?php

use Gtk\GTK\GtkGLib;

/*
|--------------------------------------------------------------------------
| GLib / GObject helpers — 1:1 over ext-gtk GtkGLib
|--------------------------------------------------------------------------
| g_signal_connect is a GClosure marshaler: PHP return values are written
| back to GTK (gboolean render must return true).
*/

if (! function_exists('g_object_ref')) {
    function g_object_ref(int $instance): int
    {
        return GtkGLib::gObjectRef($instance);
    }
}

if (! function_exists('g_object_unref')) {
    function g_object_unref(int $instance): void
    {
        GtkGLib::gObjectUnref($instance);
    }
}

if (! function_exists('g_signal_connect')) {
    function g_signal_connect(int $instance, string $signal, callable $callback): int
    {
        return GtkGLib::gSignalConnect($instance, $signal, $callback);
    }
}

if (! function_exists('g_main_context_default')) {
    function g_main_context_default(): int
    {
        return GtkGLib::gMainContextDefault();
    }
}

if (! function_exists('g_main_context_iteration')) {
    function g_main_context_iteration(int $context, bool $mayBlock): bool
    {
        return GtkGLib::gMainContextIteration($context, $mayBlock);
    }
}
