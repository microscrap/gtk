<?php
/**
 * Helpers-only proof: GTK gpu pane + Vulkan X11 WSI. No GLFW.
 *
 *   DISPLAY=:0 GDK_BACKEND=x11 php examples/proof_vulkan_x11.php
 */
declare(strict_types=1);

use Microscrap\Bindings\Gtk\Enums\ApplicationFlags;

if (extension_loaded('glfw')) {
    fwrite(STDERR, "note: glfw is loaded but this path must not call it\n");
}

gtk_init_check();

$app = gtk_application_new('org.scrapyardio.gtk.vulkan-x11', ApplicationFlags::NON_UNIQUE->value);
if ($app === 0) {
    fwrite(STDERR, gtk_last_message()."\n");
    exit(1);
}

g_signal_connect($app, 'activate', static function (int $application): void {
    $window = gtk_application_window_new($application);
    gtk_window_set_title($window, 'gtk gpu pane + vulkan x11');
    gtk_window_set_default_size($window, 640, 480);

    $pane = gtk_gpu_pane_new();
    gtk_widget_set_hexpand($pane, true);
    gtk_widget_set_vexpand($pane, true);
    gtk_window_set_child($window, $pane);

    $boot = static function (int $widget) use ($application): void {
        static $booted = false;
        if ($booted) {
            return;
        }
        $native = gtk_gpu_pane_native($widget);
        if (($native['backend'] ?? '') !== 'x11' || (int) $native['display'] === 0 || (int) $native['window'] === 0) {
            return;
        }
        $booted = true;

        $instance = vkCreateInstance(['VK_KHR_surface', 'VK_KHR_xlib_surface'], 'microscrap/gtk-vulkan-x11');
        if ($instance->fd === 0) {
            fwrite(STDERR, vkLastError()."\n");
            gtk_application_quit($application);

            return;
        }

        $surface = vkCreateXlibSurface($instance, (int) $native['display'], (int) $native['window']);
        if ($surface->fd === 0) {
            fwrite(STDERR, vkLastError()."\n");
            vkDestroyInstance($instance);
            gtk_application_quit($application);

            return;
        }

        $devices = vkEnumeratePhysicalDevices($instance);
        if ($devices === []) {
            fwrite(STDERR, "no Vulkan physical devices\n");
            vkDestroySurface($instance, $surface);
            vkDestroyInstance($instance);
            gtk_application_quit($application);

            return;
        }

        $family = vkFindGraphicsPresentQueue($devices[0], $surface);
        $device = vkCreateDevice($devices[0], $family);
        $queue = vkGetDeviceQueue($device, $family);
        $width = gtk_widget_get_width($widget);
        $height = gtk_widget_get_height($widget);
        if ($width < 1) {
            $width = 640;
        }
        if ($height < 1) {
            $height = 480;
        }

        $swapchain = vkCreateSwapchain($instance, $devices[0], $device, $queue, $surface, $width, $height);
        vkPresentFrame($swapchain, 32 / 255, 64 / 255, 128 / 255, 1.0);
        gtk_widget_add_tick_callback($widget, static function () use ($swapchain): bool {
            vkPresentFrame($swapchain, 32 / 255, 64 / 255, 128 / 255, 1.0);

            return true;
        });
    };
    g_signal_connect($pane, 'realize', $boot);
    g_signal_connect($pane, 'map', $boot);

    g_signal_connect($window, 'close-request', static function () use ($application): bool {
        gtk_application_quit($application);

        return false;
    });

    gtk_window_present($window);
});

gtk_application_run($app);
