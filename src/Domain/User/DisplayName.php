<?php

namespace Baikal\Domain\User;

final class DisplayName
{
    private $displayName;

    private function __construct($displayName)
    {
        // TODO: Implement guards if required
        $this->displayName = $displayName;
    }

    public static function fromString($displayName)
    {
        return new self($displayName);
    }

    public function __toString()
    {
        return $this->displayName;
    }
}