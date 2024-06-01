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
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R02',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P01',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R03',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P02',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R04',
            'gejala_id'=>'G03',
            'pernyataan_id'=>'P05',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R05',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P02',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R06',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P05',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R07',
            'gejala_id'=>'G02',
            'pernyataan_id'=>'P11',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
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
            'pernyataan_id'=>'P15',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R10',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P15',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);
        Rule::create([
            'rule'=>'R11',
            'gejala_id'=>'G01',
            'pernyataan_id'=>'P12',
            'nilai_mb'=>'0.8',
            'nilai_md'=>'0.2',
            'nilai_cf'=>'0.6'
        ]);

    }
}