<?php

use Gtk\GTK\Notebook\GtkNotebook;

/*
|--------------------------------------------------------------------------
| GtkNotebook helpers — 1:1 over ext-gtk
|--------------------------------------------------------------------------
*/

if (! function_exists('gtk_notebook_new')) {
    function gtk_notebook_new(): int
    {
        return GtkNotebook::gtkNotebookNew();
    }
}

if (! function_exists('gtk_notebook_append_page')) {
    function gtk_notebook_append_page(int $notebook, int $child, int $tab_label): int
    {
        return GtkNotebook::gtkNotebookAppendPage($notebook, $child, $tab_label);
    }
}

if (! function_exists('gtk_notebook_remove_page')) {
    function gtk_notebook_remove_page(int $notebook, int $page_num): void
    {
        GtkNotebook::gtkNotebookRemovePage($notebook, $page_num);
    }
}

if (! function_exists('gtk_notebook_get_n_pages')) {
    function gtk_notebook_get_n_pages(int $notebook): int
    {
        return GtkNotebook::gtkNotebookGetNPages($notebook);
    }
}

if (! function_exists('gtk_notebook_set_current_page')) {
    function gtk_notebook_set_current_page(int $notebook, int $page_num): void
    {
        GtkNotebook::gtkNotebookSetCurrentPage($notebook, $page_num);
    }
}

if (! function_exists('gtk_notebook_get_current_page')) {
    function gtk_notebook_get_current_page(int $notebook): int
    {
        return GtkNotebook::gtkNotebookGetCurrentPage($notebook);
    }
}

if (! function_exists('gtk_notebook_set_tab_label_text')) {
    function gtk_notebook_set_tab_label_text(int $notebook, int $child, string $text): void
    {
        GtkNotebook::gtkNotebookSetTabLabelText($notebook, $child, $text);
    }
}
