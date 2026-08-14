---
type: Trap
title: Missing ext-gtk
description: Helpers require the gtk extension; without it Gtk\GTK classes are undefined
tags: [gtk, microscrap, trap, ext-gtk]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
---

# Symptom

Calling any `gtk_*` / `g_*` helper when `ext-gtk` is not loaded fatals on missing `Gtk\GTK\*` classes.

# Checks

```bash
php -m | grep gtk
```

Feature tests skip when the extension is absent. Composer `require` declares `"ext-gtk": "^0.7.0"`. To install this library on a machine without the extension, use `--ignore-platform-req=ext-gtk`.
