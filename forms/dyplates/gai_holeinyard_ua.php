<html>
<head>
<title></title>
</head>
<body>
<table>
<tr>
	<td></td>
	<td class="head" colspan=2><p>Кому: <?= $to_name ?><br>Куди: <?= $to_address ?><br>Від: <?= $from_name ?><br>Адреса: <?= $from_address ?></p></td>
</tr>
<tr>
<td class="ref"><div class="ref">Вих. №<?= $ref ?> від: <?= $date ?> р.</div></td><td>&nbsp;</td>
</tr>
<tr><td colspan=2 class="v-spacer"></td></tr>
<tr><td colspan=2 class="title">
<div>Заява</div>
</td></tr>
<tr><td colspan=2 class="smv-spacer"></td></tr>
<tr><td colspan=2 class="a-body">
<div>
<b><?= $when ?> р.</b>
мною на території дороги за адресою: <b><?= $where ?></b>  були виявлені недоліки дороги,
розміри яких не відповідають вимогам Державного стандарту України ДСТУ 3587-97 —
«Автомобільні дороги, вулиці та залізничні переїзди. Вимоги до експлуатаційного стану». Максимальний строк,
передбачений ДСТУ 3587-97 для виправлення недоліків дороги у цьому випадку, складає 10 діб. Ці недоліки є небезпечними для
життя та здоров'я учасників дорожнього руху.<br>
Вказані недоліки порушують моє право на безпечні умови дорожнього руху, гарантоване ст. 14 Закону "Про дорожній рух" та мають ознаки
адміністративного правопорушення, визначеного ч. 1 ст. 140 КУпАП.<br>
Відповідно до ч. 10 ст. 52-1 Закону України «Про дорожній рух» та ч. 1 ст. 23 Закону «Про Національну поліцію», поліція
здійснює своєчасне реагування на заяви та повідомлення про кримінальні, адміністративні правопорушення або події; виявляє
причини та умови, що сприяють вчиненню адміністративних правопорушень; вживає у межах своєї компетенції заходів для їх усунення,
та припиняє такі правопорушення; у випадках, визначених законом, здійснює провадження у справах про адміністративні правопорушення,
приймає рішення про застосування адміністративних стягнень та забезпечує їх виконання.
Також відповідно до ч. 1, ст. 6 КУпАП, органи виконавчої влади та органи місцевого самоврядування розробляють та
здійснюють заходи, спрямовані на запобігання адміністративним правопорушенням, виявлення та усунення причин та умов,
що до них призводять.<br>
Зазначений дорожній дефект знаходиться за межами "червоних ліній", однак це не усуває відповідні державні органи від контролю за
безпекою дорожнього руху на цій дорозі, що підтверджено численими судовими рішеннями та практикою діяльності раніше ДАІ,
а зараз - національної поліції.<br>
В зв'язку з викладеним, керуючись ст. 40 Конституції України, <b>прошу:</b><br>
<ol>
<li>Прийняти та зареєструвати цю заяву як повідомлення про адміністративне правопорушення за ст. 140 КУпАП,
негайно організувати перевірку вказаних фактів.</li>
<li>Вжити заходів для забезпечення безпечного експлуатаційного стану вказаної ділянки дороги та продовжувати вживати їх аж до усунення правопорушення та забезпечення безпечних умов дорожнього руху.</li>
<li>Про результати розгляду цієї заяви та про вжиті заходи прошу повідомити мене письмово.</li>
</ol>
</div>
</td></tr>
<tr><td colspan=2 class="smv-spacer"></td></tr>
<tr><td colspan=2 >
  <table><tr valign=center>
	<td valign=center class="date"><?= $date ?>&nbsp;р.</td>
<?php if($signature): ?>
	<td valign=center><img src="<?= $signature ?>"></td>
<?php endif;?>
	<td valign=center class="init"><?= $init ?></td>
  </tr></table>
</td>
</tr>
<tr><td colspan=2 class="v-spacer"></td></tr>
<?php if($c_photos): ?>
<tr><td class="attach">Додаю: <?= $c_photos ?> фото.</td></tr>
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
