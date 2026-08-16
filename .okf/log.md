# OKF log

## 2026-08-15 (g_application_register helper)

- `g_application_register` on `gtk-application.php`. Cooperative-loop apps must register before menubar.

## 2026-08-15 (GMainContext poll helpers)

- `g_main_context_default`, `g_main_context_iteration` on `GtkGLib` / `gtk-glib.php`.

## 2026-08-15 (GMenu / menubar helpers)

- Helpers `g_menu_*`, `g_simple_action_*`, `g_action_map_add_action`, `gtk_application_set_menubar`, `gtk_application_set_accels_for_action`, `gtk_menu_button_set_menu_model`, `gtk_popover_menu_new_from_model`, `gtk_popover_menu_bar_new_from_model`. Frozen surface + HelperNames + CoverageTest updated.

## 2026-08-14 (full native widget helpers)

- 1:1 helpers for Image, Picture, Spinner, ProgressBar, Separator, PasswordEntry, TextView, ToggleButton, SpinButton, Scale, DropDown, SearchEntry, HeaderBar, MenuButton, Popover, ScrolledWindow, Notebook, Stack, Paned, Grid, CenterBox, Overlay, ListBox, StringList, SingleSelection, ListItem, ListView, AlertDialog, FileDialog, ColorDialog, FontDialog. `gtk_window_set_titlebar` / `get_titlebar`. Enums `PolicyType`, `WrapMode`. Frozen surface + HelperNames + CoverageTest updated.

## 2026-08-14 (label / entry / check / switch)

- Helpers `gtk_label_*`, `gtk_entry_*`, `gtk_check_button_*`, `gtk_switch_*`. Frozen surface + HelperNames + CoverageTest updated. `gtk-switch.php` wraps `Gtk\\GTK\\GtkSwitch\\GtkSwitch`.

## 2026-08-14 (widget align)

- Helpers `gtk_widget_set_halign` / `set_valign` / `get_halign` / `get_valign`. Enum `Align` (`FILL`, `START`, `END`, `CENTER`, `BASELINE_FILL`, `BASELINE_CENTER`). GTK4: expand + `CENTER` + `size_request` centers without spacer boxes.

## 2026-08-14 (glarea + open-gl)

- Playbook `playbooks/gtk-glarea-opengl.md`: Metal Mac scaffold mapped to GTK window + `GtkGLArea` + `microscrap/open-gl`. Trap note: signal bridge drops `render` gboolean.

## 2026-08-14

- `gtk_application_new` defaults `$flags` to `0`. Workshop error `Class "ApplicationFlags" not found` was a missing `use Microscrap\Bindings\Gtk\Enums\ApplicationFlags` — the enum is not a global class.

## 2026-08-13 (gpu pane visible)

- `ApplicationFlags::NON_UNIQUE` (32). Pane is a root override-redirect X11 window; do not quit on empty realize.

## 2026-08-13 (gpu pane)

- Helpers `gtk_gpu_pane_new` / `gtk_gpu_pane_native` over `Gtk\\GTK\\GpuPane\\GtkGpuPane`. Frozen surface + CoverageTest updated. Example `examples/proof_vulkan_x11.php`.

## 2026-08-13 (signal return)

- ext-gtk `gSignalConnect` now preserves PHP returns via GClosure `return_value`. Wrapper `g_signal_connect` is unchanged (1:1). `GtkGLArea` `render` handlers must `return true`.

## 2026-08-13 (activate)

- Documented GTK4 lifecycle: `GtkApplicationWindow` must be created in `activate`, not before `gtk_application_run`. Pi session also emits locale + a11y bus warnings (environmental). README usage + trap `window-on-activate.md`.

## 2026-08-13

- Initial bundle for `microscrap/gtk` **0.7.0** helpers-only wrap of `ext-gtk` **0.7.0**. Same wrap model as `microscrap/metal` (`mtl_*` → `Metal\MTL\*`). Frozen surface `tests/Support/extension-methods-0.7.0.php`. Enums: `Orientation`, `ApplicationFlags`. Path: `/Users/angelgonzalez/Development/PHP/metal-dev/microscrap/gtk`. Composer require/install not run — package files only.
