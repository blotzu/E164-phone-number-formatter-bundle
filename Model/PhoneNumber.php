<?php

namespace Guru\PhoneNumberFormatterBundle\Model;

class PhoneNumber
{
    private $countryCode;
    private $nationalDestinationCode;
    private $nationalDestinationCodeInternational;
    private $subscriberNumber;
    private $isMobile = false;

    /* Setters */
    public function setCountryCode($countryCode = '')
    {
        $this->countryCode = $countryCode;
    }

    public function setNationalDestinationCode($nationalDestinationCode = '')
    {
        $this->nationalDestinationCode = $nationalDestinationCode;
    }

    public function setNationalDestinationCodeInternational($nationalDestinationCodeInternational = '')
    {
        $this->nationalDestinationCodeInternational = $nationalDestinationCodeInternational;
    }

    public function setSubscriberNumber($subscriberNumber = '')
    {
        $this->subscriberNumber = $subscriberNumber;
    }

    public function setIsMobile($isMobile = false)
    {
        $this->isMobile = $isMobile;
    }

    /* Getters */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function getNationalDestinationCode()
    {
        return $this->nationalDestinationCode;
    }

    public function getNationalDestinationCodeInternational()
    {
        return $this->nationalDestinationCodeInternational;
    }

    public function getSubscriberNumber()
    {
        return $this->subscriberNumber;
    }

    public function getIsMobile()
    {
        return $this->isMobile;
    }

    public function toArray()
    {
        return array(
            'countryCode' => $this->countryCode,
            'nationalDestinationCode' => $this->nationalDestinationCode,
            'nationalDestinationCodeInternational' => $this->nationalDestinationCodeInternational,
            'subscriberNumber' => $this->subscriberNumber,
            'isMobile' => $this->isMobile,
        );
    }
}
