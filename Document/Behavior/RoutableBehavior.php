<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\ArticleBundle\Document\Behavior;

use Sulu\Bundle\RouteBundle\Model\RoutableInterface;
use Sulu\Component\DocumentManager\Behavior\Mapping\LocaleBehavior;
use Sulu\Component\DocumentManager\Behavior\Mapping\UuidBehavior;

/**
 * This behavior has to be attached to documents which should have a sulu-route.
 */
interface RoutableBehavior extends RoutableInterface, UuidBehavior, LocaleBehavior
{
    /**
     * Returns route-path.
     *
     * @return string
     */
    public function getRoutePath();

    /**
     * Set route-path.
     *
     * @param string $routePath
     */
    public function setRoutePath($routePath);

    /**
     * Set uuid.
     *
     * @param string $uuid
     */
    public function setUuid($uuid);
}