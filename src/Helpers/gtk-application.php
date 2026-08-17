<?php

use Gtk\GTK\Application\GtkApplication;

/*
|--------------------------------------------------------------------------
| GtkApplication helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_application_new')) {
    function gtk_application_new(string $applicationId, int $flags = 0): int
    {
        return GtkApplication::gtkApplicationNew($applicationId, $flags);
    }
}

if (! function_exists('g_application_register')) {
    function g_application_register(int $app): bool
    {
        return GtkApplication::gtkApplicationRegister($app);
    }
}

if (! function_exists('gtk_application_run')) {
    function gtk_application_run(int $app): int
    {
        return GtkApplication::gtkApplicationRun($app);
    }
}

if (! function_exists('gtk_application_quit')) {
    function gtk_application_quit(int $app): void
    {
        GtkApplication::gtkApplicationQuit($app);
    }
}

if (! function_exists('gtk_application_set_menubar')) {
    function gtk_application_set_menubar(int $app, int $menuModel): void
    {
        GtkApplication::gtkApplicationSetMenubar($app, $menuModel);
    }
}

if (! function_exists('gtk_application_set_accels_for_action')) {
    /**
     * @param list<string> $accels
     */
    function gtk_application_set_accels_for_action(int $app, string $detailedAction, array $accels): void
    {
        GtkApplication::gtkApplicationSetAccelsForAction($app, $detailedAction, $accels);
    }
}
