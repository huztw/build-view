<?php

namespace Huztw\BuildView;

use Huztw\BuildView\Content;

class BuildView
{
    /**
     * @param Closure $callable
     *
     * @return Content
     */
    public function content(Closure $callable = null)
    {
        return new Content($callable);
    }
}
