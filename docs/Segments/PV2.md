# Aranyasen\HL7\Segments\PV2  

PV2 segment class
Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/PV2



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#pv2__destruct)||
|[getAccountStatus](#pv2getaccountstatus)||
|[getAdmissionType](#pv2getadmissiontype)||
|[getAdmitDateTime](#pv2getadmitdatetime)||
|[getAdmitSource](#pv2getadmitsource)||
|[getAdmittingDoctor](#pv2getadmittingdoctor)||
|[getAlternateVisitID](#pv2getalternatevisitid)||
|[getAmbulatoryStatus](#pv2getambulatorystatus)||
|[getAssignedPatientLocation](#pv2getassignedpatientlocation)||
|[getAttendingDoctor](#pv2getattendingdoctor)||
|[getBadDebtAgencyCode](#pv2getbaddebtagencycode)||
|[getBadDebtRecoveryAmount](#pv2getbaddebtrecoveryamount)||
|[getBadDebtTransferAmount](#pv2getbaddebttransferamount)||
|[getBedStatus](#pv2getbedstatus)||
|[getChargePriceIndicator](#pv2getchargepriceindicator)||
|[getConsultingDoctor](#pv2getconsultingdoctor)||
|[getContractAmount](#pv2getcontractamount)||
|[getContractCode](#pv2getcontractcode)||
|[getContractEffectiveDate](#pv2getcontracteffectivedate)||
|[getContractPeriod](#pv2getcontractperiod)||
|[getCourtesyCode](#pv2getcourtesycode)||
|[getCreditRating](#pv2getcreditrating)||
|[getCurrentPatientBalance](#pv2getcurrentpatientbalance)||
|[getDeleteAccountDate](#pv2getdeleteaccountdate)||
|[getDeleteAccountIndicator](#pv2getdeleteaccountindicator)||
|[getDietType](#pv2getdiettype)||
|[getDischargeDateTime](#pv2getdischargedatetime)||
|[getDischargeDisposition](#pv2getdischargedisposition)||
|[getDischargedToLocation](#pv2getdischargedtolocation)||
|[getFinancialClass](#pv2getfinancialclass)||
|[getHospitalService](#pv2gethospitalservice)||
|[getID](#pv2getid)||
|[getInterestCode](#pv2getinterestcode)||
|[getOtherHealthcareProvider](#pv2getotherhealthcareprovider)||
|[getPatientClass](#pv2getpatientclass)||
|[getPatientType](#pv2getpatienttype)||
|[getPendingLocation](#pv2getpendinglocation)||
|[getPreAdmitNumber](#pv2getpreadmitnumber)||
|[getPreAdmitTestIndicator](#pv2getpreadmittestindicator)||
|[getPriorPatientLocation](#pv2getpriorpatientlocation)||
|[getPriorTemporaryLocation](#pv2getpriortemporarylocation)||
|[getReAdmissionIndicator](#pv2getreadmissionindicator)||
|[getReferringDoctor](#pv2getreferringdoctor)||
|[getServicingFacility](#pv2getservicingfacility)||
|[getTemporaryLocation](#pv2gettemporarylocation)||
|[getTotalAdjustments](#pv2gettotaladjustments)||
|[getTotalCharges](#pv2gettotalcharges)||
|[getTotalPayments](#pv2gettotalpayments)||
|[getTransferToBadDebtCode](#pv2gettransfertobaddebtcode)||
|[getTransferToBadDebtDate](#pv2gettransfertobaddebtdate)||
|[getVipIndicator](#pv2getvipindicator)||
|[getVisitIndicator](#pv2getvisitindicator)||
|[getVisitNumber](#pv2getvisitnumber)||
|[resetIndex](#pv2resetindex)|Reset index of this segment|
|[setAccountStatus](#pv2setaccountstatus)||
|[setAdmissionType](#pv2setadmissiontype)||
|[setAdmitDateTime](#pv2setadmitdatetime)||
|[setAdmitSource](#pv2setadmitsource)||
|[setAdmittingDoctor](#pv2setadmittingdoctor)||
|[setAlternateVisitID](#pv2setalternatevisitid)||
|[setAmbulatoryStatus](#pv2setambulatorystatus)||
|[setAssignedPatientLocation](#pv2setassignedpatientlocation)||
|[setAttendingDoctor](#pv2setattendingdoctor)||
|[setBadDebtAgencyCode](#pv2setbaddebtagencycode)||
|[setBadDebtRecoveryAmount](#pv2setbaddebtrecoveryamount)||
|[setBadDebtTransferAmount](#pv2setbaddebttransferamount)||
|[setBedStatus](#pv2setbedstatus)||
|[setChargePriceIndicator](#pv2setchargepriceindicator)||
|[setConsultingDoctor](#pv2setconsultingdoctor)||
|[setContractAmount](#pv2setcontractamount)||
|[setContractCode](#pv2setcontractcode)||
|[setContractEffectiveDate](#pv2setcontracteffectivedate)||
|[setContractPeriod](#pv2setcontractperiod)||
|[setCourtesyCode](#pv2setcourtesycode)||
|[setCreditRating](#pv2setcreditrating)||
|[setCurrentPatientBalance](#pv2setcurrentpatientbalance)||
|[setDeleteAccountDate](#pv2setdeleteaccountdate)||
|[setDeleteAccountIndicator](#pv2setdeleteaccountindicator)||
|[setDietType](#pv2setdiettype)||
|[setDischargeDateTime](#pv2setdischargedatetime)||
|[setDischargeDisposition](#pv2setdischargedisposition)||
|[setDischargedToLocation](#pv2setdischargedtolocation)||
|[setFinancialClass](#pv2setfinancialclass)||
|[setHospitalService](#pv2sethospitalservice)||
|[setID](#pv2setid)||
|[setInterestCode](#pv2setinterestcode)||
|[setOtherHealthcareProvider](#pv2setotherhealthcareprovider)||
|[setPatientClass](#pv2setpatientclass)||
|[setPatientType](#pv2setpatienttype)||
|[setPendingLocation](#pv2setpendinglocation)||
|[setPreAdmitNumber](#pv2setpreadmitnumber)||
|[setPreAdmitTestIndicator](#pv2setpreadmittestindicator)||
|[setPriorPatientLocation](#pv2setpriorpatientlocation)||
|[setPriorTemporaryLocation](#pv2setpriortemporarylocation)||
|[setReAdmissionIndicator](#pv2setreadmissionindicator)||
|[setReferringDoctor](#pv2setreferringdoctor)||
|[setServicingFacility](#pv2setservicingfacility)||
|[setTemporaryLocation](#pv2settemporarylocation)||
|[setTotalAdjustments](#pv2settotaladjustments)||
|[setTotalCharges](#pv2settotalcharges)||
|[setTotalPayments](#pv2settotalpayments)||
|[setTransferToBadDebtCode](#pv2settransfertobaddebtcode)||
|[setTransferToBadDebtDate](#pv2settransfertobaddebtdate)||
|[setVipIndicator](#pv2setvipindicator)||
|[setVisitIndicator](#pv2setvisitindicator)||
|[setVisitNumber](#pv2setvisitnumber)||

## Inherited methods

| Name | Description |
|------|-------------|
|__construct|Create a segment.|
|clearField|Remove any existing value from the field|
|getField|Get the field at index.|
|getFields|Get fields from a segment|
|getName|Get the name of the segment. This is basically the value at index 0|
|setField|Set the field specified by index to value.|
|size|Get the number of fields for this segment, not including the name|



### pv2::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getAccountStatus  

**Description**

```php
 getAccountStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getAdmissionType  

**Description**

```php
 getAdmissionType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getAdmitDateTime  

**Description**

```php
 getAdmitDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getAdmitSource  

**Description**

```php
 getAdmitSource (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getAdmittingDoctor  

**Description**

```php
 getAdmittingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getAlternateVisitID  

**Description**

```php
 getAlternateVisitID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getAmbulatoryStatus  

**Description**

```php
 getAmbulatoryStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getAssignedPatientLocation  

**Description**

```php
 getAssignedPatientLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getAttendingDoctor  

**Description**

```php
 getAttendingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getBadDebtAgencyCode  

**Description**

```php
 getBadDebtAgencyCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getBadDebtRecoveryAmount  

**Description**

```php
 getBadDebtRecoveryAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getBadDebtTransferAmount  

**Description**

```php
 getBadDebtTransferAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getBedStatus  

**Description**

```php
 getBedStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getChargePriceIndicator  

**Description**

```php
 getChargePriceIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getConsultingDoctor  

**Description**

```php
 getConsultingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getContractAmount  

**Description**

```php
 getContractAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getContractCode  

**Description**

```php
 getContractCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getContractEffectiveDate  

**Description**

```php
 getContractEffectiveDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getContractPeriod  

**Description**

```php
 getContractPeriod (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getCourtesyCode  

**Description**

```php
 getCourtesyCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getCreditRating  

**Description**

```php
 getCreditRating (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getCurrentPatientBalance  

**Description**

```php
 getCurrentPatientBalance (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getDeleteAccountDate  

**Description**

```php
 getDeleteAccountDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getDeleteAccountIndicator  

**Description**

```php
 getDeleteAccountIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getDietType  

**Description**

```php
 getDietType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getDischargeDateTime  

**Description**

```php
 getDischargeDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getDischargeDisposition  

**Description**

```php
 getDischargeDisposition (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getDischargedToLocation  

**Description**

```php
 getDischargedToLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getFinancialClass  

**Description**

```php
 getFinancialClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getHospitalService  

**Description**

```php
 getHospitalService (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getID  

**Description**

```php
 getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getInterestCode  

**Description**

```php
 getInterestCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getOtherHealthcareProvider  

**Description**

```php
 getOtherHealthcareProvider (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getPatientClass  

**Description**

```php
 getPatientClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getPatientType  

**Description**

```php
 getPatientType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getPendingLocation  

**Description**

```php
 getPendingLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getPreAdmitNumber  

**Description**

```php
 getPreAdmitNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getPreAdmitTestIndicator  

**Description**

```php
 getPreAdmitTestIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getPriorPatientLocation  

**Description**

```php
 getPriorPatientLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getPriorTemporaryLocation  

**Description**

```php
 getPriorTemporaryLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getReAdmissionIndicator  

**Description**

```php
 getReAdmissionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getReferringDoctor  

**Description**

```php
 getReferringDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getServicingFacility  

**Description**

```php
 getServicingFacility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getTemporaryLocation  

**Description**

```php
 getTemporaryLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getTotalAdjustments  

**Description**

```php
 getTotalAdjustments (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getTotalCharges  

**Description**

```php
 getTotalCharges (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getTotalPayments  

**Description**

```php
 getTotalPayments (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getTransferToBadDebtCode  

**Description**

```php
 getTransferToBadDebtCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getTransferToBadDebtDate  

**Description**

```php
 getTransferToBadDebtDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getVipIndicator  

**Description**

```php
 getVipIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getVisitIndicator  

**Description**

```php
 getVisitIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::getVisitNumber  

**Description**

```php
 getVisitNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::resetIndex  

**Description**

```php
public static resetIndex (int $index)
```

Reset index of this segment 

 

**Parameters**

* `(int) $index`

**Return Values**

`void`


<hr />


### pv2::setAccountStatus  

**Description**

```php
 setAccountStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setAdmissionType  

**Description**

```php
 setAdmissionType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setAdmitDateTime  

**Description**

```php
 setAdmitDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setAdmitSource  

**Description**

```php
 setAdmitSource (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setAdmittingDoctor  

**Description**

```php
 setAdmittingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setAlternateVisitID  

**Description**

```php
 setAlternateVisitID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setAmbulatoryStatus  

**Description**

```php
 setAmbulatoryStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setAssignedPatientLocation  

**Description**

```php
 setAssignedPatientLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setAttendingDoctor  

**Description**

```php
 setAttendingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setBadDebtAgencyCode  

**Description**

```php
 setBadDebtAgencyCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setBadDebtRecoveryAmount  

**Description**

```php
 setBadDebtRecoveryAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setBadDebtTransferAmount  

**Description**

```php
 setBadDebtTransferAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setBedStatus  

**Description**

```php
 setBedStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setChargePriceIndicator  

**Description**

```php
 setChargePriceIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setConsultingDoctor  

**Description**

```php
 setConsultingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setContractAmount  

**Description**

```php
 setContractAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setContractCode  

**Description**

```php
 setContractCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setContractEffectiveDate  

**Description**

```php
 setContractEffectiveDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setContractPeriod  

**Description**

```php
 setContractPeriod (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setCourtesyCode  

**Description**

```php
 setCourtesyCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setCreditRating  

**Description**

```php
 setCreditRating (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setCurrentPatientBalance  

**Description**

```php
 setCurrentPatientBalance (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setDeleteAccountDate  

**Description**

```php
 setDeleteAccountDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setDeleteAccountIndicator  

**Description**

```php
 setDeleteAccountIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setDietType  

**Description**

```php
 setDietType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setDischargeDateTime  

**Description**

```php
 setDischargeDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setDischargeDisposition  

**Description**

```php
 setDischargeDisposition (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setDischargedToLocation  

**Description**

```php
 setDischargedToLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setFinancialClass  

**Description**

```php
 setFinancialClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setHospitalService  

**Description**

```php
 setHospitalService (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setInterestCode  

**Description**

```php
 setInterestCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setOtherHealthcareProvider  

**Description**

```php
 setOtherHealthcareProvider (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setPatientClass  

**Description**

```php
 setPatientClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setPatientType  

**Description**

```php
 setPatientType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setPendingLocation  

**Description**

```php
 setPendingLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setPreAdmitNumber  

**Description**

```php
 setPreAdmitNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setPreAdmitTestIndicator  

**Description**

```php
 setPreAdmitTestIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setPriorPatientLocation  

**Description**

```php
 setPriorPatientLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setPriorTemporaryLocation  

**Description**

```php
 setPriorTemporaryLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setReAdmissionIndicator  

**Description**

```php
 setReAdmissionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setReferringDoctor  

**Description**

```php
 setReferringDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setServicingFacility  

**Description**

```php
 setServicingFacility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setTemporaryLocation  

**Description**

```php
 setTemporaryLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setTotalAdjustments  

**Description**

```php
 setTotalAdjustments (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setTotalCharges  

**Description**

```php
 setTotalCharges (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setTotalPayments  

**Description**

```php
 setTotalPayments (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setTransferToBadDebtCode  

**Description**

```php
 setTransferToBadDebtCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setTransferToBadDebtDate  

**Description**

```php
 setTransferToBadDebtDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setVipIndicator  

**Description**

```php
 setVipIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setVisitIndicator  

**Description**

```php
 setVisitIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### pv2::setVisitNumber  

**Description**

```php
 setVisitNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

