---
okf_version: "0.2"
---

# microscrap/gtk Knowledge Bundle

Package knowledge for `microscrap/gtk` (GTK4 helpers over **ext-gtk**, v0.7.0).
Read this index first; open only the concepts needed for the task.

**Trust rule:** Prefer `status: stable`. Treat `deprecated` as historical only. New agent-written concepts stay `status: draft` until a human verifies them.
**Placement:** This bundle lives at the **package root** only — never under `src/`.
**Links:** Concept cross-links use paths relative to each file.
**Scope:** Document the helpers-only bindings package. Do **not** invent ServiceProviders, tubes Canvas, or SDL/GLFW window create here.
**Dist note:** `.okf/` and root `AGENTS.md` are `export-ignore` in `.gitattributes` so Composer dist packages do not ship this bundle.

# Orientation

* [Package (0.7)](orientation/package.md) - Composer identity, Linux scope, helpers over Gtk\GTK\*.
* [Relationship to ext-gtk](orientation/relationship-to-ext.md) - Bindings vs php-io-extensions/gtk.
* [Linux platform](orientation/linux-platform.md) - Ubuntu/Debian; GTK owns app + window.

# Architecture

* [Helpers → Gtk\GTK\*](architecture/helpers-gtk-ext.md) - Wrap model and opaque int handles.

# API

* [Helper map (gtk_* / g_*)](api/helper-map.md) - Core, Application, Window, Widget, Button, native widgets, Box, GLArea, GLib.

# Conventions

* [Helpers-only C ABI](conventions/helpers-only-c-abi.md) - posix/ftdi/cuda/metal wrap model; no facades.
* [Style contract](conventions/style-contract.md) - function_exists, no throws, no class consts, UPPERCASE enums.

# Traps

* [Missing ext-gtk](traps/missing-ext-gtk.md) - Helpers need the loaded extension.
* [Do not compile ext-gtk on macOS](traps/no-mac-compile.md) - Wrapper is PHP-only; extension builds on Linux.
* [gtk_application_run blocks](traps/run-blocks.md) - Main loop ownership.
* [Create windows on activate](traps/window-on-activate.md) - GtkApplicationWindow only after startup.
* [GLArea is not a window](traps/glarea-is-a-view.md) - Hybrid GPU hole only.

# Playbooks

* [GTK window + GtkGLArea + open-gl](playbooks/gtk-glarea-opengl.md) - Metal-equivalent full-window GPU view on Linux.
* [GTK gpu pane + Vulkan X11](playbooks/gtk-gpu-pane-vulkan.md) - X11 child WSI, no GLFW.

# Build & test

* [Pest + Composer](build/pest-and-composer.md) - CoverageTest, StyleAudit, ignore-platform-req.

# Related

* [ext-gtk native package](related/ext-gtk.md) - Zephir bind-only GTK4.

# Indexes

* [Orientation](orientation/)
* [Architecture](architecture/)
* [API](api/)
* [Conventions](conventions/)
* [Traps](traps/)
* [Playbooks](playbooks/)
* [Build & test](build/)
* [Related](related/)

# Log

* [Directory update log](log.md)
