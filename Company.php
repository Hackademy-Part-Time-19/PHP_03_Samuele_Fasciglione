<?php
class Company
{

    public $name = 0;
    public $location = 0;
    public $totemployees = 0;
    public static $avg_Wage = 1500;
    public static $spesaAnnuaTot = 0;




    public function __construct($_name, $_location, $_totemployees)
    {

        $this->name = $_name;
        $this->location = $_location;
        $this->totemployees = $_totemployees;
    }


    public function StampaFrasi()
    {
        if ($this->totemployees != 0) {

            echo "L'ufficio $this->name con sede a $this->location ha ben $this->totemployees dipendenti\n";
        } else {
            echo  "L'ufficio $this->name con sede a $this->location non ha dipendenti\n";
        }
    }


    public function SpeseAnnue()
    {

        $SpesaAnnua = self::$avg_Wage * 12 * $this->totemployees;

        echo "La spesa annua dell' azienda $this->name è $SpesaAnnua \n";

        self::$spesaAnnuaTot = $SpesaAnnua + self::$spesaAnnuaTot;
    }

    public static function SpeseAnnuaTotAz()
    {

        echo "La spesa totale delle aziende è" . " " . self::$spesaAnnuaTot;
    }
}


$CompanyOne = new Company("Leanza", "Catania", "200");

$CompanyOne->StampaFrasi();

$CompanyOne->SpeseAnnue();

$CompanyTwo = new Company("Cursi", "ReggioEmilia", "10");

$CompanyTwo->StampaFrasi();

$CompanyTwo->SpeseAnnue();

$CompanyThree = new Company("Reina", "Bari", "300");

$CompanyThree->StampaFrasi();

$CompanyThree->SpeseAnnue();

$CompanyFour = new Company("Apol", "Roma", "25");

$CompanyFour->StampaFrasi();

$CompanyFour->SpeseAnnue();

$CompanyFive = new Company("Susca", "Bari", "200");

$CompanyFive->StampaFrasi();

$CompanyFive->SpeseAnnue();

Company::SpeseAnnuaTotAz();
