<?php

use Gtk\GTK\SearchEntry\GtkSearchEntry;

/*
|--------------------------------------------------------------------------
| GtkSearchEntry helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_search_entry_new')) {
    function gtk_search_entry_new(): int
    {
        return GtkSearchEntry::gtkSearchEntryNew();
    }
}

if (! function_exists('gtk_search_entry_set_text')) {
    function gtk_search_entry_set_text(int $entry, string $text): void
    {
        GtkSearchEntry::gtkSearchEntrySetText($entry, $text);
    }
}

if (! function_exists('gtk_search_entry_get_text')) {
    function gtk_search_entry_get_text(int $entry): string
    {
        return GtkSearchEntry::gtkSearchEntryGetText($entry);
    }
}
