<?php

namespace AppBundle\Model;

class Campaign
{
    public $bizcatNm;
    public $brandNm;
    public $campId;
    public $campNm;
    public $campPeriod;
    public $campPeriodForExcel;
    public $campendYmdt;
    public $campendYmdtStr;
    public $campstartYmdt;
    public $campstartYmdtStr;
    public $ctrtMny;
    public $lcatNm;
    public $mntgstatCd;
    public $needUserConfirmMonitoringYN;
    public $reguserNm;
    public $scatNm;
    public $sponsorNm;
    public $statCd;
    public $svcMny;

    public function getStartDateTime()
    {
        return new \DateTime($this->campstartYmdt);
    }

    public function getEndDateTime()
    {
        return new \DateTime($this->campendYmdt);
    }

    /**
     * @return mixed
     */
    public function getBizcatNm()
    {
        return $this->bizcatNm;
    }

    /**
     * @param mixed $bizcatNm
     */
    public function setBizcatNm($bizcatNm)
    {
        $this->bizcatNm = $bizcatNm;
    }

    /**
     * @return mixed
     */
    public function getBrandNm()
    {
        return $this->brandNm;
    }

    /**
     * @param mixed $brandNm
     */
    public function setBrandNm($brandNm)
    {
        $this->brandNm = $brandNm;
    }

    /**
     * @return mixed
     */
    public function getCampId()
    {
        return $this->campId;
    }

    /**
     * @param mixed $campId
     */
    public function setCampId($campId)
    {
        $this->campId = $campId;
    }

    /**
     * @return mixed
     */
    public function getCampNm()
    {
        return $this->campNm;
    }

    /**
     * @param mixed $campNm
     */
    public function setCampNm($campNm)
    {
        $this->campNm = $campNm;
    }

    /**
     * @return mixed
     */
    public function getCampPeriod()
    {
        return $this->campPeriod;
    }

    /**
     * @param mixed $campPeriod
     */
    public function setCampPeriod($campPeriod)
    {
        $this->campPeriod = $campPeriod;
    }

    /**
     * @return mixed
     */
    public function getCampPeriodForExcel()
    {
        return $this->campPeriodForExcel;
    }

    /**
     * @param mixed $campPeriodForExcel
     */
    public function setCampPeriodForExcel($campPeriodForExcel)
    {
        $this->campPeriodForExcel = $campPeriodForExcel;
    }

    /**
     * @return mixed
     */
    public function getCampendYmdt()
    {
        return $this->campendYmdt;
    }

    /**
     * @param mixed $campendYmdt
     */
    public function setCampendYmdt($campendYmdt)
    {
        $this->campendYmdt = $campendYmdt;
    }

    /**
     * @return mixed
     */
    public function getCampendYmdtStr()
    {
        return $this->campendYmdtStr;
    }

    /**
     * @param mixed $campendYmdtStr
     */
    public function setCampendYmdtStr($campendYmdtStr)
    {
        $this->campendYmdtStr = $campendYmdtStr;
    }

    /**
     * @return mixed
     */
    public function getCampstartYmdt()
    {
        return $this->campstartYmdt;
    }

    /**
     * @param mixed $campstartYmdt
     */
    public function setCampstartYmdt($campstartYmdt)
    {
        $this->campstartYmdt = $campstartYmdt;
    }

    /**
     * @return mixed
     */
    public function getCampstartYmdtStr()
    {
        return $this->campstartYmdtStr;
    }

    /**
     * @param mixed $campstartYmdtStr
     */
    public function setCampstartYmdtStr($campstartYmdtStr)
    {
        $this->campstartYmdtStr = $campstartYmdtStr;
    }

    /**
     * @return mixed
     */
    public function getCtrtMny()
    {
        return $this->ctrtMny;
    }

    /**
     * @param mixed $ctrtMny
     */
    public function setCtrtMny($ctrtMny)
    {
        $this->ctrtMny = $ctrtMny;
    }

    /**
     * @return mixed
     */
    public function getLcatNm()
    {
        return $this->lcatNm;
    }

    /**
     * @param mixed $lcatNm
     */
    public function setLcatNm($lcatNm)
    {
        $this->lcatNm = $lcatNm;
    }

    /**
     * @return mixed
     */
    public function getMntgstatCd()
    {
        return $this->mntgstatCd;
    }

    /**
     * @param mixed $mntgstatCd
     */
    public function setMntgstatCd($mntgstatCd)
    {
        $this->mntgstatCd = $mntgstatCd;
    }

    /**
     * @return mixed
     */
    public function getNeedUserConfirmMonitoringYN()
    {
        return $this->needUserConfirmMonitoringYN;
    }

    /**
     * @param mixed $needUserConfirmMonitoringYN
     */
    public function setNeedUserConfirmMonitoringYN($needUserConfirmMonitoringYN)
    {
        $this->needUserConfirmMonitoringYN = $needUserConfirmMonitoringYN;
    }

    /**
     * @return mixed
     */
    public function getReguserNm()
    {
        return $this->reguserNm;
    }

    /**
     * @param mixed $reguserNm
     */
    public function setReguserNm($reguserNm)
    {
        $this->reguserNm = $reguserNm;
    }

    /**
     * @return mixed
     */
    public function getScatNm()
    {
        return $this->scatNm;
    }

    /**
     * @param mixed $scatNm
     */
    public function setScatNm($scatNm)
    {
        $this->scatNm = $scatNm;
    }

    /**
     * @return mixed
     */
    public function getSponsorNm()
    {
        return $this->sponsorNm;
    }

    /**
     * @param mixed $sponsorNm
     */
    public function setSponsorNm($sponsorNm)
    {
        $this->sponsorNm = $sponsorNm;
    }

    /**
     * @return mixed
     */
    public function getStatCd()
    {
        return $this->statCd;
    }

    /**
     * @param mixed $statCd
     */
    public function setStatCd($statCd)
    {
        $this->statCd = $statCd;
    }

    /**
     * @return mixed
     */
    public function getSvcMny()
    {
        return $this->svcMny;
    }

    /**
     * @param mixed $svcMny
     */
    public function setSvcMny($svcMny)
    {
        $this->svcMny = $svcMny;
    }

}