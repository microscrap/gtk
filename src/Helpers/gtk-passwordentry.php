<?php

use Gtk\GTK\PasswordEntry\GtkPasswordEntry;

/*
|--------------------------------------------------------------------------
| GtkPasswordEntry helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_password_entry_new')) {
    function gtk_password_entry_new(): int
    {
        return GtkPasswordEntry::gtkPasswordEntryNew();
    }
}

if (! function_exists('gtk_password_entry_set_text')) {
    function gtk_password_entry_set_text(int $entry, string $text): void
    {
        GtkPasswordEntry::gtkPasswordEntrySetText($entry, $text);
    }
}

if (! function_exists('gtk_password_entry_get_text')) {
    function gtk_password_entry_get_text(int $entry): string
    {
        return GtkPasswordEntry::gtkPasswordEntryGetText($entry);
    }
}

if (! function_exists('gtk_password_entry_set_show_peek_icon')) {
    function gtk_password_entry_set_show_peek_icon(int $entry, bool $show_peek): void
    {
        GtkPasswordEntry::gtkPasswordEntrySetShowPeekIcon($entry, $show_peek);
    }
}

if (! function_exists('gtk_password_entry_get_show_peek_icon')) {
    function gtk_password_entry_get_show_peek_icon(int $entry): bool
    {
        return GtkPasswordEntry::gtkPasswordEntryGetShowPeekIcon($entry);
    }
}
