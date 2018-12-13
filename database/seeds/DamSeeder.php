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
                'keterangan' => 'Keterangan Waduk Logung Kudus is Here...',
                'alamat' => 'Alamat Waduk Logung',
                'latitude' => '110.213213',
                'longitude' => '12312312',
                'token' => bin2hex(random_bytes(32))
            ],
            [
                'nama' => 'Bendo',
                'kode_bendungan' => 'BENDO-1',
                'keterangan' => 'Keterangan Waduk Bendo Kudus is Here...',
                'alamat' => 'Alamat Waduk Bendo',
                'latitude' => '110.213213',
                'longitude' => '12312312',
                'token' => bin2hex(random_bytes(32))
            ],
        ];

        foreach($dam_data as $list)
        {
            $dam = new Dam;
            $dam->nama = $list['nama'];
            $dam->kode_bendungan = $list['kode_bendungan'];
            $dam->alamat = $list['alamat'];
            $dam->latitude = $list['latitude'];
            $dam->longitude = $list['longitude'];
            $dam->token = $list['token'];
            $dam->save();
        }
    }
    
}
