---
type: Trap
title: Do not compile ext-gtk on macOS
description: This package is PHP-only; the extension installer refuses Darwin
tags: [gtk, trap, macos]
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
---

# Rule

`microscrap/gtk` is PHP source. Do not run `phpize` / Zephir / `build-linux.sh` from this tree on a Mac. Extension builds belong on Linux (fnk0107 / Ubuntu/Debian). The wrapper can be edited on macOS; it cannot load `ext-gtk` there.
