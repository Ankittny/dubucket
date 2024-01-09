<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V2\Service\Channel;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;

class WebhookList extends ListResource {
    /**
     * Construct the WebhookList
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the Service that the Channel Webhook
     *                           resource is associated with
     * @param string $channelSid The SID of the Channel the Channel Webhook
     *                           resource belongs to
     */
    public function __construct(Version $version, string $serviceSid, string $channelSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'channelSid' => $channelSid, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Channels/' . \rawurlencode($channelSid) . '/Webhooks';
    }

    /**
     * Streams WebhookInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(int $limit = null, $pageSize = null): Stream {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Reads WebhookInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return WebhookInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Retrieve a single page of WebhookInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return WebhookPage Page of WebhookInstance
     */
    public function page($pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): WebhookPage {
        $params = Values::of(['PageToken' => $pageToken, 'Page' => $pageNumber, 'PageSize' => $pageSize, ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new WebhookPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of WebhookInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return WebhookPage Page of WebhookInstance
     */
    public function getPage(string $targetUrl): WebhookPage {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new WebhookPage($this->version, $response, $this->solution);
    }

    /**
     * Create the WebhookInstance
     *
     * @param string $type The type of webhook
     * @param array|Options $options Optional Arguments
     * @return WebhookInstance Created WebhookInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $type, array $options = []): WebhookInstance {
        $options = new Values($options);

        $data = Values::of([
            'Type' => $type,
            'Configuration.Url' => $options['configurationUrl'],
            'Configuration.Method' => $options['configurationMethod'],
            'Configuration.Filters' => Serialize::map($options['configurationFilters'], function($e) { return $e; }),
            'Configuration.Triggers' => Serialize::map($options['configurationTriggers'], function($e) { return $e; }),
            'Configuration.FlowSid' => $options['configurationFlowSid'],
            'Configuration.RetryCount' => $options['configurationRetryCount'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new WebhookInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['channelSid']
        );
    }

    /**
     * Constructs a WebhookContext
     *
     * @param string $sid The SID of the Channel Webhook resource to fetch
     */
    public function getContext(string $sid): WebhookContext {
        return new WebhookContext(
            $this->version,
            $this->solution['serviceSid'],
            $this->solution['channelSid'],
            $sid
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Chat.V2.WebhookList]';
    }
}