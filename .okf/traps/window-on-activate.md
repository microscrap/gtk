---
type: Trap
title: Create windows on activate
description: GtkApplicationWindow must be created after GApplication startup, typically in the activate handler
tags: [gtk, trap, activate, application]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:25:00Z" }
---

# Symptom

```
Gtk-CRITICAL: New application windows must be added after the
GApplication::startup signal has been emitted.

GLib-GIO-WARNING: Your application does not implement g_application_activate()
and has no handlers connected to the 'activate' signal.
```

A window can still map. It is not a registered `GtkApplication` window.

# Cause

`gtk_application_window_new($app)` was called **before** `gtk_application_run($app)`. `run` is what emits `startup` then `activate`.

# Correct order

1. `gtk_application_new`
2. `g_signal_connect($app, 'activate', …)` — create window, widgets, `gtk_window_present` **inside** the callback
3. `gtk_application_run($app)` — blocks

The PHP callback receives the application handle as `int` (void(instance) bridge). See ext-gtk `examples/proof_window.php`.

# Harmless Pi noise (not this trap)

- `Locale not supported by C library` — generate locales or ignore; GTK falls back to `C`.
- `Unable to acquire the address of the accessibility bus` — no `at-spi` on the seat. `GTK_A11Y=none` silences it.
