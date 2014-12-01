<?php

/*
 * This file is part of the CLSlackBundle.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @see Official documentation at https://api.slack.com/methods/groups.unarchive
 */
class GroupsUnarchivePayload extends AbstractPostPayload
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $channel;

    /**
     * @param string $groupId ID of the group to remove user from
     */
    public function setGroupId($groupId)
    {
        $this->channel = $groupId;
    }

    /**
     * @return string ID of the group to remove user from
     */
    public function getGroupId()
    {
        return $this->channel;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'groups.unarchive';
    }
}