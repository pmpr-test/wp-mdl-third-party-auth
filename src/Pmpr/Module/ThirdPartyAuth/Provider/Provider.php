<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc5bbc5ec3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ThirdPartyAuth\Provider; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\ThirdPartyAuth\Container; use Pmpr\Module\ThirdPartyAuth\Model\UserLink; use Pmpr\Module\ThirdPartyAuth\Provider\Google\Google; use Pmpr\Module\ThirdPartyAuth\Provider\Yahoo\Yahoo; use Pmpr\Module\ThirdPartyAuth\Setting; use Pmpr\Module\ThirdPartyAuth\ThirdPartyAuth; class Provider extends Container { const cuwqkowuwgeysoqm = "\157\x70\x65\156\x69\x64\x63\x62"; const asiscgcuqkseseew = "\157\141\165\164\x68\x2d\x72\x65\144\x69\162\145\143\x74"; const soewseycogaoaqsq = ThirdPartyAuth::qawymeiwsaqmeakc . "\x75\163\x65\x72\x5f\x61\166\141\x74\141\x72"; const gcouqeuuoimiuqoc = ThirdPartyAuth::qawymeiwsaqmeakc . "\x6f\x61\x75\x74\x68\137\x6e\157\156\143\x65"; const wqcswcwygsiiauqw = self::gcouqeuuoimiuqoc . "\137\141\143\x74\x69\157\x6e"; public function mameiwsayuyquoeq() { Yahoo::symcgieuakksimmu(); Google::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\153\x6b\163\x69\x71\157\171\161\x6d\x79\x71\x79\x73\x61\163\x67"]); } public function kksiqoyqmyqysasg() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (self::asiscgcuqkseseew === $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ugqacsomqcgmoqug)) { if ($gwgqcsmomamyqsmy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::gcouqeuuoimiuqoc)) { if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, self::wqcswcwygsiiauqw)) { $this->yoomisysqggqecco(); } else { $this->ccyekgauugygmyqi(); } } } else { if (false !== strpos($eiicaiwgqkgsekce->ekcymmyqoceukosc(true), self::cuwqkowuwgeysoqm)) { $this->qqakgmgemawgiekg(); } } } public function yoomisysqggqecco() { if ($iwigiqwyskocowwo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::wssmqksaywiuskki, '')) { if ($iwigiqwyskocowwo = $this->kkcowsyecqiosuko($iwigiqwyskocowwo)) { $iwigiqwyskocowwo->auamgqiwisysomsa()->sceoyeqwwuygocyo(); } } } public function qqakgmgemawgiekg() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $iwigiqwyskocowwo = $eiicaiwgqkgsekce->wugwewwmekuaamos(Constants::wssmqksaywiuskki, ''); if (!$iwigiqwyskocowwo) { if (false !== strpos($eiicaiwgqkgsekce->ekcymmyqoceukosc(true), Constants::umookyimwkqqkieq)) { $iwigiqwyskocowwo = Constants::umookyimwkqqkieq; } else { if (false !== strpos($eiicaiwgqkgsekce->ekcymmyqoceukosc(true), Constants::oowokkckywyoauyu)) { $iwigiqwyskocowwo = Constants::oowokkckywyoauyu; } } if ($iwigiqwyskocowwo) { $eiicaiwgqkgsekce->giyscymwkesykqsg(Constants::wssmqksaywiuskki, $iwigiqwyskocowwo); } } if ($iwigiqwyskocowwo = $this->kkcowsyecqiosuko($iwigiqwyskocowwo)) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $fwigoyyqcikqyoyq = $this->uwkmaywceaaaigwo()->gksccikkaamikckm(); $icwicymcioeyeyek = $iwigiqwyskocowwo->auamgqiwisysomsa()->ouaqkceckmasgsag(); $owqaeesoaygymmcy = $icwicymcioeyeyek[Constants::IDENTIFIER] ?? ''; $icseseayyekeggss = $icwicymcioeyeyek[Constants::kagqiwogmiguosiw] ?? ''; $aggoegioamuiugue = $icwicymcioeyeyek[Constants::scagkwwiiquocimc] ?? ''; $yewiaiaauukwsgku = $icwicymcioeyeyek[Constants::csiaccacwgeeqwwo] ?? ''; $mowgokyeuymuwiew = $icwicymcioeyeyek[Constants::ceaooaoacwwcuoqm] ?? ''; $owaiikyuwwwmswgc = $icwicymcioeyeyek[Constants::muqaqimusmckkieq] ?? ''; if ($icseseayyekeggss && $aggoegioamuiugue) { if (strcmp($icseseayyekeggss, $icseseayyekeggss) != 0) { $cmausswkomegeeyc = $icseseayyekeggss . "\40" . $icseseayyekeggss; } else { $cmausswkomegeeyc = $icseseayyekeggss; } } else { if ($icseseayyekeggss) { $cmausswkomegeeyc = $icseseayyekeggss; } else { $cmausswkomegeeyc = $yewiaiaauukwsgku; $icseseayyekeggss = ''; $aggoegioamuiugue = ''; } } $ksokicwayyessema = UserLink::symcgieuakksimmu(); $yewiaiaauukwsgku = $this->amcquiasoqygoyuc($yewiaiaauukwsgku, $owaiikyuwwwmswgc); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $iwywmkygwewiamwm = $ksokicwayyessema->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::wssmqksaywiuskki, $iwigiqwyskocowwo->aakmagwggmkoiiyu()), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::IDENTIFIER, $owqaeesoaygymmcy)]); $owamqkkkgeiegeky = $ksokicwayyessema->waecsyqmwascmqoa($iwywmkygwewiamwm, Constants::yauicucwkgqyygas); $guwkocgoesowqewc = $fwigoyyqcikqyoyq->email($owaiikyuwwwmswgc); $iwywmkygwewiamwm = $ksokicwayyessema->iekyeyicoyyawomk()->akkkoiiymmamsauc($guwkocgoesowqewc, Constants::muqaqimusmckkieq); $ecokeqiiuemogmws = $ksokicwayyessema->waecsyqmwascmqoa($iwywmkygwewiamwm, Constants::yauicucwkgqyygas); if (!$guwkocgoesowqewc) { $qoomisocceakywae = null; } else { $qoomisocceakywae = $yoiguusocukqeayg->iooowgsqoyqseyuu($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->woimamkkeyoyauoa(Constants::akoagooquksouwka, $guwkocgoesowqewc)); } $muoaiiwqsosqsusg = [Constants::ceaooaoacwwcuoqm => $mowgokyeuymuwiew, Constants::wssmqksaywiuskki => $iwigiqwyskocowwo->aakmagwggmkoiiyu(), Constants::csiaccacwgeeqwwo => $yewiaiaauukwsgku, Constants::scagkwwiiquocimc => $aggoegioamuiugue, Constants::IDENTIFIER => $owqaeesoaygymmcy, Constants::kagqiwogmiguosiw => $icseseayyekeggss, Constants::akoagooquksouwka => $guwkocgoesowqewc, Constants::asoymqaegkygmwue => $cmausswkomegeeyc]; $this->msmccaygwqcuymys($muoaiiwqsosqsusg); if ($ecokeqiiuemogmws || $owamqkkkgeiegeky || $qoomisocceakywae) { if (!$ecokeqiiuemogmws && $owamqkkkgeiegeky) { $ecokeqiiuemogmws = $owamqkkkgeiegeky; $this->ikugycsiyegwoiay($iwigiqwyskocowwo->aakmagwggmkoiiyu(), $guwkocgoesowqewc, $ecokeqiiuemogmws, $owqaeesoaygymmcy); } if ($ecokeqiiuemogmws) { $ycoeoaakqyskgykq = $ecokeqiiuemogmws; } else { if ($owamqkkkgeiegeky) { $ycoeoaakqyskgykq = $owamqkkkgeiegeky; } else { $ycoeoaakqyskgykq = $qoomisocceakywae; } } if ($ycoeoaakqyskgykq) { $mkucggyaiaukqoce = $yoiguusocukqeayg->get($ycoeoaakqyskgykq, true); $this->eseewgmcyqeagegu($mkucggyaiaukqoce); } } else { $this->gesyeyeaqmiskuoo($muoaiiwqsosqsusg); } } } else { $this->cekycuiyagyouawk(); } } public function msmccaygwqcuymys($qqswgiawgeaeoecu) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->giyscymwkesykqsg(Constants::ykwyyecqesymwoqw, "\x31"); foreach ($qqswgiawgeaeoecu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $eiicaiwgqkgsekce->giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie); } } public function amcquiasoqygoyuc($yewiaiaauukwsgku, $owaiikyuwwwmswgc = '') : string { $yewiaiaauukwsgku = str_replace("\40", "\x2d", $yewiaiaauukwsgku); $yewiaiaauukwsgku = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->mkucggyaiaukqoce($yewiaiaauukwsgku, true); if ($yewiaiaauukwsgku === "\x2d" || $yewiaiaauukwsgku === '') { $yewiaiaauukwsgku = explode("\x40", $owaiikyuwwwmswgc)[0]; } return $yewiaiaauukwsgku; } public function gesyeyeaqmiskuoo(array $iugicmqwsceaiysa = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $mowgokyeuymuwiew = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::ceaooaoacwwcuoqm); $iwigiqwyskocowwo = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::wssmqksaywiuskki); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::csiaccacwgeeqwwo); $aggoegioamuiugue = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::scagkwwiiquocimc); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::akoagooquksouwka); $icseseayyekeggss = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::kagqiwogmiguosiw); $owqaeesoaygymmcy = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::IDENTIFIER); $cmausswkomegeeyc = $gkyciwoiiisgywcs->get($iugicmqwsceaiysa, Constants::asoymqaegkygmwue); $guwkocgoesowqewc = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->email($owaiikyuwwwmswgc); if (!$yewiaiaauukwsgku && $owaiikyuwwwmswgc) { $guwkocgoesowqewc = $owaiikyuwwwmswgc; $yewiaiaauukwsgku = $this->amcquiasoqygoyuc($yewiaiaauukwsgku, $owaiikyuwwwmswgc); } else { if (!$owaiikyuwwwmswgc && $yewiaiaauukwsgku) { $guwkocgoesowqewc = "{$yewiaiaauukwsgku}\x40{$iwigiqwyskocowwo}\56\x63\x6f\x6d"; } else { if (!$owaiikyuwwwmswgc && !$yewiaiaauukwsgku) { wp_die(__("\x4e\157\40\x70\162\x6f\146\x69\154\145\x20\x64\x61\164\141\40\151\x73\40\162\145\x74\165\162\156\x65\x64\x20\146\162\x6f\x6d\40\x61\x70\160\154\x69\x63\x61\164\151\x6f\156\56\40\x50\154\x65\x61\x73\145\40\143\157\156\x74\141\x63\x74\40\171\x6f\x75\162\40\141\144\x6d\151\156\x69\163\x74\x72\141\x74\x6f\162\x2e", PR__MDL__THIRD_PARTY_AUTH)); } } } $guwkocgoesowqewc = str_replace("\x20", '', $guwkocgoesowqewc); $kswiyuiqsamaweqy = $ewgmommeawggyaek->myuiaumaacseywog(10, false); $yukoyyosoeewgiie = $ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku); if ($yukoyyosoeewgiie) { $yewiaiaauukwsgku = $this->amcquiasoqygoyuc('', $guwkocgoesowqewc); $yukoyyosoeewgiie = $ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku); $ciyackuwsqkoqese = 1; while ($yukoyyosoeewgiie) { $csaciiqaqycugsga = $yewiaiaauukwsgku . "\137" . $ciyackuwsqkoqese; if (!$ewgmommeawggyaek->wskwomgayscmiwqy($csaciiqaqycugsga)) { $yewiaiaauukwsgku = $csaciiqaqycugsga; break; } $ciyackuwsqkoqese++; } } $oeaigciskewsiiec = [Constants::miqkwqsewyogmsak => $yewiaiaauukwsgku, Constants::akoagooquksouwka => $guwkocgoesowqewc, Constants::oyiqkaiyqkcuyiai => $kswiyuiqsamaweqy, Constants::cuyqkgecokgmcwqu => $cmausswkomegeeyc, Constants::kagqiwogmiguosiw => $icseseayyekeggss, Constants::scagkwwiiquocimc => $aggoegioamuiugue]; $ycoeoaakqyskgykq = $ewgmommeawggyaek->eueweuyekeeaacgs($oeaigciskewsiiec); if (!is_wp_error($ycoeoaakqyskgykq)) { $this->msmccaygwqcuymys([Constants::ceaooaoacwwcuoqm => $mowgokyeuymuwiew, Constants::wssmqksaywiuskki => $iwigiqwyskocowwo, Constants::csiaccacwgeeqwwo => $yewiaiaauukwsgku, Constants::scagkwwiiquocimc => $aggoegioamuiugue, Constants::IDENTIFIER => $owqaeesoaygymmcy, Constants::kagqiwogmiguosiw => $icseseayyekeggss, Constants::akoagooquksouwka => $guwkocgoesowqewc, Constants::asoymqaegkygmwue => $cmausswkomegeeyc]); $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($ycoeoaakqyskgykq); $this->eyaygwwcwuwcucwq($mkucggyaiaukqoce); $this->eseewgmcyqeagegu($mkucggyaiaukqoce); } else { wp_die($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($ycoeoaakqyskgykq)); } } public function eseewgmcyqeagegu($mkucggyaiaukqoce) { if ($mkucggyaiaukqoce) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); if ($mowgokyeuymuwiew = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->wugwewwmekuaamos(Constants::ceaooaoacwwcuoqm)) { if ($this->weysguygiseoukqw(Setting::qesauiocwykqcceg)) { $yoiguusocukqeayg->ksmqawcowkmegigw(self::soewseycogaoaqsq, $mowgokyeuymuwiew, $mkucggyaiaukqoce); } else { $yoiguusocukqeayg->smqukgcyacswysqa(self::soewseycogaoaqsq, $mkucggyaiaukqoce); } } $ewgmommeawggyaek->qguyekasycmwomao(); $ewgmommeawggyaek->kkkuqwaqakeaykmo($mkucggyaiaukqoce->ID, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($mkucggyaiaukqoce->ID); $this->cqscqicucmeamkyq("\x77\160\137\154\x6f\x67\x69\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); $this->cekycuiyagyouawk(); } } public function cekycuiyagyouawk() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $cekycuiyagyouawk = $this->weysguygiseoukqw(Setting::qqiqqewaiiqiyyka); if ($cekycuiyagyouawk) { $cekycuiyagyouawk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($cekycuiyagyouawk); } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($cekycuiyagyouawk)) { $cekycuiyagyouawk = $gqusacuooiagkuom->acewksgasymgwmcy(); } $gqusacuooiagkuom->cquikcuwossiessu($cekycuiyagyouawk); exit; } public function eyaygwwcwuwcucwq($mkucggyaiaukqoce) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce, true); $owaiikyuwwwmswgc = $eiicaiwgqkgsekce->wugwewwmekuaamos(Constants::akoagooquksouwka, $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce, Constants::akoagooquksouwka)); $iwigiqwyskocowwo = $eiicaiwgqkgsekce->wugwewwmekuaamos(Constants::wssmqksaywiuskki); $owqaeesoaygymmcy = $eiicaiwgqkgsekce->wugwewwmekuaamos(Constants::IDENTIFIER); if ($ycoeoaakqyskgykq && $iwigiqwyskocowwo && $owqaeesoaygymmcy && $owaiikyuwwwmswgc) { $this->ikugycsiyegwoiay($iwigiqwyskocowwo, $owaiikyuwwwmswgc, $ycoeoaakqyskgykq, $owqaeesoaygymmcy); } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x72\145\161\x75\151\x72\x65\40\144\x61\x74\x61\x20\156\x6f\x74\40\160\x61\x73\x73\x65\144\72", (array) $mkucggyaiaukqoce); wp_die("\162\145\161\165\x69\x72\x65\40\144\141\164\141\x20\x6e\157\x74\40\160\x61\163\x73\145\x64\x20\x74\x6f\x20\x69\156\163\x65\162\164\40\165\163\145\x72\x20\154\x69\x6e\153"); } } public function ikugycsiyegwoiay($iwigiqwyskocowwo, $owaiikyuwwwmswgc, $ycoeoaakqyskgykq, $owqaeesoaygymmcy) { $ksokicwayyessema = UserLink::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$ksokicwayyessema->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::muqaqimusmckkieq, $owaiikyuwwwmswgc), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::wssmqksaywiuskki, $iwigiqwyskocowwo)])) { $ksokicwayyessema->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::muqaqimusmckkieq => $owaiikyuwwwmswgc, Constants::yauicucwkgqyygas => $ycoeoaakqyskgykq, Constants::wssmqksaywiuskki => $iwigiqwyskocowwo, Constants::IDENTIFIER => $owqaeesoaygymmcy]); } } public function ccyekgauugygmyqi() { wp_die("\x3c\x73\164\162\x6f\156\147\76\x45\x52\122\117\122\74\57\x73\164\x72\157\156\x67\76\72\x20\120\x6c\x65\141\x73\145\x20\107\x6f\40\x62\x61\x63\153\40\141\x6e\x64\40\x52\145\x66\162\145\x73\150\40\164\x68\145\x20\160\x61\147\x65\x20\141\x6e\144\x20\x74\x72\171\x20\141\147\141\151\x6e\41\x3c\142\x72\57\x3e\x49\146\40\x79\x6f\165\40\x73\164\x69\x6c\x6c\x20\146\141\x63\145\40\x74\x68\145\x20\x73\x61\x6d\145\40\x69\x73\x73\x75\x65\40\x70\x6c\x65\x61\163\145\x20\143\x6f\x6e\x74\141\143\x74\x20\171\157\x75\x72\x20\101\144\155\151\x6e\151\x73\164\162\141\164\x6f\162\x2e"); } }
