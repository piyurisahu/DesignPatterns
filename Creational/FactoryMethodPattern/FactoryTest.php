<?php
/**
 * Created by PhpStorm.
 * User: piyurisahu
 * Date: 05/12/17
 * Time: 11:36 PM
 */

namespace factorMethodPattern;


use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCaseY
{

    public function testShouldReturnHtmlDocument()
    {
        $factory = new ConcreateFactory();
        $html = $factory->factoryMethod('html');
        if($html instanceof HtmlDocument){
            echo 'true';
        }
    }


    public function testShouldReturnPdfDocument()
    {
        $factory = new ConcreateFactory();
        $html = $factory->factoryMethod('pdf');
        $this->assertTrue($html instanceof HtmlDocument);
    }
    public function testShouldReturnTextDocument()
    {
        $factory = new ConcreateFactory();
        $html = $factory->factoryMethod('text');
        $this->assertTrue($html instanceof TextDocument);
    }


}
