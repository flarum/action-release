<?php

namespace Flarum\Release\GraphQL\OpenCollective;

enum CaptchaProviderEnumObject: string
{
    case HCAPTCHA = 'HCAPTCHA';
    case RECAPTCHA = 'RECAPTCHA';
}
