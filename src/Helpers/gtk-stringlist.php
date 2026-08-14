<?php

use Gtk\GTK\StringList\GtkStringList;

/*
|--------------------------------------------------------------------------
| GtkStringList helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_string_list_new')) {
    function gtk_string_list_new(array $strings): int
    {
        return GtkStringList::gtkStringListNew($strings);
    }
}

if (! function_exists('gtk_string_list_append')) {
    function gtk_string_list_append(int $list, string $value): void
    {
        GtkStringList::gtkStringListAppend($list, $value);
    }
}

if (! function_exists('gtk_string_list_remove')) {
    function gtk_string_list_remove(int $list, int $position): void
    {
        GtkStringList::gtkStringListRemove($list, $position);
    }
}

if (! function_exists('gtk_string_list_get_string')) {
    function gtk_string_list_get_string(int $list, int $position): string
    {
        return GtkStringList::gtkStringListGetString($list, $position);
    }
}

if (! function_exists('gtk_string_list_get_n_items')) {
    function gtk_string_list_get_n_items(int $list): int
    {
        return GtkStringList::gtkStringListGetNItems($list);
    }
}

if (! function_exists('gtk_string_object_get_string')) {
    function gtk_string_object_get_string(int $item): string
    {
        return GtkStringList::gtkStringObjectGetString($item);
    }
}
