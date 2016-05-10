<?php

namespace Ecommerce\EcommerceBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EcommerceBundle extends Bundle
{

    public function ShowIndex(){
        $this->render('base.html.twig');
    }
}
