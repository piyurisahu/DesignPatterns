<?php
namespace factorMethodPattern;
/**
 * Created by PhpStorm.
 * User: piyurisahu
 * Date: 05/12/17
 * Time: 6:52 PM
 */
abstract  class Document{
    abstract function open();
    abstract function save();
    public function close()
    {
        echo "Document is closed";
    }
}

class HtmlDocument extends  Document{

    function open()
    {
        echo("Html file is open in browser");
    }

    function save()
    {
        echo("should be saved with .html");
    }
}

class PdfDocument extends Document{

    function open()
    {
        echo("PDF file is open in adobe");
    }

    function save()
    {
        echo("should be saved with .pdf");
    }
}
class TextDocument extends Document{

    function open()
    {
        echo("Text file is open in text editor");
    }

    function save()
    {
        echo("should be saved with .text");
    }
}

