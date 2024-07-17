<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Gejala;
use App\Models\Rule;
use App\Models\Pernyataan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        $users = [
            [
                'nik' => '1329219087654457',
                'nama_lengkap' => 'Kurnia Adilla',
                'tanggal_lahir' => '2002-09-04',
                'alamat' => 'Bukittinggi',
                'email' => 'kurnia.adilla@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654458',
                'nama_lengkap' => 'Nelly Sintia Yanti',
                'tanggal_lahir' => '2000-02-25',
                'alamat' => 'Jala Utama II blok C 2 no 3',
                'email' => 'nelly.sintia.yanti@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654459',
                'nama_lengkap' => 'Muhammad Raihan Surya',
                'tanggal_lahir' => '2002-03-27',
                'alamat' => 'Jl. Kesehatan',
                'email' => 'muhammad.raihan.surya@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654460',
                'nama_lengkap' => 'ILA RAHMA',
                'tanggal_lahir' => '2000-11-11',
                'alamat' => 'Alesha house Vanya Park Pagedangan Tangerang Selatan',
                'email' => 'ila.rahma@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654461',
                'nama_lengkap' => 'AZIZAH',
                'tanggal_lahir' => '2005-08-25',
                'alamat' => 'Kp. Sindangkarsa, jl bhakti abri',
                'email' => 'azizah@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654462',
                'nama_lengkap' => 'Fadiyah Putri Sri Lestari',
                'tanggal_lahir' => '2006-02-18',
                'alamat' => 'JL. Raya Bogor, Kp. Bendungan, RT 02, RW 02, Kel. Cilodong, Kec. Cilodong, Depok',
                'email' => 'fadiyah.putri@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654463',
                'nama_lengkap' => 'Naufal Hady',
                'tanggal_lahir' => '2003-01-01',
                'alamat' => 'Komp. Filano Jaya II, Padang, Sumatera Barat.',
                'email' => 'naufal.hady@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654464',
                'nama_lengkap' => 'Alifah Ulfiah',
                'tanggal_lahir' => '2003-10-18',
                'alamat' => 'Pasar Ambacang, Kuranji',
                'email' => 'alifah.ulfiah@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654465',
                'nama_lengkap' => 'Qurhata A\'yunin',
                'tanggal_lahir' => '2004-01-24',
                'alamat' => 'Jln. Ampera Kampung Baru Nan XX',
                'email' => 'qurhata.ayunin@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654466',
                'nama_lengkap' => 'Devara',
                'tanggal_lahir' => '1999-11-29',
                'alamat' => 'Padang',
                'email' => 'devara@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654467',
                'nama_lengkap' => 'Marliana',
                'tanggal_lahir' => '2001-05-10',
                'alamat' => 'Pasar baru',
                'email' => 'marliana@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654468',
                'nama_lengkap' => 'Alvin Fadli Dwi Mulya',
                'tanggal_lahir' => '2001-07-21',
                'alamat' => 'Komp Salingka Bungo Permai II Blok E-17',
                'email' => 'alvin.fadli@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654469',
                'nama_lengkap' => 'Zaqy Arivai',
                'tanggal_lahir' => '2002-08-28',
                'alamat' => 'jl.rokan btn bayduri permai duri,riau',
                'email' => 'zaqy.arivai@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654470',
                'nama_lengkap' => 'Iqbal Muhakim',
                'tanggal_lahir' => '2003-01-16',
                'alamat' => 'Kebun Raya, Pasar Ambacang, Kuranji, Padang',
                'email' => 'iqbal.muhakim@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '1329219087654471',
                'nama_lengkap' => 'Rana Luthfiya Meza',
                'tanggal_lahir' => '2002-04-16',
                'alamat' => 'Jl. Kampung Tanjung No.36',
                'email' => 'rana.luthfiya@gmail.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '080719940001',
                'nama_lengkap' => 'Deri Kurnia',
                'tanggal_lahir' => '1994-07-08',
                'alamat' => 'Gg Ripin 2 Srengseng Sawah, Jagakarsa, Jakarta Selatan',
                'email' => 'deri.kurnia@example.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '190419800001',
                'nama_lengkap' => 'Reski Prima Dona',
                'tanggal_lahir' => '1980-04-19',
                'alamat' => 'Bukittinggi',
                'email' => 'reski.primadona@example.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '030119660001',
                'nama_lengkap' => 'Witnarti',
                'tanggal_lahir' => '1966-01-03',
                'alamat' => 'Jl. Utama No 75 KPR 1, Perawang',
                'email' => 'witnarti@example.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],
            [
                'nik' => '05126300001',
                'nama_lengkap' => 'Andri Efa Jamaran',
                'tanggal_lahir' => '1963-12-05',
                'alamat' => 'KPR1 Jl. Utama No 75, Perawang',
                'email' => 'andri.efa@example.com',
                'password' => Hash::make('password'),
                'type' => '0'
            ],

        ];
        foreach ($users as $user) {
            User::create($user);
        }
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
              'pernyataan'=>'Berkeringat (misal: tangan berkeringat) tanpa
                            stimulasi oleh cuaca maupun latihan fisik'
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
            'rule' => 'R01',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P01',
            'nilai_mb' => '0.8',
            'nilai_md' => '0.4',
          'nilai_cf' => '0.4'
            ]);

        Rule::create([
            'rule' => 'R02',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P02',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
       'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R03',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P02',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
      'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R04',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P03',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R05',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P04',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R06',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P04',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R07',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P05',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R08',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P06',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R09',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P06',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R10',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P07',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R11',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P08',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R12',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P08',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R13',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P09',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R14',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P10',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R15',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P11',
            'nilai_mb' => '0.8',
            'nilai_md' => '0.4',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R16',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P11',
            'nilai_mb' => '0.8',
            'nilai_md' => '0.4',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R17',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P12',
            'nilai_mb' => '0.8',
            'nilai_md' => '0.4',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R18',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P12',
            'nilai_mb' => '0.8',
            'nilai_md' => '0.4',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R19',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P13',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R20',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P14',
            'nilai_mb' => '0.8',
            'nilai_md' => '0.4',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R21',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P15',
            'nilai_mb' => '0.8',
            'nilai_md' => '0.4',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R22',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P15',
            'nilai_mb' => '0.8',
            'nilai_md' => '0.4',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R23',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P16',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R24',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P16',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R25',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P16',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R26',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P17',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R27',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P18',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R28',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P19',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R29',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P20',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R55',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P21',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R56',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P22',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R57',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P23',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R30',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P24',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R31',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P24',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);
          Rule::create([
            'rule' => 'R49',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P25',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);
        Rule::create([
            'rule' => 'R50',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P26',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R32',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P27',
            'nilai_mb' => '0.8',
            'nilai_md' => '0.4',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R33',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P28',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);
        Rule::create([
            'rule' => 'R51',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P28',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R34',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P29',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);
        Rule::create([
            'rule' => 'R52',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P29',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R35',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P30',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R36',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P31',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R37',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P32',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R38',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P33',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);
        Rule::create([
            'rule' => 'R53',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P33',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R39',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P34',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R40',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P35',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R41',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P36',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R42',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P37',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R43',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P38',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R44',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P39',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);
        Rule::create([
            'rule' => 'R54',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P39',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R45',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P40',
            'nilai_mb' => '0.6',
            'nilai_md' => '0.2',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R46',
            'gejala_id' => 'G02',
            'pernyataan_id' => 'P41',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R47',
            'gejala_id' => 'G03',
            'pernyataan_id' => 'P41',
            'nilai_mb' => '0.7',
            'nilai_md' => '0.3',
         'nilai_cf' => '0.4'
        ]);

        Rule::create([
            'rule' => 'R48',
            'gejala_id' => 'G01',
            'pernyataan_id' => 'P42',
            'nilai_mb' => '0.9',
            'nilai_md' => '0.5',
         'nilai_cf' => '0.4'
        ]);



    }
}