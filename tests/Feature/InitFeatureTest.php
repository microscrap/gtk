<?php

namespace DeptOfScrapyardRobotics\Tests\Feature;

beforeEach(function (): void {
    if (! extension_loaded('gtk')) {
        $this->markTestSkipped('ext-gtk is not loaded');
    }
});

it('initializes GTK and reports library version via helpers', function (): void {
    expect(gtk_init_check())->toBeTrue();
    expect(gtk_get_major_version())->toBeGreaterThanOrEqual(4);
    expect(gtk_get_minor_version())->toBeInt();
    expect(gtk_get_micro_version())->toBeInt();
    expect(gtk_last_message())->toBeString();
});
