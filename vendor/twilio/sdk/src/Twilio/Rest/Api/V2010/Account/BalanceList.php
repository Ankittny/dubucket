<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class BalanceList extends ListResource {
    /**
     * Construct the BalanceList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid Account Sid.
     */
    public function __construct(Version $version, string $accountSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid, ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Balance.json';
    }

    /**
     * Fetch the BalanceInstance
     *
     * @return BalanceInstance Fetched BalanceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): BalanceInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new BalanceInstance($this->version, $payload, $this->solution['accountSid']);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Api.V2010.BalanceList]';
    }
}