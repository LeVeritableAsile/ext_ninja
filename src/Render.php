<?php

namespace Asile\Ninja;

use s9e\TextFormatter\Renderer;
use Psr\Http\Message\ServerRequestInterface as Request;

class Render
{
    public function __invoke(Renderer $renderer, $context, string $xml, Request $request = null): string
    {
        $this->toggleNinja($renderer, $request);

        return $xml;
    }

    private function toggleNinja(Renderer $renderer, Request $request)
    {
        if (!$request)
          return;

        $actor = $request->getAttribute('actor');
        if (!$actor)
          return;

        $renderer->setParameter('S_IS_NINJA', $actor->hasPermission('seeNinjaBlocks'));
    }
}
