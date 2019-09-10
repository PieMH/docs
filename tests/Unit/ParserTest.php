<?php

use PHPUnit\Framework\TestCase;
use Educasoftware\Docs\Reader;
use Parsedown;

class ParserTest extends TestCase
{
	/** @test */
	public function it_parses_content_with_markdown_to_html() 
	{
		// given
		$path = getcwd();
        $version = '1.0';
        $filename = 'test.md';
        $filePath = "{$path}/tests/docs/{$version}";
		$htmlContent = "<h1>test</h1>";
       
        // when
		$contents = Reader::read($filePath, $filename);
		$parsedown = new Parsedown();
		$parsedHtmlContent = $parsedown->text($contents);

		// then
		$this->assertEquals($parsedHtmlContent, $htmlContent);
	}
}


?>
