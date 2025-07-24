<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ReplaceImageExtensions extends Command
{
    protected $signature = 'images:convert-webp';
    protected $description = 'Replace all .jpg, .jpeg, .png image references with .webp in Blade files';

    public function handle(): int
    {
        $viewPath = resource_path('views');
        $bladeFiles = File::allFiles($viewPath);
        $replacedFiles = 0;

        foreach ($bladeFiles as $file) {
            if ($file->getExtension() !== 'php') continue;

            $filePath = $file->getRealPath();
            $contents = File::get($filePath);

            // Match .jpg, .jpeg, or .png (case-insensitive)
            $updated = preg_replace('/\.(jpg|jpeg|png)/i', '.webp', $contents);

            if ($updated !== $contents) {
                File::put($filePath, $updated);
                $this->line("✔ Updated: " . str_replace(base_path(), '', $filePath));
                $replacedFiles++;
            }
        }

        $this->info("\n✅ Completed. {$replacedFiles} file(s) updated.");
        return Command::SUCCESS;
    }
}
