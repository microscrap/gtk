---
type: Orientation
title: Linux platform
description: Ubuntu/Debian only; GTK owns Application and Window
tags: [gtk, linux, platform]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
---

# Platform

Supported OS for this wrap: **Linux (Ubuntu/Debian)**. The extension refuses Darwin. User-facing copy says Linux, not “POSIX desktop.”

# Window ownership

1. **Application** = in-process GTK main loop (`gtk_application_run`).
2. **Window** = GTK-owned WM surface.
3. **Widgets** = toolkit-owned controls.
4. **GPU surface** = `GtkGLArea` bound to one view, not the window.

App and Hybrid modes must create the window with GTK helpers. SDL/GLFW `createWindow` steals ownership and is the game-library model.
