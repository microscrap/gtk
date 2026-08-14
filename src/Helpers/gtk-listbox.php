<?php

use Gtk\GTK\ListBox\GtkListBox;

/*
|--------------------------------------------------------------------------
| GtkListBox helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_list_box_new')) {
    function gtk_list_box_new(): int
    {
        return GtkListBox::gtkListBoxNew();
    }
}

if (! function_exists('gtk_list_box_append')) {
    function gtk_list_box_append(int $box, int $child): void
    {
        GtkListBox::gtkListBoxAppend($box, $child);
    }
}

if (! function_exists('gtk_list_box_remove')) {
    function gtk_list_box_remove(int $box, int $child): void
    {
        GtkListBox::gtkListBoxRemove($box, $child);
    }
}

if (! function_exists('gtk_list_box_get_selected_row')) {
    function gtk_list_box_get_selected_row(int $box): int
    {
        return GtkListBox::gtkListBoxGetSelectedRow($box);
    }
}

if (! function_exists('gtk_list_box_select_row')) {
    function gtk_list_box_select_row(int $box, int $row): void
    {
        GtkListBox::gtkListBoxSelectRow($box, $row);
    }
}

if (! function_exists('gtk_list_box_get_row_at_index')) {
    function gtk_list_box_get_row_at_index(int $box, int $index): int
    {
        return GtkListBox::gtkListBoxGetRowAtIndex($box, $index);
    }
}

if (! function_exists('gtk_list_box_row_get_index')) {
    function gtk_list_box_row_get_index(int $row): int
    {
        return GtkListBox::gtkListBoxRowGetIndex($row);
    }
}

if (! function_exists('gtk_list_box_row_get_child')) {
    function gtk_list_box_row_get_child(int $row): int
    {
        return GtkListBox::gtkListBoxRowGetChild($row);
    }
}
