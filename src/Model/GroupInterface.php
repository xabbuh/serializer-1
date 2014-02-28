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
 * A group of {@link AgentInterface Agents} of a {@link StatementInterface}.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
interface GroupInterface extends ActorInterface, Object
{
    /**
     * Adds a member to this group.
     *
     * @param \Xabbuh\XApiCommon\Model\AgentInterface $agent The member to add
     */
    public function addMember(AgentInterface $agent);

    /**
     * Removes a member.
     *
     * @param \Xabbuh\XApiCommon\Model\AgentInterface $agent The member to remove
     */
    public function removeMember(AgentInterface $agent);

    /**
     * Sets the members of this group.
     *
     * @param \Xabbuh\XApiCommon\Model\AgentInterface[] $members The members
     */
    public function setMembers(array $members);

    /**
     * Returns the members of this group.
     *
     * @return \Xabbuh\XApiCommon\Model\AgentInterface[] The members
     */
    public function getMembers();
}
