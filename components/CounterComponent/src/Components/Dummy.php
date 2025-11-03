<?php

namespace Backstage\Dummy\Components;

use Illuminate\View\Component;

class Dummy extends Component
{
    public function __construct(public ?string $var)
    {
    }

    public function render()
    {
        return view('dummy::dummy.dummy');
    }
}
