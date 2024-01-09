<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Messaging\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
class DomainConfigContext extends InstanceContext {
    /**
     * Initialize the DomainConfigContext
     *
     * @param Version $version Version that contains the resource
     * @param string $domainSid Unique string used to identify the domain that this
     *                          config should be associated with.
     */
    public function __construct(Version $version, $domainSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['domainSid' => $domainSid, ];

        $this->uri = '/LinkShortening/Domains/' . \rawurlencode($domainSid) . '/Config';
    }

    /**
     * Update the DomainConfigInstance
     *
     * @param string[] $messagingServiceSids A list of messagingServiceSids (with
     *                                       prefix MG)
     * @param array|Options $options Optional Arguments
     * @return DomainConfigInstance Updated DomainConfigInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $messagingServiceSids, array $options = []): DomainConfigInstance {
        $options = new Values($options);

        $data = Values::of([
            'MessagingServiceSids' => Serialize::map($messagingServiceSids, function($e) { return $e; }),
            'FallbackUrl' => $options['fallbackUrl'],
            'CallbackUrl' => $options['callbackUrl'],
            'MessagingServiceSidsAction' => $options['messagingServiceSidsAction'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new DomainConfigInstance($this->version, $payload, $this->solution['domainSid']);
    }

    /**
     * Fetch the DomainConfigInstance
     *
     * @return DomainConfigInstance Fetched DomainConfigInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): DomainConfigInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new DomainConfigInstance($this->version, $payload, $this->solution['domainSid']);
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
        return '[Twilio.Messaging.V1.DomainConfigContext ' . \implode(' ', $context) . ']';
    }
}