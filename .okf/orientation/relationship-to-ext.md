---
type: Orientation
title: Relationship to ext-gtk
description: microscrap/gtk is PHP helpers; php-io-extensions/gtk is the Zephir GTK4 extension
tags: [gtk, microscrap, ext-gtk]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
sources:
  - id: agents
    resource: ../AGENTS.md
    title: Agent guidelines
---

# Two packages

| Package | Role |
|---------|------|
| `php-io-extensions/gtk` | Native `ext-gtk` — Zephir bind-only GTK4 (`Gtk\GTK\*`) |
| `microscrap/gtk` | PHP helpers (`gtk_*` / `g_*`) that call those statics |

Do not compile or patch the extension from this tree. Extension installers live on Linux (`build-linux.sh`). Do not invent `Gtk\GTK\GObject\GtkGObject` — signals live on `Gtk\GTK\GtkGLib`.

See [ext-gtk](../related/ext-gtk.md).
