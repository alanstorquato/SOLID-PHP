<?php

namespace Torquato\Solid;

use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
    public function testRenderizaUmaImagem()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }

    public function testCriaUmLinkComImagemComoAncora()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');
        $link = $html->a('http://seusite.com/perfil', $img);

        $this->assertEquals('<a href="http://seusite.com/perfil"><img src="images/photo.jpg"></a>', $link);
    }

    public function testCriaUmaLista()
    {
        $html = new Html;
        $list = $html->ul('<li>Torquato</li>');

        $this->assertEquals('<ul><li>Torquato</li></ul>', $list);
    }
}