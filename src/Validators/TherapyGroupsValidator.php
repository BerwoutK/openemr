<?php

namespace OpenEMR\Validators;

use Particle\Validator\Validator;

class TherapyGroupsValidator extends BaseValidator
{
    protected function configureValidator()
    {
        parent::configureValidator();

        $this->validator->context(
            self::DATABASE_INSERT_CONTEXT,
            function (Validator $context) {
                $context->required('group_name')->lengthBetween(2, 255);
                $context->optional('group_type');
                $context->optional('group_participation');
                $context->optional('group_status');
            }
        );
    }
}
