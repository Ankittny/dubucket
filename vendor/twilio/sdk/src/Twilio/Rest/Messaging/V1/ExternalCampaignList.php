<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Messaging\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
class ExternalCampaignList extends ListResource {
    /**
     * Construct the ExternalCampaignList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [];

        $this->uri = '/Services/PreregisteredUsa2p';
    }

    /**
     * Create the ExternalCampaignInstance
     *
     * @param string $campaignId ID of the preregistered campaign.
     * @param string $messagingServiceSid The SID of the Messaging Service the
     *                                    resource is associated with
     * @return ExternalCampaignInstance Created ExternalCampaignInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $campaignId, string $messagingServiceSid): ExternalCampaignInstance {
        $data = Values::of(['CampaignId' => $campaignId, 'MessagingServiceSid' => $messagingServiceSid, ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new ExternalCampaignInstance($this->version, $payload);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Messaging.V1.ExternalCampaignList]';
    }
}