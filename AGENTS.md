# Agent guidelines — microscrap/gtk

## Knowledge Bundle (OKF)

This package ships an Open Knowledge Format bundle at [`.okf/`](.okf/) (excluded from Composer dist via `.gitattributes` `export-ignore`).

Before changing bindings code or advising on GTK PHP wrappers **for this package**:

1. Read [`.okf/index.md`](.okf/index.md) first (progressive disclosure).
2. Open only the linked concepts needed for the task.
3. Prefer `status: stable` concepts; treat `deprecated` as historical only. New/changed concepts stay `status: draft` until a human verifies them.
4. When you learn something durable about **this package**, update the affected `.okf` concept(s) and append `.okf/log.md`.
5. Keep the `.okf` bundle at the **package root** only — do not nest extra `.okf` folders under `src/`.
6. Native extension build knowledge belongs with `php-io-extensions/gtk`. Do not compile ext-gtk on macOS.
7. **Always** keep the `.okf/` bundle current when changing API, wrap model, or packaging; append `.okf/log.md`.

## Package rules (quick) — 0.7.x

- Composer: `microscrap/gtk` **0.7.0**. PHP `^8.4|^8.5|^8.6`. Requires `ext-gtk` `^0.7.0`.
- Platform: **Linux (Ubuntu/Debian)**. GTK owns Application + Window. `GtkGLArea` is a view, not a window.
- Namespace: `Microscrap\Bindings\Gtk\` → `src/` (Enums; helpers are global functions).
- **Helpers-only** (posix / ftdi / cuda / metal style) — no ServiceProvider, no facade classes over GtkApplication/GtkWindow.
- Helper names match the C ABI (`gtk_init_check`, `gtk_application_new`, `g_object_ref`, `g_signal_connect`, …).
- Opaque handles stay as `int`; `0` is NULL. Do not invent DataObject wrappers unless product scope changes.
- No exceptions in `src/`; C-style bool/int returns.
- Enums are backed (int/string); cases **FULLY UPPERCASE**; no PHP class-level constants. Current enums: `Orientation`, `ApplicationFlags`.
- Prefer `is_null($var)` over `$var === null`.
- Do not conflate with `php-io-extensions/gtk` (native extension) or tubes Canvas / SDL/GLFW window create.
- Do not invent `Gtk\GTK\GObject\GtkGObject` — that class does not exist on ext-gtk.
