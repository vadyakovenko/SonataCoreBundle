<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\Twig\TokenParser;

@trigger_error(
    'The '.__NAMESPACE__.'\DeprecatedTemplateTokenParser class is deprecated since version 3.x and will be removed in 4.0.'
    .' Use Sonata\Twig\TokenParser\DeprecatedTemplateTokenParser instead.',
    E_USER_DEPRECATED
);

class_alias(
    \Sonata\Twig\TokenParser\DeprecatedTemplateTokenParser::class,
    __NAMESPACE__.'\DeprecatedTemplateTokenParser'
);