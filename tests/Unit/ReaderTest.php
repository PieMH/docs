<?php

namespace Educasoftware\Docs\Tests;

use PHPUnit\Framework\TestCase;
use Educasoftware\Docs\Reader;

class ReaderTest extends TestCase
{
    /** @test */
    public function it_reads_from_file()
    {
        // given
        $path = getcwd();
        $fileContent = "# test";
        $version = '1.0';
        $filename = 'test.md';
        $filePath = "{$path}/tests/docs/{$version}";

        // when
        $contents = Reader::read($filePath, $filename);
        // then
        $this->assertEquals($contents, $fileContent);
    }
}