<?php

namespace Dn\Saas\ACL\Annotation;


#[\Attribute(\Attribute::IS_REPEATABLE | \Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class ACL
{
     public function __construct(
        public string $id,
        public ?string $title,
        public ?int $sortOrder
     ) {
         $tmp = 0;
     }
}