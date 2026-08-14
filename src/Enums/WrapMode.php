<?php

namespace Microscrap\Bindings\Gtk\Enums;

enum WrapMode: int
{
    case NONE = 0;
    case CHAR = 1;
    case WORD = 2;
    case WORD_CHAR = 3;
}
