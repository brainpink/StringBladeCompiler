<?php

namespace Wpb\String_Blade_Compiler\Tests\View\Blade;

class BladeIncludeWhenTest extends AbstractBladeTestCase
{
    public function testIncludeWhensAreCompiled()
    {
        $this->assertEquals('<?php echo $__env->renderWhen(true, \'foo\', ["foo" => "bar"], array_diff_key(get_defined_vars(), [\'__data\' => 1, \'__path\' => 1])); ?>', $this->compiler->compileString('@includeWhen(true, \'foo\', ["foo" => "bar"])'));
        $this->assertEquals('<?php echo $__env->renderWhen(true, \'foo\', array_diff_key(get_defined_vars(), [\'__data\' => 1, \'__path\' => 1])); ?>', $this->compiler->compileString('@includeWhen(true, \'foo\')'));
    }
}
