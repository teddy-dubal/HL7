<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * PV2 segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-pv2-patient-visit-information-segment
 */
class PV2 extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('PV2', $fields);
    }

    public function setPriorPendingLocation(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }
    public function getPriorPendingLocation(int $position = 1)
    {
        return $this->getField($position);
    }

    public function setAccommodationCode(int $value, int $position = 2)
    {
        return $this->setField($position, $value);
    }
    public function getAccommodationCode(int $position = 2)
    {
        return $this->getField($position);
    }

    public function setAdmitReason(int $value, int $position = 3)
    {
        return $this->setField($position, $value);
    }
    public function getAdmitReason(int $position = 3)
    {
        return $this->getField($position);
    }

    public function setTransferReason(int $value, int $position = 4)
    {
        return $this->setField($position, $value);
    }
    public function getTransferReason(int $position = 4)
    {
        return $this->getField($position);
    }

    public function setPatientValuables(int $value, int $position = 5)
    {
        return $this->setField($position, $value);
    }
    public function getPatientValuables(int $position = 5)
    {
        return $this->getField($position);
    }

    public function setPatientValuablesLocation(int $value, int $position = 6)
    {
        return $this->setField($position, $value);
    }
    public function getPatientValuablesLocation(int $position = 6)
    {
        return $this->getField($position);
    }

    public function setVisitUserCode(int $value, int $position = 7)
    {
        return $this->setField($position, $value);
    }
    public function getVisitUserCode(int $position = 7)
    {
        return $this->getField($position);
    }

    public function setExpectedAdmitDateTime(int $value, int $position = 8)
    {
        return $this->setField($position, $value);
    }
    public function getExpectedAdmitDateTime(int $position = 8)
    {
        return $this->getField($position);
    }

    public function setExpectedDischargeDateTime(int $value, int $position = 9)
    {
        return $this->setField($position, $value);
    }
    public function getExpectedDischargeDateTime(int $position = 9)
    {
        return $this->getField($position);
    }

    public function setEstimatedLengthofInpatientStay(int $value, int $position = 10)
    {
        return $this->setField($position, $value);
    }
    public function getEstimatedLengthofInpatientStay(int $position = 10)
    {
        return $this->getField($position);
    }

    public function setActualLengthofInpatientStay(int $value, int $position = 11)
    {
        return $this->setField($position, $value);
    }
    public function getActualLengthofInpatientStay(int $position = 11)
    {
        return $this->getField($position);
    }

    public function setVisitDescription(int $value, int $position = 12)
    {
        return $this->setField($position, $value);
    }
    public function getVisitDescription(int $position = 12)
    {
        return $this->getField($position);
    }

    public function setReferralSourceCode(int $value, int $position = 13)
    {
        return $this->setField($position, $value);
    }
    public function getReferralSourceCode(int $position = 13)
    {
        return $this->getField($position);
    }

    public function setPreviousServiceDate(int $value, int $position = 14)
    {
        return $this->setField($position, $value);
    }
    public function getPreviousServiceDate(int $position = 14)
    {
        return $this->getField($position);
    }

    public function setEmploymentIllnessRelatedIndicator(int $value, int $position = 15)
    {
        return $this->setField($position, $value);
    }
    public function getEmploymentIllnessRelatedIndicator(int $position = 15)
    {
        return $this->getField($position);
    }

    public function setPurgeStatusCode(int $value, int $position = 16)
    {
        return $this->setField($position, $value);
    }
    public function getPurgeStatusCode(int $position = 16)
    {
        return $this->getField($position);
    }

    public function setPurgeStatusDate(int $value, int $position = 17)
    {
        return $this->setField($position, $value);
    }
    public function getPurgeStatusDate(int $position = 17)
    {
        return $this->getField($position);
    }

    public function setSpecialProgramCode(int $value, int $position = 18)
    {
        return $this->setField($position, $value);
    }
    public function getSpecialProgramCode(int $position = 18)
    {
        return $this->getField($position);
    }

    public function setRetentionIndicator(int $value, int $position = 19)
    {
        return $this->setField($position, $value);
    }
    public function getRetentionIndicator(int $position = 19)
    {
        return $this->getField($position);
    }

    public function setExpectedNumberofInsurancePlans(int $value, int $position = 20)
    {
        return $this->setField($position, $value);
    }
    public function getExpectedNumberofInsurancePlans(int $position = 20)
    {
        return $this->getField($position);
    }

    public function setVisitPublicityCode(int $value, int $position = 21)
    {
        return $this->setField($position, $value);
    }
    public function getVisitPublicityCode(int $position = 21)
    {
        return $this->getField($position);
    }

    public function setVisitProtectionIndicator(int $value, int $position = 22)
    {
        return $this->setField($position, $value);
    }
    public function getVisitProtectionIndicator(int $position = 22)
    {
        return $this->getField($position);
    }

    public function setClinicOrganizationName(int $value, int $position = 23)
    {
        return $this->setField($position, $value);
    }
    public function getClinicOrganizationName(int $position = 23)
    {
        return $this->getField($position);
    }

    public function setPatientStatusCode(int $value, int $position = 24)
    {
        return $this->setField($position, $value);
    }
    public function getPatientStatusCode(int $position = 24)
    {
        return $this->getField($position);
    }

    public function setVisitPriorityCode(int $value, int $position = 25)
    {
        return $this->setField($position, $value);
    }
    public function getVisitPriorityCode(int $position = 25)
    {
        return $this->getField($position);
    }

    public function setPreviousTreatmentDate(int $value, int $position = 26)
    {
        return $this->setField($position, $value);
    }
    public function getPreviousTreatmentDate(int $position = 26)
    {
        return $this->getField($position);
    }

    public function setExpectedDischargeDisposition(int $value, int $position = 27)
    {
        return $this->setField($position, $value);
    }
    public function getExpectedDischargeDisposition(int $position = 27)
    {
        return $this->getField($position);
    }

    public function setSignatureonFileDate(int $value, int $position = 28)
    {
        return $this->setField($position, $value);
    }
    public function getSignatureonFileDate(int $position = 28)
    {
        return $this->getField($position);
    }

    public function setFirstSimilarIllnessDate(int $value, int $position = 29)
    {
        return $this->setField($position, $value);
    }
    public function getFirstSimilarIllnessDate(int $position = 29)
    {
        return $this->getField($position);
    }

    public function setPatientChargeAdjustmentCode(int $value, int $position = 30)
    {
        return $this->setField($position, $value);
    }
    public function getPatientChargeAdjustmentCode(int $position = 30)
    {
        return $this->getField($position);
    }

    public function setRecurringServiceCode(int $value, int $position = 31)
    {
        return $this->setField($position, $value);
    }
    public function getRecurringServiceCode(int $position = 31)
    {
        return $this->getField($position);
    }

    public function setBillingMediaCode(int $value, int $position = 32)
    {
        return $this->setField($position, $value);
    }
    public function getBillingMediaCode(int $position = 32)
    {
        return $this->getField($position);
    }

    public function setExpectedSurgeryDateandTime(int $value, int $position = 33)
    {
        return $this->setField($position, $value);
    }
    public function getExpectedSurgeryDateandTime(int $position = 33)
    {
        return $this->getField($position);
    }

    public function setMilitaryPartnershipCode(int $value, int $position = 34)
    {
        return $this->setField($position, $value);
    }
    public function getMilitaryPartnershipCode(int $position = 34)
    {
        return $this->getField($position);
    }

    public function setMilitaryNonAvailabilityCode(int $value, int $position = 35)
    {
        return $this->setField($position, $value);
    }
    public function getMilitaryNonAvailabilityCode(int $position = 35)
    {
        return $this->getField($position);
    }

    public function setNewbornBabyIndicator(int $value, int $position = 36)
    {
        return $this->setField($position, $value);
    }
    public function getNewbornBabyIndicator(int $position = 36)
    {
        return $this->getField($position);
    }

    public function setBabyDetainedIndicator(int $value, int $position = 37)
    {
        return $this->setField($position, $value);
    }
    public function getBabyDetainedIndicator(int $position = 37)
    {
        return $this->getField($position);
    }

    public function setModeofArrivalCode(int $value, int $position = 38)
    {
        return $this->setField($position, $value);
    }
    public function getModeofArrivalCode(int $position = 38)
    {
        return $this->getField($position);
    }

    public function setRecreationalDrugUseCode(int $value, int $position = 39)
    {
        return $this->setField($position, $value);
    }
    public function getRecreationalDrugUseCode(int $position = 39)
    {
        return $this->getField($position);
    }

    public function setAdmissionLevelofCareCode(int $value, int $position = 40)
    {
        return $this->setField($position, $value);
    }
    public function getAdmissionLevelofCareCode(int $position = 40)
    {
        return $this->getField($position);
    }

    public function setPrecautionCode(int $value, int $position = 41)
    {
        return $this->setField($position, $value);
    }
    public function getPrecautionCode(int $position = 41)
    {
        return $this->getField($position);
    }

    public function setPatientConditionCode(int $value, int $position = 42)
    {
        return $this->setField($position, $value);
    }
    public function getPatientConditionCode(int $position = 42)
    {
        return $this->getField($position);
    }

    public function setLivingWillCode(int $value, int $position = 43)
    {
        return $this->setField($position, $value);
    }
    public function getLivingWillCode(int $position = 43)
    {
        return $this->getField($position);
    }

    public function setOrganDonorCode(int $value, int $position = 44)
    {
        return $this->setField($position, $value);
    }
    public function getOrganDonorCode(int $position = 44)
    {
        return $this->getField($position);
    }

    public function setAdvanceDirectiveCode(int $value, int $position = 45)
    {
        return $this->setField($position, $value);
    }
    public function getAdvanceDirectiveCode(int $position = 45)
    {
        return $this->getField($position);
    }

    public function setPatientStatusEffectiveDate(int $value, int $position = 46)
    {
        return $this->setField($position, $value);
    }
    public function getPatientStatusEffectiveDate(int $position = 46)
    {
        return $this->getField($position);
    }

    public function setExpectedLOAReturnDateTime(int $value, int $position = 47)
    {
        return $this->setField($position, $value);
    }
    public function getExpectedLOAReturnDateTime(int $position = 47)
    {
        return $this->getField($position);
    }

    public function setExpectedPreadmissionTestingDateTime(int $value, int $position = 48)
    {
        return $this->setField($position, $value);
    }
    public function getExpectedPreadmissionTestingDateTime(int $position = 48)
    {
        return $this->getField($position);
    }

    public function setNotifyClergyCode(int $value, int $position = 49)
    {
        return $this->setField($position, $value);
    }
    public function getNotifyClergyCode(int $position = 49)
    {
        return $this->getField($position);
    }

}
