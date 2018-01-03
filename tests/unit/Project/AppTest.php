<?php

namespace Tests\Project;

use PHPUnit\Framework\TestCase;
use Project\App;

final class AppTest extends TestCase
{
    private $pathProject = '';
    private $pathWeb = '';
    
    public function setUp()
    {
        $pathProject = '/tmp/webservco/project/';
        $pathWeb = "{$pathProject}public/";
        if (!is_readable($pathWeb)) {
                mkdir($pathWeb, 0775, true);
                file_put_contents("{$pathProject}.env", 'dev');
        }
        $this->pathProject = $pathProject;
        $this->pathWeb = $pathWeb;
    }
    
    public function tearDown()
    {
        $pathBase = '/tmp/webservco/';
        $pathProject = "{$pathBase}project/";
        $pathWeb = "{$pathProject}public/";
        if (is_readable($pathWeb)) {
            rmdir($pathWeb);
            if (is_readable("{$pathProject}.env")) {
                unlink("{$pathProject}.env");
            }
            rmdir($pathProject);
            rmdir($pathBase);
        }
    }
    
    /**
    * @test
    */
    public function dummyProjectPathIsReadable()
    {
        $this->assertTrue(is_readable($this->pathProject));
    }
    
    /**
    * @test
    */
    public function dummyWebPathIsReadable()
    {
        $this->assertTrue(is_readable($this->pathWeb));
    }
    
    /**
    * @test
    * @expectedException \ErrorException
    */
    public function instantiationWithNullParameterThrowsException()
    {
        new App(null);
    }
    
    /**
    * @test
    * @expectedException \ErrorException
    */
    public function instantiationWithEmptyParameterThrowsException()
    {
        new App('');
    }
    
    /**
    * @test
    * @expectedException \ErrorException
    */
    public function instantiationWithDummyParameterThrowsException()
    {
        new App('foo');
    }
    
    /**
    * @test
    * @expectedException \ErrorException
    */
    public function instantiationInvalidParameterThrowsException()
    {
        new App('/tmp', '/tmp');
    }
    
    /**
    * @test
    * @depends dummyProjectPathIsReadable
    * @depends dummyWebPathIsReadable
    */
    public function instantiationWithValidParameterWorks()
    {
        $this->assertInstanceOf(
            'Project\App',
            new App($this->pathWeb, $this->pathProject)
        );
    }
}
