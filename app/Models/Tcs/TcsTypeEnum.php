<?php

namespace App\Models\Tcs;

enum TcsTypeEnum
{
    case default; //Заводской
    case alternative; //Альтернатива
    case tuning; //Тюнинг
}
