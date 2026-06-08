<?php

/**
 * APIATO setting container.
 *
 * This file is part of the APIATO setting container.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    Proprietary
 * @copyright  Copyright (C) kalistratov.ru, All rights reserved.
 * @link       https://kalistratov.ru
 */

namespace App\Containers\Vendor\Setting\UI\API\Transformers;

use App\Containers\Vendor\Setting\Foundation\Setting;
use App\Containers\Vendor\Setting\Models\Setting as SettingModel;
use App\Ship\Parents\Transformers\Transformer;

class SettingTransformer extends Transformer
{
    public function transform(SettingModel $setting): array
    {
        return [
            OBJECT => 'Setting',
            ID => $setting->getHashedKey(),
            Setting::KEY => $setting->key,
            Setting::TYPE => $setting->type,
            Setting::VALUE => $setting->value
        ];
    }
}
