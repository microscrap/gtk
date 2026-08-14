---
type: Architecture
title: Helpers → Gtk\GTK\*
description: Wrap model — global gtk_* / g_* helpers call extension statics; opaque int handles
tags: [gtk, microscrap, architecture, handles]
resource: ../src/Helpers/
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
sources:
  - id: readme
    resource: ../README.md
    title: Package README
---

# Call stack

```
PHP app
  → gtk_* / g_* helper (this package)
    → Gtk\GTK\*::method (ext-gtk)
      → C ABI / libgtk-4 (extension)
```

Same tier as **posix / ftdi / cuda / metal**: helpers call extension statics directly. No microscrap facade classes, no DataObject handle wrappers.[^readme]

# Opaque handles

| Kind | PHP type | Sentinel |
|------|----------|----------|
| Application / window / widget / button / label / entry / check button / switch / box / GLArea / GObject | `int` | `0` = NULL |

Helpers pass handles through unchanged. Callers check `> 0` for success on create paths.

# File → class map

| Helper file | Extension class |
|-------------|-----------------|
| `gtk-core.php` | `Gtk\GTK\Gtk`, `Gtk\GTK\GtkError` |
| `gtk-application.php` | `Gtk\GTK\Application\GtkApplication` |
| `gtk-window.php` | `Gtk\GTK\Window\GtkWindow` |
| `gtk-widget.php` | `Gtk\GTK\Widget\GtkWidget` |
| `gtk-button.php` | `Gtk\GTK\Button\GtkButton` |
| `gtk-label.php` | `Gtk\GTK\Label\GtkLabel` |
| `gtk-entry.php` | `Gtk\GTK\Entry\GtkEntry` |
| `gtk-checkbutton.php` | `Gtk\GTK\CheckButton\GtkCheckButton` |
| `gtk-switch.php` | `Gtk\GTK\GtkSwitch\GtkSwitch` |
| `gtk-box.php` | `Gtk\GTK\Box\GtkBox` |
| `gtk-glarea.php` | `Gtk\GTK\GLArea\GtkGLArea` |
| `gtk-gpupane.php` | `Gtk\GTK\GpuPane\GtkGpuPane` |
| `gtk-glib.php` | `Gtk\GTK\GtkGLib` |

Full helper inventory: [API helper map](../api/helper-map.md).

[^readme]: Package README
