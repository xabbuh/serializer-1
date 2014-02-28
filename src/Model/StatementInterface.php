<?php

/*
 * This file is part of the XabbuhXApiCommon package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\XApiCommon\Model;

/**
 * An Experience API {@link https://github.com/adlnet/xAPI-Spec/blob/master/xAPI.md#statement Statement}.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
interface StatementInterface
{
    /**
     * Sets the Statement's unique identifier.
     *
     * @param string $id The identifier
     */
    public function setId($id);

    /**
     * Returns the Statement's unique identifier.
     *
     * @return string The identifier
     */
    public function getId();

    /**
     * Sets the Statement's {@link VerbInterface Verb}.
     *
     * @param \Xabbuh\XApiCommon\Model\VerbInterface $verb The Verb
     */
    public function setVerb(VerbInterface $verb);

    /**
     * Returns the Statement's {@link VerbInterface Verb}.
     *
     * @return \Xabbuh\XApiCommon\Model\VerbInterface The Verb
     */
    public function getVerb();

    /**
     * Sets the Statement's {@link ActorInterface Actor}.
     *
     * @param \Xabbuh\XApiCommon\Model\ActorInterface $actor The Actor
     */
    public function setActor(ActorInterface $actor);

    /**
     * Returns the Statement's {@link ActorInterface Actor}.
     *
     * @return \Xabbuh\XApiCommon\Model\ActorInterface The Actor
     */
    public function getActor();

    /**
     * Sets the Statement's {@link Object}.
     *
     * @param \Xabbuh\XApiCommon\Model\Object $object The Object
     */
    public function setObject(Object $object);

    /**
     * Returns the Statement's {@link Object}.
     *
     * @return \Xabbuh\XApiCommon\Model\Object The Object
     */
    public function getObject();
}