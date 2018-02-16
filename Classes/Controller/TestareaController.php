<?php
namespace Marvin\Test\Controller;

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;

class TestareaController extends ActionController
{
    /**
     * @var \Neos\Flow\Security\Context
     * @Flow\Inject
     */
    protected $securityContext;

    /**
     * @return string
     */
    public function publicAction()
    {
        $account = $this->securityContext->getAccount();

        return 'public: ' . ($account ? $account->getAccountIdentifier() . '::' . $account->getAuthenticationProviderName() : 'n/a');
    }

    /**
     * @return string
     */
    public function otherPublicAction()
    {
        $account = $this->securityContext->getAccount();

        return 'otherPublic: ' . ($account ? $account->getAccountIdentifier() . '::' . $account->getAuthenticationProviderName() : 'n/a');
    }

    /**
     * @return string
     */
    public function protectedAction()
    {
        $account = $this->securityContext->getAccount();

        return 'protected: ' . $account->getAccountIdentifier() . '::' . $account->getAuthenticationProviderName();
    }
}
