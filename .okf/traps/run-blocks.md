---
type: Trap
title: gtk_application_run blocks
description: gtk_application_run is the in-process GTK main loop
tags: [gtk, trap, runloop]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
---

# Rule

`gtk_application_run` maps to `GtkApplication::gtkApplicationRun` and blocks until quit. It is not a poll. Connect `activate` **before** run; create and present the window **inside** `activate`. Call `gtk_application_quit` from a signal to exit. See [Create windows on activate](window-on-activate.md).
