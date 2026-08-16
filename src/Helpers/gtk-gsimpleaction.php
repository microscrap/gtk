<?php

use Gtk\GTK\GSimpleAction\GSimpleAction;

/*
|--------------------------------------------------------------------------
| GSimpleAction / GActionMap helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('g_simple_action_new')) {
    function g_simple_action_new(string $name, string $parameterType = ''): int
    {
        return GSimpleAction::gSimpleActionNew($name, $parameterType);
    }
}

if (! function_exists('g_action_map_add_action')) {
    function g_action_map_add_action(int $actionMap, int $action): void
    {
        GSimpleAction::gActionMapAddAction($actionMap, $action);
    }
}

if (! function_exists('g_simple_action_set_enabled')) {
    function g_simple_action_set_enabled(int $action, bool $enabled): void
    {
        GSimpleAction::gSimpleActionSetEnabled($action, $enabled);
    }
}
