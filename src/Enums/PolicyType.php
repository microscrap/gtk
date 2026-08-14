<?php

namespace Microscrap\Bindings\Gtk\Enums;

enum PolicyType: int
{
    case ALWAYS = 0;
    case AUTOMATIC = 1;
    case NEVER = 2;
    case EXTERNAL = 3;
}
