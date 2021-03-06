<?php

namespace CoreBundle\Doctrine\Repository;

use CoreBundle\Entity\Email;
use Doctrine\ORM\EntityRepository;

/**
 * EmailRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EmailRepository extends EntityRepository
{
    public function updateStateByEmail($email, $state)
    {
        $qb = $this->createQueryBuilder('e')
        ->update('CoreBundle:Email', 'e')
        ->set('e.state', ':state')
        ->where('e.email = :email')
            ->setParameters(array('email' => $email, 'state' => $state));
        $qb->getQuery()->execute();
    }

}
