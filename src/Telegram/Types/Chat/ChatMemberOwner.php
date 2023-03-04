<?php

namespace SergiX44\Nutgram\Telegram\Types\Chat;

use SergiX44\Nutgram\Telegram\Enums\ChatMemberStatus;

/**
 * Represents a {@see https://core.telegram.org/bots/api#chatmember chat member}
 * that owns the chat and has all administrator privileges.
 * @see https://core.telegram.org/bots/api#chatmemberowner
 */
class ChatMemberOwner extends ChatMember
{
    /**
     * The member's status in the chat, always “creator”
     */
    //public string $status = 'creator';
    public ChatMemberStatus $status = ChatMemberStatus::CREATOR;

    /**
     * True, if the user's presence in the chat is hidden
     */
    public ?bool $is_anonymous = null;

    /**
     * Optional. Custom title for this user
     */
    public ?string $custom_title = null;
}
