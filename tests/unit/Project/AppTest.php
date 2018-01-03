<?php

namespace Tests\Project;

use PHPUnit\Framework\TestCase;
use Project\App;

final class AppTest extends TestCase
{
    protected $pathProject = '';
    protected $pathWeb = '';
    
    public function setUp()
    {
        $pathProject = str_replace('unit/Project','',__DIR__) . 'assets/project/';
        $this->pathProject = $pathProject;
        $this->pathWeb = "{$pathProject}public/";
    }
    
    /**
    * @test
    */
    public function instantiationWithNullParameterThrowsException()
    {
        $this->expectException('\ErrorException');
         
        new App(null);
    }
    
    /**
    * @test
    */
    public function instantiationWithEmptyParameterThrowsException()
    {
        $this->expectException('\ErrorException');
         
        new App('');
    }
    
    /**
    * @test
    */
    public function instantiationWithDummyParameterThrowsException()
    {
        $this->expectException('\ErrorException');
         
        new App('foo');
    }
    
    /**
    * @test
    */
    public function instantiationInvalidParameterThrowsException()
    {
        $this->expectException('\ErrorException');
         
        new App('/tmp', '/tmp');
    }
    
    /**
    * @test
    */
    public function instantiationWithValidParameterWorks()
    {
        $this->assertInstanceOf(
            'Project\App',
            new App($this->pathWeb, $this->pathProject)
        );
    }
}
