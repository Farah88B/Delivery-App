<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trunking
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Trunking\V1\Trunk;

use Twilio\Exceptions\TwilioException;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class IpAccessControlListContext extends InstanceContext
    {
    /**
     * Initialize the IpAccessControlListContext
     *
     * @param Version $version Version that contains the resource
     * @param string $trunkSid The SID of the Trunk to associate the IP Access Control List with.
     * @param string $sid The unique string that we created to identify the IpAccessControlList resource to delete.
     */
    public function __construct(
        Version $version,
        $trunkSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'trunkSid' =>
            $trunkSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Trunks/' . \rawurlencode($trunkSid)
        .'/IpAccessControlLists/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the IpAccessControlListInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        return $this->version->delete('DELETE', $this->uri, [], [], $headers);
    }


    /**
     * Fetch the IpAccessControlListInstance
     *
     * @return IpAccessControlListInstance Fetched IpAccessControlListInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): IpAccessControlListInstance
    {

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        $payload = $this->version->fetch('GET', $this->uri, [], [], $headers);

        return new IpAccessControlListInstance(
            $this->version,
            $payload,
            $this->solution['trunkSid'],
            $this->solution['sid']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Trunking.V1.IpAccessControlListContext ' . \implode(' ', $context) . ']';
    }
}