<?php


use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->cities();
    }

    private function cities()
    {
        $cities = [
            [
                'id'=> 1,
                'name'=> 'Adana',
                'latitude'=> '37.0000',
                'longitude'=> '35.3213',
                'population'=> 2183167,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 2,
                'name'=> 'Adıyaman',
                'latitude'=> '37.7648',
                'longitude'=> '38.2786',
                'population'=> 602774,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 3,
                'name'=> 'Afyonkarahisar',
                'latitude'=> '38.7507',
                'longitude'=> '30.5567',
                'population'=> 709015,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 4,
                'name'=> 'Ağrı',
                'latitude'=> '39.7191',
                'longitude'=> '43.0503',
                'population'=> 547210,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 5,
                'name'=> 'Amasya',
                'latitude'=> '40.6499',
                'longitude'=> '35.8353',
                'population'=> 322167,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 6,
                'name'=> 'Ankara',
                'latitude'=> '39.9208',
                'longitude'=> '32.8541',
                'population'=> 5270575,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 7,
                'name'=> 'Antalya',
                'latitude'=> '36.8841',
                'longitude'=> '30.7056',
                'population'=> 2288456,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 8,
                'name'=> 'Artvin',
                'latitude'=> '41.1828',
                'longitude'=> '41.8183',
                'population'=> 168370,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 9,
                'name'=> 'Aydın',
                'latitude'=> '37.8560',
                'longitude'=> '27.8416',
                'population'=> 1053506,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 10,
                'name'=> 'Balıkesir',
                'latitude'=> '39.6484',
                'longitude'=> '27.8826',
                'population'=> 1186688,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 11,
                'name'=> 'Bilecik',
                'latitude'=> '40.0567',
                'longitude'=> '30.0665',
                'population'=> 212361,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 12,
                'name'=> 'Bingöl',
                'latitude'=> '39.0626',
                'longitude'=> '40.7696',
                'population'=> 267184,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 13,
                'name'=> 'Bitlis',
                'latitude'=> '38.3938',
                'longitude'=> '42.1232',
                'population'=> 267184,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 14,
                'name'=> 'Bolu',
                'latitude'=> '40.5760',
                'longitude'=> '31.5788',
                'population'=> 291095,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 15,
                'name'=> 'Burdur',
                'latitude'=> '37.4613',
                'longitude'=> '30.0665',
                'population'=> 258339,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 16,
                'name'=> 'Bursa',
                'latitude'=> '40.2669',
                'longitude'=> '29.0634',
                'population'=> 2842547,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 17,
                'name'=> 'Çanakkale',
                'latitude'=> '40.1553',
                'longitude'=> '26.4142',
                'population'=> 513341,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 18,
                'name'=> 'Çankırı',
                'latitude'=> '40.6013',
                'longitude'=> '33.6134',
                'population'=> 180945,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 19,
                'name'=> 'Çorum',
                'latitude'=> '40.5506',
                'longitude'=> '34.9556',
                'population'=> 525180,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 20,
                'name'=> 'Denizli',
                'latitude'=> '37.7765',
                'longitude'=> '29.0864',
                'population'=> 993442,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 21,
                'name'=> 'Diyarbakır',
                'latitude'=> '37.9144',
                'longitude'=> '40.2306',
                'population'=> 1654196,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 22,
                'name'=> 'Edirne',
                'latitude'=> '41.6818',
                'longitude'=> '26.5623',
                'population'=> 402537,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 23,
                'name'=> 'Elâzığ',
                'latitude'=> '38.6810',
                'longitude'=> '39.2264',
                'population'=> 574304,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 24,
                'name'=> 'Erzincan',
                'latitude'=> '39.7500',
                'longitude'=> '39.5000',
                'population'=> 222918,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 25,
                'name'=> 'Erzurum',
                'latitude'=> '39.9000',
                'longitude'=> '41.2700',
                'population'=> 762321,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 26,
                'name'=> 'Eskişehir',
                'latitude'=> '39.7767',
                'longitude'=> '30.5206',
                'population'=> 826716,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 27,
                'name'=> 'Gaziantep',
                'latitude'=> '37.0662',
                'longitude'=> '37.3833',
                'population'=> 1931836,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 28,
                'name'=> 'Giresun',
                'latitude'=> '40.9128',
                'longitude'=> '38.3895',
                'population'=> 426686,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 29,
                'name'=> 'Gümüşhane',
                'latitude'=> '40.4386',
                'longitude'=> '39.5086',
                'population'=> 151449,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 30,
                'name'=> 'Hakkâri',
                'latitude'=> '37.5833',
                'longitude'=> '43.7333',
                'population'=> 278775,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 31,
                'name'=> 'Hatay',
                'latitude'=> '36.4018',
                'longitude'=> '36.3498',
                'population'=> 1533507,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 32,
                'name'=> 'Isparta',
                'latitude'=> '37.7648',
                'longitude'=> '30.5566',
                'population'=> 421766,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 33,
                'name'=> 'Mersin',
                'latitude'=> '36.8000',
                'longitude'=> '34.6333',
                'population'=> 1745221,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 34,
                'name'=> 'İstanbul',
                'latitude'=> '41.0053',
                'longitude'=> '28.9770',
                'population'=> 14657434,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 35,
                'name'=> 'İzmir',
                'latitude'=> '38.4189',
                'longitude'=> '27.1287',
                'population'=> 4168415,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 36,
                'name'=> 'Kars',
                'latitude'=> '40.6167',
                'longitude'=> '43.1000',
                'population'=> 292660,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 37,
                'name'=> 'Kastamonu',
                'latitude'=> '41.3887',
                'longitude'=> '33.7827',
                'population'=> 372633,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 38,
                'name'=> 'Kayseri',
                'latitude'=> '38.7312',
                'longitude'=> '35.4787',
                'population'=> 1341056,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 39,
                'name'=> 'Kırklareli',
                'latitude'=> '41.7333',
                'longitude'=> '27.2167',
                'population'=> 346973,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 40,
                'name'=> 'Kırşehir',
                'latitude'=> '39.1425',
                'longitude'=> '34.1709',
                'population'=> 225562,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 41,
                'name'=> 'Kocaeli',
                'latitude'=> '40.8533',
                'longitude'=> '29.8815',
                'population'=> 1780055,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 42,
                'name'=> 'Konya',
                'latitude'=> '37.8667',
                'longitude'=> '32.4833',
                'population'=> 2130544,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 43,
                'name'=> 'Kütahya',
                'latitude'=> '39.4167',
                'longitude'=> '29.9833',
                'population'=> 571463,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 44,
                'name'=> 'Malatya',
                'latitude'=> '38.3552',
                'longitude'=> '38.3095',
                'population'=> 772904,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 45,
                'name'=> 'Manisa',
                'latitude'=> '38.6191',
                'longitude'=> '27.4289',
                'population'=> 1380366,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 46,
                'name'=> 'Kahramanmaraş',
                'latitude'=> '37.5858',
                'longitude'=> '36.9371',
                'population'=> 1096610,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 47,
                'name'=> 'Mardin',
                'latitude'=> '37.3212',
                'longitude'=> '40.7245',
                'population'=> 796591,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 48,
                'name'=> 'Muğla',
                'latitude'=> '37.2153',
                'longitude'=> '28.3636',
                'population'=> 908877,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 49,
                'name'=> 'Muş',
                'latitude'=> '38.9462',
                'longitude'=> '41.7539',
                'population'=> 408728,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 50,
                'name'=> 'Nevşehir',
                'latitude'=> '38.6939',
                'longitude'=> '34.6857',
                'population'=> 286767,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 51,
                'name'=> 'Niğde',
                'latitude'=> '37.9667',
                'longitude'=> '34.6833',
                'population'=> 346114,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 52,
                'name'=> 'Ordu',
                'latitude'=> '40.9839',
                'longitude'=> '37.8764',
                'population'=> 728949,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 53,
                'name'=> 'Rize',
                'latitude'=> '41.0201',
                'longitude'=> '40.5234',
                'population'=> 328979,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 54,
                'name'=> 'Sakarya',
                'latitude'=> '40.6940',
                'longitude'=> '30.4358',
                'population'=> 953181,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 55,
                'name'=> 'Samsun',
                'latitude'=> '41.2928',
                'longitude'=> '36.3313',
                'population'=> 1279884,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 56,
                'name'=> 'Siirt',
                'latitude'=> '37.9333',
                'longitude'=> '41.9500',
                'population'=> 320351,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 57,
                'name'=> 'Sinop',
                'latitude'=> '42.0231',
                'longitude'=> '35.1531',
                'population'=> 204133,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 58,
                'name'=> 'Sivas',
                'latitude'=> '39.7477',
                'longitude'=> '37.0179',
                'population'=> 618617,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 59,
                'name'=> 'Tekirdağ',
                'latitude'=> '40.9833',
                'longitude'=> '27.5167',
                'population'=> 937910,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 60,
                'name'=> 'Tokat',
                'latitude'=> '40.3167',
                'longitude'=> '36.5500',
                'population'=> 593990,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 61,
                'name'=> 'Trabzon',
                'latitude'=> '41.0015',
                'longitude'=> '39.7178',
                'population'=> 768417,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 62,
                'name'=> 'Tunceli',
                'latitude'=> '39.3074',
                'longitude'=> '39.4388',
                'population'=> 86076,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 63,
                'name'=> 'Şanlıurfa',
                'latitude'=> '37.1591',
                'longitude'=> '38.7969',
                'population'=> 1892320,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 64,
                'name'=> 'Uşak',
                'latitude'=> '38.6823',
                'longitude'=> '29.4082',
                'population'=> 353048,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 65,
                'name'=> 'Van',
                'latitude'=> '38.4891',
                'longitude'=> '43.4089',
                'population'=> 1096397,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 66,
                'name'=> 'Yozgat',
                'latitude'=> '39.8181',
                'longitude'=> '34.8147',
                'population'=> 419440,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 67,
                'name'=> 'Zonguldak',
                'latitude'=> '41.4564',
                'longitude'=> '31.7987',
                'population'=> 595907,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 68,
                'name'=> 'Aksaray',
                'latitude'=> '38.3687',
                'longitude'=> '34.0370',
                'population'=> 386514,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 69,
                'name'=> 'Bayburt',
                'latitude'=> '40.2552',
                'longitude'=> '40.2249',
                'population'=> 78550,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 70,
                'name'=> 'Karaman',
                'latitude'=> '37.1759',
                'longitude'=> '33.2287',
                'population'=> 242196,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 71,
                'name'=> 'Kırıkkale',
                'latitude'=> '39.8468',
                'longitude'=> '33.5153',
                'population'=> 270271,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 72,
                'name'=> 'Batman',
                'latitude'=> '37.8812',
                'longitude'=> '41.1351',
                'population'=> 566633,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 73,
                'name'=> 'Şırnak',
                'latitude'=> '37.4187',
                'longitude'=> '42.4918',
                'population'=> 490184,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 74,
                'name'=> 'Bartın',
                'latitude'=> '41.5811',
                'longitude'=> '32.4610',
                'population'=> 190708,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 75,
                'name'=> 'Ardahan',
                'latitude'=> '41.1105',
                'longitude'=> '42.7022',
                'population'=> 99265,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 76,
                'name'=> 'Iğdır',
                'latitude'=> '39.8880',
                'longitude'=> '44.0048',
                'population'=> 192435,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 77,
                'name'=> 'Yalova',
                'latitude'=> '40.6500',
                'longitude'=> '29.2667',
                'population'=> 233009,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 78,
                'name'=> 'Karabük',
                'latitude'=> '41.2061',
                'longitude'=> '32.6204',
                'population'=> 236978,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 79,
                'name'=> 'Kilis',
                'latitude'=> '36.7184',
                'longitude'=> '37.1212',
                'population'=> 130655,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 80,
                'name'=> 'Osmaniye',
                'latitude'=> '37.2130',
                'longitude'=> '36.1763',
                'population'=> 512873,
                'country_code'=> 'TR'
            ],
            [
                'id'=> 81,
                'name'=> 'Düzce',
                'latitude'=> '40.8438',
                'longitude'=> '31.1565',
                'population'=> 360388,
                'country_code'=> 'TR'
            ]

        ];

        foreach ($cities as $data) {
            City::create($data);
        }
    }
}
