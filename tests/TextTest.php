<?php

namespace CodeTheCulture\Forms\Tests;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class TextTest extends TestCase
{
    /** @test */
    public function it_renders_with_only_required_parameters()
    {
        $output = trim(View::file(__DIR__ . '/stubs/text/it_renders_with_only_required_parameters.blade.php', [
            'component' => '<x-culture-text name="username" value="johndoe" />'
        ])->render());

        $expected = '<input id="username" type="text" name="username" value="johndoe" class="block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">';

        $this->assertEquals($output, $expected);
    }
}
