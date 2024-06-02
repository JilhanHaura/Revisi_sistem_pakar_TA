<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Gejala;
use App\Models\Rule;
use App\Models\Pernyataan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'nik'=>'1329219087654567',
        //     'nama_lengkap' => 'Tsalsabila Jilhan Haura',
        //     'tanggal_lahir' => '2002-07-02',
        //     'alamat'=>'balai baru',
        //     'email'=>'jilhanhaura@gmail.com',
        //     'password'=>'$2y$10$TVR1jA6qQ6sw7vmeexPk4e4/lWy13a0y25I5dp7NS9zTGNGz8zHGG',
        //     'type'=>'1'
        // ]);
        User::create([
            'nik'=>'1329219087654567',
            'nama_lengkap' => 'Tsalsabila Jilhan Haura',
            'tanggal_lahir' => '2002-07-02',
            'alamat'=>'balai baru',
            'email'=>'jilhanhaura@gmail.com',
            'password'=>'$2y$10$TVR1jA6qQ6sw7vmeexPk4e4/lWy13a0y25I5dp7NS9zTGNGz8zHGG',
            'type'=>'1'
        ]);
        User::create([
            'nik'=>'1329219087654456',
            'nama_lengkap' => 'koko',
            'tanggal_lahir' => '2002-07-02',
            'alamat'=>'padang',
            'email'=>'koko@gmail.com',
            'password'=>'$2y$10$TVR1jA6qQ6sw7vmeexPk4e4/lWy13a0y25I5dp7NS9zTGNGz8zHGG',
            'type'=>'0'
        ]);
        Gejala::create([

            'kode_gejala'=>'G01',
            'nama_gejala'=>'Depresi'
        ]);
        Gejala::create([
            'kode_gejala'=>'G02',
            'nama_gejala'=>'Anxiety'
        ]);

        Gejala::create([
            'kode_gejala'=>'G03',
            'nama_gejala'=>'Stress'
        ]);

        Pernyataan::create([
            'kode_pernyataan'=>'P01',
             'pernyataan'=>'Menjadi marah karena hal-hal kecil/sepele'
          ]);
          Pernyataan::create([
             'kode_pernyataan'=>'P02',
              'pernyataan'=>'Mulut terasa kering'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P03',
              'pernyataan'=>'Tidak dapat melihat hal yang positif dari suatu
              kejadian'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P04',
              'pernyataan'=>'Merasakan gangguan dalam bernapas (napas cepat,
              sulit bernapas)'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P05',
              'pernyataan'=>'Merasa sepertinya tidak kuat lagi untuk melakukan
              suatu kegiatan'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P06',
              'pernyataan'=>'Cenderung bereaksi berlebihan pada situasi'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P07',
              'pernyataan'=>'Kelemahan pada anggota tubuh'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P08',
              'pernyataan'=>'Kesulitan untuk relaksasi/bersantai'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P09',
              'pernyataan'=>'Cemas yang berlebihan dalam suatu situasi namun
              bisa lega jika hal/situasi itu berakhir'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P10',
              'pernyataan'=>'Pesimis'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P11',
              'pernyataan'=>'Mudah merasa kesal'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P12',
              'pernyataan'=>'Merasa banyak menghabiskan energi karena cemas'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P13',
              'pernyataan'=>'Merasa sedih dan depresi'
           ]);

           Pernyataan::create([
             'kode_pernyataan'=>'P14',
              'pernyataan'=>'Tidak sabaran'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P15',
              'pernyataan'=>'Kelelahan'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P16',
              'pernyataan'=>'Kehilangan minat pada banyak hal (misal: makan,
              ambulasi, sosialisasi)'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P17',
              'pernyataan'=>'Merasa diri tidak layak'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P18',
              'pernyataan'=>'Mudah tersinggung'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P19',
              'pernyataan'=>'Perasaan putus asa'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P20',
              'pernyataan'=>'Ketakutan tanpa alasan yang jelas'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P21',
              'pernyataan'=>'Merasa hidup tidak berharga'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P22',
              'pernyataan'=>'Sulit untuk beristirahat'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P23',
              'pernyataan'=>'Kesulitan dalam menelan'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P24',
              'pernyataan'=>'Tidak dapat menikmati hal-hal yang saya lakukan'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P25',
              'pernyataan'=>'Perubahan kegiatan jantung dan denyut nadi tanpa stimulasi oleh latihan fisik'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P26',
              'pernyataan'=>'Merasa hilang harapan dan putus asa'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P27',
              'pernyataan'=>'Mudah marah'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P28',
              'pernyataan'=>'Mudah panik'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P29',
              'pernyataan'=>'Kesulitan untuk tenang setelah sesuatu yang
              mengganggu'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P30',
              'pernyataan'=>'Takut diri terhambat oleh tugas-tugas yang tidak
              biasa dilakukan'
           ]);

           Pernyataan::create([
             'kode_pernyataan'=>'P31',
              'pernyataan'=>'Sulit untuk antusias pada banyak hal'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P32',
              'pernyataan'=>'Sulit mentoleransi gangguan-gangguan terhadap hal
              yang sedang dilakukan'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P33',
              'pernyataan'=>'Berada pada keadaan tegang'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P34',
              'pernyataan'=>'Merasa tidak berharga'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P35',
              'pernyataan'=>'Tidak dapat memaklumi hal apapun yang menghalangi anda untuk menyelesaikan hal yang sedang Anda lakukan'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P36',
              'pernyataan'=>'Ketakutan'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P37',
              'pernyataan'=>'Tidak ada harapan untuk masa depan'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P38',
              'pernyataan'=>'Merasa hidup tidak berarti'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P39',
              'pernyataan'=>'Mudah gelisah'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P40',
              'pernyataan'=>'Khawatir dengan situasi saat diri Anda mungkin menjadi panik dan mempermalukan diri sendiri'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P41',
              'pernyataan'=>'Gemetar'
           ]);
           Pernyataan::create([
             'kode_pernyataan'=>'P42',
              'pernyataan'=>'Sulit untuk meningkatkan inisiatif dalam melakukan sesuatu'
           ]);

        Rule::create([
            'rule'=>'R01',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P01',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.3',
            'nilai_cf'=>'0.5'
        ]);
        Rule::create([
            'rule'=>'R02',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P01',
            'nilai_mb'=>'0.5',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R03',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P02',
            'nilai_mb'=>'0.5',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R04',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P02',
            'nilai_mb'=>'0.5',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R05',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P04',
            'nilai_mb'=>'0.9',
            'nilai_md'=>'0.3',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R06',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P04',
            'nilai_mb'=>'0.9',
            'nilai_md'=>'0.3',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R07',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P05',
            'nilai_mb'=>'0.6',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R08',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P11',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R09',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P06',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.5',
            'nilai_cf'=>'0.2'
        ]);
        Rule::create([
            'rule'=>'R10',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P08',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.6',
            'nilai_cf'=>'2'
        ]);
        Rule::create([
            'rule'=>'R11',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P08',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.6',
            'nilai_cf'=>'2'
        ]);
        Rule::create([
            'rule'=>'R12',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P09',
            'nilai_mb'=>'0.9',
            'nilai_md'=>'0.4',
            'nilai_cf'=>'0.5'
        ]);
        Rule::create([
            'rule'=>'R13',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P10',
            'nilai_mb'=>'0.3',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.1'
        ]);
        Rule::create([
            'rule'=>'R14',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P11',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.7',
            'nilai_cf'=>'0.0'
        ]);
        Rule::create([
            'rule'=>'R15',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P11',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.7',
            'nilai_cf'=>'0.0'
        ]);
        Rule::create([
            'rule'=>'R16',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P12',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.3',
            'nilai_cf'=>'0.5'
        ]);
        Rule::create([
            'rule'=>'R17',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P12',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.3',
            'nilai_cf'=>'0.5'
        ]);
        Rule::create([
            'rule'=>'R18',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P13',
            'nilai_mb'=>'0.6',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.5'
        ]);
        Rule::create([
            'rule'=>'R19',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P14',
            'nilai_mb'=>'0.4',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.3'
        ]);
        Rule::create([
            'rule'=>'R20',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P15',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.5',
            'nilai_cf'=>'0.2'
        ]);
        Rule::create([
            'rule'=>'R21',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P15',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.5',
            'nilai_cf'=>'0.2'
        ]);
        Rule::create([
            'rule'=>'R22',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P16',
            'nilai_mb'=>'0.4',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.2'
        ]);
        Rule::create([
            'rule'=>'R23',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P16',
            'nilai_mb'=>'0.4',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.2'
        ]);
        Rule::create([
            'rule'=>'R24',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P17',
            'nilai_mb'=>'0.9',
            'nilai_md'=>'0.7',
            'nilai_cf'=>'0.2'
        ]);
        Rule::create([
            'rule'=>'R25',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P18',
            'nilai_mb'=>'0.6',
            'nilai_md'=>'0.5',
            'nilai_cf'=>'0.1'
        ]);
        Rule::create([
            'rule'=>'R26',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P19',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R27',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P20',
            'nilai_mb'=>'0.3',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.1'
        ]);
        Rule::create([
            'rule'=>'R28',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P21',
            'nilai_mb'=>'0.3',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.2'
        ]);
        Rule::create([
            'rule'=>'R29',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P22',
            'nilai_mb'=>'0.9',
            'nilai_md'=>'0.5',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R30',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P23',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R31',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P24',
            'nilai_mb'=>'0.5',
            'nilai_md'=>'0.4',
            'nilai_cf'=>'0.1'
        ]);
        Rule::create([
            'rule'=>'R32',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P24',
            'nilai_mb'=>'0.5',
            'nilai_md'=>'0.4',
            'nilai_cf'=>'0.1'
        ]);
        Rule::create([
            'rule'=>'R33',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P25',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.6',
            'nilai_cf'=>'0.2'
        ]);
        Rule::create([
            'rule'=>'R34',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P26',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.4',
            'nilai_cf'=>'0.3'
        ]);
        Rule::create([
            'rule'=>'R35',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P27',
            'nilai_mb'=>'0.4',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.3'
        ]);
        Rule::create([
            'rule'=>'R36',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P28',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.3',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R37',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P29',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.6',
            'nilai_cf'=>'0.2'
        ]);
        Rule::create([
            'rule'=>'R38',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P30',
            'nilai_mb'=>'0.5',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.3'
        ]);
        Rule::create([
            'rule'=>'R39',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P31',
            'nilai_mb'=>'0.6',
            'nilai_md'=>'0.3',
            'nilai_cf'=>'0.3'
        ]);
        Rule::create([
            'rule'=>'R40',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P32',
            'nilai_mb'=>'0.9',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.7'
        ]);
        Rule::create([
            'rule'=>'R41',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P33',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R42',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P34',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.7'
        ]);
        Rule::create([
            'rule'=>'R43',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P35',
            'nilai_mb'=>'0.9',
            'nilai_md'=>'0.5',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R44',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P36',
            'nilai_mb'=>'0.6',
            'nilai_md'=>'0.3',
            'nilai_cf'=>'0.3'
        ]);
        Rule::create([
            'rule'=>'R45',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P37',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.4',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R46',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P38',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.3',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R47',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P39',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.7'
        ]);
        Rule::create([
            'rule'=>'R48',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P40',
            'nilai_mb'=>'0.7',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.5'
        ]);
        Rule::create([
            'rule'=>'R49',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P41',
            'nilai_mb'=>'0.5',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R50',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P41',
            'nilai_mb'=>'0.5',
            'nilai_md'=>'0.1',
            'nilai_cf'=>'0.4'
        ]);
        Rule::create([
            'rule'=>'R51',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P42',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.6',
            'nilai_cf'=>'0.2'
        ]);

    }
}