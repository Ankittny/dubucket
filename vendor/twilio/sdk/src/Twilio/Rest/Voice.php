<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Voice\V1;

/**
 * @property \Twilio\Rest\Voice\V1 $v1
 * @property \Twilio\Rest\Voice\V1\ArchivedCallList $archivedCalls
 * @property \Twilio\Rest\Voice\V1\ByocTrunkList $byocTrunks
 * @property \Twilio\Rest\Voice\V1\ConnectionPolicyList $connectionPolicies
 * @property \Twilio\Rest\Voice\V1\DialingPermissionsList $dialingPermissions
 * @property \Twilio\Rest\Voice\V1\IpRecordList $ipRecords
 * @property \Twilio\Rest\Voice\V1\SourceIpMappingList $sourceIpMappings
 * @method \Twilio\Rest\Voice\V1\ArchivedCallContext archivedCalls(\DateTime $date, string $sid)
 * @method \Twilio\Rest\Voice\V1\ByocTrunkContext byocTrunks(string $sid)
 * @method \Twilio\Rest\Voice\V1\ConnectionPolicyContext connectionPolicies(string $sid)
 * @method \Twilio\Rest\Voice\V1\IpRecordContext ipRecords(string $sid)
 * @method \Twilio\Rest\Voice\V1\SourceIpMappingContext sourceIpMappings(string $sid)
 */
class Voice extends Domain {
    protected $_v1;

    /**
     * Construct the Voice Domain
     *
     * @param Client $client Client to communicate with Twilio
     */
    public function __construct(Client $client) {
        parent::__construct($client);

        $this->baseUrl = 'https://voice.twilio.com';
    }

    /**
     * @return V1 Version v1 of voice
     */
    protected function getV1(): V1 {
        if (!$this->_v1) {
            $this->_v1 = new V1($this);
        }
        return $this->_v1;
    }

    /**
     * Magic getter to lazy load version
     *
     * @param string $name Version to return
     * @return \Twilio\Version The requested version
     * @throws TwilioException For unknown versions
     */
    public function __get(string $name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown version ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return \Twilio\InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments) {
        $method = 'context' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return \call_user_func_array([$this, $method], $arguments);
        }

        throw new TwilioException('Unknown context ' . $name);
    }

    protected function getArchivedCalls(): \Twilio\Rest\Voice\V1\ArchivedCallList {
        return $this->v1->archivedCalls;
    }

    /**
     * @param \DateTime $date The date of the Call in UTC.
     * @param string $sid The unique string that identifies this resource
     */
    protected function contextArchivedCalls(\DateTime $date, string $sid): \Twilio\Rest\Voice\V1\ArchivedCallContext {
        return $this->v1->archivedCalls($date, $sid);
    }

    protected function getByocTrunks(): \Twilio\Rest\Voice\V1\ByocTrunkList {
        return $this->v1->byocTrunks;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextByocTrunks(string $sid): \Twilio\Rest\Voice\V1\ByocTrunkContext {
        return $this->v1->byocTrunks($sid);
    }

    protected function getConnectionPolicies(): \Twilio\Rest\Voice\V1\ConnectionPolicyList {
        return $this->v1->connectionPolicies;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextConnectionPolicies(string $sid): \Twilio\Rest\Voice\V1\ConnectionPolicyContext {
        return $this->v1->connectionPolicies($sid);
    }

    protected function getDialingPermissions(): \Twilio\Rest\Voice\V1\DialingPermissionsList {
        return $this->v1->dialingPermissions;
    }

    protected function getIpRecords(): \Twilio\Rest\Voice\V1\IpRecordList {
        return $this->v1->ipRecords;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextIpRecords(string $sid): \Twilio\Rest\Voice\V1\IpRecordContext {
        return $this->v1->ipRecords($sid);
    }

    protected function getSourceIpMappings(): \Twilio\Rest\Voice\V1\SourceIpMappingList {
        return $this->v1->sourceIpMappings;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextSourceIpMappings(string $sid): \Twilio\Rest\Voice\V1\SourceIpMappingContext {
        return $this->v1->sourceIpMappings($sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Voice]';
    }
}