<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Oauth\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class TokenList extends ListResource {
    /**
     * Construct the TokenList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [];

        $this->uri = '/token';
    }

    /**
     * Create the TokenInstance
     *
     * @param string $grantType A way of representing resource owner's to obtain
     *                          access token
     * @param string $clientSid A string that uniquely identifies this oauth app
     * @param array|Options $options Optional Arguments
     * @return TokenInstance Created TokenInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $grantType, string $clientSid, array $options = []): TokenInstance {
        $options = new Values($options);

        $data = Values::of([
            'GrantType' => $grantType,
            'ClientSid' => $clientSid,
            'ClientSecret' => $options['clientSecret'],
            'Code' => $options['code'],
            'CodeVerifier' => $options['codeVerifier'],
            'DeviceCode' => $options['deviceCode'],
            'RefreshToken' => $options['refreshToken'],
            'DeviceId' => $options['deviceId'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new TokenInstance($this->version, $payload);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Oauth.V1.TokenList]';
    }
}