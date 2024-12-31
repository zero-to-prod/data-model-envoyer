<?php

namespace Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\DataModelEnvoyer\Action;

class VersionTest extends TestCase
{
    #[Test] public function correct_version_validation(): void
    {
        self::assertEquals(
            1,
            Action::from([Action::version => 1])->version
        );
    }
}