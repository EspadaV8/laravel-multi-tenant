<?php

use AuraIsHere\LaravelMultiTenant\Traits\TenantScopedModelTrait;

class TenantScopedModelStub extends ParentModel
{
    use TenantScopedModelTrait;

    public function getTable()
    {
        return 'table';
    }
}
