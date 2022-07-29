<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum OrderTaxTypeEnumObject: string
{
    case VAT = 'VAT';
    case GST = 'GST';
}
