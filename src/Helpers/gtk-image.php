<?php

use Gtk\GTK\Image\GtkImage;

/*
|--------------------------------------------------------------------------
| GtkImage helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_image_new')) {
    function gtk_image_new(): int
    {
        return GtkImage::gtkImageNew();
    }
}

if (! function_exists('gtk_image_new_from_file')) {
    function gtk_image_new_from_file(string $filename): int
    {
        return GtkImage::gtkImageNewFromFile($filename);
    }
}

if (! function_exists('gtk_image_set_from_file')) {
    function gtk_image_set_from_file(int $image, string $filename): void
    {
        GtkImage::gtkImageSetFromFile($image, $filename);
    }
}

if (! function_exists('gtk_image_set_from_icon_name')) {
    function gtk_image_set_from_icon_name(int $image, string $icon_name): void
    {
        GtkImage::gtkImageSetFromIconName($image, $icon_name);
    }
}

if (! function_exists('gtk_image_clear')) {
    function gtk_image_clear(int $image): void
    {
        GtkImage::gtkImageClear($image);
    }
}

if (! function_exists('gtk_image_set_pixel_size')) {
    function gtk_image_set_pixel_size(int $image, int $size): void
    {
        GtkImage::gtkImageSetPixelSize($image, $size);
    }
}
