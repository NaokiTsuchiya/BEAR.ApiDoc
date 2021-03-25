<?php

declare(strict_types=1);

namespace BEAR\ApiDoc;

use phpDocumentor\Reflection\DocBlock\Tags\Link;

use function implode;
use function sprintf;

use const PHP_EOL;

final class TagLinks
{
    /** @var list<Link> */
    private $links;

    /**
     * @param list<Link> $links
     */
    public function __construct(array $links)
    {
        $this->links = $links;
    }

    public function __toString()
    {
        $view = [];
        foreach ($this->links as $link) {
            $view[] = sprintf(' * @link [%s](%s) %s', $link->getLink(), $link->getLink(), $link->getDescription());
        }

        return implode(PHP_EOL, $view);
    }
}