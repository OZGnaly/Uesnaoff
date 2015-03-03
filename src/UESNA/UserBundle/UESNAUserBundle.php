<?php

namespace UESNA\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UESNAUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}