<?php

namespace Educasoftware\Docs\Controller;

use Lkeio\Bases\View;
use Illuminate\Http\Request;
use Educasoftware\Docs\Reader;
use Parsedown;

class DocsController
{
    public function index()
    {
        return View::make('docs', []);
    }

    public function show(Request $request)
    {
        $path = getcwd();
     
        $filename = $request['doc'].'.md';
        $version = '1.0';
        $filePath = "{$path}/dist/docs/{$version}";
        $contents = Reader::read($filePath, $filename);

		$parsedown = new Parsedown();
        $parsedHtmlContent = $parsedown->text($contents);
        return $parsedHtmlContent;
    }
}