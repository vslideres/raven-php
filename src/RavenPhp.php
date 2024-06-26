<?php
namespace Lideres\RavenPhp;

class RavenPhp
{
    public function transform(string $path): bool | string
    {
        $path = escapeshellarg($path);
        $dir = __DIR__;
        $command = "";
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $command = str_replace("\src", '\bin\main.exe '.$path, $dir);
        } else {
            $command = str_replace("\src", './bin/main '.$path, $dir);
        }

        try{
            $output = array();
            exec($command, $output);
            return str_contains('successfully', $output[0]);
        }catch (\Throwable $e) {
            return $e->getMessage();
        }
    }
}
