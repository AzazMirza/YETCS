<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Encoders\JpegEncoder;
use Intervention\Image\Encoders\PngEncoder;
use Intervention\Image\Encoders\WebpEncoder;


class OptimizeImages extends Command
{
    protected $signature = 'optimize';
    protected $description = 'Optimize images by converting jpg, jpeg, png to webp without changing dimensions';

    public function handle()
    {
        $sourcePath = public_path('UnOptimized');
        $optimizedPath = public_path('images');

        if (!File::exists($sourcePath)) {
            $this->error("Source folder not found: $sourcePath");
            return Command::FAILURE;
        }

        if (!File::exists($optimizedPath)) {
            File::makeDirectory($optimizedPath, 0755, true);
        }

        $files = File::allFiles($sourcePath);
        $this->info("🔍 Found " . count($files) . " file(s) to process...\n");

        foreach ($files as $file) {
            $extension = strtolower($file->getExtension());

            if (!in_array($extension, ['jpg', 'jpeg', 'png','webp'])) {
                $this->line("⚠️ Skipped (unsupported format): " . $file->getFilename());
                continue;
            }

            $filename = pathinfo($file->getFilename(), PATHINFO_FILENAME) . '.webp';
            $targetPath = $optimizedPath . '/' . $filename;

            // ✅ Skip if already optimized
            if (File::exists($targetPath)) {
                $this->line("⏩ Skipped (already optimized): $filename");
                continue;
            }

            try {
                $originalSize = File::size($file->getRealPath());

                $image = Image::read($file->getRealPath());
                $webpImage = $image->encode(new WebpEncoder(30));

                File::put($targetPath, $webpImage);

                $optimizedSize = File::size($targetPath);

                $this->line("✔ Optimized: " . $file->getFilename());
                $this->line("   Size: " . $this->formatSize($originalSize) . " → " . $this->formatSize($optimizedSize));
            } catch (\Exception $e) {
                $this->error("❌ Error processing " . $file->getFilename() . ": " . $e->getMessage());
            }
        }

        $this->info("\n✅ Image optimization completed.");
        return Command::SUCCESS;
    }

    private function formatSize($bytes)
    {
        if ($bytes >= 1048576) return round($bytes / 1048576, 2) . ' MB';
        if ($bytes >= 1024) return round($bytes / 1024, 2) . ' KB';
        return $bytes . ' B';
    }
}