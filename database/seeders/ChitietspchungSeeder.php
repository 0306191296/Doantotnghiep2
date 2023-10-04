<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChitietspchungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        chitietspchung::create([
            'masp'=>'a01',
            'mota'=>'abc',
            'ktmanhinh'=>'33333',
            'cnmanhinh'=>'12000000',
            'dophangiai'=>'23760000',
            'tinhnangmanhinh'=>'đen',
            'tansoquet'=>'123456789',
            'kieumanhinh'=>'broplayer',
            'camerasau'=>'cameralo',
            'tinhnangcamerasau'=>'lolo',
            'quayvideo'=>'lala',
            'cameratruoc'=>'',
            'tinhnangcameratruoc'=>'',
            'quayvideotruoc'=>'',
            'khecamthenho'=>'',
            'thesim'=>'',
            'hedieuhanh'=>'',
            'hongngoai'=>'',
            'jacktainghe'=>'',
            'congnghenfc'=>'',
            'hotromang'=>'',
            'wifi'=>'',
            'gps'=>'',
            'bluetooth'=>'',
            'chatlieumatlung'=>'',
            'chatlieukhungvien'=>'',
            'kichthuoc'=>'',
            'trongluong'=>'',
            'congnghesac'=>'',
            'congsac'=>'',
            'pin'=>'',
            'chisokhangnuoc'=>'',
            'tienichkhac'=>'',
            'congngheamthanh'=>'',
            'cambienvantay'=>'',
            'cacloaicambien'=>'',
            'tinhnangdatbiet'=>'',
            'thoidiemramat'=>'',
            'chipset'=>'',
            'ram'=>'',
            'cpu'=>'',
            'gpu'=>'',

        ]);
    }
}
