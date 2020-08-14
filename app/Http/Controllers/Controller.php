<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function InsertEmail(){

          $txt="airpoint@yahoo.com, akashchoyatourstravels@gmail.com, Alamin_feni@yahoo.com, aliveair13@gmail.com, alobd14@gmail.com, arifenterprise11@gmail.com, arifhossain4133@gmail.com, ariyaltravels17@gmail.com, aslamsoft3@gmail.com, baharpatouary@gmail.com, biplob908@gmail.com, biswastraveltours14@gmail.com, bmbusinesspoint@gmail.com, bodhi.rainbowair@yahoo.com, chapaiexpres@gmail.com, cornertravelsltd@gmail.com, cxbtravels@gmail.com, dipu1969@hotmail.com, emiran2012@yahoo.com, emoshimo2011@gmail.com, farhana_akther50@yahoo.com, fariatelicom@gmail.com, faruk591010@gmail.com, farukcomputer0@gmail.com, gopalairindiadac@yahoo.com, habibairtravels@yahoo.com, hafizfar85@gmail.com, hajarbasar@gmail.com, jaforent2012@gmail.com, jananiairtravels@gmail.com, josstafsir@gmail.com, jscomputer.muk@gmail.com, karigori_computer76@yahoo.com, kazitelecom51@yahoo.com, kh_mehedi@yahoo.com, khalidsapon@yahoo.com, khandac66@gmail.com, LALON.TUHIN@yahoo.com, makhanentp@yahoo.com, mamunh9101@gmail.com, md imam hossain <mdimamhossain258@gmail.com, monjiltravelsbd@gmail.com, monnasali@yahoo.com, munnipa@yahoo.com, nawabganjtravels@yahoo.com, nokshiishwargonj@gmail.com, nonstopmultipurpose@gmail.com, nonstoptoursandtravels16@gmail.com, ntitrvl@gmail.com, onnoenterprise@gmail.com, polashmbm@gmail.com, primeaviation.ltd@gmail.com, rabbi2005@yahoo.com, rabiul.tang@gmail.com, rafitravel01817@gmail.com, rahmantravelsjsr@gmail.com, rakibexpres@gmail.com, razu2526@gmail.com, REALBD60@yahoo.com, rm.travels24net@gmail.com, sahizam25@yahoo.com, saidurrahman.babu252@gmail.com, sajib.hossain99@yahoo.com, sakandor.sagor99@gmail.com, saleehin@bjitgroup.com, salimrana47@yahoo.com, serpurair2050@gmai.com, shahenul.stk@gmail.com, SHEIKHJOBAYERHOSSAIN@yahoo.com, sheikhtradersmeherpur75@gmail.com, shohel.ait@gmail.com, shuvoncomputer@gmail.com, singerhomna.rm89@gmail.com, smaslam.bd10@yahoo.com, smaziz038@gmail.com, snahidalam@yahoo.com, sonalialo082@gmail.com, S.M. Soreful Azad <sorefulazad@gmail.com, sototatravels1971@gmail.com, sujoncitytravels@gmail.com, tasmia309@gmail.com, tomishabe20@gmail.com, TONIMATRI@YAHOO.COM, toyaairtravelsbd@gmail.com, vahed24@gmail.com, Z9NET@hotmail.com, ziarote2014@gmail.com, zubaer.kayes@flynovoair.com, A. A Masud Rana <mrb2026@gmail.com, A.S.M Rasel <doabanga@gmail.com, Abdul Malak <abdulmalak865@gmail.com, Abdullah Al Mamun <mamunsirajgonj2016@gmail.com, ABIR <AONETRAVELSBD@GMAIL.COM, abu zaman <rangpurtnt@gmail.com, adv zahid <himalayintts@gmail.com, aeroplanetours <aeroplanetours@gmail.com, Ahmad Karim <alaminkarim78@gmail.com, Air Dotcom <airdotcombd@gmail.com, airbase07 <airbase07@gmail.com, airplan tours <airplantours@gmail.com, akashchoyatourstravels Mahmud <hasancomputer33@gmail.com, Akhir Miah <akhirmiah@gmail.com, Akkash Mamun <akkashmamun@gmail.com, Al Mahi Tour <almahitour@gmail.com, al mamun <mamunjp7@gmail.com, Al Razzaq <alrazzaq2017@gmail.com, AL SAMEEYU TRAVELS AND TOURS <ALSAMEEYU@GMAIL.COM, AL ZAHIR Travel <alzahirtravel@gmail.com, AL-ASWAD TRAVELS <al.aswad13feb@gmail.com, ALAMGIR MIAH <alamgirmiah595@gmail.com, ALBATROSS TALHA <albatross.talha@gmail.com, Alena Air Service <alenaairservice@gmail.com, ALIM PABNA <saifuddin.pabna92@gmail.com, Alkhamiz Group <alkhamijgroup@gmail.com, Almodina Bazar <almodinabazar@gmail.com, AMCO Enterprise <amcobdcom@gmail.com, amintravels20 <amintravels20@gmail.com, ANGEL international travel agency (pvt.) ltd <angeltravelsbd@gmail.com, Anuradha As <anoradhaas@gmail.com, anwar raiging <anwarraiging75@gmail.com, Arif Rahman <flysky.travelsbd@gmail.com, Arnika Travels <arnikatravelsbd@yahoo.com, Ashoke Ghosh <ashokekln@gmail.com, Asianet 20 <asianet20@gmail.com, Aslam Ali <aslamali1969@gmail.com, Ataharul Islam <ataharul.babu@gmail.com, ATIK TRAVELS <atiktravelsbd@gmail.com, Azmal Hossain <azmal4040@gmail.com, Badsha Khan <khanbadsha255@gmail.com, BANDURA TRAVELS SK UJJAL AHMED <banduratravels@gmail.com, barman, sujit <mayatravels16@gmail.com, bcbd14@gmail.com <bcbd14@gmail.com, belal.bd.94@gmail.com <belal.bd.94@gmail.com, bellal hosen <bellalhosen90@gmail.com, BIJOY INTERNATIONAL TRAVEL AGENT <bijoy14gram@gmail.com, Bikrampur Tourism <bikrampurtourism@gmail.com, bishwajit proshad <BISHWA11P@gmail.com, Bristy Bilash <bristybilashtravels@gmail.com, Cell Net <info.cellnetbd@gmail.com, Cheap Mega Travel Pty Ltd. <info.cmtbd@gmail.com, Classified Online <CLASSIFIEDONLINE@gmail.com, Deshbidesh10 <Deshbidesh10@gmail.com, Dipo ahmed <dipoahmed520@gmail.com, Easyway Bd <easywaybd5@gmail.com, Eng A K Azad <mimtours2013@gmail.com, Esa Md <esamd1982@gmail.com, fahim ahmed atiullah <fahimahmedatiullah9@gmail.com, Fahim BD <fahimtravelsbd@gmail.com, famous khan <Famouskhan4485@gmail.com, Fantasy Travel & Tours <fantasytravelsbd@gmail.com, Faruk Fs <farukfs123@gmail.com, FLYN GO <justflyngo@gmail.com, Foreign Holiday Tours <foreignholidaytours.bd@gmail.com, Forhad Hasan <forhaddoyel@gmail.com, FUAD KHANDAKER <airbasejamalpur@gmail.com, Global Trade Link <globaltradelink558@gmail.com, haideritt@gmail.com <haideritt@gmail.com, Hasan Mahmud <hasancomputer33@gmail.com, hassan sattar <hassansattar985@gmail.com, Hassan Travels <hassantravels70@gmail.com, humayun kabir <humayunkbr11@gmail.com, Imon Soft <mirahman01@gmail.com, Imran Rana <ranatours16@gmail.com, Iqbal Care International <iqbalcareint@yahoo.com, ishakha <ishakha124@gmail.com, Islam, Noor e modina Md nazrul <noor_e_modinatravels@yahoo.com, islam_airtravelt <islam_airtravelt@yahoo.com, jahangir alam <jdhakatravels@gmail.com, Jahangir Hossain <modelcomputer10@gmail.com, jamal hossain <zimair21@gmail.com, Janani Tours & Travels <jananitravels.bd@gmail.com, jihadtours73 <jihadtours73@gmail.com, jinnat ali <sajinnat@gmail.com, jobu razz <joburazz@gmail.com, joni sarkar <sarkar.joni27@gmail.com, JOYNAL T. <rajibrony36@gmail.com, jsr air travels <jsrairtravels@gmail.com, Jubaer Khalid <sarkertours.travels@gmail.com, kabir hossan <ankabir07@gmail.com, KARATOA TOURS & TRAVELS <karatoatat01@gmail.com, Kazi Enterprise <kazienterprise5292@yahoo.com, KHAN TRAVELS <emrankhand2k@gmail.com, khandaker Hasan <hasan9930@yahoo.com, Konica Computer_Basail Jasim Uddin <jasimkonica@gmail.com, Lark Media <larktt7@gmail.com, Linker Travels <linkertravelsbd@gmail.com, M I MOEEN <nexus012015@gmail.com, Maain Uddin , জহির <nizwamuscat24@gmail.com, Mahabob PG <mayadigitalpg@gmail.com, Mahib Travels <mahibtravels@gmail.com, Mahim Studio <mahimstudio@gmail.com, Malikuzzaman Mashuk <malikuzzamanmashuk@gmail.com, Mamun Khan <zarifzahin71@yahoo.com, Mamun or Rashid <mamunorr88@gmail.com, manika.travels <manika.travels@gmail.com, Manikgonj travels international <manikgonjtravels@gmail.com, MARIUM TRAVEL <mariumtravelbd@gmail.com, MASUD TRAVELS <masudshubhulla@gmail.com, Mazedur Rahman <nstt06@gmail.com, mazharul islam <akota0707@gmail.com, Mazidiqbal Khan <iqbalmazid.khan@gmail.com, MD Abul Monsur <monsur1may@gmail.com, Md Ariful Islam <ariftravelbd@gmail.com, md hossain <hossain0455@gmail.com, MD MONUAR HOSSAIN <mhtravelsbd@gmail.com, MD SAKUR MAHMUD SHOVON <planemessagebd@gmail.com, Md Sazib Miah <mdsazibmiah@gmail.com, Md Sharif Dastagir <mdsharifdastagir@gmail.com, Md Yusuf <SHAIRFEEN@gmail.com, Md. Amirul Islam <northbengalairtravels@gmail.com, Md. Anwar Hossain <anwarpabna44@gmail.com, Md. mustafizur Rahman <udayanairint@gmail.com, Md. Nazrul Islam <fcc.bdnet@gmail.com, MEEM TOURS N TRAVELS <azad.mrbd@gmail.com, Mirza Tours and Travels <mirzatt16@gmail.com, mkamal772011 <mkamal772011@gmail.com, mkt.chuadanga <mkt.chuadanga@paradisecables.com, mminternet2 <mminternet2@gmail.com, Modernairtravelsbd@gmail.com <modernairtravelsbd@gmail.com, mohammad fardous <alamintravelagencybd@gmail.com, mohibul69 <mohibul69@yahoo.com, mohon kumar <aurkacomputers2015@gmail.com, MOLLA TRAVELS <mollatravels16@gmail.com, Monir Hossain <monirabcd7@gmail.com, mukta akter <muktanoyon16@gmail.com, Munim Khan Mojlish <borno.191@gmail.com, Mutashim Billah <purbachol.bd@gmail.com, nadia travel <nadiatravel786@gmail.com, Nahar Travel <nahartravel@yahoo.com, NANTO CHANDRA <nantochandra@gmail.com, nd josin <josimbd09@gmail.com, Nelufa Yesmin <nelufayesminnela@gmail.com, Nesco Air Travels Nandail <smalom@gmail.com, New Star Travels & Media [ New Star Travels ] <newstartravels5@gmail.com, Nice Travel Point <nice0370@gmail.com, niloy khan <empiretravels01@gmail.com, Nisha Akter <nishaakter566@gmail.com, noton seza <notonseza@gmail.com, Nur Alam <alam1987nh@gmail.com, Obaidur Rahman <obaidur56@yahoo.com, Oli Ullah <oliullahnabi@gmail.com, ON-LINE POINT <kbayzied@gmail.com, OWAHIDUL ISLAM <sohag01745@gmail.com, palash debnath <palashd281@gmail.com, parvezmia sumon <MPARVEZMIA@gmail.com, Pavel Rahman <iliaspavel@gmail.com, piastravels <piastravels@yahoo.com, PRIINCE AHMED <princeahmed0179@gmail.com, Prince Alamgir <alamgir_prince22@yahoo.com, pushpo kanon <pushpokanon@gmail.com, Rabiul Islam Jibon <rabiulislamjibon95@gmail.com, Rajon Travels <rajontravels@gmail.com, Raju Khan <rajutoursandtravel@gmail.com, rakib.hasan14 <rakib.hasan14@outlook.com, rangpur tours <rangpurtnt@gmail.com, rasel khan <raselair2011@gmail.com, RASEL TRAVELS <rasel.travels@gmail.com, rashid rashid <rashidjp2000@gmail.com, Ratangonj Air Travels <ainalcombd@gmail.com, Razu Khan <razukhan.withall@gmail.com, razuahmed22 <razuahmed22@yahoo.com, rehamrezoan5205 <rehamrezoan5205@gmail.com, resma travel <resmabd99@gmail.com, reza vai tigar air privaty <atravels@hotmail.com, Ri Rifat <ririfat82@gmail.com, ripon Khan <riponkhan680@gmail.com, ROMAN TRAVELS <romantravels84@gmail.com, romantravelsbd <romantravels@yahoo.com, romantravelsbd <romantravelsbd@gmail.com, RSRAIHAN RAFIQ <rafiqrsraihan@gmail.com, Rubiul Islam <rafiatravels@gmail.com, S M Aziz <smaziz.bd@gmail.com, SABALIATRAVELLTD@gmail.com <sabaliatravelltd@gmail.com, Sadaf Clothing <sadafclothing@gmail.com, Sadikul Islam <sadikulislam666@gmail.com, Safe Travels <safetravelsbd@gmail.com, Saiful Islam <shohanstudio@gmail.com, SaifulMd Islam <tutulbamondi@gmail.com, sajib deb <iar.sajib@gmail.com, Sakul Nuruzzaman <sakulgl127@gmail.com, salahuddin islam <salahuddinislam661@gmail.com, Sams Media <smedia1971@gmail.com, selim hossen <mahibtravels@gmail.com, shafi islam <mashafiqul@gmail.com, Shafi Mahmud <shafi.sujanagar@gmail.com, Shafiq Uddin <shafiquddin93@yahoo.com, Shafiqul Islam <NaluaTravels@gmail.com, Shah Alam Halim Mahin <nokshiit@gmail.com, Shahiduzzaman Bulbul <dristycomputer@gmail.com, Shahin Seven Dix <Subakannan77@gmail.com, shak Javed <shakjaved05@gmail.com, shamshad houssain <shoussain@gmail.com, Shamsul Alam <atlantatangail@gmail.com, Sharanika Shipping <sskaizen4@gmail.com, Sharif Computer & Studio <smsharif89@gmail.com, SHARIF TALUKDAR <ODASHISHARIF@gmail.com, shazzaqul2012 <shazzaqul2012@gmail.com, Sirajul Su <sirajulsu9@gmail.com, SKY STAR TRAVELS AND TOURS <skystartravel1988@gmail.com, sky.wtt77 <sky.wtt77@gmail.com, Sm Alam <smalam265@gmail.com, sm aslam <smaslam.bd10@gmail.com, Sm Skytours <smskytours@gmail.com, Sohel Pabna <shohel8711@gmail.com, Sohel Rana <rana28334@gmail.com, sony travells m-gonj <aliazam9994@gmail.com, SR INFO <srtravelbd1@gmail.com, SR Travels <sr_travels4bd@yahoo.com, stair travels <stairtravels1999@gmail.com, sujon gazi <mrsujon0178@gmail.com, sujonpabna44@gmail.com <sujonpabna44@gmail.com, sumon khan <sk9081662@gmail.com, sumon.airbd <sumon.airbd@yahoo.com, Sunshine Travel <sunshinebd247@gmail.com, Syed Tous Husain <limonpakundia.2@gmail.com, takeofftravelsjess <takeofftravelsbd@gmail.com, Talukder Travels <talukdertravels17@gmail.com, Tanzil Hasan <mailtotanzil@gmail.com, Tawaf Sky <tawafsky@gmail.com, titofokir <titofokir@yahoo.com, Travels, Fahim <fahimtravels2015@gmail.com, TRAVELS, HASAN <hasantravels698@gmail.com, TS AVIATION <info@tsaviationbd.com, Tuhin Perves <tuhin.perves@gmail.com, U. FLY <helloufly@gmail.com, United Travels ???????? ????????? <utravelsbd@gmail.com, United Travels ইউনাইটেড ট্রাভেলস্ <utravelsbd@gmail.com, United World <unitedworld3402@gmail.com, Universal Travels <universaltravelsbd@gmail.com, Uttam Saha <uksdada@gmail.com, uzzal ahmed <natiapara3s@gmail.com, VICTOR AIRDAC <victorairdac@yahoo.com, Win Tours <wintoursandtravels@gmail.com, Zahirul Islam <zahirulislam_99@yahoo.com, zesttoursbd <zesttoursbd@yahoo.com, ZIAUL HAQUE <ziaulhaque073@gmail.com, Zihad Com <ZIHADCOMDHUNAT07@gmail.com, zimair21@gmail.com <zimair21@gmail.com, Zindani Computer <zindanicomputer@gmail.com, পরন্ত বেলা <biman.asianet@gmail.com, ​sweet <sweetdac6@gmail.com";

          $rows=explode(",", $txt);

          // dd($rows);

          foreach ($rows as $row) {

               $second_part=explode("<", $row);

               $name="Customer";

               if(isset($second_part[1])){
                    $name=trim($second_part[0]);
                    $email=trim($second_part[1]);
               }else{
                    $email=trim($second_part[0]);
               }



               DB::table('user_details')->insert([
                   'name' => $name,
                   'email' => $email,

                ]);

          }
    }

}