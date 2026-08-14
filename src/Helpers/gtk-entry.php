<?php

use Gtk\GTK\Entry\GtkEntry;

/*
|--------------------------------------------------------------------------
| GtkEntry helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_entry_new')) {
    function gtk_entry_new(): int
    {
        return GtkEntry::gtkEntryNew();
    }
}

if (! function_exists('gtk_entry_set_text')) {
    function gtk_entry_set_text(int $entry, string $text): void
    {
        GtkEntry::gtkEntrySetText($entry, $text);
    }
}

if (! function_exists('gtk_entry_get_text')) {
    function gtk_entry_get_text(int $entry): string
    {
        return GtkEntry::gtkEntryGetText($entry);
    }
}

if (! function_exists('gtk_entry_set_placeholder_text')) {
    function gtk_entry_set_placeholder_text(int $entry, string $text): void
    {
        GtkEntry::gtkEntrySetPlaceholderText($entry, $text);
    }
}

if (! function_exists('gtk_entry_get_placeholder_text')) {
    function gtk_entry_get_placeholder_text(int $entry): string
    {
        return GtkEntry::gtkEntryGetPlaceholderText($entry);
    }
}

if (! function_exists('gtk_entry_set_visibility')) {
    function gtk_entry_set_visibility(int $entry, bool $visible): void
    {
        GtkEntry::gtkEntrySetVisibility($entry, $visible);
    }
}

if (! function_exists('gtk_entry_get_visibility')) {
    function gtk_entry_get_visibility(int $entry): bool
    {
        return GtkEntry::gtkEntryGetVisibility($entry);
    }
}
