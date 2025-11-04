<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;

class Counter extends Component
{
    public $count;

    public function __construct()
    {
        $this->count = Cache::get('counter', 0);
        $this->count++;
        
        Cache::put('counter', $this->count);
    }

    public function render()
    {
        return view('components.counter.counter');
    }
}
