---
type: Playbook
title: Pest + Composer
description: CoverageTest and StyleAudit; ignore-platform-req when ext-gtk is absent
tags: [gtk, microscrap, pest, composer, build]
resource: ../tests/Unit/CoverageTest.php
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
---

# Dev dependencies

`require-dev`: `pestphp/pest` `^4`.

This tree was scaffolded **without** `composer install` / `composer require`. Vendor is not present until someone installs.

# Install without the extension

```bash
composer install --ignore-platform-req=ext-gtk
```

# Tests

| Test | Role |
|------|------|
| `tests/Unit/CoverageTest.php` | Every frozen `Gtk\GTK\*` method has a C ABI helper |
| `tests/Unit/StyleAuditTest.php` | No class consts / no throws / `function_exists` / enum rules |
| `tests/Feature/InitFeatureTest.php` | Live smoke when `extension_loaded('gtk')` |

Frozen surface: `tests/Support/extension-methods-0.7.0.php`. Naming map: `tests/Support/HelperNames.php`.

If `composer.json` keeps a `version` field, CI validate must use `--no-check-version` (same trap as microscrap/metal).
