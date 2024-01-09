<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\FlexApi\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class InsightsSessionOptions {
    /**
     * @param string $authorization The Authorization HTTP request header
     * @return CreateInsightsSessionOptions Options builder
     */
    public static function create(string $authorization = Values::NONE): CreateInsightsSessionOptions {
        return new CreateInsightsSessionOptions($authorization);
    }
}

class CreateInsightsSessionOptions extends Options {
    /**
     * @param string $authorization The Authorization HTTP request header
     */
    public function __construct(string $authorization = Values::NONE) {
        $this->options['authorization'] = $authorization;
    }

    /**
     * The Authorization HTTP request header
     *
     * @param string $authorization The Authorization HTTP request header
     * @return $this Fluent Builder
     */
    public function setAuthorization(string $authorization): self {
        $this->options['authorization'] = $authorization;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.FlexApi.V1.CreateInsightsSessionOptions ' . $options . ']';
    }
}