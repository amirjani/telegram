<?php

namespace Alish\Telegram\API;

class KeyboardButton extends BaseTelegram {

    /**
     * @var string|null $text
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
     */
    protected $text;

    /**
     * @var boolean|null $request_contact
     * Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in protected chats only
     */
    protected $request_contact;

    /**
     * @var boolean|null $request_location
     * Optional. If True, the user's current location will be sent when the button is pressed. Available in protected chats only
     */
    protected $request_location;

}