---
type: Convention
title: Helpers-only C ABI
description: 1:1 wrap model matching posix/ftdi/cuda/metal; no facades
tags: [gtk, microscrap, helpers, convention]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
---

# Rule

Helpers are the public surface. They:

1. Are named after the C ABI (`gtk_*`, `g_*`).
2. Call `Gtk\GTK\*` static methods only (never reimplement native work).
3. Are wrapped in `function_exists` guards.
4. Never throw from `src/`.
5. Pass opaque `int` handles through unchanged.

Same tier as **posix / ftdi / cuda / metal** — not the sdl3/glfw facade style.

# Not this package

- Static facade classes under `Microscrap\Bindings\Gtk\` wrapping Application/Window.
- DataObject handle wrappers.
- ScrapyardIO ServiceProviders / tubes Canvas drivers.
