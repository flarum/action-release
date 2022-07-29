<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum TaxTypeEnumObject: string
{
    case VAT = 'VAT';
    case GST = 'GST';
}
