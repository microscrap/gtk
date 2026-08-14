<?php

use Gtk\GTK\SingleSelection\GtkSingleSelection;

/*
|--------------------------------------------------------------------------
| GtkSingleSelection helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_single_selection_new')) {
    function gtk_single_selection_new(int $model): int
    {
        return GtkSingleSelection::gtkSingleSelectionNew($model);
    }
}

if (! function_exists('gtk_single_selection_set_selected')) {
    function gtk_single_selection_set_selected(int $selection, int $position): void
    {
        GtkSingleSelection::gtkSingleSelectionSetSelected($selection, $position);
    }
}

if (! function_exists('gtk_single_selection_get_selected')) {
    function gtk_single_selection_get_selected(int $selection): int
    {
        return GtkSingleSelection::gtkSingleSelectionGetSelected($selection);
    }
}

if (! function_exists('gtk_single_selection_get_model')) {
    function gtk_single_selection_get_model(int $selection): int
    {
        return GtkSingleSelection::gtkSingleSelectionGetModel($selection);
    }
}
