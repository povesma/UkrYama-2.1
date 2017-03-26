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
«Автомобільні дороги, вулиці та залізничні переїзди. Вимоги до експлуатаційного стану». Повне снігоочищення на автомобільних дорогах загального користування здійснюється після закінчення снігопаду або завірюхи, крім віднесених до категорії стихійних лих, і не повинно перевищувати 8 годин. Ці недоліки є небезпечними для
життя та здоров'я учасників дорожнього руху.<br><br>
Вказані недоліки порушують моє право на безпечні умови дорожнього руху, гарантоване ст. 14 Закону "Про дорожній рух" та мають ознаки
адміністративного правопорушення, визначеного ч. 1 ст. 140 КУпАП.<br>
Відповідно до ч. 10 ст. 52-1,3 Закону України «Про дорожній рух» та ч. 1 ст. 23 Закону «Про Національну поліцію», поліція
здійснює своєчасне реагування на заяви та повідомлення про кримінальні, адміністративні правопорушення або події; виявляє
причини та умови, що сприяють вчиненню адміністративних правопорушень; вживає у межах своєї компетенції заходів для їх усунення,
та припиняє такі правопорушення; у випадках, визначених законом, здійснює провадження у справах про адміністративні правопорушення,
приймає рішення про застосування адміністративних стягнень та забезпечує їх виконання.
Також відповідно до ч. 1, ст. 6 КУпАП, органи виконавчої влади та органи місцевого самоврядування розробляють та
здійснюють заходи, спрямовані на запобігання адміністративним правопорушенням, виявлення та усунення причин та умов,
що до них призводять.<br>
В зв'язку з викладеним, керуючись ст. 40 Конституції України, <b>прошу:</b><br>
<ol>
<li>Прийняти та зареєструвати цю заяву як повідомлення про адміністративне правопорушення за ст. 140 КУпАП,
негайно організувати перевірку вказаних фактів.</li>
<li>Вжити заходів для забезпечення безпечного експлуатаційного стану вказаної ділянки дороги та продовжувати вживати їх аж до усунення правопорушення та забезпечення безпечних умов дорожнього руху.</li>
<li>Направити мені копії актів обстеження, протоколів, постанов, вимог, приписів тощо, підготовлених в результаті перевірки і провадження
у справі за вказаним у заяві фактом (в порядку законодавства про доступ до публічної інформації).</li>
<li>Про результати розгляду цієї заяви та про вжиті заходи прошу повідомити мене письмово.</li>
</ol>
<br><br></div>
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
