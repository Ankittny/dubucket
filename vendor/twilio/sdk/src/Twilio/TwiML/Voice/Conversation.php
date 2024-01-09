<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Conversation extends TwiML {
    /**
     * Conversation constructor.
     *
     * @param array $attributes Optional attributes
     */
    public function __construct($attributes = []) {
        parent::__construct('Conversation', null, $attributes);
    }

    /**
     * Add ServiceInstanceSid attribute.
     *
     * @param string $serviceInstanceSid Service instance Sid
     */
    public function setServiceInstanceSid($serviceInstanceSid): self {
        return $this->setAttribute('serviceInstanceSid', $serviceInstanceSid);
    }

    /**
     * Add InboundAutocreation attribute.
     *
     * @param bool $inboundAutocreation Inbound autocreation
     */
    public function setInboundAutocreation($inboundAutocreation): self {
        return $this->setAttribute('inboundAutocreation', $inboundAutocreation);
    }

    /**
     * Add RoutingAssignmentTimeout attribute.
     *
     * @param int $routingAssignmentTimeout Routing assignment timeout
     */
    public function setRoutingAssignmentTimeout($routingAssignmentTimeout): self {
        return $this->setAttribute('routingAssignmentTimeout', $routingAssignmentTimeout);
    }

    /**
     * Add InboundTimeout attribute.
     *
     * @param int $inboundTimeout Inbound timeout
     */
    public function setInboundTimeout($inboundTimeout): self {
        return $this->setAttribute('inboundTimeout', $inboundTimeout);
    }

    /**
     * Add Url attribute.
     *
     * @param string $url TwiML URL
     */
    public function setUrl($url): self {
        return $this->setAttribute('url', $url);
    }

    /**
     * Add Method attribute.
     *
     * @param string $method TwiML URL method
     */
    public function setMethod($method): self {
        return $this->setAttribute('method', $method);
    }

    /**
     * Add Record attribute.
     *
     * @param string $record Record
     */
    public function setRecord($record): self {
        return $this->setAttribute('record', $record);
    }

    /**
     * Add Trim attribute.
     *
     * @param string $trim Trim
     */
    public function setTrim($trim): self {
        return $this->setAttribute('trim', $trim);
    }

    /**
     * Add RecordingStatusCallback attribute.
     *
     * @param string $recordingStatusCallback Recording status callback URL
     */
    public function setRecordingStatusCallback($recordingStatusCallback): self {
        return $this->setAttribute('recordingStatusCallback', $recordingStatusCallback);
    }

    /**
     * Add RecordingStatusCallbackMethod attribute.
     *
     * @param string $recordingStatusCallbackMethod Recording status callback URL
     *                                              method
     */
    public function setRecordingStatusCallbackMethod($recordingStatusCallbackMethod): self {
        return $this->setAttribute('recordingStatusCallbackMethod', $recordingStatusCallbackMethod);
    }

    /**
     * Add RecordingStatusCallbackEvent attribute.
     *
     * @param string[] $recordingStatusCallbackEvent Recording status callback
     *                                               events
     */
    public function setRecordingStatusCallbackEvent($recordingStatusCallbackEvent): self {
        return $this->setAttribute('recordingStatusCallbackEvent', $recordingStatusCallbackEvent);
    }

    /**
     * Add StatusCallback attribute.
     *
     * @param string $statusCallback Status callback URL
     */
    public function setStatusCallback($statusCallback): self {
        return $this->setAttribute('statusCallback', $statusCallback);
    }

    /**
     * Add StatusCallbackMethod attribute.
     *
     * @param string $statusCallbackMethod Status callback URL method
     */
    public function setStatusCallbackMethod($statusCallbackMethod): self {
        return $this->setAttribute('statusCallbackMethod', $statusCallbackMethod);
    }

    /**
     * Add StatusCallbackEvent attribute.
     *
     * @param string[] $statusCallbackEvent Events to call status callback URL
     */
    public function setStatusCallbackEvent($statusCallbackEvent): self {
        return $this->setAttribute('statusCallbackEvent', $statusCallbackEvent);
    }
}