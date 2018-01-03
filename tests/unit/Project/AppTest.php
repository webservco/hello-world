<?php

namespace Tests\Project;

use PHPUnit\Framework\TestCase;
use org\bovigo\vfs\vfsStream;
use Project\App;

final class AppTest extends TestCase
{
    private $filesystem;
    
    private $pathProject = '';
    private $pathWeb = '';
    
    public function setUp()
    {
        $this->filesystem = vfsStream::setup();
        $pathProject = str_replace('unit/Project','',__DIR__) . 'assets/project/';
        vfsStream::copyFromFileSystem($pathProject, $this->filesystem);
        $this->pathProject = $this->filesystem->url() . '/';
        $this->pathWeb = $this->filesystem->url() . '/public/';
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
