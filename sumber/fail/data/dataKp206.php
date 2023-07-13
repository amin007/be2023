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
041399 Perbelanjaan modal dan nilai harta tetap: Membuat / membina sendiri: Jumlah
Capital expenditure and value of fixed assets: Self-produced / built fixed assets: Total
080001 Nilai kerja pembinaan yang dibuat pada tahun rujukan
Value of construction work done during the reference year
080003 Pendapatan daripada perkhidmatan perindustrian yang diberikan : Bayaran diterima bagi kerja memproses yang dibuat untuk pertubuhan lain
yang menggunakan bahan mereka sendiri
Income from industrial services rendered: Fees received for processing of goods for other establishments' on their materials
080005 Pendapatan daripada perkhidmatan perindustrian yang diberikan : Pendapatan daripada kerja membaiki dan menyelenggara jentera dan
kelengkapan pertubuhan lain
Income from industrial services rendered: Income from repairs and maintenance work for other esrtablishments machinery and equipment
080007 Nilai jualan (daripada barang / bahan yang dibeli untuk dijual semula tanpa melalui proses selanjutnya)
Values of sales (from goods / materials purchases for resale without further processing)
080008 Nilai daripada kerja perindustrian lain (cth. Pembuatan, Kuari dsb.)
Value of other industrial work done (e.g: Manufacturing, Quarry etc.)
080009 Pendapatan output lain t.t.t.l. (cth. skrap, tenaga elektrik, produk sisa dsb.)
Income from other output n.e.c.e (e.g: scrap, electicity, waste product etc.)
080010 Pendapatan daripada perkhidmatan profesional (cth. perakaunan, pengurusan, kejuruteraan, guaman, penyelidikan dan pembangunan, dsb.)
Professional fees received (e.g. accounting, management, engineering, legal services, research & development etc.)
080011 Komisen dan brokeraj yang diterima
Commissions and brokerage earned
080034 Pendapatan daripada sewa: (b) Bangunan tempat kediaman
Rental income received from: (b) Residential building
080035 Pendapatan daripada sewa: (c) Bangunan bukan tempat kediaman
Rental income received from: (c) Non-residential building
080039 Pendapatan daripada sewa: (d) Alat pengangkutan
Rental income received from: (d) Transport equipment
080061 Pendapatan daripada sewa: (e) Jentera dan kelengkapan
Rental income received from: (e) Machinery and equipment
080062 Pendapatan daripada sewa: (f) Perabot dan pemasangan
Rental income received from: (f) Furniture and fittings
080013 Pendapatan daripada sewa : (g) Lain-lain
Rental income received from: (g) Others
080014 Royalti, hakcipta, pelesenan dan yuran francais
Royalties, copyrights, licensing and franchise fees
080016 Lain-lain pendapatan operasi
Others operating income (please specify)
090009 Kos barang yang dijual (barang / bahan yang dibeli untuk dijual semula tanpa melalui proses selanjutnya)
Cost of goods sold (goods / materials purchased for resale without undergoing further processing)
090013 Perbelanjaan penyelidikan dan pembangunan/ Research and development expenditure
(a) Dalaman/ (a) In-house
090012 Perbelanjaan penyelidikan dan pembangunan
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
090001 Kos bahan binaan yang digunakan pada tahun rujukan
Cost of building materials used for the reference year
090003 Bahan yang digunakan bagi pembaikan dan penyelenggaraan
Materials used for repairs and maintenance
090005 Alat tulis dan bekalan pejabat
Stationery and office supplies
090006 Air yang dibeli
Water purchased
090007 Tenaga elektrik yang dibeli
Electricity purchased
090008 Bahan pembakar, pelincir dan gas
Fuels, lubricants and gas
090010 Bayaran bagi kerja memproses yang dibuat oleh pihak lain yang menggunakan bahan yang dibekal oleh pertubuhan ini (sila nyatakan) :
Payments for processing work done by others on materials supplied by this establishment (please specify)
090011 Bayaran pembaikan dan penyelengaraan semasa yang dibuat oleh pihak lain bagi harta tetap pertubuhan ini : Termasuk bangunan (pejabat, kilang,
gudang dsb.), alat pengangkutan, jentera dan kelengkapan, perabot dan pemasangan, komputer
Payments for current repairs and maintenance work done by others on this establishment's fixed assets : Includes buidings (office, factory, warehouse etc.), transport
equipment, machinery & equipment, furniture & fittings and computer
091001 Pengangkutan barang (pengangkutan keluar)
Transportation of goods (carriage outwards)
091002 Perbelanjaan perjalanan (termasuk perjalanan dalam dan luar negara, bil petrol / diesel dan bayaran letak kereta sendiri)
Travelling expenses (include both local and overseas travelling, petrol / diesel bills and parking fees for own vehicles)
091003 Bayaran perakaunan, kesetiausahaan dan audit
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
091009 Premium insurans dibayar ke atas bangunan, jentera, alat pengangkutan dan barang
Insurance premium on building, machinery, transport equipment and goods
090109 Komisen dan bayaran agensi
Commissions and agency fees
090063 Pengiklanan dan promosi
Advertising and promotion
090080 Bayaran perkhidmatan profesional lain (cth. bayaran perundingan arkitek, kejuruteraan, juruukur dsb.)
Payment for other professional services (e.g. architectural, engineering, surveying consultancy fees etc.)
090016 Bayaran pemprosesan data dan lain-lain perkhidmatan yang berkaitan dengan teknologi maklumat
Payment for data processing and other services related to information technology
090017 Bayaran telekomunikasi (cth. telefon, internet dsb.)
Telecommunication fees (e.g.: telephone, internet etc.)
090018 Lain-lain bayaran perkhidmatan bukan perindustrian (sila nyatakan)
Others payments for non-industrial services (please specify)
090090 Bayaran sewa: (b) Sewaan operasi (tidak termasuk bayaran bagi sewa tanah) dan lain-lain
Rental payments: (b) Operational lease (exclude payment for rent of land) and others
090027 Bayaran royalti kepada: (b) Organisasi bukan kerajaan / tajaan korporat (sila nyatakan jenis royalti)
Royalties paid to: (b) Non-government organisations / corporate sponsorship (please specify types of royalties)
090035 Lain-lain perbelanjaan operasi (sila nyatakan)
Others operating expenditure (please specify)
090045 Kos pekerjaan: (e) Bayaran kepada pengarah tidak bekerja kerana kehadiran mereka dalam mesyuarat Lembaga Pengarah
Employment costs: (e) Fees paid to non-working directors for their attendance at Board of Directors' meetings
090046 Kos pekerjaan: (f) Nilai pakaian percuma yang disediakan
Employment costs: (f) Value of free wearing apparel provided
090047 Kos pekerjaan: (g) Kos latihan kepada pekerja
Employment costs: (g) Staff training cost
090052 Bayaran kepada pertubuhan lain yang membekalkan pekerja
Payment to other establishment for providing workers
090067 Bayaran bagi perkhidmatan keselamatan
Payment for security services

INPUT
= F090001 + F090003 + F090005 + F090006 + F090007 + F090008 + F090010 + F090011 + F091001 + F091002 +
F091003 + F091004 + F091005 + F091006 + F091007 + F091008 + F091009 + F090109 + F090063 + F090080 +
F090016 + F090017 + F090018 + F090090 + F090027 + F090035 + F090045 + F090046 + F090047 + F090052 +
F09006
//*/
#--------------------------------------------------------------------------------------------------
/*if ( ! function_exists('xxx')):
	function xxx()
	{
	}
endif;//*/
#--------------------------------------------------------------------------------------------------