<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Symfony\Component\Finder\Exception\DirectoryNotFoundException;
use Symfony\Component\Finder\Finder;

class ClearResponseFiles extends Command
{
    protected $signature = 'cash:clear';

    protected $description = 'Clear the response file storage';

    public function handle(): int
    {
        try {
            $finder = Finder::create()->files()->in(Config::get('cash.logging.response_path', storage_path('cash_responses')));
        } catch (DirectoryNotFoundException $exception) {
            $this->info('Storage directory does not exist. Skipping execution.');

            return static::SUCCESS;
        }

        foreach ($finder as $file) {
            if (!unlink($file->getRealPath())) {
                $this->error("Could not delete file: '{$file->getFilename()}'");

                return static::FAILURE;
            }
        }

        return static::SUCCESS;
    }
}
