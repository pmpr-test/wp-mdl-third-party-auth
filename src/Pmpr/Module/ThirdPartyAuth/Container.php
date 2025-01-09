<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc5bbc5ec3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ThirdPartyAuth; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\ThirdPartyAuth\Provider\Common; use Pmpr\Module\ThirdPartyAuth\Provider\Google\Google; use Pmpr\Module\ThirdPartyAuth\Provider\Yahoo\Yahoo; abstract class Container extends BaseClass { public function kkcowsyecqiosuko(?string $iwigiqwyskocowwo = '') : ?Common { $owgumcsyqsamiemg = null; switch ($iwigiqwyskocowwo) { case Constants::oowokkckywyoauyu: $owgumcsyqsamiemg = Yahoo::symcgieuakksimmu(); break; case Constants::umookyimwkqqkieq: $owgumcsyqsamiemg = Google::symcgieuakksimmu(); break; } return $owgumcsyqsamiemg; } public function uaoeyuweaaggiosw() : array { $iqsymysgkgosmiys = []; $ukiskwsmqscwauuu = [Constants::umookyimwkqqkieq, Constants::oowokkckywyoauyu]; foreach ($ukiskwsmqscwauuu as $iwigiqwyskocowwo) { if ($this->weysguygiseoukqw($iwigiqwyskocowwo . Constants::yyicwqsqaecyqwco)) { $iqsymysgkgosmiys[$iwigiqwyskocowwo] = $this->kkcowsyecqiosuko($iwigiqwyskocowwo); } } return $iqsymysgkgosmiys; } }
