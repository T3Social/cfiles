<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

return [
    'modules' => ['cfiles'],
    'fixtures' => [
        'default',
        'files' => \humhub\modules\cfiles\tests\codeception\fixtures\FilesFixture::class,
    ],
];
