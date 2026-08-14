---
type: APIMap
title: Helper map (gtk_* / g_*)
description: Core / Application / Window / Widget / Button / Label / Entry / CheckButton / Switch / Box / GLArea / GLib helpers mapped to Gtk\GTK\* methods
tags: [gtk, microscrap, api, helpers]
resource: ../tests/Support/HelperNames.php
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
sources:
  - id: helper-names
    resource: ../tests/Support/HelperNames.php
    title: HelperNames map
  - id: frozen
    resource: ../tests/Support/extension-methods-0.7.0.php
    title: Frozen ext-gtk 0.7.0 surface
---

# Surface (ext-gtk 0.7.0)

Frozen method list lives in `tests/Support/extension-methods-0.7.0.php`. C ABI names are enforced by `HelperNames` + `CoverageTest`.

## Core — `Gtk\GTK\Gtk` / `GtkError`

| Helper | Extension |
|--------|-----------|
| `gtk_init_check` | `Gtk::gtkInitCheck` |
| `gtk_get_major_version` | `Gtk::gtkGetMajorVersion` |
| `gtk_get_minor_version` | `Gtk::gtkGetMinorVersion` |
| `gtk_get_micro_version` | `Gtk::gtkGetMicroVersion` |
| `gtk_get_binary_age` | `Gtk::gtkGetBinaryAge` |
| `gtk_last_message` | `GtkError::gtkLastMessage` |

## Application — `GtkApplication`

| Helper | Extension |
|--------|-----------|
| `gtk_application_new` | `gtkApplicationNew` |
| `gtk_application_run` | `gtkApplicationRun` |
| `gtk_application_quit` | `gtkApplicationQuit` |

`gtk_application_run` blocks. `gtk_application_new` defaults `$flags` to `0` (`ApplicationFlags::DEFAULT_FLAGS`). The enum lives at `Microscrap\Bindings\Gtk\Enums\ApplicationFlags` — PsySH / scripts must `use` that FQCN or pass `0`.

## Window — `GtkWindow`

| Helper | Extension |
|--------|-----------|
| `gtk_window_new` | `gtkWindowNew` |
| `gtk_application_window_new` | `gtkApplicationWindowNew` |
| `gtk_window_set_title` | `gtkWindowSetTitle` |
| `gtk_window_get_title` | `gtkWindowGetTitle` |
| `gtk_window_set_default_size` | `gtkWindowSetDefaultSize` |
| `gtk_window_get_default_size` | `gtkWindowGetDefaultSize` |
| `gtk_window_set_child` | `gtkWindowSetChild` |
| `gtk_window_get_child` | `gtkWindowGetChild` |
| `gtk_window_present` | `gtkWindowPresent` |
| `gtk_window_close` | `gtkWindowClose` |
| `gtk_window_destroy` | `gtkWindowDestroy` |
| `gtk_window_set_titlebar` | `gtkWindowSetTitlebar` |
| `gtk_window_get_titlebar` | `gtkWindowGetTitlebar` |

## Widget / Button / Box / GLArea / GLib / native widgets

See `HelperNames.php` for the remaining 1:1 maps (`gtk_widget_*`, `gtk_button_*`, `gtk_label_*`, `gtk_entry_*`, `gtk_check_button_*`, `gtk_switch_*`, display/input/chrome/dialog helpers, `gtk_box_*`, `gtk_gl_area_*`, `g_object_ref`, `g_object_unref`, `g_signal_connect`).

`gtk_entry_set_text` / `get_text` wrap `GtkEntry::gtkEntrySetText` / `GetText` (C: `gtk_editable_*`). Switch helpers live in `gtk-switch.php` and call `Gtk\\GTK\\GtkSwitch\\GtkSwitch` (`switch` is a reserved PHP word).

Dialog `choose` / `open` / `save` / `select_folder` / `choose_rgba` / `choose_font` take a PHP `callable`. ListView uses `gtk_string_list_*`, `gtk_single_selection_*`, `gtk_signal_list_item_factory_new`, `gtk_list_item_*`.

Box orientation: `Orientation::HORIZONTAL` = `0`, `Orientation::VERTICAL` = `1`.
Scrolled policy: `PolicyType` (`ALWAYS` = `0`, `AUTOMATIC` = `1`, `NEVER` = `2`, `EXTERNAL` = `3`).
Text wrap: `WrapMode` (`NONE` = `0`, `CHAR` = `1`, `WORD` = `2`, `WORD_CHAR` = `3`).

Widget align: `gtk_widget_set_halign` / `set_valign` / `get_halign` / `get_valign` take `Align` as int (`FILL` = `0`, `START` = `1`, `END` = `2`, `CENTER` = `3`, `BASELINE_FILL` = `4`, `BASELINE_CENTER` = `5`). Expand gives leftover space; `CENTER` keeps the size request and sits the widget in the middle of that space.
