---
type: Trap
title: GLArea is not a window
description: gtk_gl_area_new creates a GPU view for Hybrid mode, not a WM surface
tags: [gtk, trap, glarea]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
---

# Rule

`gtk_gl_area_new` returns a widget handle. Set it as a child (`gtk_window_set_child` / `gtk_box_append`). Do not treat it as a top-level window. SDL/GLFW `createWindow` is the Game mode path, not App/Hybrid.

`microscrap/open-gl` draws only after `gtk_gl_area_make_current` (GTK also binds the context before `render`).

**Bridge gap:** `php_gtk_signal_bridge` is `void` and drops the PHP return. GtkGLArea `render` must return `TRUE` or GTK paints the CSS background over your `glClear`. A gboolean-returning connect is required before a Metal-style clear will stick.
