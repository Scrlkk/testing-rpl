<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ClassTest extends TestCase
{
    public function testFile()
    {
        ob_start();
        include 'src\file.php';
        $contetnt = ob_get_contents();
        ob_end_clean();
        $this->assertEquals('<a href="http://mediabisnisonline.com">Klik Link Ini</a>', $content);
    }
}
