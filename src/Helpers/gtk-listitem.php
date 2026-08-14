<?php

use Gtk\GTK\ListItem\GtkListItem;

/*
|--------------------------------------------------------------------------
| GtkListItem helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_signal_list_item_factory_new')) {
    function gtk_signal_list_item_factory_new(): int
    {
        return GtkListItem::gtkSignalListItemFactoryNew();
    }
}

if (! function_exists('gtk_list_item_set_child')) {
    function gtk_list_item_set_child(int $item, int $child): void
    {
        GtkListItem::gtkListItemSetChild($item, $child);
    }
}

if (! function_exists('gtk_list_item_get_child')) {
    function gtk_list_item_get_child(int $item): int
    {
        return GtkListItem::gtkListItemGetChild($item);
    }
}

if (! function_exists('gtk_list_item_get_item')) {
    function gtk_list_item_get_item(int $item): int
    {
        return GtkListItem::gtkListItemGetItem($item);
    }
}

if (! function_exists('gtk_list_item_get_position')) {
    function gtk_list_item_get_position(int $item): int
    {
        return GtkListItem::gtkListItemGetPosition($item);
    }
}
