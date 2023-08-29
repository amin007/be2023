<?php
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx')):
	function xxx()
	{
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*VALUE OF OUTPUT
F080001 + F080003 + F080005 + F080007 + F080008 +
F080009 + F080010 + F080011 + F080034 + F080035 +
F080039 + F080061 + F080062 + F080013 + F080014 +
F080016 - F090009 + (F090013/100 x F090012) - F100111
+ F100211 + F041399
Must be greater than COST OF INPUT
(F090001 + F090003 + F090005 + F090006 + F090007 +
F090008 + F090010 + F090011 + F091001 + F091002 +
F091003 + F091004 + F091005 + F091006 + F091007 +
F091008 + F091009 + F090109 + F090063 + F090080 +
F090016 + F090017 + F090018 + F090090 + F090027 +
F090035 + F090045 + F090046 + F090047 + F090052 +
F090067)//*/
#--------------------------------------------------------------------------------------------------
/*
PEMBINAAN / CONSTRUCTION
PENGIRAAN NILAI OUTPUT KASAR / VALUE OF GROSS OUTPUT CALCULATION

MEDAN / FIELD KETERANGAN / DESCRIPTION
041399 Perbelanjaan modal & nilai harta tetap: Membuat / membina sendiri: Jumlah
Capital expenditure and value of fixed assets: Self-produced / built fixed assets: Total
080001 Nilai kerja pembinaan yg dibuat pada tahun rujukan
Value of construction work done during the reference year
080003 Pendapatan daripada perkhidmatan perindustrian yg diberikan : Bayaran diterima bagi kerja memproses yg dibuat untuk pertubuhan lain
yg menggunakan bahan mereka sendiri
Income from industrial services rendered: Fees received for processing of goods for other establishments' on their materials
080005 Pendapatan daripada perkhidmatan perindustrian yg diberikan : Pendapatan daripada kerja membaiki & menyelenggara jentera dan
kelengkapan pertubuhan lain
Income from industrial services rendered: Income from repairs and maintenance work for other esrtablishments machinery and equipment
080007 Nilai jualan (daripada barang / bahan yg dibeli untuk dijual semula tanpa melalui proses selanjutnya)
Values of sales (from goods / materials purchases for resale without further processing)
080008 Nilai daripada kerja perindustrian lain (cth. Pembuatan, Kuari dsb.)
Value of other industrial work done (e.g: Manufacturing, Quarry etc.)
080009 Pendapatan output lain t.t.t.l. (cth. skrap, tenaga elektrik, produk sisa dsb.)
Income from other output n.e.c.e (e.g: scrap, electicity, waste product etc.)
080010 Pendapatan daripada perkhidmatan profesional (cth. perakaunan, pengurusan, kejuruteraan, guaman, penyelidikan & pembangunan, dsb.)
Professional fees received (e.g. accounting, management, engineering, legal services, research & development etc.)
080011 Komisen & brokeraj yg diterima
Commissions and brokerage earned
080034 Pendapatan daripada sewa: (b) Bangunan tempat kediaman
Rental income received from: (b) Residential building
080035 Pendapatan daripada sewa: (c) Bangunan bukan tempat kediaman
Rental income received from: (c) Non-residential building
080039 Pendapatan daripada sewa: (d) Alat pengangkutan
Rental income received from: (d) Transport equipment
080061 Pendapatan daripada sewa: (e) Jentera & kelengkapan
Rental income received from: (e) Machinery and equipment
080062 Pendapatan daripada sewa: (f) Perabot & pemasangan
Rental income received from: (f) Furniture and fittings
080013 Pendapatan daripada sewa : (g) Lain-lain
Rental income received from: (g) Others
080014 Royalti, hakcipta, pelesenan & yuran francais
Royalties, copyrights, licensing and franchise fees
080016 Lain-lain pendapatan operasi
Others operating income (please specify)
090009 Kos barang yg dijual (barang / bahan yg dibeli untuk dijual semula tanpa melalui proses selanjutnya)
Cost of goods sold (goods / materials purchased for resale without undergoing further processing)
090013 Perbelanjaan penyelidikan & pembangunan/ Research and development expenditure
(a) Dalaman/ (a) In-house
090012 Perbelanjaan penyelidikan & pembangunan
Research and development expenditure
100111 Stok awal: (c) Lain-lain (selain bahan binaan)
Opening Stocks: (c) Others (other than building materials)
100211 Stok akhir: (c) Lain-lain (selain bahan binaan)
Closing Stocks: (c) Others (other than building materials)

OUTPUT PEMBINAAN
= F041399 + F080001 + F080003 + F080005 + F080007 + F080008 + F080009 + F080010 + F080011 + F080034 +
F080035 + F080039 + F080061 + F080062 + F080013 + F080014 + F080016 - F090009 + (F090013/100 x F090012) -
F100111 + F100211
//*/
#--------------------------------------------------------------------------------------------------
/*
PEMBINAAN / CONSTRUCTION
PENGIRAAN INPUT PERANTARAAN / INTERMEDIATE INPUT CALCULATION
090001 Kos bahan binaan yg digunakan pada tahun rujukan
Cost of building materials used for the reference year
090003 Bahan yg digunakan bagi pembaikan & penyelenggaraan
Materials used for repairs and maintenance
090005 Alat tulis & bekalan pejabat
Stationery and office supplies
090006 Air yg dibeli
Water purchased
090007 Tenaga elektrik yg dibeli
Electricity purchased
090008 Bahan pembakar, pelincir & gas
Fuels, lubricants and gas
090010 Bayaran bagi kerja memproses yg dibuat oleh pihak lain yg menggunakan bahan yg dibekal oleh pertubuhan ini (sila nyatakan) :
Payments for processing work done by others on materials supplied by this establishment (please specify)
090011 Bayaran pembaikan & penyelengaraan semasa yg dibuat oleh pihak lain bagi harta tetap pertubuhan ini : Termasuk bangunan (pejabat, kilang,
gudang dsb.), alat pengangkutan, jentera & kelengkapan, perabot & pemasangan, komputer
Payments for current repairs and maintenance work done by others on this establishment's fixed assets : Includes buidings (office, factory, warehouse etc.), transport
equipment, machinery & equipment, furniture & fittings and computer
091001 Pengangkutan barang (pengangkutan keluar)
Transportation of goods (carriage outwards)
091002 Perbelanjaan perjalanan (termasuk perjalanan dalam & luar negara, bil petrol / diesel & bayaran letak kereta sendiri)
Travelling expenses (include both local and overseas travelling, petrol / diesel bills and parking fees for own vehicles)
091003 Bayaran perakaunan, kesetiausahaan & audit
Accounting, secretarial and audit fees
091004 Bayaran guaman
Legal fees
091005 Bayaran pengurusan
Management fees
091006 Perbelanjaan keraian
Entertainment expenses
091007 Bayaran pos (termasuk perkhidmatan kurier)
Postage (includes courier services)
091008 Bayaran bank
Bank charges
091009 Premium insurans dibayar ke atas bangunan, jentera, alat pengangkutan & barang
Insurance premium on building, machinery, transport equipment and goods
090109 Komisen & bayaran agensi
Commissions and agency fees
090063 Pengiklanan & promosi
Advertising and promotion
090080 Bayaran perkhidmatan profesional lain (cth. bayaran perundingan arkitek, kejuruteraan, juruukur dsb.)
Payment for other professional services (e.g. architectural, engineering, surveying consultancy fees etc.)
090016 Bayaran pemprosesan data & lain-lain perkhidmatan yg berkaitan dgnteknologi maklumat
Payment for data processing and other services related to information technology
090017 Bayaran telekomunikasi (cth. telefon, internet dsb.)
Telecommunication fees (e.g.: telephone, internet etc.)
090018 Lain-lain bayaran perkhidmatan bukan perindustrian (sila nyatakan)
Others payments for non-industrial services (please specify)
090090 Bayaran sewa: (b) Sewaan operasi (tidak termasuk bayaran bagi sewa tanah) & lain-lain
Rental payments: (b) Operational lease (exclude payment for rent of land) and others
090027 Bayaran royalti kepada: (b) Organisasi bukan kerajaan / tajaan korporat (sila nyatakan jenis royalti)
Royalties paid to: (b) Non-government organisations / corporate sponsorship (please specify types of royalties)
090035 Lain-lain perbelanjaan operasi (sila nyatakan)
Others operating expenditure (please specify)
090045 Kos pekerjaan: (e) Bayaran kepada pengarah tidak bekerja kerana kehadiran mereka dalam mesyuarat Lembaga Pengarah
Employment costs: (e) Fees paid to non-working directors for their attendance at Board of Directors' meetings
090046 Kos pekerjaan: (f) Nilai pakaian percuma yg disediakan
Employment costs: (f) Value of free wearing apparel provided
090047 Kos pekerjaan: (g) Kos latihan kepada pekerja
Employment costs: (g) Staff training cost
090052 Bayaran kepada pertubuhan lain yg membekalkan pekerja
Payment to other establishment for providing workers
090067 Bayaran bagi perkhidmatan keselamatan
Payment for security services

INPUT
= F090001 + F090003 + F090005 + F090006 + F090007 + F090008 + F090010 + F090011 + F091001 + F091002 +
F091003 + F091004 + F091005 + F091006 + F091007 + F091008 + F091009 + F090109 + F090063 + F090080 +
F090016 + F090017 + F090018 +
F090090 + F090027 + F090035 + F090045 + F090046 + F090047 + F090052 + F090067
//*/
#--------------------------------------------------------------------------------------------------
# Soalan 01
/*Nombor SSM	F10002
Tahun mula perniagaan*	F010003
Dari*	010004 *
Hingga*	010005 *
(a) Operasi bermusim	F010006
(b) Perniagaan baharu	F010007
(c) Pertukaran hak milik	F010008
(d) Perubahan tahun fiskal	F010009
(e) Operasi diberhentikan	F010010
(f) Tidak aktif untuk sementara	F010011
(g) Lain-lain - sila nyatakan	F010012
nota F010012	F010013
alamat website	F010053
Adakah data berkaitan dgn aktiviti2 yg dijalankan oleh pertubuhan ini?*	F010016
Negeri	F010022
Daerah	F010023
No. DB	F010024
No. BP	F010025
Strata	F010026

Nyatakan aktiviti utama pertubuhan ini berasaskan jenis pembinaan yg dilaksanakan
Sila tanda (X) dalam satu kotak sahaja
1	410	Pembinaan bangunan (kediaman & bukan kediaman)
	Construction of buildings (residential and non-residential)
2	421	Pembinaan jalanraya & landasan keretapi
	Construction of roads and railways
3	422	Pembinaan projek utiliti
	Construction of utility projects
4	429	Pembinaan projek kejuruteraan awam lain
	Construction of other civil engineering projects
5	431	Perobohan & penyediaan tapak
	Demolition and site preparation
6	432	Aktiviti pemasangan elektrikal, paip & pembinaan lain
	Electrical, plumbing and other construction installation activities
7	433	Penyiapan & kemasan bangunan
	Building completion and finishing
8	439	Aktiviti pembinaan pertukangan khas lain
	Other specialized construction activities
F010027	aktiviti utama pertubuhan

410	Pembinaan bangunan (kediaman & bukan kediaman)
	Construction of buildings (residential and non-residential)
421	Pembinaan jalanraya & landasan keretapi
	Construction of roads and railways
422	Pembinaan projek utiliti
	Construction of utility projects
429	Pembinaan projek kejuruteraan awam lain
	Construction of other civil engineering projects
431	Perobohan & penyediaan tapak
	Demolition and site preparation
432	Aktiviti pemasangan elektrikal, paip & pembinaan lain
	Electrical, plumbing and other construction installation activities
433	Penyiapan & kemasan bangunan
	Building completion and finishing
439	Aktiviti pembinaan pertukangan khas lain
	Other specialized construction activities


Nyatakan ringkas aktiviti utama*	F010028
MSIC mel	F010029
MSIC Semasa F010030
% Aktiviti utama (Pembinaan)*	F010031
% Aktiviti sekunder	F010032
nota F010032	F010033
MSIC Sekunder	F010034
melabur di luar Malaysia?*	F010035
guna Industrialised Building System(IBS) dalam aktiviti pembinaannya?*	F010500
Jika "YA", pastikan item 27 (Soalan 16) diisi.
guna Permodelan Maklumat Bangunan(PMB) dalam aktiviti pembinaannya?*	F010501
Nyatakan nama & alamat Ibu Pejabat pertubuhan ini:	F010055
Poskod	F010065
Cawangan 1	F010056
Poskod	F010066
Cawangan 2	F010057
Poskod	F010067
Cawangan 3	F010058
Poskod	F010068
Cawangan 4	F010059
Poskod	F010069
//*/
#--------------------------------------------------------------------------------------------------
/*Perolehan/ Jualan / Turnover/ Sales
- Sub kontraktor (buruh & bahan) / Sub contractors (labour and materials)
+ Kerja dalam pembinaan (penutup) / Work in progress (closing)
- Kerja dalam pembinaan (pembukaan) / Work in progress (opening)
//*/

Nilai kerja pembinaan	F080001
(services rendered) Kerja memproses dgn menggunakan bhn pertubuhan lain	F080003
% pendapatan yg diterima dr luar negara bagi kerja F080003	F080004
(services rendered) Kerja membaiki & menyelenggara jentera & kelengkapan pertubuhan lain	F080005
% pendapatan yg diterima dr luar negara bagi kerja F080005	F080006
Nilai jualan(dagang/trading)	F080007
Kerja perindustrian lain (cth: Pembuatan, Kuari dsb.) Sila nyatakan	F080008
nota F080008	F080008a
Kerja Output lain t.t.t.l. (cth. skrap, tenaga elektrik, produk sisa dsb.) Sila nyatakan	F080009
nota F080009	F080009a
Pendapatan drpd perkhidmatan profesional((cth: perakaunan,pengurusan, kejuruteraan, guaman, penyelidikan & pembangunan dsb.)	F080010
Komisen & brokeraj yg diterima	F080011
Hasil Sewa:Tanah	F080012
Hasil Sewa:Bangunan tempat kediaman	F080034
Hasil Sewa:Bangunan bukan tempat kediaman	F080035
Hasil Sewa:Alat pengangkutan	F080039
Hasil Sewa:Jentera & kelengkapan	F080061
Hasil Sewa:Perabot & pemasangan	F080062
Hasil Sewa:Lain-lain	F080013
Royalti, hakcipta, pelesenan & yuran francais	F080014
Hasil X Operasi:Subsidi produk	F080065
Hasil X Operasi:Subsidi pengeluaran	F080066
Hasil X Operasi:Tuntutan & pampasan yg diterima	F080067
Hasil X Operasi:Pemulihan hutang lapuk	F080068
Hasil X Operasi:Pendapatan daripada faedah	F080069
Hasil X Operasi:Pendapatan daripada dividen	F080070
Hasil X Operasi:Keuntungan daripada jualan/penilaian semula harta	F080071
Hasil X Operasi:Keuntungan daripada pertukaran mata wang asing/aset kewangan	F080072
Hasil X Operasi:Kiriman wang, hadiah atau geran yg diterima	F080073
Hasil X Operasi:Lain-lain pendapatan bukan operasi (sila nyatakan)	F080074
nota F080074	F080074a
Adakah pendapatan drpd aktiviti e-sukan?*	F080075
Jika Ya, sila nyatakan jumlah pendapatan dalam aktiviti e-sukan ini?	F080076
Lain2 pendapatan operasi (sila nyatakan)	F080016
nota F080016	F080016a
Jumlah pendapatan (8.1 hingga 8.12)*	F080089
Pindahan modal yg diterima	F080017
JUMLAH HASIL BESAR (8.13 & 8.14)	F080099
#--------------------------------------------------------------------------------------------------
/*
Belian tolak pemulangan
Purchases less returns

+  Stok awal tolak stok akhir
    Opening stocks less closing stocks
+  Bayaran pengangkutan (pengangkutan masuk)
    Transport charges (carriage inwards)
+  Cukai & duti
    Taxes and duties
+  Insurans
    Insurance
//*/
Kos bahan binaan	F090001
Bahan yg digunakan bagi pembaikan & penyelenggaraan	F090003
Alat tulis & bekalan pejabat	F090005
Air yg dibeli	F090006
Tenaga elektrik yg dibeli	F090007
Bahan pembakar, pelincir & gas	F090008
Kos barang yg dijual	F090009
Bayaran bagi kerja memproses yg dibuat oleh pihak lain yg menggunakan bahan yg dibekal oleh pertubuhan ini (sila nyatakan)	F090010
nota F090010	F090010a
Bayaran pembaikan & penyelenggaraan semasa yg dibuat oleh pihak lain bagi harta tetap pertubuhan ini	F090011
Perbelanjaan penyelidikan & pembangunan	F090012
% r&d: Dalaman/In-house	F090013
% r&d: Sumber luaran/Outsource	F090014
Pengangkutan barang (pengangkutan keluar)	F091001
Perbelanjaan perjalanan(claim)	F091002
Bayaran perakaunan, kesetiausahaan & audit	F091003
Bayaran guaman	F091004
Bayaran pengurusan	F091005
Perbelanjaan keraian	F091006
Bayaran pos (termasuk perkhidmatan kurier)	F091007
Bayaran bank	F091008
Premium insurans dibayar ke atas bangunan, jentera, alat pengangkutan & barang	F091009
Komisen & bayaran agensi	F090109
Pengiklanan & promosi	F090063
Bayaran perkhidmatan profesional lain (cth. bayaran perundingan arkitek, kejuruteraan, juruukur dsb.)	F090080
Bayaran pemprosesan data & lain-lain perkhidmatan yg berkaitan dgn teknologi maklumat	F090016
Bayaran telekomunikasi (cth. telefon, internet dsb.)	F090017
Lain-lain bayaran perkhidmatan bukan perindustrian (sila nyatakan)	F090018
nots F090018	F090018a
Bayaran sewa:Tanah	F090019
Bayaran Sewaan operasi & lain2	F090090
Susut nilai/perlunasan semasa ke atas harta tetap	F090024
Bayaran faedah	F090025
Bayaran royalti kpd:Kerajaan/Badan Berkanun (sila nyatakan)	F090026
nota F090026	F090026a
Bayaran royalti kpd: NGO/tajaan korporat (sila nyatakan)	F090027
nota F090027	F090027a
Cukai eksais dibayar ke atas produk pembuatan sendiri	F090028
Cukai eksport	F090029
Taksiran (ke atas tanah & bangunan) & cukai tanah	F090030
Cukai jalan	F090031
Bayaran pendaftaran perniagaan, lesen memandu dsb.	F090032
Cukai perkhidmatan atau cukai jualan	F091010
Belanja X Operasi:Kerugian daripada pertukaran wang asing/aset kewangan	F091011
Belanja X Operasi:Kerugian daripada jualan/penilaian semula harta	F091012
Belanja X Operasi:Hutang lapuk dihapuskan	F091013
Belanja X Operasi:Pindahan semasa seperti pindahan wang, hadiah, derma, denda, dsb.	F091014
Belanja X Operasi:Lain-lain perbelanjaan bukan operasi (sila nyatakan)	F091015
nota F091015	F091015a
Adakah perbelanjaan drpd aktiviti e-sukan?*	F091016
Jika Ya, sila nyatakan jumlah perbelanjaan dalam aktiviti e-sukan ini?	F091017
Lain-lain perbelanjaan operasi (sila nyatakan)	F090035
nota F090035	F090035a
Gaji & upah dibayar	F090036
Bayaran pampasan, persaraan/pemberhentian kepada pekerja	F090037
Bayaran manfaat:Rawatan perubatan percuma	F090038
Bayaran manfaat:Lain-lain seperti makanan percuma, tempat tinggal percuma dsb.	F090039
Caruman:Kumpulan Wang Simpanan Pekerja (KWSP/EPF)	F090040
Caruman:Kumpulan wang simpanan lain	F090041
Caruman:Pertubuhan Keselamatan Sosial (PERKESO/SOCSO)	F090042
Caruman:Skim keselamatan sosial persendirian (cth: EIS/insurans pampasan pekerja dsb.)	F090043
Caruman:Skim bayaran pampasan, persaraan/pemberhentian	F090044
Bayaran kpd pengarah tidak bekerja kerana kehadiran mereka dlm mesyuarat Lembaga Pengarah	F090045
Nilai pakaian percuma yg disediakan	F090046
Kos latihan kepada pekerja	F090047
Kos pengangkutan pekerja	F090048
Bayaran levi pekerja	F090049
Perbelanjaan pembayaran berasaskan saham kepada pekerja (termasuk saham & pilihan saham)	F090050
Kos pekerja lain (sila nyatakan)	F090051
nota F090051	F090051a
Bayaran kepada pertubuhan lain yg membekalkan pekerja	F090052
Bayaran bagi perkhidmatan keselamatan	F090067
Adakah perbelanjaan dalam inisiatif teknologi hijau?*	F090501
Jika Ya, sila nyatakan jumlah perbelanjaan dalam inisiatif teknologi hijau	F090502
Jumlah perbelanjaan (9.1 hingga 9.37.1)	F090089
Pindahan modal yg dibuat	F090053
Perbelanjaan pajakan kewangan	F090054
Dividen dibayar	F090055
Cukai langsung dibayar (cth. cukai syarikat & duti setem)	F090056
JUMLAH BELANJA BESAR (9.38 hingga 9.42)	F090099
//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx')):
	function xxx()
	{
	}
endif;//*/
#--------------------------------------------------------------------------------------------------