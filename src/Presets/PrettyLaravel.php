<?php

namespace bssphp\Fixer\Presets;

class PrettyLaravel extends PrettyPHP
{
    public function getRules(): array
    {
        return parent::getRules();
    }

    protected function getFilePatterns(): array
    {
        return parent::getFilePatterns();
    }

    protected function getExcludedDirectories(): array
    {
        return [
            'bootstrap',
            'storage',
            'node_modules',
        ] + parent::getExcludedDirectories();
    }

    protected function getExcludedFiles(): array
    {
        return [
            '*.blade.php',
        ];
    }
}
