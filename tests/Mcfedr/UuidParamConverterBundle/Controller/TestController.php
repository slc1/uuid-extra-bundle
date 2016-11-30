<?php

namespace Mcfedr\UuidParamConverterBundle\Controller;

use Ramsey\Uuid\Uuid;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    /**
     * @ParamConverter("uuid", class="Ramsey\Uuid\Uuid")
     * @Route("/simple/{uuid}")
     */
    public function simpleAction(Uuid $uuid)
    {
        return new Response($uuid->toString());
    }

    /**
     * @ParamConverter("uuid", class="Ramsey\Uuid\Uuid")
     * @Route("/optional/{uuid}")
     */
    public function optionalAction(Uuid $uuid = null)
    {
        return new Response($uuid ? $uuid->toString() : null);
    }
}
