<?php

use Gtk\GTK\ListView\GtkListView;

/*
|--------------------------------------------------------------------------
| GtkListView helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_list_view_new')) {
    function gtk_list_view_new(int $model, int $factory): int
    {
        return GtkListView::gtkListViewNew($model, $factory);
    }
}

if (! function_exists('gtk_list_view_set_model')) {
    function gtk_list_view_set_model(int $view, int $model): void
    {
        GtkListView::gtkListViewSetModel($view, $model);
    }
}

if (! function_exists('gtk_list_view_get_model')) {
    function gtk_list_view_get_model(int $view): int
    {
        return GtkListView::gtkListViewGetModel($view);
    }
}

if (! function_exists('gtk_list_view_set_factory')) {
    function gtk_list_view_set_factory(int $view, int $factory): void
    {
        GtkListView::gtkListViewSetFactory($view, $factory);
    }
}
