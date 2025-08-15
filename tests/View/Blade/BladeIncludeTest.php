<?php

namespace Wpb\String_Blade_Compiler\Tests\View\Blade;

class BladeIncludeTest extends AbstractBladeTestCase
{
    public function testIncludesAreCompiled()
    {
        $this->assertEquals('<?php echo $__env->make(\'foo\', array_diff_key(get_defined_vars(), [\'__data\' => 1, \'__path\' => 1]))->render(); ?>', $this->compiler->compileString('@include(\'foo\')'));
        $this->assertEquals('<?php echo $__env->make(name(foo), array_diff_key(get_defined_vars(), [\'__data\' => 1, \'__path\' => 1]))->render(); ?>', $this->compiler->compileString('@include(name(foo))'));
    }
}
