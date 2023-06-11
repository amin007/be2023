<?php
###################################################################################################
# simpan kod data Isirumah dan Ekonomi yang baru selepas tahun 2022
###################################################################################################
#--------------------------------------------------------------------------------------------------
/* bidang pengajian ISCED-F 2013: List of possible codes
$tajuk['isced-f 2013'] = '#,Broad field,Narrow field,Detailed field';
$data['isced-f 2013'] = array(
	array('','Broad field','Narrow field','Detailed field'),
	array('','00-Generic programmes & qualifications','',''),
	array('','000-Generic programmes & qualifications not further defined',
	'0000 Generic programmes & qualifications not further defined',''),
	array('','001-Basic programmes & qualifications',
	'0011 Basic programmes & qualifications',''),
	array('','002-Literacy & numeracy','0021 Literacy & numeracy',''),
	array('','003-Personal skills & development ','0031 Personal skills & development',''),
	array('','009 Generic programmes & qualifications not elsewhere classified',
	'0099 Generic programmes & qualifications not elsewhere classified',''),
	array('','01-Education','',''),
	array('','0110 Education not further defined','',''),
	array('','0111 Education science','',''),
	array('','0112 Training for pre-school teachers','',''),
	array('','0113 Teacher training without subject specialisation','',''),
	array('','0114 Teacher training with subject specialisation','',''),
	array('','0119 Education not elsewhere classified','',''),
	array('','018 Inter-disciplinary programmes & qualifications involving education','',''),
	array('','0188 Inter-disciplinary programmes & qualifications involving education','',''),
	array('','02 Arts & humanities','',''),
	array('','021 Arts & humanities not further defined','',''),
	array('','0200 Arts & humanities not further defined','',''),
	array('','021 Arts','',''),
	array('','0210 Arts not further defined','',''),
	array('','0211 Audio-visual techniques & media production','',''),
	array('','0212 Fashion, interior & industrial design','',''),
	array('','0213 Fine arts','',''),
	array('','0214 Handicrafts','',''),
	array('','0215 Music & performing arts ','',''),
	array('','0219 Arts not elsewhere classified ','',''),
	array('','022 Humanities (except languages)','',''),
	array('','0220 Humanities (except languages) not further defined','',''),
	array('','0221 Religion & theology','',''),
	array('','0222 History & archaeology','',''),
	array('','0223 Philosophy & ethics','',''),
	array('','0229 Humanities (except languages) not elsewhere classified','',''),
	array('','023 Languages','',''),
	array('','0230 Languages not further defined','',''),
	array('','0231 Language acquisition','',''),
	array('','0232 Literature & linguistics','',''),
	array('','0239 Languages not elsewhere classified','',''),
	array('','028 Inter-disciplinary programmes & qualifications involving'
	. ' arts & humanities','',''),
	array('','0288 Inter-disciplinary programmes & qualifications involving'
	. ' arts & humanities','',''),
	array('','029 Arts & humanities not elsewhere classified','',''),
	array('','0299 Arts & humanities not elsewhere classified','',''),
	array('','03 Social sciences, journalism & information','',''),
	array('','030 Social sciences, journalism & information not further defined','',''),
	array('','0300 Social sciences, journalism & information not further defined','',''),
	array('','031 Social & behavioural sciences','',''),
	array('','0310 Social & behavioural sciences not further defined','',''),
	array('','0311 Economics','',''),
	array('','0312 Political sciences & civics','',''),
	array('','0313 Psychology','',''),
	array('','0314 Sociology & cultural studies','',''),
	array('','0319 Social & behavioural sciences not elsewhere classified','',''),
	array('','032 Journalism & information','',''),
	array('','0320 Journalism & information not further defined','',''),
	array('','0321 Journalism & reporting','',''),
	array('','0322 Library, information & archival studies','',''),
	array('','0329 Journalism & information not elsewhere classified','',''),
	array('','038 Inter-disciplinary programmes & qualifications involving'
	. ' social sciences, journalism & information','',''),
	array('','0388 Inter-disciplinary programmes & qualifications involving'
	. ' social sciences, journalism & information','',''),
	array('','039 Social sciences, journalism & information not elsewhere classified','',''),
	array('','0399 Social sciences, journalism & information not elsewhere classified ','',''),
	array('','04 Business, administration & law','',''),
	array('','040 Business, administration & law not further defined','',''),
	array('','0400 Business, administration & law not further defined','',''),
	array('','041 Business & administration','',''),
	array('','0410 Business & administration not further defined','',''),
	array('','0411 Accounting & taxation','',''),
	array('','0412 Finance, banking & insurance','',''),
	array('','0413 Management & administration','',''),
	array('','0414 Marketing & advertising','',''),
	array('','0415 Secretarial & office work','',''),
	array('','0416 Wholesale & retail sales','',''),
	array('','0417 Work skills','',''),
	array('','0419 Business & administration not elsewhere classified','',''),
	array('','042 Law','',''),
	array('','0421 Law','',''),
	array('','048 Inter-disciplinary programmes & qualifications involving business,'
	. ' administration & law','',''),
	array('','0488 Inter-disciplinary programmes & qualifications involving business,'
	. ' administration & law','',''),
	array('','049 Business, administration & law not elsewhere classified','',''),
	array('','0499 Business, administration & law not elsewhere classified','',''),
	array('','05 Natural sciences, mathematics & statistics','',''),
	array('','050 Natural sciences, mathematics & statistics not further defined','',''),
	array('','0500 Natural sciences, mathematics & statistics not further defined','',''),
	array('','051 Biological & related sciences','',''),
	array('','0510 Biological & related sciences not further defined','',''),
	array('','0511 Biology','',''),
	array('','0512 Biochemistry','',''),
	array('','0519 Biological & related sciences not elsewhere classified','',''),
	array('','052 Environment','',''),
	array('','0520 Environment not further defined','',''),
	array('','0521 Environmental sciences','',''),
	array('','0522 Natural environments & wildlife','',''),
	array('','0529 Environment not elsewhere classified','',''),
	array('','053 Physical sciences','',''),
	array('','0530 Physical sciences not further defined','',''),
	array('','0531 Chemistry','',''),
	array('','0532 Earth sciences','',''),
	array('','0533 Physics','',''),
	array('','0539 Physical sciences not elsewhere classified','',''),
	array('','054 Mathematics & statistics','',''),
	array('','0540 Mathematics & statistics not further defined','',''),
	array('','0541 Mathematics','',''),
	array('','0542 Statistics','',''),
	array('','058 Inter-disciplinary programmes & qualifications involving natural'
	. ' sciences, mathematics & statistics','',''),
	array('','0588 Inter-disciplinary programmes & qualifications involving natural'
	. ' sciences, mathematics & statistics','',''),
	array('','059 Natural sciences, mathematics & statistics not elsewhere classified','',''),
	array('','0599 Natural sciences, mathematics & statistics not elsewhere classified','',''),
	array('','06 Information & Communication Technologies (ICTs)','',''),
	array('','061 Information & Communication Technologies (ICTs)','',''),
	array('','0610 Information & Communication Technologies (ICTs) not further defined','',''),
	array('','0611 Computer use','',''),
	array('','0612 Database & network design & administration','',''),
	array('','0613 Software & applications development & analysis','',''),
	array('','0619 Information & Communication Technologies (ICTs)'
	. '  not elsewhere classified','',''),
	array('','068 Inter-disciplinary programmes & qualifications involving'
	. ' Information & Communication Technologies (ICTs)','',''),
	array('','0688 Inter-disciplinary programmes & qualifications involving'
	. ' Information & Communication Technologies (ICTs)','',''),
	array('','07 Engineering, manufacturing & construction','',''),
	array('','070 Engineering, manufacturing & construction not further defined','',''),
	array('','0700 Engineering, manufacturing & construction not further defined','',''),
	array('','071 Engineering & engineering trades','',''),
	array('','0710 Engineering & engineering trades not further defined','',''),
	array('','0711 Chemical engineering & processes','',''),
	array('','0712 Environmental protection technology','',''),
	array('','0713 Electricity & energy','',''),
	array('','0714 Electronics & automation','',''),
	array('','0715 Mechanics & metal trades','',''),
	array('','0716 Motor vehicles, ships & aircraft','',''),
	array('','0719 Engineering & engineering trades not elsewhere classified','',''),
	array('','072 Manufacturing & processing','',''),
	array('','0720 Manufacturing & processing not further defined','',''),
	array('','0721 Food processing','',''),
	array('','0722 Materials (glass, paper, plastic & wood)','',''),
	array('','0723 Textiles (clothes, footwear & leather)','',''),
	array('','0724 Mining & extraction','',''),
	array('','0729 Manufacturing & processing not elsewhere classified','',''),
	array('','073 Architecture & construction','',''),
	array('','0730 Architecture & construction not further defined','',''),
	array('','0731 Architecture & town planning','',''),
	array('','0732 Building & civil engineering','',''),
	array('','078 Inter-disciplinary programmes & qualifications involving'
	. ' engineering, manufacturing & construction','',''),
	array('','0788 Inter-disciplinary programmes & qualifications involving'
	. ' engineering, manufacturing & construction','',''),
	array('','079 Engineering, manufacturing & construction not elsewhere classified ','',''),
	array('','0799 Engineering, manufacturing & construction not elsewhere classified','',''),
	array('','08 Agriculture, forestry, fisheries & veterinary','',''),
	array('','080 Agriculture, forestry, fisheries & veterinary not further defined','',''),
	array('','0800 Agriculture, forestry, fisheries & veterinary not further defined','',''),
	array('','081 Agriculture','',''),
	array('','0810 Agriculture not further defined','',''),
	array('','0811 Crop & livestock production','',''),
	array('','0812 Horticulture','',''),
	array('','0819 Agriculture not elsewhere classified','',''),
	array('','082 Forestry','0821 Forestry',''),
	array('','083 Fisheries','0831 Fisheries',''),
	array('','084 Veterinary','0841 Veterinary',''),
	array('','088 Inter-disciplinary programmes & qualifications involving'
	. ' agriculture, forestry, fisheries & veterinary','',''),
	array('','0888 Inter-disciplinary programmes & qualifications involving'
	. 'agriculture, forestry, fisheries & veterinary','',''),
	array('','089 Agriculture, forestry, fisheries & veterinary not elsewhere classified',
	'0899 Agriculture, forestry, fisheries & veterinary not elsewhere classified',''),
	array('','09 Health & welfare','',''),
	array('','090 Health & welfare not further defined','',''),
	array('','0900 Health & welfare not further defined','',''),
	array('','091 Health','',''),
	array('','0910 Health not further defined','',''),
	array('','0911 Dental studies','',''),
	array('','0912 Medicine','',''),
	array('','0913 Nursing & midwifery','',''),
	array('','0914 Medical diagnostic & treatment technology','',''),
	array('','0915 Therapy & rehabilitation','',''),
	array('','0916 Pharmacy','',''),
	array('','0917 Traditional & complementary medicine & therapy','',''),
	array('','0919 Health not elsewhere classified','',''),
	array('','092 Welfare','',''),
	array('','0920 Welfare not further defined','',''),
	array('','0921 Care of the elderly & of disabled adults','',''),
	array('','0922 Child care & youth services','',''),
	array('','0923 Social work & counselling','',''),
	array('','0929 Welfare not elsewhere classified','',''),
	array('','098 Inter-disciplinary programmes & qualifications'
	. ' involving health & welfare','',''),
	array('','0988 Inter-disciplinary programmes & qualifications'
	. ' involving health & welfare','',''),
	array('','099 Health & welfare not elsewhere classified','',''),
	array('','0999 Health & welfare not elsewhere classified','',''),
	array('','10 Services','',''),
	array('','100 Services not further defined','',''),
	array('','1000 Services not further defined','',''),
	array('','101 Personal services','',''),
	array('','1010 Personal services not further defined','',''),
	array('','1011 Domestic services','',''),
	array('','1012 Hair & beauty services','',''),
	array('','1013 Hotel, restaurants & catering','',''),
	array('','1014 Sports','',''),
	array('','1015 Travel, tourism & leisure','',''),
	array('','1019 Personal services not elsewhere classified','',''),
	array('','102 Hygiene & occupational health services','',''),
	array('','1020 Hygiene & occupational health services not further defined','',''),
	array('','1021 Community sanitation','',''),
	array('','1022 Occupational health & safety','',''),
	array('','1029 Hygiene & occupational health services not elsewhere classified','',''),
	array('','103 Security services','',''),
	array('','1030 Security services not further defined','',''),
	array('','1031 Military & defence','',''),
	array('','1032 Protection of persons & property','',''),
	array('','1039 Security services not elsewhere classified','',''),
	array('','104 Transport services','1041 Transport services',''),
	array('','108 Inter-disciplinary programmes & qualifications involving services','',''),
	array('','1088 Inter-disciplinary programmes & qualifications involving services','',''),
	array('','109 Services not elsewhere classified','',''),
	array('','1099 Services not elsewhere classified','',''),
	array('','99 Field unknown','',''),
	array('','999 Field unknown','',''),
	array('','9999 Field unknown','',''),
);
#--------------------------------------------------------------------------------------------------
//
$tajuk['test123'] = '#,program luas,program sempit,program terperinci';
$data['test123'] = array(
	array('','00-program & kelayakan generik','',''),
	array('','000-program & kelayakan generik tidak ditakrifkan lagi',
	'0000 program & kelayakan generik tidak ditakrifkan lagi',''),
	array('','001-Program & kelayakan asas',
	'0011 Program & kelayakan asas',''),
	array('','002-Literasi & numerasi','0021 Literasi & numerasi',''),
	array('','003-Kemahiran & pembangunan peribadi ','0031 Kemahiran & pembangunan peribadi',''),
	array('','009 Program & kelayakan generik yg tidak dikelaskan di tempat lain',
	'0099 Program & kelayakan generik yg tidak dikelaskan di tempat lain',''),
	array('','01-Pendidikan','',''),
	array('','0110 Pendidikan tidak ditakrifkan lagi','',''),
	array('','0111 Sains pendidikan','',''),
	array('','0112 Latihan untuk guru prasekolah','',''),
	array('','0113 Latihan guru tanpa pengkhususan mata pelajaran','',''),
	array('','0114 Latihan guru dengan pengkhususan mata pelajaran','',''),
	array('','0119 Pendidikan tidak dikelaskan di tempat lain','',''),
	array('','018 Program & kelayakan antara disiplin yg melibatkan pendidikan','',''),
	array('','0188 Program & kelayakan antara disiplin yg melibatkan pendidikan','',''),
	array('','02 Seni & kemanusiaan','',''),
	array('','021 Seni & kemanusiaan tidak ditakrifkan lagi','',''),
	array('','0200 Seni & kemanusiaan tidak ditakrifkan lagi','',''),
	array('','021 Seni','',''),
	array('','0210 Seni tidak ditakrifkan lagi','',''),
	array('','0211 Teknik audio-visual & penghasilan media','',''),
	array('','0212 Fesyen, reka bentuk dalaman & perindustrian','',''),
	array('','0213 Seni halus','',''),
	array('','0214 Kraftangan','',''),
	array('','0215 Muzik & seni persembahan ','',''),
	array('','0219 Seni tidak dikelaskan di tempat lain ','',''),
	array('','022 Kemanusiaan (kecuali bahasa)','',''),
	array('','0220 Kemanusiaan (kecuali bahasa) tidak ditakrifkan lagi','',''),
	array('','0221 Agama & teologi','',''),
	array('','0222 Sejarah & arkeologi','',''),
	array('','0223 Falsafah & etika','',''),
	array('','0229 Kemanusiaan (kecuali bahasa) tidak dikelaskan di tempat lain','',''),
	array('','023 Bahasa','',''),
	array('','0230 Bahasa tidak ditakrifkan lagi','',''),
	array('','0231 Pemerolehan bahasa','',''),
	array('','0232 Kesusasteraan & linguistik','',''),
	array('','0239 Bahasa tidak dikelaskan di tempat lain','',''),
	array('','028 Program & kelayakan antara disiplin yg melibatkan'
	. 'seni & kemanusiaan','',''),
	array('','0288 Program & kelayakan antara disiplin yg melibatkan'
	. 'seni & kemanusiaan','',''),
	array('','029 Seni & kemanusiaan tidak dikelaskan di tempat lain','',''),
	array('','0299 Seni & kemanusiaan tidak dikelaskan di tempat lain','',''),
	array('','03 Sains sosial, kewartawanan & maklumat','',''),
	array('','030 Sains sosial, kewartawanan & maklumat tidak ditakrifkan lagi','',''),
	array('','0300 Sains sosial, kewartawanan & maklumat tidak ditakrifkan lagi','',''),
	array('','031 Sains sosial & tingkah laku','',''),
	array('','0310 Sains sosial & tingkah laku tidak ditakrifkan lagi','',''),
	array('','0311 Ekonomi','',''),
	array('','0312 Sains politik & sivik','',''),
	array('','0313 Psikologi','',''),
	array('','0314 Sosiologi & kajian budaya','',''),
	array('','0319 Sains sosial & tingkah laku tidak dikelaskan di tempat lain','',''),
	array('','032 Kewartawanan & maklumat','',''),
	array('','0320 Kewartawanan & maklumat tidak ditakrifkan lagi','',''),
	array('','0321 Kewartawanan & pelaporan','',''),
	array('','0322 Perpustakaan, maklumat & kajian arkib','',''),
	array('','0329 Kewartawanan & maklumat tidak diklasifikasikan di tempat lain','',''),
	array('','038 Program & kelayakan antara disiplin yg melibatkan'
	. ' sains sosial, kewartawanan & maklumat','',''),
	array('','0388 Program & kelayakan antara disiplin yg melibatkan'
	. ' sains sosial, kewartawanan & maklumat','',''),
	array('','039 Sains sosial, kewartawanan & maklumat tidak dikelaskan di tempat lain','',''),
	array('','0399 Sains sosial, kewartawanan & maklumat tidak dikelaskan di tempat lain ','',''),
	array('','04 Perniagaan, pentadbiran & undang-undang','',''),
	array('','040 Perniagaan, pentadbiran & undang-undang tidak ditakrifkan lagi','',''),
	array('','0400 Perniagaan, pentadbiran & undang-undang tidak ditakrifkan lagi','',''),
	array('','041 Perniagaan & pentadbiran','',''),
	array('','0410 Perniagaan & pentadbiran tidak ditakrifkan lagi','',''),
	array('','0411 Perakaunan & percukaian','',''),
	array('','0412 Kewangan, perbankan & insurans','',''),
	array('','0413 Pengurusan & pentadbiran','',''),
	array('','0414 Pemasaran & pengiklanan','',''),
	array('','0415 Kesetiausahaan & kerja pejabat','',''),
	array('','0416 Jualan borong & runcit','',''),
	array('','0417 Kemahiran kerja','',''),
	array('','0419 Perniagaan & pentadbiran tidak dikelaskan di tempat lain','',''),
	array('','042 Undang-undang [Law]','',''),
	array('','0421 Undang-undang [Law]','',''),
	array('','048 Program & kelayakan antara disiplin yg melibatkan perniagaan,'
	. ' pentadbiran & undang-undang','',''),
	array('','0488 Program & kelayakan antara disiplin yg melibatkan perniagaan,'
	. ' pentadbiran & undang-undang','',''),
	array('','049 Perniagaan, pentadbiran & undang-undang tidak dikelaskan di tempat lain','',''),
	array('','0499 Perniagaan, pentadbiran & undang-undang tidak dikelaskan di tempat lain','',''),
	array('','05 Sains semula jadi, matematik & statistik','',''),
	array('','050 Sains semula jadi, matematik & statistik tidak ditakrifkan lagi','',''),
	array('','0500 Sains semula jadi, matematik & statistik tidak ditakrifkan lagi','',''),
	array('','051 Biologi & sains berkaitan','',''),
	array('','0510 Sains biologi & berkaitan tidak ditakrifkan lagi','',''),
	array('','0511 Biologi','',''),
	array('','0512 Biokimia','',''),
	array('','0519 Sains biologi & berkaitan tidak dikelaskan di tempat lain','',''),
	array('','052 Persekitaran','',''),
	array('','0520 Persekitaran tidak ditakrifkan lagi','',''),
	array('','0521 Sains alam sekitar','',''),
	array('','0522 Persekitaran semula jadi & hidupan liar','',''),
	array('','0529 Persekitaran tidak dikelaskan di tempat lain','',''),
	array('','053 Sains fizik','',''),
	array('','0530 Sains fizikal tidak ditakrifkan lagi','',''),
	array('','0531 Kimia','',''),
	array('','0532 Sains bumi','',''),
	array('','0533 Fizik','',''),
	array('','0539 Sains fizikal tidak dikelaskan di tempat lain','',''),
	array('','054 Matematik & statistik','',''),
	array('','0540 Matematik & statistik tidak ditakrifkan lagi','',''),
	array('','0541 Matematik','',''),
	array('','0542 Statistik','',''),
	array('','058 Program & kelayakan antara disiplin yg melibatkan semula jadi'
	. ' sains, matematik & statistik','',''),
	array('','0588 Program & kelayakan antara disiplin yg melibatkan semula jadi'
	. ' sains, matematik & statistik','',''),
	array('','059 Sains semula jadi, matematik & statistik tidak dikelaskan di tempat lain','',''),
	array('','0599 Sains semula jadi, matematik & statistik tidak dikelaskan di tempat lain','',''),

	array('','06 Teknologi Maklumat & Komunikasi (ICT)','',''),
	array('','061 Teknologi Maklumat & Komunikasi (ICT)','',''),
	array('','0610 Teknologi Maklumat & Komunikasi (ICT) tidak ditakrifkan lagi','',''),
	array('','0611 Penggunaan komputer','',''),
	array('','0612 Reka bentuk & pentadbiran pangkalan data & rangkaian','',''),
	array('','0613 Pembangunan & analisis perisian & aplikasi','',''),
	array('','0619 Teknologi Maklumat & Komunikasi (ICT)'
	. ' tidak dikelaskan di tempat lain','',''),
	array('','068 Program & kelayakan antara disiplin yg melibatkan'
	. ' Teknologi Maklumat & Komunikasi (ICT)','',''),
	array('','0688 Program & kelayakan antara disiplin yg melibatkan'
	. ' Teknologi Maklumat & Komunikasi (ICT)','',''),
	array('','07 Kejuruteraan, pembuatan & pembinaan','',''),
	array('','070 Kejuruteraan, pembuatan & pembinaan tidak ditakrifkan lagi','',''),
	array('','0700 Kejuruteraan, pembuatan & pembinaan tidak ditakrifkan lagi','',''),
	array('','071 Kejuruteraan & perdagangan kejuruteraan','',''),
	array('','0710 Perdagangan kejuruteraan & kejuruteraan tidak ditakrifkan lagi','',''),
	array('','0711 Kejuruteraan kimia & proses','',''),
	array('','0712 Teknologi perlindungan alam sekitar','',''),
	array('','0713 Elektrik & tenaga','',''),
	array('','0714 Elektronik & automasi','',''),
	array('','0715 Mekanik & perdagangan logam','',''),
	array('','0716 Kenderaan bermotor, kapal & pesawat','',''),
	array('','0719 Perdagangan kejuruteraan & kejuruteraan tidak dikelaskan di tempat lain','',''),
	array('','072 Pembuatan & pemprosesan','',''),
	array('','0720 Pembuatan & pemprosesan tidak ditakrifkan lagi','',''),
	array('','0721 Pemprosesan makanan','',''),
	array('','0722 Bahan (kaca, kertas, plastik & kayu)','',''),
	array('','0723 Tekstil (pakaian, kasut & kulit)','',''),
	array('','0724 Perlombongan & pengekstrakan','',''),
	array('','0729 Pembuatan & pemprosesan tidak dikelaskan di tempat lain','',''),
	array('','073 Seni bina & pembinaan','',''),
	array('','0730 Seni bina & pembinaan tidak ditakrifkan lagi','',''),
	array('','0731 Seni bina & perancangan bandar','',''),
	array('','0732 Bangunan & kejuruteraan awam','',''),
	array('','078 Program & kelayakan antara disiplin yg melibatkan'
	. ' kejuruteraan, pembuatan & pembinaan',
	'0788 Program & kelayakan antara disiplin yg melibatkan'
	. ' kejuruteraan, pembuatan & pembinaan',''),
	array('','079 Kejuruteraan, pembuatan & pembinaan tidak dikelaskan di tempat lain ','',''),
	array('','0799 Kejuruteraan, pembuatan & pembinaan tidak dikelaskan di tempat lain','',''),
	array('','08 Pertanian, perhutanan, perikanan & veterinar','',''),
	array('','080 Pertanian, perhutanan, perikanan & veterinar tidak ditakrifkan lagi','',''),
	array('','0800 Pertanian, perhutanan, perikanan & veterinar tidak ditakrifkan lagi','',''),
	array('','081 Pertanian','',''),
	array('','0810 Pertanian tidak ditakrifkan lagi','',''),
	array('','0811 Pengeluaran tanaman & ternakan','',''),
	array('','0812 Hortikultur','',''),
	array('','0819 Pertanian tidak dikelaskan di tempat lain','',''),
	array('','082 Perhutanan','0821 Perhutanan',''),
	array('','083 Perikanan','0831 Perikanan',''),
	array('','084 Veterinar','0841 Veterinar',''),
	array('','088 Program & kelayakan antara disiplin yg melibatkan'
	. ' pertanian, perhutanan, perikanan & veterinar',
	'0888 Program & kelayakan antara disiplin yg melibatkan'
	. 'pertanian, perhutanan, perikanan & veterinar','',''),
	array('','089 Pertanian, perhutanan, perikanan & veterinar tidak dikelaskan di tempat lain',
	'0899 Pertanian, perhutanan, perikanan & veterinar tidak dikelaskan di tempat lain',''),
	array('','09 Kesihatan & kebajikan','',''),
	array('','090 Kesihatan & kebajikan tidak ditakrifkan lagi',
	'0900 Kesihatan & kebajikan tidak ditakrifkan lagi',''),
	array('','091 Kesihatan','',''),
	array('','0910 Kesihatan tidak ditakrifkan lagi','',''),
	array('','0911 Kajian pergigian','',''),
	array('','0912 Ubat','',''),
	array('','0913 Kejururawatan & perbidanan','',''),
	array('','0914 Teknologi diagnostik & rawatan perubatan','',''),
	array('','0915 Terapi & pemulihan','',''),
	array('','0916 Farmasi','',''),
	array('','0917 Perubatan & terapi tradisional & pelengkap','',''),
	array('','0919 Kesihatan tidak dikelaskan di tempat lain','',''),
	array('','092 Kebajikan','',''),
	array('','0920 Kebajikan tidak ditakrifkan lagi','',''),
	array('','0921 Penjagaan warga emas & OKU dewasa','',''),
	array('','0922 Perkhidmatan penjagaan kanak-kanak & belia','',''),
	array('','0923 Kerja sosial & kaunseling','',''),
	array('','0929 Kebajikan tidak dikelaskan di tempat lain','',''),
	array('','098 Program & kelayakan antara disiplin'
	. ' melibatkan kesihatan & kebajikan','',''),
	array('','0988 Program & kelayakan antara disiplin'
	. ' melibatkan kesihatan & kebajikan','',''),
	array('','099 Kesihatan & kebajikan tidak dikelaskan di tempat lain','',''),
	array('','0999 Kesihatan & kebajikan tidak dikelaskan di tempat lain','',''),
	array('','10 Perkhidmatan','',''),
	array('','100 Perkhidmatan tidak ditakrifkan lagi','',''),
	array('','1000 Perkhidmatan tidak ditakrifkan lagi','',''),
	array('','101 Perkhidmatan peribadi','',''),
	array('','1010 Perkhidmatan peribadi tidak ditakrifkan lagi','',''),
	array('','1011 Perkhidmatan domestik','',''),
	array('','1012 Rambut & perkhidmatan kecantikan','',''),
	array('','1013 Hotel, restoran & katering','',''),
	array('','1014 Sukan','',''),
	array('','1015 Perjalanan, pelancongan & riadah','',''),
	array('','1019 Perkhidmatan peribadi tidak dikelaskan di tempat lain','',''),
	array('','102 Perkhidmatan kebersihan & kesihatan pekerjaan','',''),
	array('','1020 Perkhidmatan kebersihan & kesihatan pekerjaan tidak ditakrifkan lagi','',''),
	array('','1021 Kebersihan komuniti','',''),
	array('','1022 Kesihatan & keselamatan pekerjaan','',''),
	array('','1029 Perkhidmatan kebersihan & kesihatan pekerjaan tidak dikelaskan'
	. 'di tempat lain','',''),
	array('','103 Perkhidmatan keselamatan','',''),
	array('','1030 Perkhidmatan keselamatan tidak ditakrifkan lagi','',''),
	array('','1031 Tentera & pertahanan','',''),
	array('','1032 Perlindungan orang & harta benda','',''),
	array('','1039 Perkhidmatan keselamatan tidak dikelaskan di tempat lain','',''),
	array('','104 Perkhidmatan pengangkutan','1041 Perkhidmatan pengangkutan','',''),
	array('','108 Program & kelayakan antara disiplin yg melibatkan perkhidmatan',
	'1088 Program & kelayakan antara disiplin yg melibatkan perkhidmatan',''),
	array('','109 Perkhidmatan tidak dikelaskan di tempat lain','',''),
	array('','1099 Perkhidmatan tidak dikelaskan di tempat lain','',''),
	array('','99 Bidang pengajian tidak diketahui','',''),
	array('','999 Bidang pengajian tidak diketahui','',''),
	array('','9999 Bidang pengajian tidak diketahui','',''),
);//*/
#--------------------------------------------------------------------------------------------------
#3.18 Ruangan 16 - Taraf Pendidikan Rasmi Tertinggi (PT)
$tajuk['Pendidikan 2022'] = '#,Kod,Keterangan,Nota';
$data['Pendidikan 2022'] = array(
	array('','001','001 - Pendidikan awal kanak-kanak(kurang dari 3 tahun)',''),
	array('','002','002 - Pendidikan pra-sekolah',
	'- Merupakan program pendidikan awal terancang yg direka untuk memperkenalkan kanak-kanak'
	. ' kepada persekitaran sekolah.<br>'
	. '- Mesti dijalankan di premis sekolah atau pusat untuk memenuhi keperluan perkembangan'
	. ' kanak-kanak yg berumur kurang dari 6 tahun dan staf yg mempunyai kelayakan untuk'
	. ' mengajar kanak-kanak peringkat umur muda.<br>'
	. '- Tiada kelayakan masuk.<br>'
	. '- Setelah tamat program ini, murid-murid akan menyambung pendidikan di peringkat rendah.<br>'
	. '- Pendidikan pra-sekolah TERMASUK di bawah takrif pendidikan rasmi/formal. Ianya dikodkan'
	. ' bertujuan untuk mendapatkan maklumat penduduk yg telah/sedang mengikuti pendidikan'
	. ' pra-sekolah. Ini kerana mereka yg menduduki pra-sekolah telah mendapat pendedahan'
	. ' kepada persekitaran sekolah dan pengetahuan asas berbanding mereka yg tidak pernah'
	. ' bersekolah. Oleh itu, Ruangan 13 (Persekolahan) dikodkan sebagai ‛2’ manakala'
	. ' Ruangan 15 (Sijil Tertinggi Diperoleh) dikodkan ‛020’.'
	. ''),
	array('','003','003 - Pendidikan tidak formal',
	'Merujuk kepada seseorang yg mendapat pendidikan selain daripada pendidikan rasmi atau formal'
	. ' seperti yg didefinisikan pada muka surat 27. Contohnya, seseorang yg bersekolah di'
	. ' sekolah pondok dan mendapat pendidikan agama sahaja akan dikategorikan sebagai'
	. ' ‛Pendidikan tidak formal’.'),
	array('','004','004 - Tiada pendidikan',
	'Merujuk kepada seseorang yg berumur sembilan tahun dan lebih dan masih belum bersekolah.'),
	array('','005','005 - Masih belum bersekolah',
	'Merujuk kepada kanak-kanak yg berumur kurang daripada sembilan tahun dan masih belum bersekolah.'),
	array('','006','006 - Pendidikan bukan formal',
	'Merujuk kepada pendidikan yg disusun dan dilaksanakan di luar daripada sistem pendidikan formal'
	. ' yg bertujuan memberi pembelajaran yg terpilih untuk sesuatu kumpulan di dalam masyarakat.'
	. ' Pendidikan ini boleh diperoleh melalui program seperti latihan, kursus dalam perkhidmatan,'
	. ' seminar, bengkel, forum dan persidangan.'),
	/*
	(umur pelajar: 6-12 tahun); (pengajian terkumpul: 1-6 tahun)
	- Direkabentuk untuk menyediakan pendidikan umum bertujuan melengkapkan murid-murid dengan kemahiran
	asas membaca, menulis dan mengira (3M) serta mewujudkan individu yg seimbang.
	- Murid-murid akan mengambil ujian penilaian di peringkat akhir pendidikan rendah, sebelum menyambung
	pelajaran ke peringkat menengah rendah.
	- Tempoh pengajian enam tahun tetapi boleh tamat diikuti dalam tempoh lima hingga tujuh tahun.
	- Kelayakan masuk mengikut peraturan yg ditetapkan oleh kerajaan atau sekolah rendah berkenaan.
	- Permulaan aktiviti pembacaan sahaja bukan kriteria untuk klasifikasi program pendidikan ini.
	*/
	array('','101','101 - Darjah / Tahun 1','Pendidikan rendah. Jika Luar Negara = Thn 1'),
	array('','102','102 - Darjah / Tahun 2','Pendidikan rendah. Jika Luar Negara = Thn 2'),
	array('','103','103 - Darjah / Tahun 3','Pendidikan rendah. Jika Luar Negara = Thn 3'),
	array('','104','104 - Darjah / Tahun 4','Pendidikan rendah. Jika Luar Negara = Thn 4'),
	array('','105','105 - Darjah / Tahun 5','Pendidikan rendah. Jika Luar Negara = Thn 5'),
	array('','106','106 - Darjah / Tahun 6','Pendidikan rendah. Jika Luar Negara = Thn 6'),
	/*
	(umur pelajar: 12-15 tahun); (pengajian terkumpul: 7-10 tahun)
	- Meneruskan program pendidikan asas yg dijalankan di peringkat rendah.
	- Disediakan dengan memberi lebih masa kepada murid-murid untuk menguasai dan melengkapkan
	diri dengan	pendidikan umum yg bersepadu.
	- Mesti mengikut masa di mana ianya dirancang berorientasikan subjek menggunakan guru yg
	berkelayakan khusus untuk bidang/subjek yg diajar.
	- Tempoh pengajian selama 3/4 tahun.
	- Turut menyediakan program peralihan bagi pelajar aliran bahasa Cina dan Tamil untuk menguasai
	Bahasa Malaysia sebelum meneruskan pengajian ke Tingkatan 1 iaitu `Kelas Peralihan`.
	- Pelajar akan menduduki peperiksaan penilaian di peringkat akhir pendidikan menengah rendah,
	sebelum menyambung pelajaran ke peringkat menengah atas.
	*/
	array('','201','201 - Kelas Peralihan','Pendidikan menengah rendah. Jika Luar Negara = Thn 7'),
	array('','202','202 - Tingkatan 1','Pendidikan menengah rendah. Jika Luar Negara = Thn 8'),
	array('','203','203 - Tingkatan 2','Pendidikan menengah rendah. Jika Luar Negara = Thn 9'),
	array('','204','204 - Tingkatan 3','Pendidikan menengah rendah. Jika Luar Negara = Thn 10'),
	/*
	(umur pelajar: 15-17 tahun); (pengajian terkumpul: 10-12 tahun)
	- Merupakan kesinambungan program menengah rendah.
	- Tempoh pengajian selama 2 tahun.
	- Selain menerima pendidikan umum, pelajar juga diberi pilihan untuk menjurus dalam aliran
	sastera, sains,	vokasional, teknikal atau agama.
	- Pendidikan vokasional adalah seperti dalam bidang pertukangan, pertanian, sains rumah tangga
	dan	perdagangan. Kursus vokasional yg diberi adalah mengikut peluang-peluang pekerjaan
	di Malaysia. Bermula tahun 1997, sekolah vokasional telah dinaik taraf sebagai sekolah teknik.
	- Pelajar akan menduduki peperiksaan penilaian (SPM/ SPMV/ SMA/ SMU/ GCE `O` Level atau
	yg setaraf) di peringkat akhir pendidikan menengah atas sebelum menyambung pengajian
	peringkat tertiari atau	memilih memasuki pasaran buruh.
	- Terdapat juga pelajar sekolah vokasional/ teknik yg hanya menduduki peperiksaan
	Sijil Kemahiran Malaysia.
	*/
	array('','205','205 - Tingkatan 4','Pendidikan menengah atas. Jika Luar Negara = Thn 11'),
	array('','206','206 - Tingkatan 5','Pendidikan menengah atas. Jika Luar Negara = Thn 12'),
	array('','207','207 - Program kemahiran asas',
	'(umur pelajar antara 15-40 tahun)<br>'
	. '- Syarat minimum kemasukan ke program ini adalah boleh membaca, menulis dan mengira.<br>'
	. '- Merupakan program berbentuk modular, praktikal (hands-on) dan employable skills mengikut'
	. ' keperluan semasa.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 6 bulan.<br>'
	. '- Pelajar yg telah menamatkan program peringkat ini boleh memasuki pasaran buruh atau'
	. ' mengikuti latihan'
	. ' lanjutan pendidikan vokasional/ teknik.<br>'
	. '- Program yg dikelaskan di bawah kategori ini adalah seperti kursus GIAT MARA.<br>'
	. ''),
	/*
	Bidang vokasional memberikan peluang kepada pelajar yg berpencapaian baik atau sederhana
	dalam akademik dan berminat kepada pembelajaran bercorak vokasional (berkaitan pekerjaan).
	Isi kandungan bidang vokasional mempunyai komponen teori dan praktikal yg seimbang.
	Objektif aliran ini adalah untuk membantu melahirkan separa profesional (juruteknik/
	pembantu teknik) dalam bidang kejuruteraan dan bukan kejuruteraan. Setelah tamat pengajian,
	pelajar berpeluang ke IPTA, IPTS, dan institut latihan kemahiran awam dan swasta, atau terus
	ke alam pekerjaan.
	- Program ini merangkumi 2 tahun pengajian di peringkat Sijil dan 2 tahun 6 bulan di peringkat
	Diploma (termasuk lima 5 bulan On The Job Training)
	- Pelajar yg berjaya di peringkat Sijil akan dianugerahkan Sijil Vokasional Malaysia (SVM)
	- Pelajar yg dianugerahkan SVM dan melepasi syarat kemasukan layak menyambung pengajian di
	peringkat Diploma di Kolej Vokasional yg sama
	- Pelajar yg tidak melepasi syarat kemasukan ke peringkat Diploma akan menyambung pengajian
	di Kolej Vokasional yg sama dalam bidang kemahiran dan dianugerahkan
	Sijil Kemahiran Malaysia (SKM) berdasarkan tahap kompetensi yg dicapai
	- Pelajar yg lulus pengajian di peringkat Diploma akan dianugerahkan Diploma oleh
	Senat Kolej Vokasional, Kementerian Pendidikan Malaysia
	- Matlamat Program Kolej Vokasional untuk melahirkan tenaga kerja yg mahir dan kompeten bagi
	memenuhi keperluan industri dan entrepreneur
	*/
	array('','208','208 - Kolej vokasional Tahun 1',''),
	array('','208','209 - Kolej vokasional Tahun 2',''),
	array('','301','301 - Tingkatan 6 rendah',
	'(umur pelajar: 17-19 tahun); (pengajian terkumpul: 12-14 tahun)<br>'
	. '- Pelajar telah tamat pendidikan menengah atas.<br>'
	. '- Tempoh pengajian selama 1-2 tahun.<br>'
	. '- Pelajar yg telah menamatkan pendidikan di peringkat ini boleh meneruskan pengajian'
	. 'di peringkat diploma/ijazah atau memasuki pasaran buruh.<br>'
	. 'Jika Pendidikan Luar Negara = Thn 12/13'),
	array('','302','302 - Tingkatan 6 atas','Jika Pendidikan Luar Negara = Thn 13/14'),
	array('','303','303 - Matrikulasi',''),
	array('','304','304 - Program persediaan',''),
	array('','305','305 - Pra universiti','(umur pelajar: 17-19 tahun);'
	. '(pengajian terkumpul: 12-14 tahun)<br>'
	. '- Pelajar telah tamat pendidikan menengah atas.<br>'
	. '- Pengajian peringkat matrikulasi merupakan persediaan untuk pengajian peringkat ijazah'
	. ' dalam negara dan termasuk program persediaan bagi melanjutkan pelajaran ke luar negara.<br>'
	. '- Tempoh pengajian selama 1–2 tahun.<br>'
	. '- Ini termasuk pengajian tahap alpha dan beta di Universiti Multimedia (MMU) yg merupakan'
	. ' pengajian tahun asas (foundation year) pertama dan kedua.<br>'
	. ''),
	array('','306','306 - Diploma Tahun 1','Untuk mereka di kolej vokasional/sek. teknik/'
	. 'kementerian pendidikan malaysia'),
	array('','307','307 - Diploma Tahun 2','Untuk mereka di kolej vokasional/sek. teknik/'
	. 'kementerian pendidikan malaysia'),
	array('','308','308 - Kolej vokasional Tahun 3',''),
	array('','309','309 - Kolej vokasional Tahun 4',''),
	array('','310','310 - Institusi latihan kemahiran Tahun 1',''),
	array('','311','311 - Institusi latihan kemahiran Tahun 2',''),
	array('','401','401 - Program sijil kemahiran khusus dan teknikal',
	'(umur pelajar: 18 tahun dan lebih)<br>'
	. '- Kemasukan ke program sijil kemahiran khusus dan teknikal kebiasaannya memerlukan kepada'
	. ' sekurang-kurangnya menamatkan pendidikan menengah atas seperti tamat Tingkatan 5 atau'
	. ' lulus peperiksaan SPM/ SPM(V). Terdapat juga kursus yg mana syarat kemasukannya hanya'
	. ' lulus PMR atau setaraf dengannya.<br>'
	. '- Merujuk kepada program sijil yg dijalankan oleh institusi latihan kemahiran khusus dan'
	. ' teknikal yg menggunakan pensijilan yg diiktiraf oleh badan-badan tertentu seperti'
	. ' Jabatan Perkhidmatan Awam (JPA), Majlis Latihan Vokasional Kebangsaan (MLVK)/ Jabatan'
	. ' Pembangunan Kemahiran (JPK) (Sijil Kemahiran Malaysia (SKM) Tahap 1 hingga 3),'
	. ' Majlis Latihan Pertanian Kebangsaan (NATC), Majlis Amanah Rakyat (MARA) dan London Chamber'
	. ' of Commerce and Industry International Qualifications (LCCI) (Tahap 1 dan 2).<br>'
	. '- Contoh institusi : Institut Kemahiran Mara (IKM), Institut Kemahiran Belia Negara (IKBN),'
	. ' Institut Latihan Perindustrian (ILP), Kolej Komuniti, State Skill Development Centre'
	. ' (TATI, PSDC, NSSDC, KISMEC, PUSPATRI dll), Institut Pertanian dan kolej swasta'
	. ' yg berkenaan.<br>'
	. '- Tempoh kursus sekurang-kurangnya 6 bulan.<br>'
	. '- Program ini menyediakan pelajar dengan kemahiran teknikal tertentu untuk memasuki'
	. ' pasaran buruh atau meneruskan pengajian di peringkat yg lebih tinggi.<br>'
	. '- Tidak termasuk dalam kategori ini adalah sijil yg diperoleh daripada politeknik,'
	. ' universiti atau badan-badan yg memberi pengiktirafan atau yg setaraf dengannya'
	. ' (kod 401–403).<br>'
	. ''),
	array('','402','402 - Program sijil oleh badan-badan yg memberi pengiktirafan',
	'- Kemasukan ke program sijil dari badan-badan yg memberi pengiktirafan atau yg setaraf'
	. ' dengannya memerlukan seseorang pelajar lulus peperiksaan SPM/ SPM(V) atau dengan'
	. ' kelayakan tambahan dari kod 51.<br>'
	. '- Lebih berorientasi amali dan spesifik kepada pekerjaan.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 6 bulan hingga 2 tahun.<br>'
	. '- Kategori ini juga merangkumi program pensijilan daripada badan-badan yg memberi'
	. ' pengiktirafan seperti program pensijilan daripada Telekom Malaysia, Suruhanjaya Tenaga,'
	. ' Jabatan Kesihatan dan Keselamatan Pekerja dan agensi-agensi lain.<br>'
	. ''),
	array('','403','403 - Program sijil dari kolej/ politeknik/ universiti atau setaraf dengannya',
	'- Kemasukan ke program sijil dari kolej/ politeknik/ universiti atau yg setaraf'
	. ' memerlukan seseorang pelajar lulus peperiksaan SPM/SPM(V) atau dengan kelayakan'
	. ' tambahan dari kod 51.<br>'
	. '- Lebih berorientasi amali dan spesifik kepada pekerjaan.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 6 bulan hingga 2 tahun.<br>'
	. '- Merujuk kepada program pensijilan yg ditawarkan oleh institusi pengajian tinggi'
	. ' awam(IPTA) dan swasta(IPTS) khususnya di peringkat universiti/kolej termasuk'
	. ' politeknik.<br>'
	. '- Contoh: Kursus pensijilan ekonomi, perniagaan dan pengurusan, sains komputer &'
	. ' teknologi maklumat, senibina dan perancangan bandar & ukur yg ditawarkan oleh'
	. ' kolej/politeknik/universiti.<br>'
	. ''),
	array('','404','404 - Program sijil perguruan/kejururawatan/ kesihatan bersekutu',
	'- Kemasukan ke program sijil perguruan/ kejururawatan/ kesihatan bersekutu memerlukan'
	. ' seseorang pelajar lulus peperiksaan SPM/ SPM(V).<br>'
	. '- Lebih berorientasi amali dan spesifik kepada pekerjaan.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 6 bulan hingga 2 tahun.<br>'
	. '- Merujuk kepada program pensijilan yg ditawarkan oleh institusi pengajian awam dan'
	. ' swasta termasuk institusi di bawah Kementerian Pelajaran dan Kementerian Kesihatan.<br>'
	. '- Contoh institusi: Institusi Perguruan Malaysia, Sekolah Kejururawatan, Institut Kesihatan'
	. ' Umum, MASTERSKILL College of Nursing and Health, Kolej MAHSA dll.<br>'
	. ''),
	array('','501','501 - Program diploma kemahiran khusus dan teknikal',
	'- Kemasukan ke program diploma kemahiran khusus dan teknikal kebiasaannya memerlukan'
	. ' sekurang-kurangnya menamatkan program sijil kemahiran khusus dan teknikal(kod 352).<br>'
	. '- Merujuk kepada program diploma yg dijalankan oleh institusi latihan kemahiran'
	. ' khusus dan teknikal yg menggunakan pensijilan yg diiktiraf oleh badan-badan'
	. ' tertentu seperti Majlis Latihan Vokasional Kebangsaan (MLVK)/ Jabatan Pembangunan'
	. ' Kemahiran (JPK) (Diploma Kemahiran Malaysia), Majlis Latihan Pertanian Kebangsaan'
	. ' (NATC), Majlis Amanah Rakyat (MARA) dan London Chamber of Commerce and Industry'
	. ' International Qualifications (LCCI) (Tahap 3 dan 4).<br>'
	. '- Contoh institusi: Institut Kemahiran Tinggi Belia Negara (IKTBN), Advanced Technology'
	. ' Training Centre (ADTEC), State Skill Development Centre (TATI, PSDC, NSSDC, KISMEC,'
	. ' PUSPATRI dll) dan kolej swasta yg berkenaan.<br>'
	. '- Program ini menyediakan pelajar dengan kemahiran teknikal tertentu.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 2 tahun.'
	. ''),
	array('','502','502 - Program diploma lanjutan/ Higher National Diploma kemahiran khusus'
	. ' dan teknikal',
	'- Kemasukan ke program diploma lanjutan/ Higher National Diploma kemahiran khusus dan'
	. ' teknikal kebiasaannya memerlukan sekurang-kurangnya tamat program diploma kemahiran'
	. ' khusus dan teknikal (kod 356).<br>'
	. '- Merujuk kepada program diploma yg dijalankan oleh institusi latihan kemahiran'
	. ' khusus dan teknikal yg menggunakan pensijilan yg diiktiraf oleh badan-badan tertentu'
	. ' seperti Majlis Latihan Vokasional Kebangsaan/ Jabatan Pembangunan Kemahiran (Diploma'
	. ' Lanjutan Kemahiran Malaysia) dan Majlis Amanah Rakyat (MARA).<br>'
	. '- Contoh institusi: Institusi Kemahiran Tinggi Belia Negara (IKTBN), Advanced Technology'
	. ' Training Centre (ADTEC) dan kolej swasta yg berkenaan.<br>'
	. '- Program ini menyediakan pelajar dengan kemahiran teknikal tertentu.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 3 tahun.<br>'
	. ''),
	array('','503','503 - Program diploma dari kolej/politeknik/universiti atau setaraf dengannya',
	'- Kemasukan ke program diploma dari kolej/ politeknik/ universiti atau yg setaraf dengannya'
	. ' memerlukan seseorang pelajar lulus peperiksaan SPM/SPM(V) atau tamat program sijil dari'
	. ' kolej/ politeknik/ universiti atau yg setaraf dengannya.<br>'
	. '- Merujuk kepada program diploma yg ditawarkan oleh institusi pengajian tinggi awam'
	. ' (IPTA) dan swasta (IPTS) khususnya di peringkat universiti/ kolej termasuk politeknik.<br>'
	. '- Lebih berorientasi amali dan spesifik kepada pekerjaan.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 2 tahun.'
	. ''),
	array('','504','504 - Program diploma perguruan/ kejururawatan/ kesihatan bersekutu',
	'- Kemasukan ke program diploma perguruan/ kejururawatan/ kesihatan bersekutu memerlukan'
	. ' seseorang pelajar lulus peperiksaan SPM/ SPM(V).<br>'
	. '- Lebih berorientasi amali dan spesifik kepada pekerjaan.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 2 tahun.<br>'
	. '- Merujuk kepada program diploma yg ditawarkan oleh institusi pengajian tinggi awam dan'
	. ' swasta termasuk institusi di bawah Kementerian Pelajaran dan Kementerian Kesihatan.<br>'
	. '- Contoh institusi: Institut Perguruan Malaysia (IPG), Kolej Kejururawatan/Sains Kesihatan'
	. ' Bersekutu dan lain-lain di bawah Kementerian Kesihatan Malaysia, Institut Kesihatan Umum,'
	. ' MASTERKILL College of Nursing and Health, Kolej MAHSA dll.<br>'
	. ''),
	array('','601','601 - Program ijazah sarjana muda/ diploma lanjutan',
	'- Kemasukan di peringkat ini memerlukan seseorang pelajar lulus Tingkatan 6 Atas, matrikulasi'
	. ' atau diploma.<br>'
	. '- Terdapat juga kemasukan terus ke program ijazah sarjana muda selepas lulus SPM/ SPM(V).'
	. ' Bagaimanapun, golongan ini akan melalui kursus asas (foundation course) pada tahun'
	. ' pertama pengajian. Contohnya, kursus peringkat ijazah sarjana muda di Universiti'
	. ' Teknologi Malaysia.<br>'
	. '- Merujuk kepada program ijazah sarjana muda/ diploma lanjutan yg ditawarkan oleh'
	. ' institusi pengajian tinggi awam (IPTA) dan swasta (IPTS) khususnya di peringkat'
	. ' universiti/ kolej dalam dan luar negara yg diiktiraf.<br>'
	. '- Program ini lebih bersifat teori dan adalah untuk menyediakan kelayakan yg mencukupi'
	. ' untuk memasuki program penyelidikan lanjutan dan profesion yg berkemahiran tinggi.<br>'
	. '- Program ini mempunyai jangka masa terkumpul untuk teori (di peringkat tertiari) selama'
	. ' tiga tahun sepenuh masa. Melibatkan penulisan tesis atau kertas projek di tahun akhir'
	. ' pengajian.<br>'
	. '- Terdapat pelbagai pendekatan laluan yg boleh diikuti oleh seseorang pelajar untuk'
	. ' mendapatkan ijazah pertama mereka. Selain daripada program pengajian biasa, terdapat'
	. ' juga program lain seperti program berkembar (3+0 atau 2+1) dan francais.<br>'
	. '- Kursus diploma lanjutan, diploma dalam bidang sebaran am dan diploma dalam bidang seni'
	. ' lukis dan seni reka dari UiTM adalah setaraf dengan ijazah.<br>'
	. ''),
	array('','701','701 - Program lepasan ijazah',
	'- Kemasukan di peringkat ini memerlukan seseorang pelajar lulus ijazah sarjana muda atau'
	. ' diploma lanjutan.<br>'
	. '- Merujuk kepada program lepasan ijazah yg ditawarkan oleh institusi pengajian tinggi awam'
	. ' (IPTA) dan badan-badan profesional dalam bidang-bidang tertentu.<br>'
	. '- Program ini lebih bersifat aplikasi untuk memasuki profesion tertentu seperti perguruan'
	. ' atau mendapat pengiktirafan bagi profesion yg berkenaan seperti kejuruteraan, perakaunan,'
	. ' perundangan, arkitek, perubatan dan lain-lain.<br>'
	. '- Pensijilan diperoleh melalui kursus/ peperiksaan/ latihan amali. Contohnya, latihan amali'
	. ' bagi bidang undang-undang ialah chambering.<br>'
	. '- Termasuk juga dalam kategori ini ialah kursus lepasan ijazah seperti Kursus Perguruan'
	. ' Lepasan Ijazah (KPLI), Association of Chartered Certified Accountants (ACCA) dan Bachelor'
	. ' of Laws (LLB).<br>'
	. ''),
	array('','702','702 - Program sarjana (Master)',
	'- Kemasukan di peringkat ini memerlukan seseorang pelajar tamat pengajian ijazah sarjana'
	. ' muda.<br>'
	. '- Program ini mempunyai jangka masa terkumpul untuk teori, penulisan tesis dan/atau'
	. ' kertas projek sekurang-kurangnya satu tahun sepenuh masa.<br>'
	. '- Merujuk kepada program ijazah sarjana yg ditawarkan oleh institusi pengajian tinggi'
	. ' awam (IPTA) dan swasta (IPTS) khususnya di peringkat universiti/kolej dalam dan'
	. ' luar negara yg diiktiraf.<br>'
	. ''),
	array('','801','801 - Program ijazah falsafah kedoktoran',
	'- Kemasukan di peringkat ini memerlukan seseorang pelajar tamat pengajian ijazah sarjana.<br>'
	. '- Merujuk kepada program ijazah falsafah kedoktoran yg ditawarkan di peringkat universiti'
	. ' dalam dan luar negara yg diiktiraf.<br>'
	. '- Peringkat ini dikhaskan untuk program pendidikan tertiari yg membawa kepada'
	. ' penganugerahan kelayakan penyelidikan lanjutan. Program ditumpukan kepada penyelidikan'
	. ' sendiri dan pengajian lanjutan.<br>'
	. '- Memerlukan penyerahan tesis atau disertasi yg bermutu yg boleh diterbitkan dan'
	. ' hasil penyelidikan sendiri yg merupakan sumbangan yg signifikan kepada ilmu'
	. ' pengetahuan. Tidak sepenuhnya berasaskan kepada kerja kursus.<br>'
	. ''),
	array('','802','802 - Skim pasca kedoktoran',
	'- Kemasukan peringkat ini memerlukan seseorang pelajar mempunyai ijazah falsafah kedoktoran'
	. ' (Ph.D), menjalankan penyelidikan dalam bidang berkaitan dan telah menghasilkan beberapa'
	. ' penerbitan di peringkat nasional dan antarabangsa.<br>'
	. '- Peringkat ini dikhaskan kepada program pendidikan/penyelidikan selepas seseorang itu'
	. ' telah memperolehi ijazah falsafah kedoktoran bertujuan untuk memperoleh kemahiran'
	. ' profesional yg diperlukan dalam kemajuan kerjaya.<br>'
	. '- Pelajar yg mengikuti program ini akan memegang jawatan postdoctoral fellow bagi tempoh'
	. ' 6 bulan hingga 5 tahun yg dikhususkan untuk menjalankan penyelidikan. Program ini juga'
	. ' telah ditawarkan kepada mereka yg memfokuskan kerjaya dalam bidang pendidikan yg'
	. ' dikenali sebagai "teaching post-docs".'
	. ''),
	array('','1xx','Pendidikan rendah:','(umur pelajar: 6-12 tahun);'
	. ' (pengajian terkumpul: 1-6 tahun)<br>'
	. '- Direkabentuk untuk menyediakan pendidikan umum bertujuan melengkapkan murid-murid dengan'
	. ' kemahiran asas membaca, menulis dan mengira (3M) serta mewujudkan individu yg'
	. ' seimbang.<br>'
	. '- Murid-murid akan mengambil ujian penilaian di peringkat akhir pendidikan rendah,'
	. ' sebelum menyambung pelajaran ke peringkat menengah rendah.<br>'
	. '- Tempoh pengajian enam tahun tetapi boleh tamat diikuti dalam tempoh 5 hingga 7 tahun.<br>'
	. '- Kelayakan masuk mengikut peraturan yg ditetapkan oleh kerajaan atau sekolah'
	. ' rendah berkenaan.<br>'
	. '- Permulaan aktiviti pembacaan sahaja bukan kriteria untuk klasifikasi program'
	. ' pendidikan ini.<br>'
	. ''),
	array('','2xx','Pendidikan Menengah Rendah','(umur pelajar: 12-15 tahun);'
	. ' (pengajian terkumpul: 7-10 tahun)<br>'
	. '- Meneruskan program pendidikan asas yg dijalankan di peringkat rendah.<br>'
	. '- Disediakan dengan memberi lebih masa kepada murid-murid untuk menguasai dan melengkapkan'
	. ' diri dengan pendidikan umum yg bersepadu.<br>'
	. '- Mesti mengikut masa di mana ianya dirancang berorientasikan subjek menggunakan guru yg'
	. ' berkelayakan khusus untuk bidang/subjek yg diajar.<br>'
	. '- Tempoh pengajian selama 3/4 tahun.<br>'
	. '- Turut menyediakan program peralihan bagi pelajar aliran bahasa Cina dan Tamil untuk'
	. ' menguasai Bahasa Malaysia sebelum meneruskan pengajian ke Tingkatan 1 iaitu'
	. ' `Kelas Peralihan`.<br>'
	. '- Pelajar akan menduduki peperiksaan penilaian di peringkat akhir pendidikan menengah'
	. ' rendah, sebelum menyambung pelajaran ke peringkat menengah atas.<br>'
	. ''),
	array('','2xx','Pendidikan Menengah Atas','(umur pelajar: 15-17 tahun);'
	. ' (pengajian terkumpul: 10-12 tahun)<br>'
	. '- Merupakan kesinambungan program menengah rendah.<br>'
	. '- Tempoh pengajian selama 2 tahun.<br>'
	. '- Selain menerima pendidikan umum, pelajar juga diberi pilihan untuk menjurus dalam aliran'
	. ' sastera, sains, vokasional, teknikal atau agama.<br>'
	. '- Pendidikan vokasional adalah seperti dalam bidang pertukangan, pertanian, sains rumah'
	. ' tangga dan perdagangan. Kursus vokasional yg diberi adalah mengikut peluang-peluang'
	. ' pekerjaan di Malaysia. Bermula tahun 1997, sekolah vokasional telah dinaik taraf sebagai'
	. ' sekolah teknik.<br>'
	. '- Pelajar akan menduduki peperiksaan penilaian (SPM/ SPMV/ SMA/ SMU/ GCE `O` Level atau'
	. ' yg setaraf) di peringkat akhir pendidikan menengah atas sebelum menyambung pengajian'
	. ' peringkat tertiari atau memilih memasuki pasaran buruh.<br>'
	. '- Terdapat juga pelajar sekolah vokasional/ teknik yg hanya menduduki peperiksaan'
	. ' Sijil Kemahiran Malaysia.<br>'
	. ''),
	array('','2xx','Bidang vokasional','-memberikan peluang kepada pelajar yg berpencapaian'
	. ' baik atau sederhana dalam akademik dan berminat kepada pembelajaran bercorak vokasional'
	. ' (berkaitan pekerjaan). Isi kandungan bidang vokasional mempunyai komponen teori dan'
	. ' praktikal yg seimbang. Objektif aliran ini adalah untuk membantu melahirkan separa'
	. ' profesional (juruteknik/pembantu teknik) dalam bidang kejuruteraan dan bukan'
	. ' kejuruteraan. Setelah tamat pengajian, pelajar berpeluang ke IPTA, IPTS, dan institut'
	. ' latihan kemahiran awam dan swasta, atau terus ke alam pekerjaan.<br>'
	. '- Program ini merangkumi 2 tahun pengajian di peringkat Sijil dan 2 tahun 6 bulan di'
	. ' peringkat Diploma (termasuk lima 5 bulan On The Job Training)<br>'
	. '- Pelajar yg berjaya di peringkat Sijil akan dianugerahkan'
	. ' Sijil Vokasional Malaysia (SVM)<br>'
	. '- Pelajar yg dianugerahkan SVM dan melepasi syarat kemasukan layak menyambung pengajian'
	. ' di peringkat Diploma di Kolej Vokasional yg sama<br>'
	. '- Pelajar yg tidak melepasi syarat kemasukan ke peringkat Diploma akan menyambung'
	. ' pengajian di Kolej Vokasional yg sama dalam bidang kemahiran dan dianugerahkan'
	. ' Sijil Kemahiran Malaysia (SKM) berdasarkan tahap kompetensi yg dicapai<br>'
	. '- Pelajar yg lulus pengajian di peringkat Diploma akan dianugerahkan Diploma oleh'
	. ' Senat Kolej Vokasional, Kementerian Pendidikan Malaysia<br>'
	. '- Matlamat Program Kolej Vokasional untuk melahirkan tenaga kerja yg mahir dan kompeten'
	. ' bagi memenuhi keperluan industri dan entrepreneur<br>'
	. ''),
	array('','Nota','kaki','Catatan : 1. Program lepasan ijazah termasuk `Kursus Perguruan Lepasan'
	. ' Ijazah (KPLI)` dan `Association of Chartered Certified Accountants (ACCA)` dikodkan'
	. ' sebagai `701`;<br>'
	. ' 2. Kursus pensijilan daripada GIAT MARA dikelaskan di bawah kategori Program'
	. ' kemahiran asas dan dikodkan sebagai `207`;<br>'
	. ' 3. Program sijil yang dijalankan oleh institusi kemahiran khusus dan teknikal dikodkan'
	. ' od `401`, seperti:<br>'
	. ' i. Institut Kemahiran MARA (IKM);<br>'
	. ' ii. Institut Kemahiran Belia Negara (IKBN);<br>'
	. ' iii. Institut Latihan Perindustrian (ILP);<br>'
	. ' iv. Kolej Komuniti;<br>'
	. ' v. Jabatan Pembangunan Kemahiran (Sijil Kemahiran Malaysia (SKM) Tahap 1 hingga 3);<br>'
	. ' vi. Majlis Latihan Vokasional Kebangsaan (MLVK);<br>'
	. ' vii. Majlis Latihan Pertanian Kebangsaan (NATC)/ Institut Pertanian/ Institut Perikanan/'
	. ' Akuakultur/ Institut Veterinar;<br>'
	. ' viii. `State Skill Development Centre` (Cth: PSDC, TATI, NSSDC); dan<br>'
	. ' ix. Yang setaraf.')
);
#--------------------------------------------------------------------------------------------------
//<td> Sijil Tertinggi Yang Diperolehi di sekolah,maktab / universiti</td>
$tajuk['sijil 2022'] = '#,Kod,Keterangan,Nota';
$data['sijil 2022'] = array(
	array('','101','101 - UPKK',''),
	array('','102','102 - UPSR/UPSRA',''),
	array('','241','241 - SRA',''),
	array('','242','242 - PT3/PMR/SRP/LCE',''),
	array('','341','341 - SMA/SMU',''),
	array('','342','342 - 4 Thanawi',''),
	array('','343','343 - SPM/MCE/SC/FMCE/CSC',''),
	array('','344','344 - SPVM/SPM(V)/MVC/MVE',''),
	array('','345','345 - GCE `O` Level',''),
	array('','351','351 - Sijil Kemahiran Asas/Giat Mara',''),
	array('','346','346 - STA/STAM/STU',''),
	array('','347','347 - STPM/STP/HSC',''),
	array('','348','348 - GCE `A` Level',''),
	array('','349','349 - Sijil Matrikulasi',''),
	array('','352','352 - Sijil kemahiran khusus dan teknikal',''),
	array('','353','353 - Sijil drpd badan2 yg memberi pengiktirafan @ yg setaraf',''),
	array('','354','354 - Sijil drpd kolej @ yg setaraf',''),
	array('','355','355 - Sijil drpd politeknik @ yg setaraf',''),
	array('','356','356 - Sijil drpd universiti @ yg setaraf',''),
	array('','357','357 - Sijil perguruan/kejururawatan/kesihatan bersekutu',''),
	array('','551','551 - Diploma dlm kemahiran khusus dan teknikal',''),
	array('','552','552 - Diploma Lanjutan/Higher National Diploma(HND) dlm kemahiran'
	. ' khusus & teknikal',''),
	array('','553','553 - Diploma drpd kolej @ yg setaraf(terutama kolej swasta)',''),
	array('','554','554 - Diploma drpd politeknik @ yg setaraf',''),
	array('','555','555 - Diploma drpd universiti @ yg setaraf',''),
	array('','556','556 - Diploma perguruan/kejururawatan/kesihatan bersekutu',''),

	array('','665','665 - Ijazah Sarjana Muda/Diploma lanjutan',''),
	array('','667','667 - Diploma/Sijil pasca ijazah @ drpd badan profesional/(ACCA/CA)',''),
	array('','767','767 - Ijazah Sarjana',''),
	array('','861','861 - Doktor Falsafah(PhD)',''),
	array('','862','862 - Diploma/Sijil pasca kedoktoran',''),
	array('','021','021 - Masih belum bersekolah','-'
	. ' Merujuk kepada responden yg dikategorikan sebagai `Masih belum bersekolah` (Kod 021)'
	. ' pada Ruangan 15 iaitu kanak-kanak yg berumur kurang daripada 9 tahun dan'
	. ' masih belum bersekolah'),
	array('','020','020 - Tiada Sijil','Merujuk kepada seseorang yg masih bersekolah atau telah'
	. ' tamat persekolahan tanpa memperoleh sebarang sijil.'),
	array('','022','022 - Tiada berkenaan','- Merujuk kepada responden yg dicatatkan sebagai'
	. '	`Tiada pendidikan` (Kod 004) atau `Pendidikan tidak formal` (Kod 003) pada Ruangan 15'
	. ' kecuali mereka yg memiliki sijil dari badan-badan yg memberi pengiktirafan tanpa'
	. ' melalui pendidikan rasmi.<br>'
	. '- Termasuk juga mereka yg memperoleh sijil agama sahaja.'),
	array('','023','023 - Sijil Pendidikan Bukan Formal','-'
	. ' Merujuk kepada mereka yg menerima sijil melalui program seperti latihan, kursus dalam'
	. '	perkhidmatan, seminar, bengkel, forum dan persidangan.<br>'
	. '- Tidak tertakluk kepada responden yg dicatatkan sebagai `Pendidikan Bukan Formal`'
	. '	(Kod 006) sahaja pada Ruangan 16.'),
	array('','Nota','kaki','Catatan:<br>'
	. ' 1. Semak jika Butiran 16 (PT) dikodkan `005` (Masih belum bersekolah), maka'
	. '	Butiran 17 (SJ) hendaklah dikodkan `020` (Tiada sijil).<br>'
	. ' 2. Mulai STB 2010, pendidikan pra-sekolah TERMASUK di bawah takrif pendidikan rasmi.'
	. '	Oleh itu, hendaklah dikodkan seperti berikut:<br>'
	. ' Butiran 15 (P) - Kod `2` (Bersekolah sepenuh masa)<br>'
	. ' Butiran 16 (PT) - Kod `001` (Pendidikan awal kanak-kanak)<br>'
	. ' Kod `002` (Pra-Sekolah)<br>'
	. ' Butiran 17 (SJ) - Kod `020` (Tiada sijil)<br>'
	. ' 3. Untuk ahli yang pernah bersekolah tetapi tidak mempunyai sijil dan ahli yang sedang'
	. ' bersekolah tetapi tidak mempunyai sebarang sijil lagi (contohnya, seseorang yang masih'
	. ' belajar dalam Tahun 5) hendaklah dikodkan `020` (Tiada sijil).<br>'
	. ' 4. Sijil GIAT MARA dikelaskan sebagai `Sijil Kemahiran Asas` dan dikodkan `351`.<br>'
	. ' 5. Sijil ikhtisas seperti `Association of Chartered Certified Accountants` (ACCA),'
	. ' `Chartered Accountancy` (CA) dll. hendaklah disamakan dengan kod `667`.<br>'
	. ' '),
);
#--------------------------------------------------------------------------------------------------
$tajuk['PendidikanSijil 2022'] = '#,Kod,Pendidikan,Sijil';
$data['PendidikanSijil 2022'] = array(
	array('','001','001 - Pendidikan awal kanak-kanak(kurang dari 3 tahun)','020 - Tiada Sijil'),
	array('','002','002 - Pendidikan pra-sekolah(4-6 tahun)','020 - Tiada Sijil'),
	array('','003','003 - Pendidikan tidak formal','022 - Tiada berkenaan<br>'
	. '- Merujuk kepada responden yg dicatatkan sebagai `Tiada pendidikan` (Kod 004) atau'
	. ' `Pendidikan tidak formal` (Kod 003) pada Ruangan 15 kecuali mereka yg memiliki sijil'
	. ' dari badan-badan yg memberi pengiktirafan tanpa melalui pendidikan rasmi.<br>'
	. '- Termasuk juga mereka yg memperoleh sijil agama sahaja.<br>'
	. '* Untuk OKU juga{Pendidikan tidak formal}.'),
	array('','004','004 - Tiada pendidikan','022 - Tiada berkenaan<br>'
	. '- Merujuk kepada responden yg dicatatkan sebagai `Tiada pendidikan` (Kod 004) atau'
	. ' `Pendidikan tidak formal` (Kod 003) pada Ruangan 15 kecuali mereka yg memiliki sijil'
	. ' dari badan-badan yg memberi pengiktirafan tanpa melalui pendidikan rasmi.<br>'
	. '- Termasuk juga mereka yg memperoleh sijil agama sahaja.'),
	array('','005','005 - Masih belum bersekolah','021 - Masih belum bersekolah<br>'
	. '- Merujuk kepada responden yg dikategorikan sebagai `Masih belum bersekolah` (Kod 021)'
	. ' pada Ruangan 15 iaitu kanak-kanak yg berumur kurang daripada 9 tahun dan'
	. ' masih belum bersekolah'),
	array('','006','006 - Pendidikan bukan formal','023 - Sijil Pendidikan Bukan Formal<br>'
	. '- Merujuk kepada mereka yg menerima sijil melalui program seperti latihan, kursus dalam'
	. ' perkhidmatan, seminar, bengkel, forum dan persidangan.<br>'
	. '- Tidak tertakluk kepada responden yg dicatatkan sebagai `Pendidikan Bukan Formal`'
	. ' (Kod 006) sahaja pada Ruangan 16.<br>'
	. '* Sila nyatakan institusi[SJ] dan bidang pengajian[IP]'),
	array('','101','101 - Darjah/Tahun 1','020 - Tiada Sijil'),
	array('','102','102 - Darjah/Tahun 2','020 - Tiada Sijil'),
	array('','103','103 - Darjah/Tahun 3','020 - Tiada Sijil'),
	array('','104','104 - Darjah/Tahun 4','020 - Tiada Sijil'),
	array('','105','105 - Darjah/Tahun 5','101 - UPKK'),
	array('','106','106 - Darjah/Tahun 6','102 - UPSR/UPSRA'),
	array('','201','201 - Kelas Peralihan','Luar Negara = 7'),
	array('','202','202 - Tingkatan 1','Luar Negara = 8'),
	array('','203','203 - Tingkatan 2','Luar Negara = 9'),
	array('','204','204 - Tingkatan 3','242 - PT3/PMR/SRP/LCE | Luar Negara = 10'),
	array('','205','205 - Tingkatan 4','Luar Negara = 11'),
	array('','206','206 - Tingkatan 5','343 - SPM/MCE/SC/FMCE/CSC | Luar Negara = 12'),
	array('','207','207 - Program kemahiran asas','351 - Sijil Kemahiran Asas/Giat Mara'),
	array('','208','208 - Kolej vokasional Tahun 1','344 - SPVM/SPM(V)/MVC/MVE'),
	array('','208','209 - Kolej vokasional Tahun 2','344 - SPVM/SPM(V)/MVC/MVE'),
	array('','301','301 - Tingkatan 6 rendah','Luar Negara = 13'),
	array('','302','302 - Tingkatan 6 atas','347 - STPM/STP/HSC '
	. '/ Setaraf 348 - GCE `A` Level, A Level | Luar Negara = 14'),
	array('','303','303 - Matrikulasi','349 - Sijil Matrikulasi'),
	array('','304','304 - Program persediaan','Setaraf Ke Jepun/Austaria/Jerman/Rusia/Taiwan'),
	array('','305','305 - Pra universiti',''),
	array('','306','306 - Diploma Tahun 1',
	'<=Untuk mereka di kolej vokasional/sek. teknik/kementerian pendidikan malaysia'),
	array('','307','307 - Diploma Tahun 2',
	'<=Untuk mereka di kolej vokasional/sek. teknik/kementerian pendidikan malaysia'),
	array('','308','308 - Kolej vokasional Tahun 3','344 - SPVM/SPM(V)/MVC/MVE'),
	array('','309','309 - Kolej vokasional Tahun 4','344 - SPVM/SPM(V)/MVC/MVE'),
	array('','310','310 - Institusi latihan kemahiran Tahun 1',''),
	array('','311','311 - Institusi latihan kemahiran Tahun 2',''),
	array('','401','401 - Program sijil kemahiran khusus dan teknikal',
	'352 - Sijil kemahiran khusus dan teknikal'),
	array('','402','402 - Program sijil oleh badan-badan yg memberi pengiktirafan',
	'353 - Sijil drpd badan2 yg memberi pengiktirafan @ yg setaraf'),
	array('','403','403 - Program sijil dari kolej/politeknik/universiti @ setaraf dengannya',
	'354 - Sijil drpd kolej @ yg setaraf<br>'
	. '355 - Sijil drpd politeknik(IP=154) @ yg setaraf<br>'
	. '356 - Sijil drpd universiti @ yg setaraf<br>'),
	array('','404','404 - Program sijil perguruan/kejururawatan/ kesihatan bersekutu',
	'357 - Sijil perguruan(IP=144)(FS=0114)/kejururawatan(IP=135)(IP SWASTA=268)(FS=0913)'
	. '/kesihatan bersekutu'),
	array('','501','501 - Program diploma kemahiran khusus & teknikal',
	'551 - Diploma dlm kemahiran khusus & teknikal'),
	array('','502','502 - Program diploma lanjutan/ Higher National Diploma'
	. ' kemahiran khusus & teknikal',
	'552 - Diploma Lanjutan/Higher National Diploma(HND) dlm kemahiran khusus & teknikal'),
	array('','503','503 - Program diploma dari kolej/politeknik/universiti @ setaraf dengannya',
	'553 - Diploma drpd kolej @ yg setaraf(terutama kolej swasta)<br>'
	. '554 - Diploma drpd politeknik(IP=154) @ yg setaraf<br>'
	. '555 - Diploma drpd universiti @ yg setaraf'),
	array('','504','504 - Program diploma perguruan/ kejururawatan/ kesihatan bersekutu',
	'556 - Diploma perguruan(IP=144)(FS=0114)/kejururawatan(IP=135)(IP SWASTA=268)(FS=0913)'
	. '/kesihatan bersekutu'),
	array('','601','601 - Program ijazah sarjana muda/ diploma lanjutan',
	'665 - Ijazah Sarjana Muda/Diploma lanjutan'),
	array('','701','701 - Program lepasan ijazah',
	'667 - Diploma/Sijil pasca ijazah @ drpd badan profesional/(ACCA/CA)'),
	array('','702','702 - Program sarjana (Master)','767 - Ijazah Sarjana'),
	array('','801','801 - Program ijazah falsafah kedoktoran','861 - Doktor Falsafah(PhD)'),
	array('','802','802 - Skim pasca kedoktoran','862 - Diploma/Sijil pasca kedoktoran'),
);
#--------------------------------------------------------------------------------------------------
# 3.20 Ruangan 18 - INSTITUSI PENGAJIAN (IP)
$tajuk['institut'] = '#,kod,keterangan,nota01';
$data['institut'] = './utama/institut.json';
#--------------------------------------------------------------------------------------------------
//3.21 Ruangan 19 - Bidang Pengajian (FS)
$tajuk['Pengajian 2022'] = '#,Kumpulan Bidang Utama &amp; Sub-utama,Perincian Bidang Pengajian';
$data['Pengajian 2022'] = array(
	array('','xx : Kumpulan Bidang Utama<br>xxx : Kumpulan Bidang Sub-utama<br>',
	'xxxx - Perincian Bidang Pengajian'),
	array('','00 : Program asas/ umum<br>000 : Program <em>generic</em><br>',
	'0000 - program & kelayakan generik tidak ditakrifkan lagi. '
	. '<em>Programmes and qualifications generic not further defined</em>'),
	array('','001 : Program asas/umum<br>','0011 - Program asas/umum'),
	array('','002 : Literasi & kefahaman asas<br>','0021 - Literasi & numerasi'),
	array('','003 : Kemahiran personal<br>',
	'0031 - Kemahiran personal / Pengurusan masa /'
	. ' Pengurusan kerjaya / Teknik pengucapan awam'),
	array('','009 : Program <em>generic</em> lain<br>','0099 - Program <em>generic</em> lain'),
	array('','01 : Pendidikan<br>011 : Pendidikan',
	'0110 - Pengajaran<br>'
	. '0111 - Sains pendidikan<br>'
	. '0112 - Latihan perguruan untuk guru pra-sekolah<br>'
	. '0113 - Latihan perguruan peringkat asas<br>'
	. '0114 - Latihan perguruan dengan pengkhususan subjek<br>'
	. '0119 - Latihan perguruan untuk subjek vokasional/praktikal'),
	array('','018 : Program <em>inter-disciplinary</em>',
	'0188 - Program <em>inter-disciplinary</em> yg melibatkan pendidikan'),
	array('','02 : Kemanusiaan & kesenian<br>020 : Kemanusiaan & kesenian<br>',
	'0200 - Kemanusiaan & kesenian'),
	array('','02 : Kemanusiaan & kesenian<br>021 : Kesenian<br>',
	'0211 - Produksi media & teknik audio-visual<br>'
	. '0212 - Rekabentuk fesyen, dalaman & perindustrian<br>'
	. '0213 - Seni lukis<br>'
	. '0214 - Seni halus<br>'
	. '0215 - Muzik & persembahan kesenian<br>'
	. '0216 - Pengajian filem, televisyen & skrin<br>'
	. '0219 - Kesenian-kesenian lain'),
	array('','02 : Kemanusiaan & kesenian<br>022 : Kemanusiaan',
	'0221 - Agama & theology<br>'
	. '0222 - Sejarah & arkeologi<br>'
	. '0223 - Falsafah & etika<br>'
	. '0224 - Pengajian islam<br>'
	. '0229 - Kemanusiaan'),
	array('','02 : Kemanusiaan & kesenian<br>023 : Bahasa',
	'0231 - Pengajian bahasa<br>'
	. '0232 - Kesusasteraan & linguistics<br>'
	. '0233 - Bahasa Kebangsaan (Bahasa Malaysia)<br>'
	. '0239 - Bahasa-bahasa lain'),
	array('','02 : Kemanusiaan & kesenian<br>'
	. '028 : Program <em>inter-discpilinary</em> yg melibatkan kemanusiaan & kesenian',
	'0288 - Program <em>inter-discpilinary</em> yamg melibatkan kemanusiaan & kesenian'),
	array('','02 : Kemanusiaan & kesenian<br>'
	. '029 : Kemanusiaan & kesenian lain',
	'0299 - Kemanusiaan & kesenian lain'),
	array('','03 : Sains sosial, kewartawanan & maklumat<br>'
	. '030 : Sains sosial, kewartawanan & maklumat<br>',
	'0300 - Sains sosial, kewartawanan & maklumat'),
	array('','031 : Sains sosial & tingkah laku',
	'0311 - Ekonomi<br>'
	. '0312 - Sains politik & sivik<br>'
	. '0313 - Psikologi<br>'
	. '0314 - Pengajian sosiologi & kebudayaan<br>'
	. '0319 - Sains sosial & tingkah laku<br>'),
	array('','032 : Kewartawanan & maklumat',
	'0321 - Kewartawanan & pelaporan<br>'
	. '0322 - Perpustakaan, maklumat & arkib<br>'
	. '0323 - Media & komunikasi<br>'
	. '0329 - Kewartawanan & maklumat lain<br>'),
	array('','038 Program <em>inter-discplinary</em> yg melibatkan sains sosial,'
	. ' kewartawanan & maklumat<br>',
	'0388 - Program <em>inter-discplinary</em> yg melibatkan sains sosial,'
	. ' kewartawanan & maklumat'),
	array('','039 Sains sosial, kewartawanan & maklumat lain<br>',
	'0399 - Sains sosial, kewartawanan & maklumat lain'),
	array('','04 Perniagaan, pentadbiran & undang-undang<br>'
	. ' 040 Perniagaan, pentadbiran & undang-undang',
	'0400 - Perniagaan, pentadbiran & undang-undang'),
	array('','041 Perniagaan & pentadbiran',
	'0411 - Perakaunan, percukaian & pengauditan<br>'
	. '0412 - Kewangan, perbankan & insurans<br>'
	. '0413 - Kewangan & perbankan islam<br>'
	. '0414 - Pengurusan & pentadbiran<br>'
	. '0415 - Pemasaran & pengiklanan<br>'
	. '0416 - Kesetiausahaan & perkeranian<br>'
	. '0417 - Kemahiran kerja<br>'
	. '0419 - Perniagaan & pentadbiran lain'),
	array('','042 Undang-undang (<em>LAW</em>)<br>',
	'0421 - Undang-undang (<em>LAW</em>)'),
	array('','048 Program <em>inter-discplinary</em> yg melibatkan perniagaan,'
	. ' pentadbiran & undang-undang<br>',
	'0488 - Program <em>inter-discplinary</em> yg melibatkan perniagaan,'
	. ' pentadbiran & undang-undang'),
	array('','049 Perniagaan, pentadbiran & undang-undang lain<br>',
	'0499 - Perniagaan, pentadbiran & undang-undang lain'),
	array('','05 Sains tulen, matematik & statistik<br>'
	. '050 Sains tulen, matematik & statistik<br>',
	'0500 - Sains tulen, matematik & statistik'),
	array('','05 Sains tulen, matematik & statistik<br>'
	. '051 Biologi & sains berkaitan',
	'0511 - Biologi<br>'
	. '0512 - Biokimia<br>'
	. '0519 - Biologi & sains berkaitan lain'),
	array('','05 Sains tulen, matematik & statistik<br>'
	. '052 Sains persekitaran',
	'0521 - Sains persekitaran<br>'
	. '0522 - Persekitaran semula jadi & hidupan liar<br>'
	. '0529 - Sains persekitaran lain'),
	array('','05 Sains tulen, matematik & statistik<br>'
	. '053 Sains fizikal',
	'0531 - Kimia<br>'
	. '0532 - Sains hayat<br>'
	. '0533 - Fizik<br>'
	. '0539 - Sains fizik lain'),
	array('','05 Sains tulen, matematik & statistik<br>'
	. '054 Matematik & statistik',
	'0540 - Matematik & statistik<br>'
	. '0541 - Matematik<br>'
	. '0542 - Statistik'),
	array('','058 Program <em>inter-discplinary</em> yg melibatkan sains tulen,'
	. ' matematik & statistik<br>',
	'0588 - Program <em>inter-discplinary</em> yg melibatkan sains tulen,'
	. ' matematik & statistik'),
	array('','059 Sains tulen, matematik & statistik lain<br>',
	'0599 - Sains tulen, matematik & statistik lain'),
	array('','06 Teknologi maklumat & komunikasi<br>'
	. '061 Teknologi maklumat & komunikasi',
	'0610 - Teknologi maklumat & komunikasi<br>'
	. '0611 - Teknologi & sistem maklumat<br>'
	. '0612 - Kejuruteraan perisian<br>'
	. '0613 - Sains pengkomputeran<br>'
	. '0614 - Penggunaan komputer<br>'
	. '0619 - Teknologi maklumat & komunikasi lain'),
	array('','06 Teknologi maklumat & komunikasi<br>'
	. '068 Program <em>inter-discplinary</em> yg melibatkan'
	. ' teknologi maklumat & komunikasi<br>',
	'0688 - Program <em>inter-discplinary</em> yg melibatkan'
	. ' teknologi maklumat & komunikasi'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '070 Kejuruteraan, pembuatan & pembinaan<br>',
	'0700 - Kejuruteraan, pembuatan & pembinaan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '071 Kejuruteraan & kejuruteraan dagangan',
	'0711 - Kejuruteraan kimia & proses<br>'
	. '0712 - Tenaga & elektrik<br>'
	. '0713 - Elektronik & pengautomasian<br>'
	. '0714 - Mekanik & kerja logam<br>'
	. '0715 - Kenderaan bermotor, kapal & kapal terbang<br>'
	. '0716 - Kejuruteraan awam<br>'
	. '0717 - Teknologi perlindungan alam sekitar<br>'
	. '0719 - Kejuruteraan & kejuruteraan dagangan lain'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '072 Pembuatan & pemprosesan',
	'0721 - Pemprosesan makanan<br>'
	. '0722 - Bahan(gelas, kertas, plastik & kayu)<br>'
	. '0723 - Tekstil (pakaian, pakaian kaki & kulit)<br>'
	. '0724 - Perlombongan & galian<br>'
	. '0729 - Pembuatan & pemprosesan lain'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '073 Senibina & perancang bandar',
	'0731 - Senibina<br>'
	. '0732 - Perancangan bandar & wilayah<br>'
	. '0733 - Pembinaan & bangunan<br>'
	. '0734 - Ukur tanah/Ukur Bahan<em>Surveying</em>'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '074 Teknologi kejuruteraan',
	'0741 - Teknologi kejuruteraan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '078 Program <em>inter-discplinary</em> yg melibatkan kejuruteraan,'
	. ' pembuatan & pembinaan<br>',
	'0788 - Program <em>inter-discplinary</em> yg melibatkan kejuruteraan,'
	. ' pembuatan & pembinaan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '079 Kejuruteraan, pembuatan & pembinaan lain<br>',
	'0799 - Kejuruteraan, pembuatan & pembinaan lain'),
	array('','08 Pertanian, perhutanan, perikanan & veterinar<br>'
	. '080 Pertanian, perhutanan, perikanan & veterinar<br>',
	'0800 - Pertanian, perhutanan, perikanan & veterinar'),
	array('','081 Pertanian',
	'0811 - Pengeluaran ternakan & tanaman<br>'
	. '0812 - Horticulture<br>'
	. '0819 - Pertanian lain'),
	array('','082 Perhutanan','0821 - Perhutanan'),
	array('','083 Perikanan','0831 - Perikanan'),
	array('','084 Veterinar','0841 - Veterinar'),
	array('','088 Program <em>inter-discplinary</em> yg melibatkan pertanian,'
	. ' perhutanan, perikanan & veterinar<br>',
	'0888 - Program <em>inter-discplinary</em> yg melibatkan pertanian,'
	. ' perhutanan, perikanan & veterinar'),
	array('','089 Pertanian, perhutanan, perikanan & veterinar lain<br>',
	'0899 - Pertanian, perhutanan, perikanan & veterinar lain'),
	array('','09 Kesihatan & kebajikan<br>090 Kesihatan & kebajikan<br>',
	'0900 - Kesihatan & kebajikan'),
	array('','091 Kesihatan',
	'0911 - Pengajian pergigian<br>'
	. '0912 - Perubatan<br>'
	. '0913 - Kejururawatan & penjagaan<br>'
	. '0914 - Teknologi rawatan & perubatan diagnostik<br>'
	. '0915 - Terapi & pemulihan<br>'
	. '0916 - Farmasi<br>'
	. '0917 - Perubatan & terapi tradisional<br>'
	. '0919 - Kesihatan lain'),
	array('','092 Perkhidmatan sosial',
	'0921 - Penjagaan orang-orang tua & orang kurang upaya<br>'
	. '0922 - Perkhidmatan asuhan kanak-kanak & belia<br>'
	. '0923 - Kerja sosial & kaunseling<br>'
	. '0929 - Perkhidmatan sosial lain<br>'),
	array('','098 Program <em>inter-discplinary</em> yg melibatkan kesihatan & kebajikan',
	'0988 - Program <em>inter-discplinary</em> yg melibatkan kesihatan & kebajikan'),
	array('','099 Kesihatan & kebajikan lain','0999 - Kesihatan & kebajikan lain'),
	array('','10 Perkhidmatan | 100 Perkhidmatan','1000 - Perkhidmatan'),
	array('','101 Perkhidmatan personel',
	'1011 - Perkhidmatan domestik<br>'
	. '1012 - Perkhidmatan pendandanan & kecantikan<br>'
	. '1013 - Hotel, restoran & katering<br>'
	. '1014 - Sukan<br>'
	. '1015 - Pengembaraan, pelancongan & rekreasi<br>'
	. '1019 - Perkhidmatan personel lain'),
	array('','102 : Perkhidmatan kebersihan & kesihatan pekerjaan',
	'1021 - Sanitasi komuniti<br>'
	. '1022 - Keselamatan & kesihatan pekerjaan<br>'
	. '1029 - Perkhidmatan kebersihan & kesihatan pekerjaan lain'),
	array('','103 : Perkhidmatan keselamatan',
	'1031 - Ketenteraan & pertahanan<br>'
	. '1032 - Perlindungan diri & harta benda<br>'
	. '1039 - Perkhidmatan keselamatan lain'),
	array('','104 : Perkhidmatan pengangkutan<br>',
	'1041 - Perkhidmatan pengangkutan'),
	array('','108 : Program <em>inter-discplinary</em> yg melibatkan perkhidmatan<br>',
	'1088 - Program <em>inter-discplinary</em> yg melibatkan perkhidmatan'),
	array('','109 : Perkhidmatan lain','1099 - Perkhidmatan lain'),
	array('','99 : Lain-lain | 999 : Lain-lain<br>','9999 - Lain-lain'),
);
#--------------------------------------------------------------------------------------------------
//3.21 Ruangan 19 - Bidang Pengajian (FS)
$tajuk['Bidang'] = '#,Kumpulan Bidang Utama &amp; Sub-utama,Perincian Bidang Pengajian';
$data['Bidang'] = array(
	array('','xx : Kumpulan Bidang Utama | xxx : Kumpulan Bidang Sub-utama',
	'xxxx - Perincian Bidang Pengajian'),
	array('','00 Program asas/umum | 000 Program <em>generic</em>',
	'0000 - <em>Programmes and qualifications generic not further defined</em>'),
	array('','00 Program asas/umum | 001 Program asas/umum','0011 - Program asas/umum'),
	array('','00 Program asas/umum | 002 Literasi & kefahaman asas',
	'0021 - Literasi & numerasi'),
	array('','00 Program asas/umum | 003 Kemahiran personal',
	'0031 - Kemahiran personal / Pengurusan masa / Pengurusan kerjaya / Teknik pengucapan awam'),
	array('','00 Program asas/umum | 009 Program <em>generic</em> lain',
	'0099 - Program <em>generic</em> lain'),
	array('','01 Pendidikan | 011 Pendidikan','0110 - Pengajaran'),
	array('','01 Pendidikan | 011 Pendidikan','0111 - Sains pendidikan'),
	array('','01 Pendidikan | 011 Pendidikan','0112 - Latihan perguruan untuk guru pra-sekolah'),
	array('','01 Pendidikan | 011 Pendidikan','0113 - Latihan perguruan peringkat asas'),
	array('','01 Pendidikan | 011 Pendidikan',
	'0114 - Latihan perguruan dengan pengkhususan subjek'),
	array('','01 Pendidikan | 011 Pendidikan',
	'0119 - Latihan perguruan untuk subjek vokasional/praktikal'),
	array('','018 Program <em>inter-disciplinary</em>',
	'0188 - Program <em>inter-disciplinary</em> yg melibatkan pendidikan'),
	array('','02 Kemanusiaan & kesenian | 020 Kemanusiaan & kesenian',
	'0200 - Kemanusiaan & kesenian'),
	array('','02 Kemanusiaan & kesenian | 021 Kesenian',
	'0211 - Produksi media & teknik audio-visual'),
	array('','02 Kemanusiaan & kesenian | 021 Kesenian',
	'0212 - Rekabentuk fesyen, dalaman & perindustrian'),
	array('','02 Kemanusiaan & kesenian | 021 Kesenian','0213 - Seni lukis'),
	array('','02 Kemanusiaan & kesenian | 021 Kesenian','0214 - Seni halus'),
	array('','02 Kemanusiaan & kesenian | 021 Kesenian','0215 - Muzik & persembahan kesenian'),
	array('','02 Kemanusiaan & kesenian | 021 Kesenian',
	'0216 - Pengajian filem, televisyen & skrin'),
	array('','02 Kemanusiaan & kesenian | 021 Kesenian','0219 - Kesenian-kesenian lain'),
	array('','02 Kemanusiaan & kesenian | 022 Kemanusiaan','0221 - Agama & theology'),
	array('','02 Kemanusiaan & kesenian | 022 Kemanusiaan','0222 - Sejarah & arkeologi'),
	array('','02 Kemanusiaan & kesenian | 022 Kemanusiaan','0223 - Falsafah & etika'),
	array('','02 Kemanusiaan & kesenian | 022 Kemanusiaan','0224 - Pengajian islam'),
	array('','02 Kemanusiaan & kesenian | 022 Kemanusiaan','0229 - Kemanusiaan'),
	array('','02 Kemanusiaan & kesenian | 023 Bahasa','0231 - Pengajian bahasa'),
	array('','02 Kemanusiaan & kesenian | 023 Bahasa','0232 - Kesusasteraan & linguistics'),
	array('','02 Kemanusiaan & kesenian | 023 Bahasa',
	'0233 - Bahasa Kebangsaan (Bahasa Malaysia)'),
	array('','02 Kemanusiaan & kesenian | 023 Bahasa','0239 - Bahasa-bahasa lain'),
	array('','02 Kemanusiaan & kesenian'
	. '028 Program <em>inter-discpilinary</em> yg melibatkan kemanusiaan & kesenian',
	'0288 - Program <em>inter-discpilinary</em> yamg melibatkan kemanusiaan & kesenian'),
	array('','02 Kemanusiaan & kesenian | 029 Kemanusiaan & kesenian lain',
	'0299 - Kemanusiaan & kesenian lain'),
	array('','03 Sains sosial, kewartawanan & maklumat | '
	. '030 Sains sosial, kewartawanan & maklumat',
	'0300 - Sains sosial, kewartawanan & maklumat'),
	array('','031 Sains sosial & tingkah laku','0311 - Ekonomi'),
	array('','031 Sains sosial & tingkah laku','0312 - Sains politik & sivik'),
	array('','031 Sains sosial & tingkah laku','0313 - Psikologi'),
	array('','031 Sains sosial & tingkah laku','0314 - Pengajian sosiologi & kebudayaan'),
	array('','031 Sains sosial & tingkah laku','0319 - Sains sosial & tingkah laku'),
	array('','032 Kewartawanan & maklumat','0321 - Kewartawanan & pelaporan'),
	array('','032 Kewartawanan & maklumat','0322 - Perpustakaan, maklumat & arkib'),
	array('','032 Kewartawanan & maklumat','0323 - Media & komunikasi'),
	array('','032 Kewartawanan & maklumat','0329 - Kewartawanan & maklumat lain'),
	array('','038 Program <em>inter-discplinary</em> yg melibatkan sains sosial,'
	. ' kewartawanan & maklumat',
	'0388 - Program <em>inter-discplinary</em> yg melibatkan sains sosial,'
	. ' kewartawanan & maklumat'),
	array('','039 Sains sosial, kewartawanan & maklumat lain',
	'0399 - Sains sosial, kewartawanan & maklumat lain'),
	array('','04 Perniagaan, pentadbiran & undang-undang | '
	. ' 040 Perniagaan, pentadbiran & undang-undang',
	'0400 - Perniagaan, pentadbiran & undang-undang'),
	array('','041 Perniagaan & pentadbiran','0411 - Perakaunan, percukaian & pengauditan'),
	array('','041 Perniagaan & pentadbiran','0412 - Kewangan, perbankan & insurans'),
	array('','041 Perniagaan & pentadbiran','0413 - Kewangan & perbankan islam'),
	array('','041 Perniagaan & pentadbiran','0414 - Pengurusan & pentadbiran'),
	array('','041 Perniagaan & pentadbiran','0415 - Pemasaran & pengiklanan'),
	array('','041 Perniagaan & pentadbiran','0416 - Kesetiausahaan & perkeranian'),
	array('','041 Perniagaan & pentadbiran','0417 - Kemahiran kerja'),
	array('','041 Perniagaan & pentadbiran','0419 - Perniagaan & pentadbiran lain'),
	array('','042 Undang-undang (<em>LAW</em>)','0421 - Undang-undang (<em>LAW</em>)'),
	array('','048 Program <em>inter-discplinary</em> yg melibatkan perniagaan,'
	. ' pentadbiran & undang-undang',
	'0488 - Program <em>inter-discplinary</em> yg melibatkan perniagaan,'
	. ' pentadbiran & undang-undang'),
	array('','049 Perniagaan, pentadbiran & undang-undang lain',
	'0499 - Perniagaan, pentadbiran & undang-undang lain'),
	array('','05 Sains tulen, matematik & statistik | 050 Sains tulen, matematik & statistik',
	'0500 - Sains tulen, matematik & statistik'),
	array('','05 Sains tulen, matematik & statistik | 051 Biologi & sains berkaitan',
	'0511 - Biologi'),
	array('','05 Sains tulen, matematik & statistik | 051 Biologi & sains berkaitan',
	'0512 - Biokimia'),
	array('','05 Sains tulen, matematik & statistik | 051 Biologi & sains berkaitan',
	'0519 - Biologi & sains berkaitan lain'),
	array('','05 Sains tulen, matematik & statistik | 052 Sains persekitaran',
	'0521 - Sains persekitaran'),
	array('','05 Sains tulen, matematik & statistik | 052 Sains persekitaran',
	'0522 - Persekitaran semula jadi & hidupan liar'),
	array('','05 Sains tulen, matematik & statistik | 052 Sains persekitaran',
	'0529 - Sains persekitaran lain'),
	array('','05 Sains tulen, matematik & statistik | 053 Sains fizikal','0531 - Kimia'),
	array('','05 Sains tulen, matematik & statistik | 053 Sains fizikal','0532 - Sains hayat'),
	array('','05 Sains tulen, matematik & statistik | 053 Sains fizikal','0533 - Fizik'),
	array('','05 Sains tulen, matematik & statistik | 053 Sains fizikal',
	'0539 - Sains fizik lain'),
	array('','05 Sains tulen, matematik & statistik | 054 Matematik & statistik',
	'0540 - Matematik & statistik'),
	array('','05 Sains tulen, matematik & statistik | 054 Matematik & statistik',
	'0541 - Matematik'),
	array('','05 Sains tulen, matematik & statistik | 054 Matematik & statistik',
	'0542 - Statistik'),
	array('','058 Program <em>inter-discplinary</em> yg melibatkan sains tulen,'
	. ' matematik & statistik',
	'0588 - Program <em>inter-discplinary</em> yg melibatkan sains tulen,'
	. ' matematik & statistik'),
	array('','059 Sains tulen, matematik & statistik lain',
	'0599 - Sains tulen, matematik & statistik lain'),
	array('','06 Teknologi maklumat & komunikasi | 061 Teknologi maklumat & komunikasi',
	'0610 - Teknologi maklumat & komunikasi'),
	array('','06 Teknologi maklumat & komunikasi | 061 Teknologi maklumat & komunikasi',
	'0611 - Teknologi & sistem maklumat'),
	array('','06 Teknologi maklumat & komunikasi | 061 Teknologi maklumat & komunikasi',
	'0612 - Kejuruteraan perisian'),
	array('','06 Teknologi maklumat & komunikasi | 061 Teknologi maklumat & komunikasi',
	'0613 - Sains pengkomputeran'),
	array('','06 Teknologi maklumat & komunikasi | 061 Teknologi maklumat & komunikasi',
	'0614 - Penggunaan komputer'),
	array('','06 Teknologi maklumat & komunikasi | 061 Teknologi maklumat & komunikasi',
	'0619 - Teknologi maklumat & komunikasi lain'),
	array('','06 Teknologi maklumat & komunikasi | '
	. '068 Program <em>inter-discplinary</em> yg melibatkan teknologi maklumat & komunikasi',
	'0688 - Program <em>inter-discplinary</em> yg melibatkan teknologi maklumat & komunikasi'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 070 Kejuruteraan, pembuatan & pembinaan',
	'0700 - Kejuruteraan, pembuatan & pembinaan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 071 Kejuruteraan & kejuruteraan dagangan',
	'0711 - Kejuruteraan kimia & proses'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 071 Kejuruteraan & kejuruteraan dagangan',
	'0712 - Tenaga & elektrik'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 071 Kejuruteraan & kejuruteraan dagangan',
	'0713 - Elektronik & pengautomasian'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 071 Kejuruteraan & kejuruteraan dagangan',
	'0714 - Mekanik & kerja logam'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 071 Kejuruteraan & kejuruteraan dagangan',
	'0715 - Kenderaan bermotor, kapal & kapal terbang'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 071 Kejuruteraan & kejuruteraan dagangan',
	'0716 - Kejuruteraan awam'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 071 Kejuruteraan & kejuruteraan dagangan',
	'0717 - Teknologi perlindungan alam sekitar'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 071 Kejuruteraan & kejuruteraan dagangan',
	'0719 - Kejuruteraan & kejuruteraan dagangan lain'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 072 Pembuatan & pemprosesan',
	'0721 - Pemprosesan makanan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 072 Pembuatan & pemprosesan',
	'0722 - Bahan(gelas, kertas, plastik & kayu)'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 072 Pembuatan & pemprosesan',
	'0723 - Tekstil (pakaian, pakaian kaki & kulit)'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 072 Pembuatan & pemprosesan',
	'0724 - Perlombongan & galian'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 072 Pembuatan & pemprosesan',
	'0729 - Pembuatan & pemprosesan lain'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 073 Senibina & perancang bandar',
	'0731 - Senibina'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 073 Senibina & perancang bandar',
	'0732 - Perancangan bandar & wilayah'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 073 Senibina & perancang bandar',
	'0733 - Pembinaan & bangunan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 073 Senibina & perancang bandar',
	'0734 - Ukur tanah/Ukur Bahan <em>Surveying</em>'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 074 Teknologi kejuruteraan',
	'0741 - Teknologi kejuruteraan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | 078 Program <em>inter-discplinary</em>'
	. ' yg melibatkan kejuruteraan, pembuatan & pembinaan',
	'0788 - Program <em>inter-discplinary</em> yg melibatkan kejuruteraan,'
	. ' pembuatan & pembinaan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan | '
	. '079 Kejuruteraan, pembuatan & pembinaan lain',
	'0799 - Kejuruteraan, pembuatan & pembinaan lain'),
	array('','08 Pertanian, perhutanan, perikanan & veterinar | '
	. '080 Pertanian, perhutanan, perikanan & veterinar',
	'0800 - Pertanian, perhutanan, perikanan & veterinar'),
	array('','081 Pertanian','0811 - Pengeluaran ternakan & tanaman'),
	array('','081 Pertanian','0812 - Hortikultur (<em>Horticulture</em>)'),
	array('','081 Pertanian','0819 - Pertanian lain'),
	array('','082 Perhutanan','0821 - Perhutanan'),
	array('','083 Perikanan','0831 - Perikanan'),
	array('','084 Veterinar','0841 - Veterinar'),
	array('','088 Program <em>inter-discplinary</em> yg melibatkan pertanian,'
	. ' perhutanan, perikanan & veterinar',
	'0888 - Program <em>inter-discplinary</em> yg melibatkan pertanian,'
	. ' perhutanan, perikanan & veterinar'),
	array('','089 Pertanian, perhutanan, perikanan & veterinar lain',
	'0899 - Pertanian, perhutanan, perikanan & veterinar lain'),
	array('','09 Kesihatan & kebajikan | 090 Kesihatan & kebajikan',
	'0900 - Kesihatan & kebajikan'),
	array('','091 Kesihatan','0911 - Pengajian pergigian'),
	array('','091 Kesihatan','0912 - Perubatan'),
	array('','091 Kesihatan','0913 - Kejururawatan & penjagaan'),
	array('','091 Kesihatan','0914 - Teknologi rawatan & perubatan diagnostik'),
	array('','091 Kesihatan','0915 - Terapi & pemulihan'),
	array('','091 Kesihatan','0916 - Farmasi'),
	array('','091 Kesihatan','0917 - Perubatan & terapi tradisional'),
	array('','091 Kesihatan','0919 - Kesihatan lain'),
	array('','092 Perkhidmatan sosial','0921 - Penjagaan orang-orang tua & orang kurang upaya'),
	array('','092 Perkhidmatan sosial','0922 - Perkhidmatan asuhan kanak-kanak & belia'),
	array('','092 Perkhidmatan sosial','0923 - Kerja sosial & kaunseling'),
	array('','092 Perkhidmatan sosial','0929 - Perkhidmatan sosial lain'),
	array('','098 Program <em>inter-discplinary</em> yg melibatkan kesihatan & kebajikan',
	'0988 - Program <em>inter-discplinary</em> yg melibatkan kesihatan & kebajikan'),
	array('','099 Kesihatan & kebajikan lain','0999 - Kesihatan & kebajikan lain'),
	array('','10 Perkhidmatan | 100 Perkhidmatan','1000 - Perkhidmatan'),
	array('','101 Perkhidmatan personel','1011 - Perkhidmatan domestik'),
	array('','101 Perkhidmatan personel','1012 - Perkhidmatan pendandanan & kecantikan'),
	array('','101 Perkhidmatan personel','1013 - Hotel, restoran & katering, seni kulinari'),
	array('','101 Perkhidmatan personel','1014 - Sukan'),
	array('','101 Perkhidmatan personel','1015 - Pengembaraan, pelancongan & rekreasi'),
	array('','101 Perkhidmatan personel','1019 - Perkhidmatan personel lain'),
	array('','102 Perkhidmatan kebersihan & kesihatan pekerjaan','1021 - Sanitasi komuniti'),
	array('','102 Perkhidmatan kebersihan & kesihatan pekerjaan',
	'1022 - Keselamatan & kesihatan pekerjaan'),
	array('','102 Perkhidmatan kebersihan & kesihatan pekerjaan',
	'1029 - Perkhidmatan kebersihan & kesihatan pekerjaan lain'),
	array('','103 Perkhidmatan keselamatan','1031 - Ketenteraan & pertahanan'),
	array('','103 Perkhidmatan keselamatan','1032 - Perlindungan diri & harta benda'),
	array('','103 Perkhidmatan keselamatan','1039 - Perkhidmatan keselamatan lain'),
	array('','104 Perkhidmatan pengangkutan','1041 - Perkhidmatan pengangkutan'),
	array('','108 Program <em>inter-discplinary</em> yg melibatkan perkhidmatan',
	'1088 - Program <em>inter-discplinary</em> yg melibatkan perkhidmatan'),
	array('','109 Perkhidmatan lain','1099 - Perkhidmatan lain'),
	array('','99 Lain-lain | 999 Lain-lain','9999 - Lain-lain'),
);
#--------------------------------------------------------------------------------------------------
# 18. Bidang Pengajian (FS) (4 digit)
$tajuk['programLatihan'] = '#,Kod,Bidang Pengajian';
$data['programLatihan'] = array(
	array('','00**','* - Program asas/umum'),
	array('','0000','0000 - Programmes and qualifications generic not further defined'),
	array('','0011','0011 - Program asas / umum'),
	array('','0021','0021 - Literasi dan numerasi'),
	array('','0031','0031 - Kemahiran personal'),
	array('','0099','0099 - Programmes and qualifications generic not else where classified'),
	array('','011*','* - Pendidikan'),
	array('','0110','0110 - Pengajaran'),
	array('','0111','0111 - Sains pendidikan'),
	array('','0112','0112 - Latihan perguruan untuk guru pra-sekolah'),
	array('','0113','0113 - Latihan perguruan untuk guru peringkat asas'),
	array('','0114','0114 - Latihan perguruan untuk guru dengan pengkhususan subjek'),
	array('','0119','0119 - Programmes and qualifications involving education not elsewhere'
	. ' classified'),
	array('','0188','0188 - <strong>Program inter-disciplinary yg melibatkan pendidikan</strong>'
	. ' / <em>Inter-disciplinary programmes and qualifications involving education</em>'),
	array('','02**','* - Kesenian'),
	array('','0200','0200 - Seni halus, lukisan, khat, calligraphy'),
	array('','0211','0211 - Produksi media dan teknik audio-visual (animasi, fotografi,'
	. ' cinematografi, produksi radio dan TV, graphic design, computer graphic, percetakan dan'
	. ' penerbitan)'),
	array('','0212','0212 - Rekaan<br>(<strong>reka bentuk fesyen dan pakaian, reka bentuk'
	. 'dalaman, reka bentuk pentas</strong>)'
	. '<br>(<em>fashion and costume design, interior design, stage design</em>)'),
	array('','0213','0213 - Seni lukis / Fine arts'),
	array('','0214','0214 - Seni halus / Kemahiran tukangan(kraftangan, jahitan, tenunan,'
	. ' ukiran)'),
	array('','0215','0215 - Muzik dan persembahan kesenian (nyanyian, lakonan, drama, tarian,'
	. ' teater)'),
	array('','0216','0216 - Pengajian filem, televisyen dan skrin'),
	array('','0219','0219 - Kesenian-kesenian lain/Arts not elsewhere classified'),
	array('','022*','* - Kemanusiaan'),
	array('','0221','0221 - Agama(pengajian agama, sejarah agama, study of sacred books i.e.'
	. ' Al - Quran)'),
	array('','0222','0222 - Sejarah dan arkeologi'),
	array('','0223','0223 - Falsafah dan etika'),
	array('','0224','0224 - Pengajian Islam'),
	array('','0229','0229 - Program kemanusiaan lain / Humanities (except languages) not'
	. ' elsewhere classified'),
	array('','023*','* - Bahasa'),
	array('','0231','0231 - Pengajian bahasa'),
	array('','0232','0232 - Kesusateraan dan linguistics'),
	array('','0233','0233 - Bahasa Kebangsaan (Bahasa Malaysia)'),
	array('','0239','0239 - Bahasa not elsewhere'),
	array('','0288','0288 - Inter-disciplinary programmes and qualifications involving arts and'
	. ' humanities'),
	array('','0299','0299 - Arts and humanities not elsewhere classified'),
	array('','03**','* - Sains sosial dan sains gelagat'),
	array('','0300','0300 - <strong>Sains sosial, kewartawanan dan maklumat tidak ditakrifkan lagi'
	. '</strong><br><em>Social sciences, journalism dan information not further defined</em>'),
	array('','0311','0311 - Ekonomi (mikroekonomi, makroekonomi, ekonomi antarabangsa, ekonometrik,'
	. ' national accounts)'),
	array('','0312','0312 - Sains politik dan sivik (hak asasi manusia, hubungan antarabangsa,'
	. ' keamanan)'),
	array('','0313','0313 - Psikologi'),
	array('','0314','0314 - Pengajian sosiologi dan kajian kebudayaan (antropologi, demografi,'
	. ' <strong>budaya serantau</strong> / <em>regional cultures</em>)'),
	array('','0319','0319 - Social and behavioural sciences not elsewhere classified'),
	array('','032*','* - Kewartawanan dan maklumat'),
	array('','0321','0321 - Kewartawanan dan pelaporan<br>(<strong>kewartawanan penyiaran, komunikasi'
	. ' massa</strong>)<br>(<em>broadcast journalism, mass communication</em>)'),
	array('','0322','0322 - Perpustakaan, maklumat dan arkib<br>(<strong>sains arkib, dokumentasi,'
	. ' sains maklumat, latihan kepustakaan, dokumentasi muzium</strong>)<br>(<em>archival'
	. ' science, documentation, information science,librarianship training,'
	. ' museum documentation)'),
	array('','0323','0323 - Media dan komunikasi'),
	array('','0329','0329 - Journalism and information not elsewhere classified'),
	array('','0388','0388 - Inter-disciplinary programmes and qualifications involving science'
	. ' social, journalism and information'),
	array('','0399','0399 - Science social, journalism and information not elsewhere classified'),
	array('','04**','* - Perniagaan dan pentadbiran'),
	array('','0400','0400 - <strong>Perniagaan, pentadbiran & undang-undang</strong> / '
	. '<em>Business, administration and law not further defined</em>'),
	array('','0411','0411 - Perakaunan, percukaian, pengauditan, simpan kira'),
	array('','0412','0412 - Kewangan, perbankan, insurans, pelaburan'),
	array('','0413','0413 - Perbankan dan kewangan islam'),
	array('','0414','0414 - Pengurusan dan pentadbiran<br>(<strong>pengurusan sumber manusia,'
	. ' pengurusan pejabat, pengurusan kakitangan, pengurusan kualiti, pengambilan, latihan'
	. ' perusahaan, pentadbiran awam</strong>)<br>(<em>human resource management, office'
	. ' management, personnel management, quality management, recruitment, enterprise'
	. ' training, public administration</em>)'),
	array('','0415','0415 - Pemasaran dan pengiklanan (pengiklanan, pemasaran, merchandising,'
	. ' market research, perhubungan awam)'),
	array('','0416','0416 - Kesetiausahaan dan perkeranian<br>(<strong>program perkeranian,'
	. ' menaip, stenografi, trengkas, latihan penyambut tetamu, setiausaha undang-undang'
	. '</strong>)<br>(<em>clerical programmes, typing, stenography, shorthand, receptionist'
	. ' training, legal secretary</em>)'),
	array('','0417','0417 - Kemahiran pekerjaan'),
	array('','0418','0418 - <strong>Perniagaan & pentadbiran lain</strong> / <em>Business and'
	. ' administration not elsewhere classified</em>'),
	array('','042*','* - Undang-undang'),
	array('','0421','0421 - Undang-undang / LAW'),
	array('','0488','0488 - Inter-disciplinary programmes and qualifications involving business,'
	. ' administration and law'),
	array('','0499','0499 - Business, administration and law not elsewhere classified'),
	array('','05**','* - Biologi dan sains berkaitan'),
	array('','0500','0500 - Natural sciences, mathematics and statistics not further defined'),
	array('','0511','0511 - Biologi dan biokimia (bioteknologi, genetik, mikrobiologi, zoologi,'
	. ' entomologi)'),
	array('','0512','0512 - Biokimia'),
	array('','0519','0519 - Biological and related sciences not elsewhere classified'),
	array('','052*','* - Sains alam sekitar'),
	array('','0521','0521 - Sains alam sekitar'),
	array('','0522','0522 - Alam semulajadi dan hidupan liar'),
	array('','0529','0529 - Environment not elsewhere classified'),
	array('','053*','* - Sains fizikal'),
	array('','0531','0531 - Kimia (kimia organik, polimer, petroleum)'),
	array('','0532','0532 - Sains<br>(<strong>sains bumi, atmosfera, geografi (fizikal),'
	. ' geofizik, geosains, geologi, hidrologi, sains marin, oseanografi, paleontologi,'
	. ' meteorologi, mineralogi, seismologi</strong>)<br>(<em>earth science, atmosphere,'
	. ' geography (physical), geophysic, geoscience, geology, hydrologi, sains marin,'
	. ' oceanography, palentology, meteorology, mineralogy, seismology</em>)'),
	array('','0533','0533 - Fizik (sains fizik, astronomi, sains nuklear, optik, sains angkasa)'),
	array('','0539','0539 - Physical sciences not elsewhere classified'),
	array('','054*','* - Matematik dan statistik'),
	array('','0540','0540 - Mathematics and statistics not further defined'),
	array('','0541','0541 - Matematik (algebra, matematik gunaan, geometri, penyelidikan operasi,'
	. ' analisis berangka)'),
	array('','0542','0542 - Statistik (teori kebarangkalian, statistik gunaan, persampelan survei,'
	. ' rekabentuk survei, sains aktuari)'),
	array('','0588','0588 - Inter-disciplinary programmes and qualifications involving natural'
	. ' sciences, mathematics and statistics'),
	array('','0599','0599 - Natural sciences, mathematics and statistics not elsewhere classified'),
	array('','06**','* - Teknologi maklumat dan komunikasi'),
	array('','0610','0610 - Information and Communication Technologies (ICTs) not further defined'),
	array('','0611','0611 - <strong>Teknologi Maklumat dan Sistem Maklumat</strong>'
	. ' / <em>Information Technology and Information System</em>'),
	array('','0612','0612 - Kejuruteraan Perisian'),
	array('','0613','0613 - Sains Komputer'),
	array('','0614','0614 - Penggunaan komputer<br>(<strong>penggunaan perisian komputer, program'
	. ' penggunaan internet, hamparan, perisian untuk pemprosesan data, penerbitan desktop dan'
	. ' pemprosesan perkataan</strong>)<br>(<em>computer software use, internet use programmes,'
	. ' spreadsheets, software for data processing, desktop publishing and word processing</em>)'),
	array('','0619','0619 - Information and Communication Technologies (ICTs) not elsewhere'
	. ' classified'),
	array('','0688','0688 - Inter-disciplinary programmes and qualifications involving Information'
	. ' and Communication Technologies'),
	array('','07**','*-Kejuruteraan dan kejuruteraan dagangan'),
	array('','0700','0700 - <strong>Kejuruteraan, pembuatan dan pembinaan tidak ditakrifkan lagi'
	. '</strong><br><em>Engineering, manufacturing and construction not further defined</em>'),
	array('','0711','0711 - Kimia dan proses<br>(<strong>kejuruteraan kimia, teknologi makmal,'
	. ' penapisan minyak, pemprosesan minyak/gas/petrokimia, loji dan operasi mesin</strong>)'
	. '<br>(<em>chemical engineering, laboratory technology, oil refining,'
	. ' oil/gas/petrochemicals processing, plant and machine operation</em>)'),
	array('','0712','0712 - Tenaga dan elektrik<br>(<strong>program penyaman udara, pembaikan'
	. ' peralatan elektrik, pemasangan, kejuruteraan, penjanaan kuasa, pengagihan gas, hidraulik'
	. ' dan haba, pengeluaran kuasa, pemasangan talian kuasa, program penyejukan, tenaga nuklear,'
	. ' tenaga suria)</strong><br>(<em>air-conditioning programmes, electrical appliances'
	. ' repairing, fitting, engineering, power generation, gas distribution, hydraulic and thermal'
	. ' energy, power production, powerline installation, refrigeration programmes, nuclear energy,'
	. ' solar energy)</em>'),
	array('','0713','0713 - Elektronik dan pengautomasian<br>(<strong>elektronik penyiaran, sistem'
	. ' komunikasi, pemasangan, penyelenggaraan ekuimen, kejuruteraan komputer, pembaikan,'
	. ' kejuruteraan kawalan, teknologi digital, teknologi rangkaian, robotik, teknologi'
	. ' telekomunikasi, pembaikan televisyen dan radio</strong>)<br>(<em>broadcasting electronics,'
	. ' communication systems, installation, equiment maintenance, computer engineering,'
	. ' repairing, control engineering, digital technologi, network technology, robotics,'
	. ' telecommunication technology, television and radio repairing</em>)'),
	array('','0714','0714 - Mekanik(mekanikal) dan kerja logam'),
	array('','0715','0715 - Kenderaan bermotor, kapal dan kapal terbang<br>(<strong>kejuruteraan'
	. ' aeronautik/aeroangkasa, jentera pertanian, kejuruteraan kapal udara, kejuruteraan'
	. ' automotif, kejuruteraan helikopter/marin/motosikal/tentera laut, pembinaan kapal,'
	. ' kejuruteraan kenderaan dan motor</strong>)<br>(<em>aeronautical/aerospace'
	. ' engineering, agriculture machinery, air-craft engineering, automotive engineering,'
	. ' helicopter/marine/motorcycle/naval engineering, shipbuilding, vehicle and motor'
	. ' engineering</em>)'),
	array('','0716','0716 - Kejuruteraan awam<br>(<strong>pembinaan jambatan / bangunan,'
	. ' kejuruteraan dok dan pelabuhan, ukur kuantiti, pembinaan jalan, lukisan teknikal,'
	. ' bekalan air dan kejuruteraan pembetungan</strong>)<br>(<em>bridge / building'
	. ' construction, dock and harbour engineering, quantity surveying, road building,'
	. ' technical drawings, water supply and sewerage engineering</em>)'),
	array('','0717','0717 - Teknologi perlindungan alam sekitar'),
	array('','0718','0718 - Engineering and engineering trades not elsewhere classified'),
	array('','072*','* - Pembuatan dan pemprosesan'),
	array('','0721','0721 - Pemprosesan makanan'),
	array('','0722','0722 - Bahan(gelas, kertas, plastic dan kayu)'),
	array('','0723','0723 - Tekstil, pakaian, pakaian kaki, kulit<br>(<strong>kerja pakaian dan'
	. ' tekstil, menjahit, membuat pakaian, membuat kasut, membuat kasut, berputar</strong>)<br>'
	. '(<em>apparel and textile working, tailoring, dressmaking, footwear making, shoemaking,'
	. ' spinning)</em>'),
	array('','0724','0724 - Perlombongan dan galian<br>(<strong>perlombongan arang batu, minyak &'
	. ' gas, pengekstrakan bahan mentah</strong>)<br>(<em>coal mining, oil & gas,raw material'
	. ' extraction</em>)'),
	array('','0729','0729 - Manufacturing and processing not elsewhere classified'),
	array('','073*','* - Senibina dan perancang bandar'),
	array('','0731','0731 - <strong>Senibina</strong> / <em>Architecture, arkitek</em>'),
	array('','0732','0732 - Perancangan bandar dan wilayah'),
	array('','0733','0733 - Pembinaan dan bangunan'),
	array('','0734','0734 - Ukur tanah / Ukur bahan / <em>Surveying</em>'),
	array('','0741','0741 - Teknologi kejuruteraan'),
	array('','0788','0788 - Inter-disciplinary programmes & qualifications involving'
	. ' engineering, manufacturing and construction'),
	array('','0799','0799 - Engineering, manufacturing & construction not elsewhere classified'),
	array('','08**','* - Pertanian, Perhutanan dan Perikanan'),
	array('','0800','0800 - Agriculture, forestry, fisheries and veterinary not further defined'),
	array('','0811','0811 - Pengeluaran tanaman dan ternakan / Crop and livestock production'),
	array('','0812','0812 - Hortikultur / Horticulture'),
	array('','0819','0819 - Agriculture not elsewhere classified'),
	array('','0821','0821 - Perhutanan'),
	array('','0831','0831 - Perikanan (akuakultur, pembiakan ikan/haiwan kerang-kerangan)'),
	array('','084*','* - Veterinar'),
	array('','0841','0841 - Penjagaan kesihatan haiwan<br>(<strong>pembiakan, bantuan veterinar'
	. ' dan perubatan</strong>)<br>(<em>reproduction, veterinary assisting and medicine</em>)'),
	array('','0888','0888 - Inter-disciplinary programmesand qualifications involving '
	. ' agriculture, forestry, fisheries and veterinary'),
	array('','0899','0899 - Agriculture, forestry, fisheries and veterinary not elsewhere'
	. ' classified'),
	array('','09**','* - Kesihatan'),
	array('','0900','0900 - Health and welfare not further defined'),
	array('','0911','0911 - Pengajian pergigian'),
	array('','0912','0912 - Perubatan'),
	array('','0913','0913 - Kejururawatan dan penjagaan'),
	array('','0914','0914 - Perkhidmatan perubatan (diagnostik, teknologi perawatan, terapi'
	. ' dan pemulihan, farmasi)'),
	array('','0915','0915 - Terapi dan pemulihan (nutrisi & dietetik, urutan perubatan, kesihatan'
	. ' mental, optometry, refleksologi, fisioterapi'),
	array('','0916','0916 - Farmasi'),
	array('','0917','0917 - <strong>Perubatan dan terapi tradisional dan pelengkap</strong> / '
	. '<em>Traditional and complementary medicine and therapy</em>'),
	array('','0919','0919 - Health not elsewhere classified'),
	array('','092*','* - Perkhidmatan sosial'),
	array('','0921','0921 - <strong>Penjagaan warga emas dan orang kurang upaya</strong> / '
	. '<em>Care of elderly and of disabled</em>'),
	array('','0922','0922 - Perkhidmatan asuhan kanak-kanak dan belia'),
	array('','0923','0923 - Kerja sosial dan kaunseling (nasihat kerjaya / career advising,'
	. ' kajian sosial / social studies, kaunseling perkahwinan dan keluarga)'),
	array('','0929','0929 - Welfare not elsewhere classified'),
	array('','0988','0988 - Health and welfare not elsewhere'),
	array('','10**','* - Perkhidmatan personel'),
	array('','1000','1000 - Services not further defined'),
	array('','1011','1011 - Perkhidmatan domestik<br>(<strong>kemas rumah, perkhidmatan rumah,'
	. ' dobi</strong>)<br>(<em>housekeeping, homeservice, laundry</em>)'),
	array('','1012','1012 - Perkhidmatan pendandanan dan kecantikan<br>(perkhidmatan kosmetik,'
	. ' kecergasan & kawalan berat badan / fitness & weight control, dandanan rambut, persolekan,'
	. ' urutan tangan & kaki / manicure & pedicure, perkhidmatan salon, urutan kecantikan)'),
	array('','1013','1013 - Hotel, restoran dan katering (seni kulinari, masakan, penyediaan'
	. ' makanan, perkhidmatan hospitaliti)'),
	array('','1014','1014 - Sukan<br>(<strong>gimnastik, menyelam, bimbingan sukan</strong>)<br>'
	. ' (<em>gymnastik, diving, sports coaching</em>)'),
	array('','1015','1015 - Pengembaraan, pelancongan dan rekreasi'),
	array('','1019','1019 - Personal services not elsewhere classified'),
	array('','102*','* - Perkhidmatan kebersihan dan kesihatan pekerja'),
	array('','1021','1021 - Community sanitation'),
	array('','1022','1022 - <strong>Kesihatan dan keselamatan pekerjaan</strong> / '
	. '<em>Occupational health and safety</em>'),
	array('','1029','1029 - Hygiene and occupational health services not elsewhere'),
	array('','103*','* - Perkhidmatan keselamatan'),
	array('','1031','1031 - Ketenteraan dan pertahanan (latihan ketenteraan, sains militari,'
	. ' keselamatan negara / national security)'),
	array('','1032','1032 - Protection of persons and property'),
	array('','1039','1039 - Security services not elsewhere classified'),
	array('','104*','* - Perkhidmatan pengangkutan'),
	array('','1041','1041 - Perkhidmatan pengangkutan<br>(<strong>Program krew udara, operasi'
	. ' pesawat, penerbangan, latihan kru kabin, kren, pemanduan trak & forklift, sains nautika,'
	. ' perkhidmatan pos, operasi kereta api, pelayaran, operasi kapal</strong>)<br>(<em>Air crew'
	. ' programmes, aircraft operation, aviation, cabin crew training, crane, truck & fork-lift'
	. ' driving, nautical science, postal service, railway operations, seamanship,'
	. ' ship operation</em>)'),
	array('','1088','1088 - Inter-disciplinary programmes and qualifications involving services'),
	array('','1099','1099 - Services not elsewhere classified'),
	array('','9999','9999 - Lain-lain / Field unknown'),
	array('','X001','1. Pengekodan Bidang Pengajian (FS) adalah berdasarkan Sijil Tertinggi'
	. ' Diperoleh (SJ) yang telah dimiliki responden.'),
	array('','X002','2. Sehubungan itu, Butiran 19 (FS) hanya diisi sekiranya Butiran 17 (SJ)'
	. ' dikodkan `352`, `353`, `354`, `355`, `356`, `357`, `551`, `552`,'
	. ' `553`, `554`, `555`, `556`, `665`, `667`, `767`, `861` atau `862`.'),
	array('','X003','3. Butiran 19 (FS) hendaklah dibiarkan kosong jika Butiran 17 (SJ) dikodkan'
	. ' `101`, `102`, `241`, `242`, `341`, `342`, `343`, `344`, `345`, `351`, `346`, `347`, `348`'
	. ' atau `349`.'),
	array('','X004','4. Kod `0011`, `0021` dan `0031` bagi Butiran 19 (FS) hanya diisi jika'
	. ' Butiran 18 (IP) dikodkan `301` hingga `330` (institusi pengajian luar negara).'),
);
/*Tindakan:
1. Pengekodan Bidang Pengajian (FS) adalah berdasarkan Sijil Tertinggi Diperoleh (SJ)
yang telah dimiliki responden.
2. Sehubungan itu, Butiran 19 (FS) hanya diisi sekiranya Butiran 17 (SJ) dikodkan
`352`, `353`, `354`, `355`, `356`, `357`, `551`, `552`,
`553`, `554`, `555`, `556`, `665`, `667`, `767`, `861` atau `862`.
3. Butiran 19 (FS) hendaklah dibiarkan kosong jika Butiran 17 (SJ) dikodkan
`101`, `102`, `241`, `242`, `341`, `342`, `343`, `344`, `345`, `351`, `346`, `347`, `348`
atau `349`.
4. Kod `0011`, `0021` dan `0031` bagi Butiran 19 (FS) hanya diisi jika Butiran 18 (IP)
dikodkan `301` hingga `330` (institusi pengajian luar negara).
*/
#--------------------------------------------------------------------------------------------------
# masco msic - kena tukar masco v2018 kepada v2020
$tajuk['mascoMsicV2'] = '#,Pekerjaan,Industri,Masco,Msic';
$data['mascoMsicV2'] = array(
	array('','PENGURUS SYARIKAT','KONTRAKTOR AWAM','112122','42909'),
	array('','PENYELIA SYARIKAT','KONTRAKTOR AWAM','312223','42909'),
	array('','PENGURUS','PASARAYA','122109','47112'),
	array('','PENYELIA','PASARAYA','522203','47112'),
	array('','PEKERJA','PASARAYA','522302','47112'),
	array('','JURUJUAL (PERTUBUHAN RUNCIT)','PASARAYA','332219','47112'),
	array('','PENIAGA','KATERING','141206','56210'),
	array('','PENGURUS','RUNCIT','142113','47111'),
	array('','PENIAGA AKSESORI KERETA','KEDAI AKSESORI KERETA','142113','45300'),
	array('','PENIAGA KEDAI','SEMBAHYAHNG CINA','142113','47735'),
	ARRAY('','PERUNCIT/PENIAGA/TAUKE','KEDAI PAKAIAN','142112','47711'),
	ARRAY('','PERUNCIT/PENIAGA/TAUKE','KEDAI KASUT','142112','47712'),
	ARRAY('','PERUNCIT/PENIAGA/TAUKE','KEDAI ALAT GANTI,AKSESORI KERETA','142112','45300'),
	array('','PENGURUS PENCUCIAN','AKTIVITI PERKHIDMATAN LAIN T.T.T.L.','162202','96099'),
	array('','PENCUCI PINGGAN MANGKUK','RESTORAN/KEDAI MAKAN','941202','56101'),
	array('','PEMBERSIH BANGUNAN','PEMBERSIHAN AM BANGUNAN(HOSPITAL)','911205','81210'),
	array('','PEMBERSIH RUMAH','RUMAH KE RUMAH','911106','81210'),
	array('','PEMASANG PENYAMAN/PENDINGIN UDARA','AIRCOND/PEMASANGAN PENDINGINAN UDARA',
	'821106','43225'),
	array('','PENJUAL UBAT','JUAL UBAT','223101','47721'),
	array('','FARMASI','KESIHATAN','226204','47721'),
	array('','GURU','SEK. MEN','233102','85211'),
	array('','GURU SEKOLAH RENDAH','PENDIDIKAN RENDAH (AWAM)/'
	. 'SEKOLAH RENDAH KEBANGSAAN, SEK. KEB.','234102','85103'),
	array('','GURU','TASKA','234205','85101'),
	array('','GURU','TADIKA SWASTA','234205','85101'),
	array('','GURU','PUSAT TUISYEN','239906','85491'),
	array('','GURU','SEKOLAH MEMANDU','239904','85492'),
	array('','GURU AGAMA KAFA/USTAZ/USTAZAH','SEK AGAMA/RAKYAT/MASJID/SURAU','237101','85493'),
	array('','PEM PENGURUSAN MURID','SEK REN/SEK KEB','831201','85101'),
	array('','PENYELIA PEMBUATAN','KILANG PERABUT','312201','31001'),
	array('','PENYELIA STOR','KEDAI PERABUT','312224','47591'),
	array('','EJEN INSURAN','INSURAN AM','332101','65121'),
	array('','EJEN INSURANS','EJEN INSURANS','332101','66221'),
	array('','EJEN TAKAFUL','EJEN TAKAFUL','332101','66222'),
	array('','PEN. PEG. PEMASARAN/MARKERTING','TUKARAN WANG ASING/PENGURUP MATAWANG',
	'332216','66125'),
	array('','EKSEKUTIF RANTAIAN PEMBEKALAN','PENGELUAR PRODUK KIMIA','243119','20299'),
	array('','JURUTEKNIK','TM/TELEKOM','352203','61101'),
	array('','JURUTEKNIK','KILANG ELEKTRONIK','311901','26400'),
	array('','JURUTEKNIK MESIN','PEMBUATAN ELEKTRONIK PENGGUNA','311525','26400'),
	array('','JURUTEKNIK MEKANIKAL','KILANG KITAR SEMULA','311505','38112'),
	array('','KERANI','MOTOSIKAL','411111','45401'),
	array('','KERANI','BENGKEL KERETA','411109','45201'),
	array('','KERANI','GUAMAN','411109','69100'),
	array('','KERANI','AKAUN','431107','69200'),
	array('','KERANI','ANGKUT SAYUR','411109','49230'),
	array('','KERANI','KILANG KAYU','411111','16230'),
	array('','KERANI','KILANG PERABUT/PERABOT','411111','31001'),
	array('','KERANI','KEDAI PERABOT','411111','47591'),
	array('','PENIAGA/PEMILIK','KEDAI PERABOT','142101','47591'),
	array('','KERANI','PEMBINAAN','411111','41001'),
	array('','KERANI AM','KILANG PERABUT','411109','31001'),
	array('','KERANI AM','KEDAI BRG2 HARDWARE','411109','47520'),
	array('','KERANI AM','S. TELEMARKERTING','411109','73200'),
	array('','KERANI AM PEJABAT','KOLEJ','411109','85301'),
	array('','KERANI TIMBANGAN','JUAL BORONG SAWIT','432122','46202'),
	array('','KERANI PENGELUARAN','KEDAI PERCETAKAN','432201','18110'),
	array('','KERANI PENGELUARAN','PHOTOSTAT','432201','82196'),
	array('','KERANI PENGELUARAN','KILANG CETAK','432201','18110'),
	array('','KERANI JUALAN','HIASAN DALAMAN','522303','74101'),
	array('','PEM. KATERING','KATERING','512107','56210'),
	array('','TUKANG GUNTING','RAMBUT','514103','96020'),
	array('','JURUSOLEK','SALON KECANTIKAN','514202','96020'),
	array('','PENIAGA','JUAL IKAN','521107','47215'),
	array('','PENJAJA MAKANAN/KUIH','GERAI/PENJAJA MAKANAN','521201','56106'),
	array('','JUAL','KUIH/BURGER/SATE/SATAY','521202','56106'),
	array('','JUAL GERAI TEPI JALAN','BUAH/SAYUR','521101','47212'),
	array('','JUAL GERAI/PASAR','BUAH/SAYUR','521112','47212'),
	array('','BUNGKUS/JUAL KACANG','LETAK KEDAI','932101','47219'),
	array('','PEMBUAT KUIH','GERAI','521202','56106'),
	array('','PENIAGA','GERAI GORENG PISANG','521202','56106'),
	array('','PENIAGA KEDAI','KEDAI MAKAN','521202','56106'),
	array('','PENIAGA KEDAI MAKAN','KEDAI MAKAN & MINUM','521202','56106'),
	array('','TUKANG MASAK','KEDAI MAKAN & MINUM','512101','56106'),
	array('','TUKANG MASAK, PENGETINAN & PENGAWETAN','MAKANAN SEJUK BEKU','512104','10750'),
	array('','JUAL MAKANAN','SEJUK BEKU','521201','47219'),
	array('','JUAL MAKANAN','GERAI','521202','56106'),
	array('','PENGURUS RESTORAN','KEDAI MAKAN/RESTORAN','141201','56101'),
	array('','PENYELIA RESTORAN','KEDAI MAKAN/RESTORAN','513106','56101'),
	array('','JURUWANG, RESTORAN','KEDAI MAKAN/RESTORAN','523109','56101'),
	array('','PEMBANTU TUKANG MASAK','KEDAI MAKAN/RESTORAN','512107','56101'),
	array('','PELAYAN/WAITER','KEDAI MAKAN/RESTORAN','513101','56101'),
	array('','PENYELIA','STESEN MINYAK','522201','47300'),
	array('','PENYELARAS JUALAN / PENYELIA JUALAN','HOTEL','522202','55101'),
	array('','OPERATOR','KILANG ROTI','	816139','10712'),
	array('','PEMBANTU KEDAI','KEDAI RUNCIT','522302','47111'),
	array('','PEMBANTU KEDAI','KEDAI KEK/MENJUAL KEK','522302','47216'),
	array('','PEMBANTU KEDAI','KEDAI KAIN/TEKSTIL','522302','47510'),
	array('','PEMBANTU KEDAI','PASAR MINI','522302','47113'),
	array('','PEMBANTU KEDAI','JUAL KASUT','522302','47712'),
	array('','PEMBANTU KEDAI','KEDAI MAKAN/WARONG','513109','56106'),
	array('','PEMBANTU KEDAI','RESTORAN','513109','56101'),
	array('','PEMBANTU','KEDAI MAKAN/WARONG','513109','56106'),
	array('','PEMBANTU','KEDAI KOPI','513109','56302'),
	array('','PEMBANTU','KLINIK SWASTA','325604','86101'),
	array('','SALE EXEC/JURUJUAL PERTUBUHAN RUNCIT','UMOBILE/KEDAI TELEFON','332219','47413'),
	array('','JUAL TELEFON BIMBIT/JURUJUAL PERTUBUHAN RUNCIT','KEDAI TELEFON','332219','47413'),
	array('','PEMBAIKAN/PENYELENGARAAN TELEFON TANPA WAYAR','KEDAI TELEFON','332219','95121'),
	array('','PEMBAIKAN/PENYELENGGARAAN TELEFON SELULAR','KEDAI TELEFON','332219','95122'),
	array('','ATENDAN PAM MINYAK / ATENDAN STESEN PETROL','STESEN MINYAK','524501','47300'),
	array('','PEGAWAI KESELAMATAN','KAWALAN KESELAMATAN','541411','80100'),
	array('','PEKEBUN KECIL','SAYUR','611301','01131'),
	array('','PENANAM','DURIAN','611125','01223'),
	array('','PENANAM','PISANG','611106','01221'),
	array('','PENANAM','BUAH TROPIKA(CIKU/DUKU/LANGSAT/DLL)','611132','01229'),
	array('','PENANAM','KELAPA SAWIT','611104','01262'),
	array('','BEKEBUN','KELAPA SAWIT','611104','01262'),
	array('','PENANAM/PEKEBUN','KELAPA MUDA/TUA','611103','01263'),
	array('','TUKANG RUMAH','BUAT RUMAH','711101','41001'),
	array('','TUKANG CAT','RUMAH','713104','43303'),
	array('','TUKANG PAIP','PAIP/SANITASI RUMAH','712601','43224'),
	array('','TUKANG PEMASANG JUBIN/MOZEK','RUMAH','712201','41001'),
	array('','BURUH PEMBINAAN(KERJA BANGUNAN)','RUMAH','931308','41001'),
	array('','BURUH KELAPA SAWIT','LADANG SAWIT','921113','01261'),
	array('','PENGURUS','BENGKEL BESI','132101','25113'),
	array('','CAT KERETA','BENGKEL','713203','45202'),
	array('','CUCI/GILAP KERETA','CUCI KENDERAAN','912201','45203'),
	array('','PEMILIK/PENGURUS CUCI','CUCI KERETA/KENDERAAN','162202','45203'),
	array('','TUKANG BESI','KIMPALAN BESI','722101','24109'),
	array('','PENGIMPAL/WELDER LOGAM','KIMPALAN BESI PINTU/PAGAR/TINGKAP/BINGKAI',
	'721208','25113'),
	array('','MEKANIK MOTOSIKAL','PEMBAIKAN DAN PENYELENGGARAAN MOTOSIKAL','723103','45403'),
	array('','MEKANIK','BENGKEL KERETA','723109','45201'),
	array('','MEKANIK AUTOMOTIF/KERETA/KENDERAAN','BENGKEL KERETA/KENDERAAN','723109','45201'),
	array('','BUAT','KABINET','761201','43301'),
	array('','OPERATOR PENJAHIT','KILANG PAKAIAN','762107','14102'),
	array('','TUKANG JAHIT','UPAH MENJAHIT/PAKAIAN TEMPAHAN','762101','14103'),
	array('','TUKANG JAHIT PAKAIAN','KILANG PAKAIAN','762102','14102'),
	array('','OPERATOR','ELEKTRONIK','818911','26109'),
	array('','OPERATOR','KILANG KAIN','815201','13120'),
	array('','OPERATOR','KILANG JUBIN','811407','23921'),
	array('','OPERATOR','KILANG PAKAIAN','818902','14102'),
	array('','OPERATOR','KILANG PERABUT','817307','31001'),
	array('','OPERATOR','KILANG BESI/LOGAM','818902','24109'),
	array('','OPERATOR MESIN','KILANG BISKUT','816103','10711'),
	array('','OPERATOR MESIN','KILANG BUAH SAWIT','818901','10402'),
	array('','OPERATOR KILANG','KILANG PAPAN','817201','16211'),
	array('','OPERATOR KILANG','KILANG PLASTIK','814209','22202'),
	array('','OPERATOR GERGAJI','KILANG MENGETAM KAYU','817211','16100'),
	array('','OPERATOR PENGELUARAN','KILANG BISKUT','816191','10711'),
	array('','OPERATOR PENGELUARAN','KILANG KERTAS','818902','17010'),
	array('','OPERATOR PENGELUARAN','KILANG PAKAIAN','818902','14102'),
	array('','OPERATOR PENGELUARAN','KILANG BENANG/KAIN RAMATEX','818902','13110'),
	array('','OPERATOR PENGELUARAN','KILANG CAT','818902','20221'),
	array('','PEKERJA PROSES GETAH CEBIS','KILANG PROSES SUSU GETAH','814121','22193'),
	array('','PENGECAT PAPAN TANDA/IKLAN','KILANG LOGAM LAIN','713109','25119'),
	array('','PENULIS PAPAN TANDA/IKLAN','KILANG MESIN CETAK PAPAN TANDA','731611','28220'),
	array('','PEMANDU','TEKSI','832204','49224'),
	array('','PEMANDU BAS','EXPRESS','833101','49221'),
	array('','PEMANDU BAS','KILANG','833101','49222'),
	array('','PEMANDU BAS','SEKOLAH','833101','49223'),
	array('','PEMANDU VAN','SEKOLAH','832207','49223'),
	array('','PEMANDU LORI','JUALAN RUNCIT BARANG ELEKTRIK/ELEKTRONIK TERPAKAI','833201','47742'),
	array('','PEMANDU LORI','PASAR RAYA KECIL','833201','47112'),
	array('','PEMANDU LORI','KEDAI PERABOT','833201','47591'),
	array('','PEMANDU LORI','KEDAI PERABOT','833201','47591'),
	array('','PEMANDU LORI','TRANSPORT','833201','49230'),
	array('','PEMANDU LORI DAA','PENGANGKUTAN MUATAN MELALUI JALAN RAYA','833201','49230'),
	array('','PEMANDU LORI','HARDWARE','833201','46639'),
	array('','PEMANDU LORI','LADANG SAWIT','833201','01261'),
	array('','PEMANDU LORI','KILANG AIR BATU/AIS','833201','35303'),
	array('','KELINDAN LORI','KILANG AIR BATU/AIS','833202','35303'),
	array('','OPERATOR JENGKAUT/JCB','PENGGALIAN LALUAN AIR','834210','42904'),
	array('','PEMANDU JENGKAUT/JCB','SEWA JCB','834205','77306'),
	array('','PENOREH GETAH','LADANG GETAH','921114','01291'),
	array('','PENOREH GETAH','KEBUN GETAH MAJIKAN','921114','01292'),
	array('','PENOREH/PENANAM GETAH','KEBUN GETAH SENDIRI','611102','01292'),
	array('','PENOREH GETAH','GETAH BEKU','814116','01292'),
	array('','PEMBERSIH KEBUN/TUKANG KEBUN SEKOLAH','KHIDMAT PEMBERSIHAN','921406','81300'),
	array('','TUKANG KEBUN','PERTANIAN','921406','01610'),
	array('','PEMBANTU AM (PERKHIDMATAN AM) GRED 1','PENDIDIKAN SEK MENENGAH','962201','85211'),
	array('','PENGHANTAR POS','POS MALAYSIA','962116','53100'),
	array('','PENGHANTAR SURAT','POS/POSLAJU/LAIN2','962116','53100'),
	array('','PENGHANTAR DOKOMEN','POSLAJU/LAIN2','962116','53200'),
	array('','PENGHANTAR BARANG','KURIER/JNT EXPRESS','962116','53200'),
	array('','PENGHANTAR BARANG','KURIER/POSLAJU','832102','53200'),
	array('','PENGHANTAR CEPAT','RUNNER','832102','82990'),
	array('','PEMANDU GRAB/MYCAR/AIRASIA','SEWA KERETA DENGAN PEMANDU','832213','49225'),
	array('','PENYELARAS JUALAN','HOTEL','522202','55101'),
	array('','JURUJUAL','JUAL PAKAIAN','522303','47711'),
	array('','JURUJUAL','JUAL PAKAIAN','332219','47711'),
	array('','JURUJUAL','KEDAI JUAL KASUT','332219','47712'),
	array('','JURUJUAL','KERETA/KENDERAAN BARU','332212','45101'),
	array('','JURUJUAL','KERETA/KENDERAAN TERPAKAI','332212','45102'),
	array('','JURUJUAL INTERNET / PENIAGA ONLINE','JUAL BARANG ONLINE','524407','47912'),
	array('','PENGGUBAH','BUNGA','363220','32909'),
	array('','OPERATOR','ELEKTRONIK','818911','26109'),
	array('','JURUTERA MEKANIKAL','KILANG KITAR SEMULA','311532','38112'),
	array('','PENYELIA STOR','KILANG PERABUT','312224','31001'),
	array('','PENYELIA KILANG PAPAN','KILANG PAPAN','312208','16211'),
	array('','PEMBANTU KEDAI','GERAI','522302','56106'),
	array('','PENIAGA PASAR MALAM','JUAL TOPI/BEG/PAKAIAN','521101','47820'),
	array('','PEGAWAI POLIS','PERKHIDMATAN POLIS','371503','84231'),
	array('','PENGAWAL KESELAMATAN','JAGA BANGUNAN','541411','80100'),
	array('','PEKEDAI RUNCIT','KEDAI RUNCIT','522102','47111'),
	array('','TAUKE','KEDAI KOPI','141201','56302'),
	array('','PENGURUS BANK','BANK PERDAGANGAN','161604','64191'),
	array('','EKSEKUTIF PEGAWAI BANK','BANK PERDAGANGAN','241207','64191'),
	array('','KERANI BANK','BANK PERDAGANGAN','421106','64191'),
	array('','AKAUNTAN BERTAULIAH','SYARIKAT AKAUNTAN','241119','69200'),
	array('','OPERATOR PENGELUARAN','KILANG STMICROELECTRONICS','818907','26102'),
	array('','OPERATOR PENGELUARAN','KILANG ELEKTRONIK PENGGUNA','818911','26400'),
	array('','JURUELEKTRIK','PENDAWAIAN & PEMASANGAN ELEKTRIK','741103','43211'),
	array('','TUKANG DAWAI ELEKTRIK','PENDAWAIAN & PEMASANGAN ELEKTRIK','741207','43211'),
	array('','PENDAWAI ELEKTRIK','PENDAWAIAN & PEMASANGAN ELEKTRIK','741225','43211'),
	array('','SERVIS AIRCORN','REPAIR BARANG ELEKTRIK/ELEKTRONIK','741207','95221'),
	array('','JURURAWAT U2X','HOSPITAL AWAM','322101','86101'),
	array('','DOKTOR PERUBATAN','HOSPITAL AWAM','221102','86101'),
	array('','ANGGOTA ASKAR INFANTRI','TENTERA DARAT','013101','84220'),
	array('','PEM PENERANGAN','HAL EHWAL TENAGA/TELEKOMUNIKASI/POS','422201','84136'),
	array('','PEMUNGUT SAMPAH','PENGUMPULAN SISA PEPEJAL (SWM)','961103','38111'),
	array('','PENGUMPUL BESI BURUK','PENGUMPULAN BAHAN KITAR SEMULA','961206','38112'),
	array('','PEMUNGUT SEWA','KEDAI MAKAN(HARTANAH MILIKAN SENDIRI/PAJAKAN)','421405','68102'),
	array('','PENGASUH KANAK-KANAK','RUMAH','531103','97000'),
	array('','PENJAGA KANAK-KANAK','AKTIVITI PENJAGAAN HARIAN KANAK2','531104 ','88902'),
	array('','PEMBANTU RUMAH','MAJIKAN','911103','97000'),
	array('','MAK ANDAM','PENGANTIN-KAHWIN-NIKAH','514202','96093/77293'),
	array('','URUT/JURUTERAPI','FISIOTERAPI TERAPI PEKERJAAN','325505','86903'),
	array('','URUT TRADITIONAL','PENGAMAL PERUBATAN MELAYU','323101','86909'),
	array('','URUT TRADITIONAL','PENGAMAL PERUBATAN CINA','323102','86909'),
	array('','URUT TRADITIONAL','PENGAMAL PERUBATAN INDIA','323103','86909'),
	array('','SENSEI','UBAT PERUBATAN CINA','323104','86909'),
	array('','TEBANG POKOK BALAK','TEBANG POKOK HUTAN','621108','02201'),
	array('','NELAYAN','PERIKANAN LAUT DALAM','634112','03111'),
	array('','NELAYAN PANTAI','PERIKANAN','622211','03111'),
	array('','PEKEBUN KECIL','SAYUR','611301','01131'),
	array('','KERJA RENCAM/BURUH AM','KERJA KAMPUNG','962204','01610'),
	array('','KERJA RENCAM/BURUH AM','TURAP JALAN RAYA','962204','42102'),
	//array('','zzzzzz','zzzzzz','xxxxxx','xxxxx'),
);# masco msic v2
#--------------------------------------------------------------------------------------------------
/*$tajuk['xxx'] = '#,a,b,c,d';
$data['xxx'] = array(
	array('','zzzzzz','zzzzzz','xxxxxx','xxxxx'),
	array('','zzzzzz','zzzzzz','xxxxxx','xxxxx'),
);# data baru akan datang//*/
#--------------------------------------------------------------------------------------------------