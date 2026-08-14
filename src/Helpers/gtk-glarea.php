<?php

use Gtk\GTK\GLArea\GtkGLArea;

/*
|--------------------------------------------------------------------------
| GtkGLArea helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
| GPU view only. Does not create a top-level window.
*/

if (! function_exists('gtk_gl_area_new')) {
    function gtk_gl_area_new(): int
    {
        return GtkGLArea::gtkGLAreaNew();
    }
}

if (! function_exists('gtk_gl_area_make_current')) {
    function gtk_gl_area_make_current(int $area): void
    {
        GtkGLArea::gtkGLAreaMakeCurrent($area);
    }
}

if (! function_exists('gtk_gl_area_queue_render')) {
    function gtk_gl_area_queue_render(int $area): void
    {
        GtkGLArea::gtkGLAreaQueueRender($area);
    }
}

if (! function_exists('gtk_gl_area_set_auto_render')) {
    function gtk_gl_area_set_auto_render(int $area, bool $autoRender): void
    {
        GtkGLArea::gtkGLAreaSetAutoRender($area, $autoRender);
    }
}

if (! function_exists('gtk_gl_area_get_error')) {
    function gtk_gl_area_get_error(int $area): string
    {
        return GtkGLArea::gtkGLAreaGetError($area);
    }
}
