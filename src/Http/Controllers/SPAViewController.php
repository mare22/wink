<?php

namespace Wink\Http\Controllers;

use Wink\Wink;

class SPAViewController
{
    /**
     * Single page application catch-all route.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function __invoke()
    {
        return view('wink::layout', [
            'winkScriptVariables' => Wink::scriptVariables(),
        ]);
    }
}
