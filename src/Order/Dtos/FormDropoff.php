<?php

declare(strict_types=1);

namespace VigihdevWP\Components\Order\Dtos;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class FormDropoffDto
{
    public function __construct(
        #[SerializedName('tgl_mulai')]
        public readonly string $tglMulai,
        public readonly string $penjemputan,
        public readonly string $tujuan
    ) {}
}
