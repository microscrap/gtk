---
type: Convention
title: Style contract
description: function_exists guards, no throws, no class constants, backed UPPERCASE enums
tags: [gtk, microscrap, style, convention]
resource: ../tests/Unit/StyleAuditTest.php
status: draft
generated: { by: cursor-agent/grok-4.6, at: "2026-08-14T01:10:00Z" }
---

# Enforced by StyleAuditTest

| Rule | Detail |
|------|--------|
| `function_exists` | Every helper function declaration is preceded by a `function_exists` guard |
| No `throw` | No `T_THROW` tokens anywhere in `src/` |
| No class constants | No `T_CONST` tokens in `src/` (prefer backed Enums) |
| Enums backed | Every enum in `src/Enums/` is `: int` or `: string` |
| Enum cases | Case names are **FULLY UPPERCASE** |

# Returns

Prefer C-style success signaling: `bool` / `int` returns (`false` / `0` on failure).

# Prefer `is_null`

Project PHP style prefers `is_null($var)` over `$var === null`.
