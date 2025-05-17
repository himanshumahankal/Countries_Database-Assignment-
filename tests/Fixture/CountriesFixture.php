<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountriesFixture
 */
class CountriesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'currency' => 'Lorem ip',
                'unicode_flag' => 'Lorem ip',
                'flag' => 'Lorem ipsum dolor sit amet',
                'dial_code' => 'Lorem ip',
                'created_at' => '2025-05-17 05:52:00',
                'updated_at' => '2025-05-17 05:52:00',
            ],
        ];
        parent::init();
    }
}
