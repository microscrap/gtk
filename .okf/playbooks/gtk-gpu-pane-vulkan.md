---
type: Playbook
title: GTK gpu pane + Vulkan X11
description: GtkApplication owns the window; gtk_gpu_pane hosts X11 child; ext-vulkan createXlibSurface
tags: [gtk, vulkan, x11, playbook]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T02:15:00Z" }
---

# Order

1. `gtk_application_new`
2. `activate`: window, `gtk_gpu_pane_new` as only child, present
3. On pane `map` (not only `realize`): `gtk_gpu_pane_native` → `vkCreateInstance(VK_KHR_surface, VK_KHR_xlib_surface)` → `vkCreateXlibSurface` → swapchain → `vkPresentFrame(32/255, 64/255, 128/255)`. Do not quit if native is empty on first realize. Use `ApplicationFlags::NON_UNIQUE` so a leftover GtkApplication id does not swallow the window.
4. `close-request` → `gtk_application_quit`
5. `gtk_application_run`

`DISPLAY=:0` `GDK_BACKEND=x11`. Do not load glfw. Do not `vkCreateWindowSurface`.

See `examples/proof_vulkan_x11.php` and ext-gtk `examples/proof_vulkan_x11.php`.
