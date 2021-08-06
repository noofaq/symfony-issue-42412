<?php

namespace App\Controller;


use App\Model\Audit;
use App\Model\AuditResult;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class TestController extends AbstractController
{

    private SerializerInterface $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    #[Route('/test')]
    public function test()
    {
        $audit = new Audit();
        $audit->setAuditResults([new AuditResult('check1'), new AuditResult('check2')]);

        dump($audit);
        dump($serializedAudit = $this->serializer->serialize($audit, 'json'));
        dump($this->serializer->deserialize($serializedAudit, Audit::class, 'json'));

        echo "<br><hr><br>";

        $audit = new Audit();
        dump($audit);
        dump($serializedAudit = $this->serializer->serialize($audit, 'json'));
        dump($this->serializer->deserialize($serializedAudit, Audit::class, 'json'));


        die;

    }
}