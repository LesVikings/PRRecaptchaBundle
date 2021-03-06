<?php
declare(strict_types=1);

namespace PR\Bundle\RecaptchaBundle\Twig;

use Twig\TwigFunction;

class RecaptchaExtension extends \Twig_Extension
{
    private $configuration;

    /**
     * RecaptchaExtension constructor.
     * @param array $configuration
     */
    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return array
     */
    public function getFunctions() : array
    {
        return [
            new TwigFunction('getRecaptchaPublicKey', [$this, 'getRecaptchaPublicKey']),
        ];
    }

    /**
     * @return string
     */
    public function getRecaptchaPublicKey(): string
    {
        return $this->configuration['public_key'];
    }
}
