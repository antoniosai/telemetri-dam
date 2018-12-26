<?php

use Illuminate\Database\Seeder;

use App\Model\Bendungan as Dam;

class DamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User Seeder
        $dam_data = [
            [
                'nama' => 'Logung',
                'kode_bendungan' => 'KUDUS-1',
                'latitude' => '110.213213',
                'longitude' => '12312312',
                'desa_id' => '3319062009',
                'kecamatan_id' => '331906',
                'kota_id' => '3319',
                'provinsi_id' => '33',
                'token' => bin2hex(random_bytes(32))
            ],
            [
                'nama' => 'Bendo',
                'kode_bendungan' => 'BENDO-1',
                'latitude' => '110.213213',
                'longitude' => '12312312',
                'desa_id' => '3502050014',
                'kecamatan_id' => '3502050',
                'kota_id' => '3502',
                'provinsi_id' => '35',
                'token' => bin2hex(random_bytes(32))
            ],
        ];

        Dam::truncate();

        foreach($dam_data as $list)
        {
            $dam = new Dam;
            $dam->nama = $list['nama'];
            $dam->kode_bendungan = $list['kode_bendungan'];
            $dam->latitude = $list['latitude'];
            $dam->longitude = $list['longitude'];
            $dam->token = $list['token'];
            $dam->desa_id = $list['desa_id'];
            $dam->kecamatan_id = $list['kecamatan_id'];
            $dam->kota_id = $list['kota_id'];
            $dam->provinsi_id = $list['provinsi_id'];
            $dam->save();
        }
    }
    
}
