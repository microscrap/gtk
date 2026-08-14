<?php

use Gtk\GTK\Picture\GtkPicture;

/*
|--------------------------------------------------------------------------
| GtkPicture helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_picture_new')) {
    function gtk_picture_new(): int
    {
        return GtkPicture::gtkPictureNew();
    }
}

if (! function_exists('gtk_picture_new_for_filename')) {
    function gtk_picture_new_for_filename(string $filename): int
    {
        return GtkPicture::gtkPictureNewForFilename($filename);
    }
}

if (! function_exists('gtk_picture_set_filename')) {
    function gtk_picture_set_filename(int $picture, string $filename): void
    {
        GtkPicture::gtkPictureSetFilename($picture, $filename);
    }
}

if (! function_exists('gtk_picture_set_can_shrink')) {
    function gtk_picture_set_can_shrink(int $picture, bool $can_shrink): void
    {
        GtkPicture::gtkPictureSetCanShrink($picture, $can_shrink);
    }
}
