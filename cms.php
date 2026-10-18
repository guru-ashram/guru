<?php
variables([
	VAREmail => 'guru@missions.amadeusweb.in',
	VARPhone => $ph = '+91-6382939524',
	VARPhone2 => '+91-9790710267',
	VARWhatsapp => whatsapp_clean($ph),
	'upi' => [
		'swamigal' => ['id' => 'annaiservices1995@okicici', 'name' => 'Gurumurthi Thangavel'],
	],
	VARAddress => 'Vettuvankeni, ECR, Chennai',
	VARAddressUrl => '#todo-maps',
	VARLinkToSectionHome => true,
]);

function site_before_render() {
	autosetPageMenu([VARLinkToNodeHome => true, VARDontOverwriteLogo => true]);
}

function enrichEngageNote($content, $where) {
	$before = $where == VAREngageNote ? getSnippet('prayer-information') : '';
	$after = '';
	return $before . $content . $after;
}
