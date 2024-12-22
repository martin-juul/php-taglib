<?php

namespace MartinJuul\TagLib\Dev\FFiGen;

use Klitsche\FFIGen\ConfigInterface;

class Parser extends \Klitsche\FFIGen\Adapter\PHPCParser\Parser
{
    public function __construct(ConfigInterface $config)
    {
        parent::__construct($config);

        $this->context->defineInt('_SYS_TYPES_H', 1);
        $this->context->defineInt('_SYS_TIME_H', 1);
        $this->context->defineInt('_TIME_H', 1);
    }

    protected function parseHeaderFile(string $file): array
    {
        if (str_contains($file, 'tag_c.h')) {
            return parent::parseHeaderFile($file);
        }

        $file = $this->searchHeaderFilePath($file);

        // prefilter header file content - not supported by cparser
        $tmpFileContent = file_get_contents($file);

        $prependHeaderFile = <<<CDEF
        #define TAGLIB_C_EXPORT;
        CDEF;

        $tmpfile = tempnam(sys_get_temp_dir(), 'ffigen');
        file_put_contents($tmpfile, $prependHeaderFile . $tmpFileContent);

        $declarations = parent::parseHeaderFile($tmpfile);

        unlink($tmpfile);

        return $declarations;
    }

    private function searchHeaderFilePath(string $file): string
    {
        if (file_exists($file)) {
            return $file;
        }
        foreach ($this->context->headerSearchPaths as $headerSearchPath) {
            $filePath = $headerSearchPath . '/' . $file;
            echo 'Checking ' . $filePath . PHP_EOL;

            if (file_exists($filePath)) {
                return $filePath;
            }
        }

        throw new \RuntimeException(sprintf('File not found: %s', $file));
    }
}