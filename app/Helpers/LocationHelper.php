<?php

namespace App\Helpers;

class LocationHelper 
{
   
   public static function getLGA($state){

		$states = array(
			'Abia' => array( 
				'capital' => 'Umuahia',
				'lga' => array(
					'Aba North',
				    'Aba South',
				    'Arochukwu',
				    'Bende',
				    'Ikwano',
				    'Isiala Ngwa North',
				    'Isiala Ngwa South',
					'Isuikwuato',
					'Obingwa',
					'Ohafia',
					'Osisioma',
					'Ugwunagbo',
					'Ukwa East',
					'Ukwa West',
					'Umuahia North',
					'Umuahia South',
					'Umuneochi',
					)
				),
			'Adamawa' => array(
				'capital' => 'Yola',
				'lga' => array(
					'Demsa',
					'Fufore',
					'Ganaye',
					'Gireri',
					'Gombi',
					'Guyuk',
					'Hong',
					'Jada',
					'Lamurde',
					'Madagali',
					'Maiha',
					'Mayo-Belwa',
					'Michika',
					'Mubi North',
					'Mubi South',
					'Numan',
					'Shelleng',
					'Song',
					'Toungo',
					'Yola North',
					'Yola South',
					)
				),
			'Akwa Ibom' => array(
				'capital' => 'Uyo',
				'lga' => array(
					'Abak',
					'Eastern Obolo',
					'Eket',
					'Esit Eket',
					'Essien Udim',
					'Etim Ekpo',
					'Etinan',
					'Ibeno',
					'Ibesikpo Asutan',
					'Ibiono Ibom',
					'Ika',
					'Ikono',
					'Ikot Abasi',
					'Ikot Ekpene',
					'Ini',
					'Itu',
					'Mbo',
					'Mkpat Enin',
					'Nsit Atai',
					'Nsit Ibom',
					'Nsit Ubium',
					'Obot Akara',
					'Okobo',
					'Onna',
					'Oron',
					'Oruk Anam',
					'Udung Uko',
					'Ukanafun',
					'Uruan',
					'Urue-Offong/Oruko',
					'Uyo',
					)
				),
			'Anambra' => array(
				'capital' => 'Awka',
				'lga' => array(
					'Aguata',
					'Anambra East',
					'Anambra West',
					'Anaocha',
					'Awka North',
					'Awka South',
					'Ayamelum',
					'Dunukofia',
					'Ekwusigo',
					'Idemili North',
					'Idemili south',
					'Ihiala',
					'Njikoka',
					'Nnewi North',
					'Nnewi South',
					'Ogbaru',
					'Onitsha North',
					'Onitsha South',
					'Orumba North',
					'Orumba South',
					'Oyi',
					)
				),
			'Bauchi' => array(
				'capital' => 'Bauchi',
				'lga' => array(
					'Alkaleri',
					'Bauchi',
					'Bogoro',
					'Damban',
					'Darazo',
					'Dass',
					'Ganjuwa',
					'Giade',
					'Itas/Gadau',
					'Jama\'are',
					'Katagum',
					'Kirfi',
					'Misau',
					'Ningi',
					'Shira',
					'Tafawa-Balewa',
					'Toro',
					'Warji',
					'Zaki' 
					)
				),
			'Bayelsa' => array(
				'capital' => 'Yenagoa',
				'lga' => array(
					'Brass',
					'Ekeremor',
					'Kolokuma/Opokuma',
					'Nembe',
					'Ogbia',
					'Sagbama',
					'Southern Jaw',
					'Yenegoa'
					)
				),
			'Benue' => array(
				'capital' => 'Makurdi',
				'lga' => array(
					'Ado',
					'Agatu',
					'Apa',
					'Buruku',
					'Gboko',
					'Guma',
					'Gwer East',
					'Gwer West',
					'Katsina-Ala',
					'Konshisha',
					'Kwande',
					'Logo',
					'Makurdi',
					'Obi',
					'Ogbadibo',
					'Oju',
					'Okpokwu',
					'Ohimini',
					'Oturkpo',
					'Tarka',
					'Ukum',
					'Ushongo',
					'Vandeikya'
					)
				),
			'Bornu' => array(
				'capital' => 'Maiduguri',
				'lga' => array(
					'Abadam',
					'Askira/Uba',
					'Bama',
					'Bayo',
					'Biu',
					'Chibok',
					'Damboa',
					'Dikwa',
					'Gubio',
					'Guzamala',
					'Gwoza',
					'Hawul',
					'Jere',
					'Kaga',
					'Kala/Balge',
					'Konduga',
					'Kukawa',
					'Kwaya Kusar',
					'Mafa',
					'Magumeri',
					'Maiduguri',
					'Marte',
					'Mobbar',
					'Monguno',
					'Ngala',
					'Nganzai',
					'Shani' 
					)
				),
			'Cross River' => array(
				'capital' => 'Calabar',
				'lga' => array(
					'Akpabuyo',
					'Odukpani',
					'Akamkpa',
					'Biase',
					'Abi',
					'Ikom',
					'Yarkur',
					'Odubra',
					'Boki',
					'Ogoja',
					'Yala',
					'Obanliku',
					'Obudu',
					'Calabar South',
					'Etung',
					'Bekwara',
					'Bakassi',
					'Calabar Municipality'
					)
				),
			'Delta' => array(
				'capital' => 'Asaba',
				'lga' => array(
					'Oshimili',
					'Aniocha',
					'Aniocha South',
					'Ika South',
					'Ika North-East',
					'Ndokwa West',
					'Ndokwa East',
					'Isoko south',
					'Isoko North',
					'Bomadi',
					'Burutu',
					'Ughelli South',
					'Ughelli North',
					'Ethiope West',
					'Ethiope East',
					'Sapele',
					'Okpe',
					'Warri North',
					'Warri South',
					'Uvwie',
					'Udu',
					'Warri Central',
					'Ukwani',
					'Oshimili North',
					'Patani'
					)
				),
			'Ebonyi' => array(
				'capital' => 'Abakaliki',
				'lga' => array(
					'Afikpo South',
					'Afikpo North',
					'Onicha',
					'Ohaozara',
					'Abakaliki',
					'Ishielu',
					'lkwo',
					'Ezza',
					'Ezza South',
					'Ohaukwu',
					'Ebonyi',
					'Ivo' 
					)
				),
			'Edo' => array(
				'capital' => 'Benin City',
				'lga' => array(
					'Esan North-East',
					'Esan Central',
					'Esan West',
					'Egor',
					'Ukpoba',
					'Central',
					'Etsako Central',
					'Igueben',
					'Oredo',
					'Ovia SouthWest',
					'Ovia South-East',
					'Orhionwon',
					'Uhunmwonde',
					'Etsako East',
					'Esan South-East'
					)
				),
			'Ekiti' => array(
				'capital' => 'Ado Ekiti',
				'lga' => array(
					'Ado',
					'Ekiti-East',
					'Ekiti-West', 
					'Emure/Ise/Orun',
					'Ekiti South-West',
					'Ikare',
					'Irepodun',
					'Ijero', 
					'Ido/Osi',
					'Oye',
					'Ikole',
					'Moba',
					'Gbonyin',
					'Efon',
					'Ise/Orun', 
					'Ilejemeje'
					)
				),
			'Enugu' => array(
				'capital' => 'Enugu',
				'lga' => array(
					'Enugu South', 
					'Igbo-Eze South',
					'Enugu North',
					'Nkanu',
					'Udi Agwu',
					'Oji-River',
					'Ezeagu',
					'IgboEze North',
					'Isi-Uzo',
					'Nsukka',
					'Igbo-Ekiti',
					'Uzo-Uwani',
					'Enugu East',
					'Aninri',
					'Nkanu East',
					'Udenu' 
					)
				),
			'Gombe' => array(
				'capital' => 'Gombe',
				'lga' => array(
					'Akko',
					'Balanga',
					'Billiri',
					'Dukku',
					'Kaltungo',
					'Kwami',
					'Shomgom',
					'Funakaye',
					'Gombe',
					'Nafada/Bajoga', 
					'Yamaltu/Delta'
					)
				),
			'Imo' => array(
				'capital' => 'Owerri',
				'lga' => array(
					'Aboh-Mbaise',
					'Ahiazu-Mbaise',
					'Ehime-Mbano',
					'Ezinihitte',
					'Ideato North',
					'Ideato South',
					'Ihitte/Uboma',
					'Ikeduru',
					'Isiala Mbano',
					'Isu',
					'Mbaitoli',
					'Mbaitoli',
					'Ngor-Okpala',
					'Njaba',
					'Nwangele',
					'Nkwerre',
					'Obowo',
					'Oguta',
					'Ohaji/Egbema',
					'Okigwe',
					'Orlu',
					'Orsu',
					'Oru East',
					'Oru West',
					'Owerri-Municipal',
					'Owerri North',
					'Owerri West' 
					)
				),
			'Jigawa' => array(
				'capital' => 'Dutse',
				'lga' => array(
					'Auyo',
					'Babura',
					'Birni Kudu',
					'Biriniwa',
					'Buji',
					'Dutse',
					'Gagarawa',
					'Garki',
					'Gumel',
					'Guri',
					'Gwaram',
					'Gwiwa',
					'Hadejia',
					'Jahun',
					'Kafin Hausa',
					'Kaugama Kazaure',
					'Kiri Kasamma',
					'Kiyawa',
					'Maigatari',
					'Malam Madori',
					'Miga',
					'Ringim',
					'Roni',
					'Sule-Tankarkar',
					'Taura', 
					'Yankwashi' 
					)
				),
			'Kaduna' => array(
				'capital' => 'Kaduna',
				'lga' => array(
					'Birni-Gwari',
					'Chikun',
					'Giwa',
					'Igabi',
					'Ikara',
					'jaba',
					'Jema\'a',
					'Kachia',
					'Kaduna North',
					'Kaduna South',
					'Kagarko',
					'Kajuru',
					'Kaura',
					'Kauru',
					'Kubau',
					'Kudan',
					'Lere',
					'Makarfi',
					'Sabon-Gari',
					'Sanga',
					'Soba',
					'Zango-Kataf',
					'Zaria'
					)
				),
			'Kano' => array(
				'capital' => 'Kano',
				'lga' => array(
					'Ajingi',
					'Albasu',
					'Bagwai',
					'Bebeji',
					'Bichi',
					'Bunkure',
					'Dala',
					'Dambatta',
					'Dawakin Kudu',
					'Dawakin Tofa',
					'Doguwa',
					'Fagge',
					'Gabasawa',
					'Garko',
					'Garum',
					'Mallam',
					'Gaya',
					'Gezawa',
					'Gwale',
					'Gwarzo',
					'Kabo',
					'Kano Municipal',
					'Karaye',
					'Kibiya',
					'Kiru',
					'kumbotso',
					'Kunchi',
					'Kura',
					'Madobi',
					'Makoda',
					'Minjibir',
					'Nasarawa',
					'Rano',
					'Rimin Gado',
					'Rogo',
					'Shanono',
					'Sumaila',
					'Takali',
					'Tarauni',
					'Tofa',
					'Tsanyawa',
					'Tudun Wada',
					'Ungogo',
					'Warawa',
					'Wudil'
					)
				),
			'Katsina' => array( 
				'capital' => 'Kastina',
				'lga' => array(
					'Bakori',
					'Batagarawa',
					'Batsari',
					'Baure',
					'Bindawa',
					'Charanchi',
					'Dandume',
					'Danja',
					'Dan Musa',
					'Daura',
					'Dutsi',
					'Dutsin-Ma',
					'Faskari',
					'Funtua',
					'Ingawa',
					'Jibia',
					'Kafur',
					'Kaita',
					'Kankara',
					'Kankia',
					'Katsina',
					'Kurfi',
					'Kusada',
					'Mai\'Adua',
					'Malumfashi',
					'Mani',
					'Mashi',
					'Matazuu',
					'Musawa',
					'Rimi',
					'Sabuwa',
					'Safana',
					'Sandamu',
					'Zango' 
					)
				),
			'Kebbi' => array(
				'capital' => 'Birnin Kebbi',
				'lga' => array(
					'Aleiro',
					'Arewa-Dandi',
					'Argungu',
					'Augie',
					'Bagudo',
					'Birnin Kebbi',
					'Bunza',
					'Dandi', 
					'Fakai',
					'Gwandu',
					'Jega',
					'Kalgo', 
					'Koko/Besse',
					'Maiyama',
					'Ngaski',
					'Sakaba',
					'Shanga',
					'Suru',
					'Wasagu/Danko',
					'Yauri',
					'Zuru' 
					)
				),
			'Kogi' => array(
				'capital' => 'Lokoja',
				'lga' => array(
					'Adavi',
					'Ajaokuta',
					'Ankpa',
					'Bassa',
					'Dekina',
					'Ibaji',
					'Idah',
					'Igalamela-Odolu',
					'Ijumu',
					'Kabba/Bunu',
					'Kogi',
					'Lokoja',
					'Mopa-Muro',
					'Ofu',
					'Ogori/Mangongo',
					'Okehi',
					'Okene',
					'Olamabolo',
					'Omala',
					'Yagba East',
					'Yagba West'
					)
				),
			'Kwara' => array(
				'capital' => 'Ilorin',
				'lga' => array(
					'Asa',
					'Baruten',
					'Edu',
					'Ekiti',
					'Ifelodun',
					'Ilorin East',
					'Ilorin West',
					'Irepodun',
					'Isin',
					'Kaiama',
					'Moro',
					'Offa',
					'Oke-Ero',
					'Oyun',
					'Pategi'
					)
				),
			'Lagos' => array(
				'capital' => 'Ikeja',
				'lga' => array(
					'Agege',
					'Ajeromi-Ifelodun',
					'Alimosho',
					'Amuwo-Odofin',
					'Apapa',
					'Badagry',
					'Epe',
					'Eti-Osa',
					'Ibeju/Lekki',
					'Ifako-Ijaye',
					'Ikeja',
					'Ikorodu',
					'Kosofe',
					'Lagos Island',
					'Lagos Mainland',
					'Mushin',
					'Ojo',
					'Oshodi-Isolo',
					'Shomolu',
					'Surulere'
					)
				),
			'Nasarawa' => array(
				'capital' => 'Lafia',
				'lga' => array(
					'Akwanga',
					'Awe',
					'Doma',
					'Karu',
					'Keana',
					'Keffi',
					'Kokona',
					'Lafia',
					'Nasarawa',
					'Nasarawa-Eggon',
					'Obi',
					'Toto',
					'Wamba' 
					)
				),
			'Niger' => array(
				'capital' => 'Minna',
				'lga' => array(
					'Agaie',
					'Agwara',
					'Bida',
					'Borgu',
					'Bosso',
					'Chanchaga',
					'Edati',
					'Gbako',
					'Gurara',
					'Katcha',
					'Kontagora', 
					'Lapai',
					'Lavun',
					'Magama',
					'Mariga',
					'Mashegu',
					'Mokwa',
					'Muya',
					'Pailoro',
					'Rafi',
					'Rijau',
					'Shiroro',
					'Suleja',
					'Tafa',
					'Wushishi'
					)
				),
			'Ogun' => array(
				'capital' => 'Abeokuta',
				'lga' => array(
					'Abeokuta North',
					'Abeokuta South',
					'Ado-Odo/Ota',
					'Egbado North',
					'Egbado South',
					'Ewekoro',
					'Ifo',
					'Ijebu East',
					'Ijebu North',
					'Ijebu North East',
					'Ijebu Ode',
					'Ikenne',
					'Imeko-Afon',
					'Ipokia',
					'Obafemi-Owode',
					'Ogun Waterside',
					'Odeda',
					'Odogbolu',
					'Remo North',
					'Shagamu'
					)
				),
			'Ondo' => array(
				'capital' => 'Akure',
				'lga' => array(
					'Akoko North East',
					'Akoko North West',
					'Akoko South Akure East',
					'Akoko South West',
					'Akure North',
					'Akure South',
					'Ese-Odo',
					'Idanre',
					'Ifedore',
					'Ilaje',
					'Ile-Oluji',
					'Okeigbo',
					'Irele',
					'Odigbo',
					'Okitipupa',
					'Ondo East',
					'Ondo West',
					'Ose',
					'Owo'
					)
				),
			'Osun' => array(
				'capital' => 'Oshogbo',
				'lga' => array(
					'Aiyedade',
					'Aiyedire',
					'Atakumosa East',
					'Atakumosa West',
					'Boluwaduro',
					'Boripe',
					'Ede North',
					'Ede South',
					'Egbedore',
					'Ejigbo',
					'Ife Central',
					'Ife East',
					'Ife North',
					'Ife South',
					'Ifedayo',
					'Ifelodun',
					'Ila',
					'Ilesha East',
					'Ilesha West',
					'Irepodun',
					'Irewole',
					'Isokan',
					'Iwo',
					'Obokun',
					'Odo-Otin',
					'Ola-Oluwa',
					'Olorunda',
					'Oriade',
					'Orolu',
					'Osogbo'
					)
				),
			'Oyo' => array(
				'capital' => 'Ibadan',
				'lga' => array(
					'Afijio',
					'Akinyele',
					'Atiba',
					'Atigbo',
					'Egbeda',
					'Ibadan Central',
					'Ibadan North',
					'Ibadan North West',
					'Ibadan South East',
					'Ibadan South West',
					'Ibarapa Central',
					'Ibarapa East',
					'Ibarapa North',
					'Ido',
					'Irepo',
					'Iseyin',
					'Itesiwaju',
					'Iwajowa',
					'Kajola',
					'Lagelu Ogbomosho North',
					'Ogbmosho South',
					'Ogo Oluwa',
					'Olorunsogo',
					'Oluyole',
					'Ona-Ara',
					'Orelope',
					'Ori Ire',
					'Oyo East',
					'Oyo West',
					'Saki East',
					'Saki West',
					'Surulere'
					)
				),
			'Plateau' => array(
				'capital' => 'Jos',
				'lga' => array(
					'Barikin Ladi',
					'Bassa',
					'Bokkos',
					'Jos East',
					'Jos North',
					'Jos South',
					'Kanam',
					'Kanke',
					'Langtang North',
					'Langtang South',
					'Mangu',
					'Mikang',
					'Pankshin',
					'Qua\'an Pan',
					'Riyom',
					'Shendam',
					'Wase'
					)
				),
			'Rivers' => array(
				'capital' => 'Port Harcourt',
				'lga' => array(
					'Abua/Odual',
					'Ahoada East',
					'Ahoada West',
					'Akuku Toru',
					'Andoni',
					'Asari-Toru',
					'Bonny',
					'Degema',
					'Emohua',
					'Eleme',
					'Etche',
					'Gokana',
					'Ikwerre',
					'Khana',
					'Obia/Akpor',
					'Ogba/Egbema/Ndoni',
					'Ogu/Bolo',
					'Okrika',
					'Omumma',
					'Opobo/Nkoro',
					'Oyigbo',
					'Port-Harcourt',
					'Tai' 
					)
				),
			'Sokoto' => array(
				'capital' => 'Sokoto',
				'lga' => array(
					'Binji',
					'Bodinga',
					'Dange-shnsi',
					'Gada',
					'Goronyo',
					'Gudu',
					'Gawabawa',
					'Illela',
					'Isa',
					'Kware',
					'kebbe',
					'Rabah',
					'Sabon birni',
					'Shagari',
					'Silame',
					'Sokoto North',
					'Sokoto South',
					'Tambuwal',
					'Tqngaza',
					'Tureta',
					'Wamako',
					'Wurno',
					'Yabo'
					)
				),
			'Taraba' => array(
				'capital' => 'Jalingo',
				'lga' => array(
					'Ardo-kola',
					'Bali',
					'Donga',
					'Gashaka',
					'Cassol',
					'Ibi',
					'Jalingo',
					'Karin-Lamido',
					'Kurmi',
					'Lau',
					'Sardauna',
					'Takum',
					'Ussa',
					'Wukari',
					'Yorro',
					'Zing'
					)
				),
			'Yobe' => array(
				'capital' => 'Damaturu',
				'lga' => array(
					'Bade',
					'Bursari',
					'Damaturu',
					'Fika',
					'Fune',
					'Geidam',
					'Gujba',
					'Gulani',
					'Jakusko',
					'Karasuwa',
					'Karawa',
					'Machina',
					'Nangere',
					'Nguru Potiskum',
					'Tarmua',
					'Yunusari',
					'Yusufari'
					)
				),
			'Zamfara' => array(
				'capital' => 'Gusau',
				'lga' => array(
					'Anka',
					'Bakura',
					'Birnin Magaji',
					'Bukkuyum',
					'Bungudu',
					'Gummi',
					'Gusau',
					'Kaura',
					'Namoda',
					'Maradun',
					'Maru',
					'Shinkafi',
					'Talata Mafara',
					'Tsafe',
					'Zurmi' 
					)
				),
			'Abuja' => array(
				'capital' => '',
				'lga' => array(
					'Gwagwalada',
					'Kuje',
					'Abaji',
					'Abuja Municipal',
					'Bwari',
					'Kwali'	
					)
				)
			);

      return response()->json(
      	
          ( isset($states[$state] ) ? $states[$state]['lga'] : [];
      	);
   }
}
