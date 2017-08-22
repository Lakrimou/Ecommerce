<?php

namespace Ecommerce\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EcommerceUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
