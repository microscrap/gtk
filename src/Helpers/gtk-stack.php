<?php

use Gtk\GTK\Stack\GtkStack;

/*
|--------------------------------------------------------------------------
| GtkStack helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_stack_new')) {
    function gtk_stack_new(): int
    {
        return GtkStack::gtkStackNew();
    }
}

if (! function_exists('gtk_stack_add_child')) {
    function gtk_stack_add_child(int $stack, int $child): void
    {
        GtkStack::gtkStackAddChild($stack, $child);
    }
}

if (! function_exists('gtk_stack_add_titled')) {
    function gtk_stack_add_titled(int $stack, int $child, string $name, string $title): void
    {
        GtkStack::gtkStackAddTitled($stack, $child, $name, $title);
    }
}

if (! function_exists('gtk_stack_remove')) {
    function gtk_stack_remove(int $stack, int $child): void
    {
        GtkStack::gtkStackRemove($stack, $child);
    }
}

if (! function_exists('gtk_stack_set_visible_child')) {
    function gtk_stack_set_visible_child(int $stack, int $child): void
    {
        GtkStack::gtkStackSetVisibleChild($stack, $child);
    }
}

if (! function_exists('gtk_stack_get_visible_child')) {
    function gtk_stack_get_visible_child(int $stack): int
    {
        return GtkStack::gtkStackGetVisibleChild($stack);
    }
}

if (! function_exists('gtk_stack_set_visible_child_name')) {
    function gtk_stack_set_visible_child_name(int $stack, string $name): void
    {
        GtkStack::gtkStackSetVisibleChildName($stack, $name);
    }
}

if (! function_exists('gtk_stack_get_visible_child_name')) {
    function gtk_stack_get_visible_child_name(int $stack): string
    {
        return GtkStack::gtkStackGetVisibleChildName($stack);
    }
}
