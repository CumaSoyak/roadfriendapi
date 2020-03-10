<?php


use App\Models\City;
use App\Models\County;
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
            ['id' => 1, 'title' => 'Adana'],
            ['id' => 2, 'title' => 'Adıyaman'],
            ['id' => 3, 'title' => 'Afyonkarahisar'],
            ['id' => 4, 'title' => 'Ağrı'],
            ['id' => 5, 'title' => 'Aksaray'],
            ['id' => 6, 'title' => 'Amasya'],
            ['id' => 7, 'title' => 'Ankara'],
            ['id' => 8, 'title' => 'Antalya'],
            ['id' => 9, 'title' => 'Ardahan'],
            ['id' => 10, 'title' => 'Artvin'],
            ['id' => 11, 'title' => 'Aydın'],
            ['id' => 12, 'title' => 'Balıkesir'],
            ['id' => 13, 'title' => 'Bartın'],
            ['id' => 14, 'title' => 'Batman'],
            ['id' => 15, 'title' => 'Bayburt'],
            ['id' => 16, 'title' => 'Bilecik'],
            ['id' => 17, 'title' => 'Bingöl'],
            ['id' => 18, 'title' => 'Bitlis'],
            ['id' => 19, 'title' => 'Bolu'],
            ['id' => 20, 'title' => 'Burdur'],
            ['id' => 21, 'title' => 'Bursa'],
            ['id' => 22, 'title' => 'Çanakkale'],
            ['id' => 23, 'title' => 'Çankırı'],
            ['id' => 24, 'title' => 'Çorum'],
            ['id' => 25, 'title' => 'Denizli'],
            ['id' => 26, 'title' => 'Diyarbakır'],
            ['id' => 27, 'title' => 'Düzce'],
            ['id' => 28, 'title' => 'Edirne'],
            ['id' => 29, 'title' => 'Elazığ'],
            ['id' => 30, 'title' => 'Erzincan'],
            ['id' => 31, 'title' => 'Erzurum'],
            ['id' => 32, 'title' => 'Eskişehir'],
            ['id' => 33, 'title' => 'Gaziantep'],
            ['id' => 34, 'title' => 'Giresun'],
            ['id' => 35, 'title' => 'Gümüşhane'],
            ['id' => 36, 'title' => 'Hakkari'],
            ['id' => 37, 'title' => 'Hatay'],
            ['id' => 38, 'title' => 'İğdır'],
            ['id' => 39, 'title' => 'İsparta'],
            ['id' => 40, 'title' => 'İstanbul'],
            ['id' => 41, 'title' => 'İzmir'],
            ['id' => 42, 'title' => 'Kahramanmaraş'],
            ['id' => 43, 'title' => 'Karabük'],
            ['id' => 44, 'title' => 'Karaman'],
            ['id' => 45, 'title' => 'Kars'],
            ['id' => 46, 'title' => 'Kastamonu'],
            ['id' => 47, 'title' => 'Kayseri'],
            ['id' => 48, 'title' => 'Kilis'],
            ['id' => 49, 'title' => 'Kırıkkale'],
            ['id' => 50, 'title' => 'Kırklareli'],
            ['id' => 51, 'title' => 'Kırşehir'],
            ['id' => 52, 'title' => 'Kocaeli'],
            ['id' => 53, 'title' => 'Konya'],
            ['id' => 54, 'title' => 'Kütahya'],
            ['id' => 55, 'title' => 'Malatya'],
            ['id' => 56, 'title' => 'Manisa'],
            ['id' => 57, 'title' => 'Mardin'],
            ['id' => 58, 'title' => 'Mersin'],
            ['id' => 59, 'title' => 'Muğla'],
            ['id' => 60, 'title' => 'Muş'],
            ['id' => 61, 'title' => 'Nevşehir'],
            ['id' => 62, 'title' => 'Niğde'],
            ['id' => 63, 'title' => 'Ordu'],
            ['id' => 64, 'title' => 'Osmaniye'],
            ['id' => 65, 'title' => 'Rize'],
            ['id' => 66, 'title' => 'Sakarya'],
            ['id' => 67, 'title' => 'Samsun'],
            ['id' => 68, 'title' => 'Şanlıurfa'],
            ['id' => 69, 'title' => 'Siirt'],
            ['id' => 70, 'title' => 'Sinop'],
            ['id' => 71, 'title' => 'Şırnak'],
            ['id' => 72, 'title' => 'Sivas'],
            ['id' => 73, 'title' => 'Tekirdağ'],
            ['id' => 74, 'title' => 'Tokat'],
            ['id' => 75, 'title' => 'Trabzon'],
            ['id' => 76, 'title' => 'Tunceli'],
            ['id' => 77, 'title' => 'Uşak'],
            ['id' => 78, 'title' => 'Van'],
            ['id' => 79, 'title' => 'Yalova'],
            ['id' => 80, 'title' => 'Yozgat'],
            ['id' => 81, 'title' => 'Zonguldak'],
        ];

        foreach ($cities as $data) {
            City::create($data);
        }
    }
}
