<?php

use Gtk\GTK\Widget\GtkWidget;

/*
|--------------------------------------------------------------------------
| GtkWidget helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_widget_set_visible')) {
    function gtk_widget_set_visible(int $widget, bool $visible): void
    {
        GtkWidget::gtkWidgetSetVisible($widget, $visible);
    }
}

if (! function_exists('gtk_widget_get_visible')) {
    function gtk_widget_get_visible(int $widget): bool
    {
        return GtkWidget::gtkWidgetGetVisible($widget);
    }
}

if (! function_exists('gtk_widget_set_hexpand')) {
    function gtk_widget_set_hexpand(int $widget, bool $expand): void
    {
        GtkWidget::gtkWidgetSetHexpand($widget, $expand);
    }
}

if (! function_exists('gtk_widget_set_vexpand')) {
    function gtk_widget_set_vexpand(int $widget, bool $expand): void
    {
        GtkWidget::gtkWidgetSetVexpand($widget, $expand);
    }
}

if (! function_exists('gtk_widget_set_halign')) {
    function gtk_widget_set_halign(int $widget, int $align): void
    {
        GtkWidget::gtkWidgetSetHalign($widget, $align);
    }
}

if (! function_exists('gtk_widget_set_valign')) {
    function gtk_widget_set_valign(int $widget, int $align): void
    {
        GtkWidget::gtkWidgetSetValign($widget, $align);
    }
}

if (! function_exists('gtk_widget_get_halign')) {
    function gtk_widget_get_halign(int $widget): int
    {
        return GtkWidget::gtkWidgetGetHalign($widget);
    }
}

if (! function_exists('gtk_widget_get_valign')) {
    function gtk_widget_get_valign(int $widget): int
    {
        return GtkWidget::gtkWidgetGetValign($widget);
    }
}

if (! function_exists('gtk_widget_set_size_request')) {
    function gtk_widget_set_size_request(int $widget, int $width, int $height): void
    {
        GtkWidget::gtkWidgetSetSizeRequest($widget, $width, $height);
    }
}

if (! function_exists('gtk_widget_get_width')) {
    function gtk_widget_get_width(int $widget): int
    {
        return GtkWidget::gtkWidgetGetWidth($widget);
    }
}

if (! function_exists('gtk_widget_get_height')) {
    function gtk_widget_get_height(int $widget): int
    {
        return GtkWidget::gtkWidgetGetHeight($widget);
    }
}

if (! function_exists('gtk_widget_queue_draw')) {
    function gtk_widget_queue_draw(int $widget): void
    {
        GtkWidget::gtkWidgetQueueDraw($widget);
    }
}

if (! function_exists('gtk_widget_add_tick_callback')) {
    function gtk_widget_add_tick_callback(int $widget, callable $callback): int
    {
        return GtkWidget::gtkWidgetAddTickCallback($widget, $callback);
    }
}
