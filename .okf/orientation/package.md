---
type: Orientation
title: Package (0.7)
description: Composer identity, Linux scope, and helpers over Gtk\GTK\* for microscrap/gtk 0.7.0
tags: [gtk, microscrap, bindings, linux]
resource: ../composer.json
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
sources:
  - id: composer
    resource: ../composer.json
    title: Package composer.json
  - id: readme
    resource: ../README.md
    title: Package README
  - id: agents
    resource: ../AGENTS.md
    title: Agent guidelines
---

# Identity

| Field | Value |
|-------|--------|
| Composer | `microscrap/gtk` **0.7.0** |
| PHP | `^8.4\|^8.5\|^8.6` |
| Requires | `ext-gtk` `^0.7.0` |
| Platform | **Linux (Ubuntu/Debian)** (enforced by the extension) |
| Namespace | `Microscrap\Bindings\Gtk\` → `src/` (Enums) |
| Public surface | Global helpers in `src/Helpers/gtk-*.php` (autoload.files) |
| License | MIT |
| Path | `/Users/angelgonzalez/Development/PHP/metal-dev/microscrap/gtk` |

# What this package is

A **helpers-only** PHP bindings layer over [php-io-extensions/gtk](https://github.com/php-io-extensions/gtk) (`ext-gtk`). Each helper delegates to `Gtk\GTK\*` static methods. Opaque handles stay as `int` (`0` = NULL).[^readme]

# What this package is not

- The native extension (Zephir / libgtk-4 / PIE) — see [relationship to ext-gtk](relationship-to-ext.md).
- Facade classes under `Microscrap\Bindings\Gtk\` (that is the sdl3/glfw style, not this package).
- Tubes Canvas / SDL/GLFW exclusive window create.

# Autoload

Composer autoloads the helper files via `autoload.files` and PSR-4 for `Microscrap\Bindings\Gtk\` → `src/`.[^composer]

[^composer]: Package composer.json
[^readme]: Package README
