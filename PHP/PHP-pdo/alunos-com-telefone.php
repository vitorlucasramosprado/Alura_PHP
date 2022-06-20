<?php

use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;
use Alura\Pdo\Insfrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);

/** @var \Alura\Pdo\Domain\Model\Student[] $studentList */
$studentList = $repository->studentsWithPhones();

var_dump($studentList);
