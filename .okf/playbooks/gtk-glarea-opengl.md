---
type: Playbook
title: GTK window + GtkGLArea + open-gl clear
description: Linux equivalent of the Metal full-window view — GTK owns the window, open-gl paints the GLArea
tags: [gtk, glarea, opengl, playbook]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:40:00Z" }
---

# Map (Metal Mac → GTK Linux)

| Metal | GTK + open-gl |
|-------|----------------|
| `mtl_app_init` | `gtk_init_check` + `gtk_application_new` |
| `mtl_window_create` | `gtk_application_window_new` **inside `activate`** |
| `mtl_window_content_view` | window is the parent (`gtk_window_set_child`) |
| `mtl_view_create_metal` | `gtk_gl_area_new` |
| `mtl_view_add_subview` | `gtk_window_set_child($window, $area)` |
| `mtl_view_attach_device` | GDK creates the context on realize; `gtk_gl_area_make_current` |
| `mtl_window_show` | `gtk_window_present` |
| `while (mtl_app_poll())` | `gtk_application_run` (blocks; not a PHP while) |
| `mtl_view_clear` | `glClearColor` + `glClear` from `microscrap/open-gl` |

Do not call GLFW/SDL `createWindow`. Do not use `ogx` `OpenGLWindowHandler`.

# Order

1. `gtk_application_new`
2. `g_signal_connect($app, 'activate', …)`
3. Inside activate: window → `gtk_gl_area_new` → size/expand → `set_child` → connect `realize`/`render` → `present`
4. `gtk_application_run`

# Gap

`g_signal_connect` bridge is void. `render` must return TRUE or GTK wipes the clear. See [GLArea is not a window](../traps/glarea-is-a-view.md).
