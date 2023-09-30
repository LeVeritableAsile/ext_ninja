<?php

namespace Asile\Ninja;

use s9e\TextFormatter\Configurator;

class Configure
{
    public function __invoke(Configurator $config)
    {
        $config->BBCodes->addCustom(
            '[NINJA]{TEXT}[/NINJA]',
            '<xsl:if test="$S_IS_NINJA=1"><blockquote class="forum-asile-ninja">{TEXT}</blockquote></xsl:if>'
        );
    }
}
