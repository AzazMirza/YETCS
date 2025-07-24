<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class OptimizeImages extends Command
{
    protected $signature = 'images:optimize';
    protected $description = 'Optimize all images in public/images and save to public/optimized-images';

    public function handle()
    {
        $sourcePath = public_path('images');
        $optimizedPath = public_path('optimized-images');

        if (!File::exists($optimizedPath)) {
            File::makeDirectory($optimizedPath, 0755, true);
        }

        $files = File::allFiles($sourcePath);
        $this->info("Found " . count($files) . " images...");

        foreach ($files as $file) {
            $this->line("Optimizing: {$file->getFilename()}");

            try {
                $image = Image::read($file->getRealPath());

                $optimizedImage = $image->encodeByExtension(
                    $file->getExtension(),
                    quality: 70 // reduce quality for smaller file size
                );

                File::put(
                    $optimizedPath . '/' . $file->getFilename(),
                    $optimizedImage
                );

                $this->info("✅ Optimized: {$file->getFilename()}");
            } catch (\Exception $e) {
                $this->error("❌ Failed to optimize {$file->getFilename()}: " . $e->getMessage());
            }
        }

        $this->info('🎉 All images optimized successfully!');
    }
}
