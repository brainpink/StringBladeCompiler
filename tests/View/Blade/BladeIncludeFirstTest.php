<?php

namespace Wpb\String_Blade_Compiler\Tests\View\Blade;

class BladeIncludeFirstTest extends AbstractBladeTestCase
{
    public function testIncludeFirstsAreCompiled()
    {
        $this->assertEquals('<?php echo $__env->first(["one", "two"], array_diff_key(get_defined_vars(), [\'__data\' => 1, \'__path\' => 1]))->render(); ?>', $this->compiler->compileString('@includeFirst(["one", "two"])'));
        $this->assertEquals('<?php echo $__env->first(["one", "two"], ["foo" => "bar"], array_diff_key(get_defined_vars(), [\'__data\' => 1, \'__path\' => 1]))->render(); ?>', $this->compiler->compileString('@includeFirst(["one", "two"], ["foo" => "bar"])'));
    }
}
