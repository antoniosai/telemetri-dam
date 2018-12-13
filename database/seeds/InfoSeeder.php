<?php

use Illuminate\Database\Seeder;

use App\Model\Info;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'nama_sistem' => 'Telemetri DAM',
            'host' => $this->getHostIpAddress(),
            'logo' => 'asssets/img/logo-bws.png',
            'target_bendungan' => rand(300, 500),
        ];

        $this->sysInfo($data);
    }

    protected function getHostIpAddress()
    {
        $host= gethostname();
        $server = gethostbyname($host);
        return $server;
    }

    protected function sysInfo($data)
    {
        $model = Info::first();

        if($model)
        {
            $model->delete();
        }
        Info::create($data);
    }
}
