<?php

use Gtk\GTK\GpuPane\GtkGpuPane;

/*
|--------------------------------------------------------------------------
| GtkGpuPane helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
| X11 child OS surface for foreign WSI. Not GtkVulkanArea. Not Vulkan.
*/

if (! function_exists('gtk_gpu_pane_new')) {
    function gtk_gpu_pane_new(): int
    {
        return GtkGpuPane::gtkGpuPaneNew();
    }
}

if (! function_exists('gtk_gpu_pane_native')) {
    /**
     * @return array{backend: string, display: int, window: int}
     */
    function gtk_gpu_pane_native(int $pane): array
    {
        return GtkGpuPane::gtkGpuPaneNative($pane);
    }
}
