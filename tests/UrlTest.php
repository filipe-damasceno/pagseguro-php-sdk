<?php
class UrlTest extends \PHPUnit\Framework\TestCase
{
    public function testProdUrl()
    {
        \Sounoob\pagseguro\config\Config::setProduction();
        $this->assertEquals('https://ws.pagseguro.uol.com.br/', \Sounoob\pagseguro\config\URL::getWs());
        $this->assertEquals('https://pagseguro.uol.com.br/', \Sounoob\pagseguro\config\URL::getPage());
        $this->assertEquals('https://stc.pagseguro.uol.com.br/', \Sounoob\pagseguro\config\URL::getStc());
    }
    public function testSandboxUrl()
    {
        \Sounoob\pagseguro\config\Config::setSandbox();
        $this->assertEquals('https://ws.sandbox.pagseguro.uol.com.br/', \Sounoob\pagseguro\config\URL::getWs());
        $this->assertEquals('https://sandbox.pagseguro.uol.com.br/', \Sounoob\pagseguro\config\URL::getPage());
        $this->assertEquals('https://stc.sandbox.pagseguro.uol.com.br/', \Sounoob\pagseguro\config\URL::getStc());
    }
}
