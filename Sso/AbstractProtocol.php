<?php

namespace BeSimple\SsoAuthBundle\Sso;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Buzz\Message\Response;
use BeSimple\SsoAuthBundle\Security\Core\Authentication\Token\SsoToken;

/**
 * @author: Jean-François Simon <contact@jfsimon.fr>
 */
abstract class AbstractProtocol extends AbstractComponent
{
    /**
     * Processes internal logout operations.
     *
     * @param \BeSimple\SsoAuthBundle\Security\Core\Authentication\Token\SsoToken $token
     *
     * @return void
     */
    public function processLogout(SsoToken $token)
    {
        // does nothing most of the case
    }
}
