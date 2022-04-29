<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Helpers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

class Logger
{
    /**
     * @param string|\Stringable $message
     * @param array<mixed>       $context
     */
    public static function log($message, array $context = []): void
    {
        if (Config::get('cash.logging.enabled', false)) {
            Log::channel(Config::get('cash.logging.channel', 'stack'))
                ->log(Config::get('cash.logging.level', 'info'), $message, $context)
            ;
        }
    }

    /** @param mixed $response */
    public static function logResponse($response): void
    {
        if (!Config::get('cash.logging.enabled', false)) {
            return;
        }

        $storagePath = Config::get('cash.response_path', storage_path('cash_responses'));

        if (!is_dir($storagePath)) {
            mkdir($storagePath);
        }

        $timestamp = time();

        if (\is_array($response) && isset($response['exportResult'])) {
            $result = preg_replace('/^[^<]*(?=<)/', '', $response['exportResult']) ?? '';

            try {
                $contents = simplexml_load_string($result);

                $contents->saveXML("{$storagePath}/{$timestamp}.xml");

                return;
            } catch (\Exception $exception) {
                // noop
            }
        }

        static::saveRawResponse($response, "{$storagePath}/{$timestamp}");
    }

    /** @param mixed $response */
    private static function saveRawResponse($response, string $filepath): void
    {
        try {
            $cloner = new VarCloner();
            $dumper = new CliDumper();
            $output = fopen($filepath, 'w');

            $dumper->dump($cloner->cloneVar($response), $output);
        } catch (\Exception $exception) {
        }
    }
}
