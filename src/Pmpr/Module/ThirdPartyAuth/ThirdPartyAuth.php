<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b693e32a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ThirdPartyAuth; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\ThirdPartyAuth\Model\UserLink; use Pmpr\Module\ThirdPartyAuth\Provider\Provider; class ThirdPartyAuth extends ComponentInitiator { const qawymeiwsaqmeakc = "\x74\150\151\162\x64\137\160\141\162\164\x79\x5f\x61\x75\164\150\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\124\150\x69\162\x64\x20\x50\x61\x72\164\171\40\101\x75\x74\150", PR__MDL__SVG); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function kgewmaycsoykyaso() { if ($this->weysguygiseoukqw(Setting::qesauiocwykqcceg)) { $this->iiawasmesusioauo("\160\162\x65\137\x67\145\164\x5f\141\x76\x61\x74\x61\x72"); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x67\145\x74\137\141\x76\x61\164\141\x72\137\165\x72\154", [$this, "\145\x6d\157\145\155\x63\161\141\157\x6d\x67\141\171\143\171\x79"], 10, 2); $this->waqewsckuayqguos("\142\x65\x66\157\162\x65\x5f\x65\156\161\165\145\165\145\137\141\x73\x73\x65\164\163", [$this, "\x65\x6e\161\165\145\x75\x65"]); } public function mameiwsayuyquoeq() { Form::symcgieuakksimmu(); Provider::symcgieuakksimmu(); } public function enqueue($wuomgsuaoscwgsmq) { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if ($wuomgsuaoscwgsmq === Constants::iickqyckyaqcaokm && $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() && $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ckeyeaouokcgeqeq()) { $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x6c\157\147\151\156", $eygsasmqycagyayw->get("\x6c\x6f\x67\151\156\56\152\163"))->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); } else { if ($wuomgsuaoscwgsmq === Constants::yuguikokwoymmqem && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->wweuwcaqkkowawsy()) { $eygsasmqycagyayw->wqiosiseiwsamggo($eygsasmqycagyayw->owygwqwawqoiusis("\x6c\157\x67\151\x6e", $eygsasmqycagyayw->get("\154\x6f\x67\x69\x6e\x2e\152\163"))->okawmmwsiuauwsiu()); $eygsasmqycagyayw->wqiosiseiwsamggo($eygsasmqycagyayw->awgyqswkqywwmkye("\154\157\x67\x69\x6e", $eygsasmqycagyayw->get("\154\157\147\151\x6e\56\x63\x73\x73"))); } } } public function emoemcqaomgaycyy($eeamcawaiqocomwy, $sqwmoeogqwooeukc) { if ($ycoeoaakqyskgykq = $this->issssuygyewuaswa($sqwmoeogqwooeukc)) { $igwimgwceysgwimw = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(Provider::soewseycogaoaqsq, $ycoeoaakqyskgykq); if ($igwimgwceysgwimw) { $eeamcawaiqocomwy = $igwimgwceysgwimw; } } return $eeamcawaiqocomwy; } public function issssuygyewuaswa($iseceayacyyqqikm) : ?int { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($iseceayacyyqqikm, true); if (!$ycoeoaakqyskgykq && is_string($iseceayacyyqqikm)) { $mkucggyaiaukqoce = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->woimamkkeyoyauoa(Constants::muqaqimusmckkieq, $iseceayacyyqqikm); if ($mkucggyaiaukqoce) { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce, true); } } return $ycoeoaakqyskgykq; } }
