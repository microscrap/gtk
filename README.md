# microscrap/gtk — GTK4 helpers for ScrapyardIO

[![Docs](https://img.shields.io/badge/docs-ScrapyardIO-0ea5e9)](https://scrapyard-io.projectsaturnstudios.com/ecosystem/microscrap/gtk/0.7.x/overview)
[![Packagist](https://img.shields.io/packagist/v/microscrap/gtk.svg?label=packagist)](https://packagist.org/packages/microscrap/gtk)
[![PHP](https://img.shields.io/badge/php-%5E8.4%7C%5E8.5%7C%5E8.6-777bb4?logo=php&logoColor=white)](https://www.php.net)
[![Platform](https://img.shields.io/badge/platform-Linux-lightgrey)](https://www.gtk.org)
[![ext-gtk](https://img.shields.io/badge/ext--gtk-%5E0.7.0-black)](https://github.com/php-io-extensions/gtk)
[![Pest](https://img.shields.io/badge/tests-Pest-54b4c0)](https://pestphp.com)
[![OKF](https://img.shields.io/badge/knowledge-OKF-8b5cf6)](.okf/index.md)
[![License: MIT](https://img.shields.io/badge/license-MIT-green)](LICENSE)

**Docs:** [ScrapyardIO — microscrap/gtk `0.7.x`](https://scrapyard-io.projectsaturnstudios.com/ecosystem/microscrap/gtk/0.7.x/overview)

PHP helper library that wraps the [**gtk** extension](https://github.com/php-io-extensions/gtk) with global functions. Each helper delegates to `Gtk\GTK\{Gtk,GtkError,GtkGLib}` and `Gtk\GTK\{Application,Window,Widget,Button,Box,GLArea}\*`.

This is a **1:1 bindings** package (posix / ftdi / cuda / metal style). Opaque handles stay as `int` (`0` = NULL). GTK owns the application run loop and the window. `GtkGLArea` is a GPU view inside that tree — it does not create a top-level window.

## Highlights

* C ABI helper names (`gtk_init_check`, `gtk_application_new`, `gtk_window_present`, `g_signal_connect`, `gtk_gl_area_new`, …)
* Covers GtkApplication, GtkWindow, GtkWidget, GtkButton, GtkBox, GtkGLArea, and GObject ref / signal connect
* No exceptions in `src/` — check bool/int returns (`0` / `false` on failure)
* Coverage drift guard against the frozen ext-gtk `0.7.0` surface

## Requirements

* PHP 8.4+
* **Linux (Ubuntu/Debian)** + **ext-gtk** ^0.7.0

## Installation

```bash
php -m | grep gtk
composer require microscrap/gtk:^0.7.0
```

Composer autoloads `src/Helpers/gtk-*.php`.

## Usage

```php
<?php

use Microscrap\Bindings\Gtk\Enums\ApplicationFlags;
use Microscrap\Bindings\Gtk\Enums\Orientation;

gtk_init_check();

$app = gtk_application_new('com.example.demo', ApplicationFlags::DEFAULT_FLAGS->value);

g_signal_connect($app, 'activate', static function (int $application): void {
    $window = gtk_application_window_new($application);
    gtk_window_set_title($window, 'hello');
    gtk_window_set_default_size($window, 640, 480);

    $box = gtk_box_new(Orientation::VERTICAL->value, 8);
    $button = gtk_button_new_with_label('Quit');
    gtk_box_append($box, $button);
    gtk_window_set_child($window, $box);

    g_signal_connect($button, 'clicked', static function () use ($application): void {
        gtk_application_quit($application);
    });

    gtk_window_present($window);
});

gtk_application_run($app);
```

Create `GtkApplicationWindow` **inside** `activate`. `gtk_application_run` emits `startup` then `activate` and then blocks. Building the window before `run()` is a GTK CRITICAL. `gtk_gl_area_new` is the hybrid GPU hole — attach it as a child widget; do not call SDL/GLFW `createWindow` for App or Hybrid modes.

Closing a window does **not** unref GObjects. Use `g_object_unref` when you own a ref.

## Tests

Pest: `CoverageTest` (every ext-gtk static has a helper), `StyleAuditTest`, feature smoke when `ext-gtk` is loaded.

```bash
composer install --ignore-platform-req=ext-gtk
./vendor/bin/pest
```

## License

MIT
