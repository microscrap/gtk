<?php

use Gtk\GTK\GMenu\GMenu;

/*
|--------------------------------------------------------------------------
| GMenu helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('g_menu_new')) {
    function g_menu_new(): int
    {
        return GMenu::gMenuNew();
    }
}

if (! function_exists('g_menu_append')) {
    function g_menu_append(int $menu, string $label, string $detailedAction): void
    {
        GMenu::gMenuAppend($menu, $label, $detailedAction);
    }
}

if (! function_exists('g_menu_append_section')) {
    function g_menu_append_section(int $menu, string $label, int $section): void
    {
        GMenu::gMenuAppendSection($menu, $label, $section);
    }
}

if (! function_exists('g_menu_append_submenu')) {
    function g_menu_append_submenu(int $menu, string $label, int $submenu): void
    {
        GMenu::gMenuAppendSubmenu($menu, $label, $submenu);
    }
}

if (! function_exists('g_menu_freeze')) {
    function g_menu_freeze(int $menu): void
    {
        GMenu::gMenuFreeze($menu);
    }
}
