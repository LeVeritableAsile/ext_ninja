<?php

namespace Asile\Ninja;

use Flarum\Extend;

return [
    new Extend\Locales(__DIR__.'/locale'),

    (new Extend\Formatter)
        ->render(Render::class)
        ->configure(Configure::class),

    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum-ninja.less'),

    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),
];
