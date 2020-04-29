<?php
/**
 * @file Email.php
 * @author Mohamed
 * @version 1.1
 */

 /**
 * @class Salary Salary.php
 */
class Salary
{
    /**
     * Fonction calculNetSalary qui calcule le salaire net
     * @return int le salaire net
     */
    static public function calculNetSalary($grossMonthlySalary)
    {
        return ($grossMonthlySalary * 55) / 100;
    }
}