<?php
error_reporting(E_ALL);
class Worker
{
    private $name;
    private $age;
    private $salary;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
         $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($this->checkAge($age) == true) {
             $this->age = $age;
        } else {
           return exit  ("Введите возраст от 1 до 100!");
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary): int
    {
        return $this->salary = $salary;
    }

    private function checkAge($a)
    {
        if ($a > 1 and $a <= 26) {
            return $a = true;
        } else {
            return $a = false;
        }
    }

    public function show()
    {
        printf(
            'Имя: %s, возраст: %s <br>',
            $this->getName(),
            $this->getAge()
        );
    }
}

$user1 = new Worker();
$user2 = new Worker();

$user1->setName('Иван');
$user1->setAge(25);
$user1->setSalary(1000);

$user2->setName('Вася');
$user2->setAge(26);
$user2->setSalary(2000);

$user1->show();
$user2->show();

$sumSalary = $user1->getSalary() + $user2->getSalary();
echo 'Сума зарплат: ', $sumSalary, '<br>';

$sumAges = $user1->getAge() + $user2->getAge();
echo 'Сума возрастов: ', $sumAges, '<br>';