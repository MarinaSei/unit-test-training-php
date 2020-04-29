<?php
 
/**
 * @file Employee.php
 * @author Mohamed
 * @version 1.1
 */
 
include "Salary.php";
 
/**
 * @class Employee Employee.php
 */
class Employee
{
 /**
 * @attribut string $firstName le prénom de l'employé
 */
    private $firstName;
 
 /**
 * @attribut string $lastName le nom de famille de l'employé
 */
    private $lastName;
 
 /**
 * @attribut string $email
 */
    private $email;
 
 /**
 * @attribut int $grossMonthlySalary
 */
    private $grossMonthlySalary;
 
 /**
 * Employee constructor.
 * @param $firstName string
 * @param $lastName string
 * @param $email string
 */
public function __construct($firstName, $lastName, $email)
{
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
}
 
 /**
 * @return string
 */
 public function getFirstName()
 {
 return $this->firstName;
 }
 
 /**
 * @param $firstName string
 */
 public function setFirstName($firstName)
 {
 $this->firstName = $firstName;
 }
 
 /**
 * @return string
 */
 public function getLastName()
 {
 return $this->lastName;
 }
 
 /**
 * @param $lastName string
 */
 public function setLastName($lastName)
 {
 $this->lastName = $lastName;
 }
 
 /**
 * @return string
 */
 public function getEmail()
 {
 return $this->email;
 }
 
 /**
 * @param $email string
 */
 public function setEmail($email)
 {
 $this->email = $email;
 }
 
 /**
 * @return string
 */
 public function getGrossMonthlySalary()
 {
 return $this->grossMonthlySalary;
 }
 
 /**
 * @param $grossMonthlySalary int
 */
 public function setGrossMonthlySalary($grossMonthlySalary)
 {
 $this->grossMonthlySalary = $grossMonthlySalary;
 }
 
 /**
 * Fonction getFullName retourne le nom complet
 * @return string le nom complet
 */
 public function getFullName()
 {
 return $this->firstName . ' ' . $this->lastName;
 }
 
 /**
 * Fonction getNetSalary calcul le salaire net
 * @return int le salaire net
 */
 public function getNetSalary()
 {
    return Salary::calculNetSalary($this->grossMonthlySalary);
 }
}