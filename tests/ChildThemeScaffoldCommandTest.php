<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Yard\Brave\Scaffold\Console\ChildThemeScaffoldCommand;

beforeEach(function () {
    File::deleteDirectory(base_path('test-child-theme'));
});
afterEach(function () {
    File::deleteDirectory(base_path('test-child-theme'));
});

describe('ChildThemeScaffoldCommand', function () {
    it('copies the stub directory to the destination', function () {
        $slug = 'test-child-theme';
        $destination = dirname(base_path()) . '/' . $slug;
        File::deleteDirectory($destination);

        $exitCode = Artisan::call('scaffold:sage-child', ['slug' => $slug]);
        expect($exitCode)->toBe(0);
        expect(File::exists($destination))->toBeTrue();
        expect(File::exists($destination . '/style.css'))->toBeTrue();
    });

    it('fails if the source directory does not exist', function () {
        // Temporarily rename the source directory
        $source = dirname(__DIR__, 1) . '/stubs/sage-child';
        $backup = $source . '_backup';
        if (File::exists($source)) {
            File::move($source, $backup);
        }
        $slug = 'test-child-theme';
        $exitCode = Artisan::call('scaffold:sage-child', ['slug' => $slug]);
        expect($exitCode)->toBe(1);
        // Restore the source directory
        if (File::exists($backup)) {
            File::move($backup, $source);
        }
    });

    it('fails if the destination already exists', function () {
        $slug = 'test-child-theme';
        $destination = dirname(base_path()) . '/' . $slug;
        File::ensureDirectoryExists($destination);
        $exitCode = Artisan::call('scaffold:sage-child', ['slug' => $slug]);
        expect($exitCode)->toBe(1);
    });
});
