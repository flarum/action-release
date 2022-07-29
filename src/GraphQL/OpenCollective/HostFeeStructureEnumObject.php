<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum HostFeeStructureEnumObject: string
{
    case DEFAULT = 'DEFAULT';
    case CUSTOM_FEE = 'CUSTOM_FEE';
    case MONTHLY_RETAINER = 'MONTHLY_RETAINER';
}
