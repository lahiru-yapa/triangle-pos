<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Plus',
            'company_email' => 'plus@test.com',
            'company_phone' => '0769167450',
            'notification_email' => 'notification@test.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'company_address' => 'galle,weligama'
        ]);
    }
}
