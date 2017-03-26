<html>
<head>
<title></title>
</head>
<body>
<table>
<tr>
	<td></td>
	<td class="head" colspan=2><p>Кому: <?= $to_name ?><br>Куда: <?= $to_address ?><br>От: <?= $from_name ?><br>Адрес: <?= $from_address ?></p></td>
</tr>
<tr>
<td class="ref"><div class="ref">Исх. №<?= $ref ?> от <?= $date ?> г.</div></td><td>&nbsp;</td>
</tr>
<tr><td colspan=2 class="v-spacer"></td></tr>
<tr><td colspan=2 class="title">
<div>Заявление</div>
</td></tr>
<tr><td colspan=2 class="smv-spacer"></td></tr>
<tr><td colspan=2 class="a-body">
<div>
<b><?= $when ?> г.</b> мной на территории дороги по адресу: <b><?= $where ?></b> на тротуаре были обнаружены недостатки дороги, 
размеры которых не соответствуют требованиям Государственного стандарта Украины ДСТУ 3587-97 — 
«Автомобильные дороги, улицы и железнодорожные переезды. Требования к эксплуатационному состоянию» и ДБН В.2.3-5-2001. Максимальный срок, 
предусмотренный ДСТУ 3587-97 для исправления недостатков дорожного покрытия, составляет 10 суток. Данные недостатки представляют опасность 
для жизни и здоровья участников дорожного движения.<br><br>
Указанные недостатки нарушают мое право на безопасные условия дорожного движения, гарантированное ст. 14 Закона Украины «О дорожном движении» и представляют
собой признаки административного правонарушения, определенного ч. 1 ст. 140 Кодекса Украины об административных правонарушениях.<br>
В соответствии с ч. 10 ст. 52-1 Закона Украины «О дорожном движении» и ч. 1 ст. 23 Закона «О Национальной полиции», полиция
своевременно реагирует на за заявления и сообщения об уголовных и административных правонарушениях или событиях; обнаруживает
причины и условия, способствующие совершению административных правонарушений; принимает в пределах своей компетенции меры для
их устранения, прекращает административные правонарушения; осуществляет производство в делах об административных 
правонарушениях, принимает решения про применение административных взысканий и обеспечивает их выполнение.<br>
<br><br>
В связи с изложенным, руководствуясь ст. 40 Конституции Украины, прошу:<br>
<ol>
<li>Принять и зарегистрировать это заявление как сообщение об административном правонарушении по статье 140 КУоАП, 
незамедлительно организовать проверку указанных фактов.</li>
<li>Принять меры для обеспечения безопасного эксплуатационного состояния указанного участка дороги и продолжать их предпринимать до устранения
всех недостатков.</li>
<li>Направить мне копии актов обследования, протоколов, постановлений, требований, предписаний и других документов, подготовленных
в результате проверки и производства по делу об указанном факте (в порядке закондательства о доступе к публичной информации).</li>
<li>По существу моего заявления и о принятых мерах сообщить мне письменно.</li>
</ol>
</div>
</td></tr>
<tr><td colspan=2 class="smv-spacer"></td></tr>
<tr><td colspan=2 >
  <table><tr valign=center>
	<td valign=center class="date"><?= $date ?>&nbsp;г.</td>
<?php if($signature): ?>
	<td valign=center><img src="<?= $signature ?>"></td>
<?php endif;?>
	<td valign=center class="init"><?= $init ?></td>
  </tr></table>
</td>
</tr>
<tr><td colspan=2 class="v-spacer"></td></tr>
<?php if($c_photos): ?>
<tr><td class="attach">Приложение: <?= $c_photos ?> фото</td></tr>
<?php endif;?>
</table>
<?php if($c_photos): ?>
<pagebreak />
<table>
<?= $files ?>
</table>
<?php endif;?>
</body>
</html>
