<?php

namespace Wpb\String_Blade_Compiler\Tests\View\Blade;

class BladeIncludeIfTest extends AbstractBladeTestCase
{
    public function testIncludeIfsAreCompiled()
    {
        $this->assertEquals('<?php if ($__env->exists(\'foo\')) echo $__env->make(\'foo\', array_diff_key(get_defined_vars(), [\'__data\' => 1, \'__path\' => 1]))->render(); ?>', $this->compiler->compileString('@includeIf(\'foo\')'));
        $this->assertEquals('<?php if ($__env->exists(name(foo))) echo $__env->make(name(foo), array_diff_key(get_defined_vars(), [\'__data\' => 1, \'__path\' => 1]))->render(); ?>', $this->compiler->compileString('@includeIf(name(foo))'));
    }
}
