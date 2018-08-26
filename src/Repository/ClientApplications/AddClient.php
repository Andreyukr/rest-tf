<?php

namespace App\Repository\ClientApplications;


use App\Entity\Address;
use App\Entity\Application;
use App\Entity\Contact;
use App\Entity\Experience;
use App\Entity\FamilyStatus;
use App\Entity\FinancialDebts;
use App\Entity\FinancialExpences;
use App\Entity\FinancialIncomes;
use App\Entity\FinancialProperty;
use App\Entity\Identification;
use App\Entity\JurAddress;
use App\Entity\Personal;
use App\Service\GetClientsBid;
use Doctrine\ORM\EntityManagerInterface;

class AddClient
{
    private $em;
    private $bid;

    public function __construct(EntityManagerInterface $em, GetClientsBid $bid)
    {
        $this->em = $em;
        $this->bid = $bid;
    }

    public function addNewClient()
    {
        $listClients = $this->bid->getClientBid();

        foreach ($listClients as $client){
            $personal = new Personal();
            $personal->setFirstName($client['personal']['firstName']);
            $personal->setSecondName($client['personal']['secondName']);
            $personal->setLastName($client['personal']['lastName']);
            $personal->setAlternateName($client['personal']['alternateName']);
            $personal->setSecretWord($client['personal']['secretWord']);
            $personal->setGender($client['personal']['gender']);
            $personal->setBirthDay($client['personal']['birthDay']);
            $personal->setBirthPlace($client['personal']['birthPlace']);
            $personal->setCitizenshipCountryId($client['personal']['citizenshipCountryId']);
            $personal->setHasGreenCard($client['personal']['hasGreenCard']);
            $personal->setNameWasChanged($client['personal']['nameWasChanged']);
            $personal->setPreviousFirstName($client['personal']['previousFirstName']);
            $personal->setPreviousSecondName($client['personal']['previousSecondName']);
            $personal->setPreviousLastName($client['personal']['previousLastName']);
            $personal->setNameDateOfChange($client['personal']['nameDateOfChange']);
            $this->em->persist($personal);
            $this->em->flush();

            $identification = new Identification();
            $identification->setPassportNo($client['identification']['passportNo']);
            $identification->setPassportIssueDate($client['identification']['passportIssueDate']);
            $identification->setPassportIssuePlace($client['identification']['passportIssuePlace']);
            $identification->setIdCode($client['identification']['idCode']);
            $identification->setNalogRegisterDate($client['identification']['nalogRegisterDate']);
            $identification->setPersonalId($personal->getId());
            $this->em->persist($identification);

            $contact = new Contact();
            $contact->setClientEmail($client['contact']['clientEmail']);
            $contact->setPersonalId($personal->getId());
            $contact->setContactPersonsContacts($client['contact']['contactPersonsContacts']);
            $this->em->persist($contact);

            $familyStatus = new FamilyStatus();
            $familyStatus->setFamilyStatusId($client['familyStatus']['familyStatusId']);
            $familyStatus->setPersonalId($personal->getId());
            $familyStatus->setSpouseFirstName($client['familyStatus']['spouseFirstName']);
            $familyStatus->setSpouseSecondName($client['familyStatus']['spouseSecondName']);
            $familyStatus->setSpouseLastName($client['familyStatus']['spouseLastName']);
            $familyStatus->setSpouseBirthDay($client['familyStatus']['spouseBirthDay']);
            $familyStatus->setSpouseDateOfMarriage($client['familyStatus']['spouseDateOfMarriage']);
            $familyStatus->setDependantNumber($client['familyStatus']['dependantNumber']);
            $familyStatus->setChildrenUnder18NumberId($client['familyStatus']['childrenUnder18NumberId']);
            $this->em->persist($familyStatus);

            $address = new Address();
            $address->setPersonalId($personal->getId());
            $address->setPostCode($client['address']['postCode']);
            $address->setRegionalCodeId($client['address']['regionalCodeId']);
            $address->setDistrict($client['address']['district']);
            $address->setCity($client['address']['city']);
            $address->setStreet($client['address']['street']);
            $address->setHouseNo($client['address']['houseNo']);
            $address->setFlat($client['address']['flat']);
            $address->setNumberOfPeople($client['address']['numberOfPeople']);
            $address->setTypeOfOwnership($client['address']['typeOfOwnership']);
            $this->em->persist($address);

            $jurAddress = new JurAddress();
            $jurAddress->setPostCode($client['jurAddress']['postCode']);
            $jurAddress->setPersonalId($personal->getId());
            $jurAddress->setFlat($client['jurAddress']['flat']);
            $jurAddress->setRegionalCodeId($client['jurAddress']['regionalCodeId']);
            $jurAddress->setDistrict($client['jurAddress']['district']);
            $jurAddress->setCity($client['jurAddress']['city']);
            $jurAddress->setStreet($client['jurAddress']['street']);
            $jurAddress->setHouseNo($client['jurAddress']['houseNo']);
            $jurAddress->setJurAddressIsAddress($client['jurAddress']['jurAddressIsAddress']);
            $this->em->persist($jurAddress);

            $experience = new Experience();
            $experience->setPersonalId($personal->getId());
            $experience->setWorkPlaceName($client['experience']['workPlaceName']);
            $experience->setWorkPlaceTaxNumber($client['experience']['workPlaceTaxNumber']);
            $experience->setWorkPlaceAreaId($client['experience']['workPlaceAreaId']);
            $experience->setWorkPositionTypeId($client['experience']['workPositionTypeId']);
            $experience->setWorkPosition($client['experience']['workPosition']);
            $experience->setWorkAddr($client['experience']['workAddr']);
            $experience->setWorkPhone($client['experience']['workPhone']);
            $experience->setWorkScheduleId($client['experience']['workScheduleId']);
            $experience->setWorkStartDate($client['experience']['workStartDate']);
            $experience->setWorkExperience($client['experience']['workExperience']);
            $experience->setPyfxtybt($client['experience']['Pyfxtybt']);
            $experience->setWorkGeneralExperience($client['experience']['workGeneralExperience']);
            $experience->setEducationLevelId($client['experience']['educationLevelId']);
            $experience->setPrevWorkPlaceName($client['experience']['prevWorkPlaceName']);
            $experience->setPrevWorkPosition($client['experience']['prevWorkPosition']);
            $this->em->persist($experience);

            foreach ($client['financialIncomes'] as $financialIncome) {
                $financialIncomes = new FinancialIncomes();
                $financialIncomes->setPesonalId($personal->getId());
                $financialIncomes->setMonthlyAmount($financialIncome['monthlyAmount']);
                $financialIncomes->setMonthlyTypeId($financialIncome['monthlyTypeId']);
                $this->em->persist($financialIncomes);
            }

            foreach ($client['financialExpences'] as $financialExpence) {
                $financialExpences = new FinancialExpences();
                $financialExpences->setPersonalId($personal->getId());
                $financialExpences->setMonthlyTypeId($financialExpence['monthlyAmount']);
                $financialExpences->setMonthlyAmount($financialExpence['monthlyTypeId']);
                $this->em->persist($financialExpences);
            }

            foreach ($client['financialProperty'] as $value) {
                $financialProperty = new FinancialProperty();
                $financialProperty->setPersonalId($personal->getId());
                $financialProperty->setTypeId($value['typeId']);
                $financialProperty->setDescription($value['description']);
                $financialProperty->setTypeOfOwnershipId($value['typeOfOwnershipId']);
                $financialProperty->setIsCollateral($value['isCollateral']);
                $financialProperty->setAddress($value['address']);
                $this->em->persist($financialProperty);
            }

            foreach ($client['financialDebts'] as $financialDebt) {
                $financialDebts = new FinancialDebts();
                $financialDebts->setPesonalId($personal->getId());
                $financialDebts->setTypeId($financialDebt['typeId']);
                $financialDebts->setCurrencyId($financialDebt['currencyId']);
                $financialDebts->setAmount($financialDebt['amount']);
                $financialDebts->setResidualAmount($financialDebt['residualAmount']);
                $financialDebts->setMonthlyPayment($financialDebt['monthlyPayment']);
                $financialDebts->setStartDate($financialDebt['startDate']);
                $financialDebts->setEndDate($financialDebt['endDate']);
                $financialDebts->setBankName($financialDebt['bankName']);
                $financialDebts->setStateId($financialDebt['stateId']);
                $this->em->persist($financialDebts);
            }

            $application = new Application();
            $application->setPersonalId($personal->getId());
            $application->setManagerMarkId($client['application']['managerMarkId']);
            $application->setDownPaymentAmount($client['application']['downPaymentAmount']);
            $application->setRequestedLoanAmount($client['application']['requestedLoanAmount']);
            $application->setPurchaseLoanRequest($client['application']['purchaseLoanRequest']);
            $application->setRequestedLoanTerm($client['application']['requestedLoanTerm']);
            $this->em->persist($application);

        }

        $this->em->flush();


    }
}