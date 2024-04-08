<?php
include './sleepForm.html';
class SleepAssignment
{
    const HOURSPERDAY = 24;
    public $userFirstName;
    public $userAge;
    public $userHoursSlept;

    public function __construct($cFirstname, $cAge, $cHoursSlept)
    {
        $this->userFirstName = $cFirstname;
        $this->userAge = $cAge;
        $this->userHoursSlept = $cHoursSlept;
    }

    public function calcSleptYears()
    {
        $sleptYears = ($this->userHoursSlept / self::HOURSPERDAY * $this->userAge);
        return $sleptYears;
    }

    public function displayMessage()
    {
        $sleptYears = $this->calcSleptYears();
        print "<p>Hey $this->userFirstName you have slept $sleptYears !";
    }
}

if (!isset($_POST['userfirstname'])) {//skip
} else {
    $postFirstName = $_POST['userfirstname'];
    $postUserHours = $_POST['userhours'];
    $postUserAge = $_POST['userage'];

    $mySleepAssignment = new SleepAssignment($postFirstName, $postUserAge, $postUserHours);

    $mySleepAssignment->displayMessage();
}

