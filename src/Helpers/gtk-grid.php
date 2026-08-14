<?php

use Gtk\GTK\Grid\GtkGrid;

/*
|--------------------------------------------------------------------------
| GtkGrid helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_grid_new')) {
    function gtk_grid_new(): int
    {
        return GtkGrid::gtkGridNew();
    }
}

if (! function_exists('gtk_grid_attach')) {
    function gtk_grid_attach(int $grid, int $child, int $column, int $row, int $width, int $height): void
    {
        GtkGrid::gtkGridAttach($grid, $child, $column, $row, $width, $height);
    }
}

if (! function_exists('gtk_grid_remove')) {
    function gtk_grid_remove(int $grid, int $child): void
    {
        GtkGrid::gtkGridRemove($grid, $child);
    }
}

if (! function_exists('gtk_grid_set_row_spacing')) {
    function gtk_grid_set_row_spacing(int $grid, int $spacing): void
    {
        GtkGrid::gtkGridSetRowSpacing($grid, $spacing);
    }
}

if (! function_exists('gtk_grid_set_column_spacing')) {
    function gtk_grid_set_column_spacing(int $grid, int $spacing): void
    {
        GtkGrid::gtkGridSetColumnSpacing($grid, $spacing);
    }
}

if (! function_exists('gtk_grid_set_row_homogeneous')) {
    function gtk_grid_set_row_homogeneous(int $grid, bool $homogeneous): void
    {
        GtkGrid::gtkGridSetRowHomogeneous($grid, $homogeneous);
    }
}

if (! function_exists('gtk_grid_set_column_homogeneous')) {
    function gtk_grid_set_column_homogeneous(int $grid, bool $homogeneous): void
    {
        GtkGrid::gtkGridSetColumnHomogeneous($grid, $homogeneous);
    }
}
