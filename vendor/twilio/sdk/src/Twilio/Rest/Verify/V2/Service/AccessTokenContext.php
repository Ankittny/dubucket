<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Verify\V2\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

class AccessTokenContext extends InstanceContext {
    /**
     * Initialize the AccessTokenContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid Service Sid.
     * @param string $sid A string that uniquely identifies this Access Token.
     */
    public function __construct(Version $version, $serviceSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'sid' => $sid, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/AccessTokens/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch the AccessTokenInstance
     *
     * @return AccessTokenInstance Fetched AccessTokenInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): AccessTokenInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new AccessTokenInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Verify.V2.AccessTokenContext ' . \implode(' ', $context) . ']';
    }
}