<?php

namespace Alura\Doctrine\Repository;

use Alura\Doctrine\Entity\Aluno;
use Doctrine\ORM\EntityRepository;

class AlunoRepository extends EntityRepository
{
    public function buscaCursosPorAluno()
    {
        $query = $this->createQueryBuilder('aluno')
            ->join('aluno.telefones', 'telefone')
            ->join('aluno.cursos', 'curso')
            ->addSelect('telefone')
            ->addSelect('curso')
            ->getQuery();

        
        return $query->getResult();
    }
}