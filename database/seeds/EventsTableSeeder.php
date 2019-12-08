<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = new Event;
      $data->slug = 'web-design';
      $data->name = 'Web Design for Beginners/HTML & CSS';
      $data->description = 'Pembelajaran dasar web design diakhiri dengan membuat project sederhana.';
      $data->requirement = '<ol>
                              <li>Tidak diperlukan pengetahuan dasar apapun.</li>
                              <li>Mempunyai laptop pribadi dan paham mengoperasikannya.</li>
                            </ol>';
      $data->content = '<ol>
                          <li><span style="font-weight: 400;">Hari Pertama&nbsp;</span>
                          <ol style="list-style-type: lower-alpha;">
                          <li style="font-weight: 400;"><span style="font-weight: 400;">HTML</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Paragraf</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Heading</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">List</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Hyperlink</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Image</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Table</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Form</span></li>
                          </ol>
                          </li>
                          <li><span style="font-weight: 400;">Hari Kedua</span>
                          <ol style="list-style-type: lower-alpha;">
                          <li style="font-weight: 400;"><span style="font-weight: 400;">CSS</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Font</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Background</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Selector</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Pseudo Class</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Gradient</span></li>
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Transform</span></li>
                          </ol>
                          </li>
                          <li><span style="font-weight: 400;">Hari Ketiga</span></li>
                          <li style="list-style-type: none;">
                          <ol style="list-style-type: lower-alpha;">
                          <li style="font-weight: 400;"><span style="font-weight: 400;">Projek (CV Online)</span></li>
                          </ol>
                          </li>
                        </ol>';
      $data->tutor = 'Rahmad Ade Akbar';
      $data->date = '14, 15, 21 Des 2019';
      $data->place = 'Dilo Banda Aceh';
      $data->deadline = '2019-12-13';
      $data->registration_link = '#';
      $data->color = 'orange';
      $data->image = 'webdesign.jpg';
      $data->save();

      // $deadline = ['2019-12-05', '2019-12-06', '2019-12-07', '2019-12-16', '2019-12-17', '2019-12-18'];
      // for ($i=0; $i < 20; $i++) {
      //   $data = new Event;
      //   $data->slug = 'event-'.$i;
      //   $data->name = 'Event '.$i;
      //   $data->description = 'Description';
      //   $data->requirement = 'Requirement';
      //   $data->content = 'content';
      //   $data->tutor = '-';
      //   $data->date = '-';
      //   $data->place = '-';
      //   $data->deadline = $deadline[rand(0,count($deadline)-1)];
      //   $data->registration_link = (rand(0,1) ? '#' : '');
      //   $data->save();
      // }
    }
}
