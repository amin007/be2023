<?php
###################################################################################################
//require '/sumber/fail/php/***.php';
require './tatarajah.php';
require './sumber/fail/php/fungsi_global.php';
//require '/sumber/fail/data/***.php';
//require './sumber/fail/data/dataSql.php';
//require './sumber/fail/csv/***.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
$pilih = 'jadual02';
list($urlcss,$urljs) = linkCssJs(2);// nilai default = 1
diatasV02($pilih, $urlcss);
binaButang(['jadual01','jadual02']);
$class = '"table table-striped table-bordered"';
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($urlcss,'urlcss',0);
//semakPembolehubah($urljs,'urljs',0);
#--------------------------------------------------------------------------------------------------
print <<<END
<!-- mula kotak
=============================================================================================== -->
<div class="kotakAtas">
<div class="kotakTengah">
<!-- mula borang
=============================================================================================== -->
<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
	<button class="nav-link active" id="home-tab" data-bs-toggle="tab"
	data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
	aria-selected="true">Home</button>
</li>
<li class="nav-item" role="presentation">
	<button class="nav-link" id="profile-tab" data-bs-toggle="tab"
	data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
	aria-selected="false" tabindex="-1">Profile</button>
</li>
<li class="nav-item" role="presentation">
	<button class="nav-link" id="contact-tab" data-bs-toggle="tab"
	data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
	aria-selected="false" tabindex="-1">Contact</button>
</li>
<li class="nav-item" role="presentation">
	<button class="nav-link" id="disabled-tab" data-bs-toggle="tab"
	data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane"
	aria-selected="false" disabled="" tabindex="-1">Disabled</button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade active show" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
		<p>This is some placeholder content the <strong>Home tab's</strong> associated content.</p>
	</div><!-- class="tab-pane fade" -->
	<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
		<p>This is some placeholder content the <strong>Profile tab's</strong> associated content.</p>
		<p>Saya suka ayam goreng</p>
	</div><!-- class="tab-pane fade" -->
	<div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
		<p>This is some placeholder content the <strong>Contact tab's</strong> associated content.</p>
	</div><!-- class="tab-pane fade" -->
	<div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
		<p>This is some placeholder content the <strong>Disabled tab's</strong> associated content.</p>
	</div><!-- class="tab-pane fade" -->
</div><!-- / class="tab-content" -->
<!-- tamat borang
=============================================================================================== -->
</div><!-- / class="kotakTengah" -->
</div><!-- / class="kotakAtas" -->
<!-- tamat kotak
=============================================================================================== -->
END;
	# tamat print <<<END
#--------------------------------------------------------------------------------------------------
$namaTab = ['satu','dua','tiga','empat','lima'];
#--------------------------------------------------------------------------------------------------
echo "\n" . '<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">';
echo "\n\t" . '<li class="nav-item" role="presentation">
	<button class="nav-link active" id="kosong-tab" data-bs-toggle="tab"
	data-bs-target="#kosong-tab-pane" type="button" role="tab"
	aria-controls="kosong-tab-pane" aria-selected="true">Kosong</button>
</li>';
foreach($namaTab as $tabTajuk):
echo "\n\t" . '<li class="nav-item" role="presentation">
	<button class="nav-link active" id="' . $tabTajuk . '-tab" data-bs-toggle="tab"
	data-bs-target="#' . $tabTajuk . '-tab-pane" type="button" role="tab"
	aria-controls="' . $tabTajuk . '-tab-pane" aria-selected="false" tabindex="-1">'
	. $tabTajuk . '</button>
</li>';
endforeach;
echo "\n" . '</ul>' . "\n";
echo '<div class="tab-content" id="myTabContent">';
echo "\n\t" . '<div class="tab-pane fade active show" id="kosong-tab-pane" role="tabpanel"
aria-labelledby="kosong-tab" tabindex="0">
	<p>This is some placeholder content the <strong>Kosong tab</strong> associated content.</p>
</div><!-- / class="tab-pane fade" -->';
foreach($namaTab as $tabName):
echo "\n\t" . '<div class="tab-pane fade" id="' . $tabName . '-tab-pane" role="tabpanel"
aria-labelledby="' . $tabName . '-tab" tabindex="0">
	<p>This is some placeholder content the <strong>' . $tabName . ' tab</strong> associated content.</p>
</div><!-- / class="tab-pane fade" -->';
endforeach;
echo "\n" . '</div><!-- / class="tab-content" -->';
#--------------------------------------------------------------------------------------------------
dibawahV02($pilih,$urljs);
echo "<script>\n";
//jqueryExtendA();
//jqueryExtendB();
//jqueryExtendC();
//gradeTable002(null);
echo "\n</script>\n</body>\n</html>";//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################