<?php

namespace DeptOfScrapyardRobotics\Tests\Unit;

use DeptOfScrapyardRobotics\Tests\Support\HelperNames;

/**
 * Ensures every ext-gtk 0.7.0 static has a microscrap C-ABI helper.
 */
function gtkHelperFunctionNames(): array
{
    $names = [];
    foreach ([
        'gtk-core.php',
        'gtk-application.php',
        'gtk-window.php',
        'gtk-widget.php',
        'gtk-button.php',
        'gtk-label.php',
        'gtk-entry.php',
        'gtk-checkbutton.php',
        'gtk-switch.php',
        'gtk-box.php',
        'gtk-glarea.php',
        'gtk-gpupane.php',
        'gtk-glib.php',
        'gtk-image.php',
        'gtk-picture.php',
        'gtk-spinner.php',
        'gtk-progressbar.php',
        'gtk-separator.php',
        'gtk-passwordentry.php',
        'gtk-textview.php',
        'gtk-togglebutton.php',
        'gtk-spinbutton.php',
        'gtk-scale.php',
        'gtk-dropdown.php',
        'gtk-searchentry.php',
        'gtk-headerbar.php',
        'gtk-menubutton.php',
        'gtk-popover.php',
        'gtk-scrolledwindow.php',
        'gtk-notebook.php',
        'gtk-stack.php',
        'gtk-paned.php',
        'gtk-grid.php',
        'gtk-centerbox.php',
        'gtk-overlay.php',
        'gtk-listbox.php',
        'gtk-stringlist.php',
        'gtk-singleselection.php',
        'gtk-listitem.php',
        'gtk-listview.php',
        'gtk-alertdialog.php',
        'gtk-filedialog.php',
        'gtk-colordialog.php',
        'gtk-fontdialog.php',
    ] as $file) {
        $source = file_get_contents(dirname(__DIR__, 2).'/src/Helpers/'.$file);
        preg_match_all("/function_exists\\('([^']+)'\\)/", $source, $matches);
        foreach ($matches[1] as $name) {
            $names[] = $name;
        }
    }

    return $names;
}

it('wraps every Gtk\\GTK method with its C ABI helper name', function (): void {
    $map = require dirname(__DIR__).'/Support/extension-methods-0.7.0.php';
    $helpers = gtkHelperFunctionNames();

    $expected = [];
    foreach ($map as $extensionClass => $methods) {
        foreach ($methods as $method) {
            $helper = HelperNames::for($extensionClass, $method);
            $expected[] = $helper;
            expect(in_array($helper, $helpers, true))->toBeTrue(
                "Missing helper for {$extensionClass}::{$method} (expected {$helper})"
            );
        }
    }

    sort($helpers);
    sort($expected);
    expect($helpers)->toBe($expected);
});

it('optionally mirrors live extension reflection when ext-gtk is loaded', function (): void {
    if (! extension_loaded('gtk')) {
        expect(true)->toBeTrue();

        return;
    }

    $map = require dirname(__DIR__).'/Support/extension-methods-0.7.0.php';

    foreach ($map as $extensionClass => $expectedMethods) {
        $ref = new \ReflectionClass($extensionClass);
        $live = [];
        foreach ($ref->getMethods(\ReflectionMethod::IS_STATIC | \ReflectionMethod::IS_PUBLIC) as $method) {
            if ($method->getDeclaringClass()->getName() === $extensionClass) {
                $live[] = $method->getName();
            }
        }
        sort($live);
        $expected = $expectedMethods;
        sort($expected);
        expect($live)->toBe($expected, "Live surface drift for {$extensionClass}");
    }
});
