<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ecc6d7684             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ThirdPartyAuth; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\ThirdPartyAuth\Provider\Common; use Pmpr\Module\ThirdPartyAuth\Provider\Google\Google; use Pmpr\Module\ThirdPartyAuth\Provider\Yahoo\Yahoo; abstract class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function kkcowsyecqiosuko(?string $iwigiqwyskocowwo = '') : ?Common { $owgumcsyqsamiemg = null; switch ($iwigiqwyskocowwo) { case Constants::oowokkckywyoauyu: $owgumcsyqsamiemg = Yahoo::symcgieuakksimmu(); goto mosqsmqimqgqoase; case Constants::umookyimwkqqkieq: $owgumcsyqsamiemg = Google::symcgieuakksimmu(); goto mosqsmqimqgqoase; } omugkkesagcyagmk: mosqsmqimqgqoase: return $owgumcsyqsamiemg; } public function uaoeyuweaaggiosw() : array { $iqsymysgkgosmiys = []; $ukiskwsmqscwauuu = [Constants::umookyimwkqqkieq, Constants::oowokkckywyoauyu]; foreach ($ukiskwsmqscwauuu as $iwigiqwyskocowwo) { if (!$this->weysguygiseoukqw($iwigiqwyskocowwo . Constants::yyicwqsqaecyqwco)) { goto iggyqogweyosuikc; } $iqsymysgkgosmiys[$iwigiqwyskocowwo] = $this->kkcowsyecqiosuko($iwigiqwyskocowwo); iggyqogweyosuikc: kqksuugcgsyeoayy: } ygcsmkuycoagwyou: return $iqsymysgkgosmiys; } }