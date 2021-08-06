<?php

namespace App\Model;

class Audit
{
    /** @var ?AuditResult[] */
    private $auditResults;

    /**
     * @return ?AuditResult[]
     */
    public function getAuditResults(): ?array
    {
        return $this->auditResults;
    }

    /**
     * @param ?AuditResult[] $auditResults
     */
    public function setAuditResults(?array $auditResults): void
    {
        $this->auditResults = $auditResults;
    }

    /**
     * @param AuditResult $auditResult
     */
    public function addAuditResult(AuditResult $auditResult): void
    {
        if (!is_array($this->auditResults)) {
            $this->auditResults = [];
        }
        $this->auditResults[] = $auditResult;
    }
}
