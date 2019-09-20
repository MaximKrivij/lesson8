<?php

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
            return exit("Введите возраст от 1 до 100");
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
         $this->salary = $salary;
    }

    private function checkAge($a)
    {
        if ($a >= 1 and $a <= 100) {
            return $a = true;
        } else {
            return false;
        }
    }
}

function GetName(Worker $v) {
    echo "Пользователь:" . $v->getName() . " Возраст: " . $v->getAge() . "<br>";
}

$user1 = new Worker();
$user2 = new Worker();

$user1->setName('Иван');
$user1->setAge(25);
$user1->setSalary(1000);

$user2->setName('Вася');
$user2->setAge(26);
$user2->setSalary(2000);

$sumSalary = $user1->getSalary() + $user2->getSalary();
echo 'Сума зарплат: ', $sumSalary, '<br>';

$sumAges = $user1->getAge() + $user2->getAge();
echo 'Сума возрастов: ', $sumAges, '<br>';

GetName($user1);
GetName($user2);



