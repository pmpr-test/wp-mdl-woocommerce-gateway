<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fbe928209             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceGateway; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Mellat extends Gateway { const uoewmoeookiweeac = 'https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl'; const sweaamyegaowkuiq = 'http://interfaces.core.sw.bps.com/'; protected ?string $terminal = null; protected ?string $username = null; protected ?string $password = null; public function __construct() { $this->method_title = sprintf(__('%s Gateway', PR__MDL__WOOCOMMERCE_GATEWAY), __('Mellat Bank', PR__MDL__WOOCOMMERCE_GATEWAY)); parent::__construct(); } protected function qiccuiwooiquycsg() { $this->terminal = $this->get_option(Constants::gcegwkuowcquosok); $this->username = $this->get_option(Constants::csiaccacwgeeqwwo); $this->password = $this->get_option(Constants::akywgoyaseymiyka); } public function amcquiasoqygoyuc() { return $this->username; } public function iuqugigaawguosig() { return $this->password; } public function qkgggseyuwcyqouo() { return $this->terminal; } protected function qyeykswoowmwqmai() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('account_config')->saemoowcasogykak(IconInterface::iwayyimcuywiagyy)->gswweykyogmsyawy(__('Bank Account Configuration', PR__MDL__WOOCOMMERCE_GATEWAY))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::gcegwkuowcquosok)->gswweykyogmsyawy(__('Terminal ID', PR__MDL__WOOCOMMERCE_GATEWAY))->kqqqugemmqagucuq()->gucwmccyimoagwcm(__('Mellat Bank portal terminal number', PR__MDL__WOOCOMMERCE_GATEWAY)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__('Username', PR__MDL__WOOCOMMERCE_GATEWAY))->kqqqugemmqagucuq()->gucwmccyimoagwcm(__('Mellat Bank portal username', PR__MDL__WOOCOMMERCE_GATEWAY)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->gswweykyogmsyawy(__('Password', PR__MDL__WOOCOMMERCE_GATEWAY))->kqqqugemmqagucuq()->gucwmccyimoagwcm(__('Mellat Bank portal password', PR__MDL__WOOCOMMERCE_GATEWAY)))); } protected function aqmwamyiwgeeymqa($umwqusowiqmyseom) { $smowyuyseuwiaiei = $this->imuokicsysisyuge('IRR'); $qsmogugokoieokgw = date('ymdHis'); $ekiuyucoiagmscgy = $this->imkwoeqamegcwwoi(); $gwogaekoayemugqs = $this->ayeawyuummwiieyi('order_number'); $ukwokcuqauuosmoo = sprintf(__('Order Number # %s', PR__MDL__WOOCOMMERCE_GATEWAY), $gwogaekoayemugqs); $qcakkkwickkwyuck = $this->ewekkueqocsemugs(self::uoewmoeookiweeac); $mgsouageeauuamse = date("Ymd"); $gceecicmaecgsiww = date("His"); $scuawkiakquoyqyw = false; $kyogmqccmyksmeyy = 0; $oauoakmumkwscagw = 0; $ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus(); if ($ocuammmyasymmyuc) { $scuawkiakquoyqyw = true; $oauoakmumkwscagw = $ocuammmyasymmyuc; } $qookweymeqawmcwo = $this->miywwkceumyiacom(['amount' => $smowyuyseuwiaiei, 'orderId' => $qsmogugokoieokgw, 'payerId' => $kyogmqccmyksmeyy, 'localDate' => $mgsouageeauuamse, 'localTime' => $gceecicmaecgsiww, 'callBackUrl' => $ekiuyucoiagmscgy, 'additionalData' => $ukwokcuqauuosmoo]); $sogksuscggsicmac = $qcakkkwickkwyuck->call('bpPayRequest', $qookweymeqawmcwo, self::sweaamyegaowkuiq); if ($qcakkkwickkwyuck->fault) { $scuawkiakquoyqyw = true; $oauoakmumkwscagw = $this->sqmuqsscmimwqoki('ResCode'); } else { $ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus(); $wgmmgqouueiyakow = $sogksuscggsicmac; if ($ocuammmyasymmyuc) { $scuawkiakquoyqyw = true; $oauoakmumkwscagw = $ocuammmyasymmyuc; } else { $wcgmoqucoyqgmicy = explode(',', $wgmmgqouueiyakow); $aycegyeagyyeyaqm = $wcgmoqucoyqgmicy[0]; if ($aycegyeagyyeyaqm == "0") { $ycyucwoysmwkgiui = __('Connecting to the bank .....', PR__MDL__WOOCOMMERCE_GATEWAY); $ycyucwoysmwkgiui = $this->sscegwueamckwmcy('woocommerce_payment_mellat_gateway_notice', $ycyucwoysmwkgiui, $umwqusowiqmyseom->get_id()); if ($ycyucwoysmwkgiui) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yiggueaiwiygoiyi($ycyucwoysmwkgiui); } $this->cqscqicucmeamkyq('woocommerce_payment_mellat_gateway_before_send', $umwqusowiqmyseom->get_id()); echo $this->iuygowkemiiwqmiw(Constants::yquayuasseumiiii, ['ref_id' => $wcgmoqucoyqgmicy[1], Constants::uqgcmmosieyimiku => 'https://bpm.shaparak.ir/pgwchannel/startpay.mellat']); } else { $scuawkiakquoyqyw = true; $oauoakmumkwscagw = $aycegyeagyyeyaqm; } } } $iswcokucwmiosiaq = ''; if ($scuawkiakquoyqyw) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->ueeagokqmgisgauy($oauoakmumkwscagw)); } return $iswcokucwmiosiaq; } public function miywwkceumyiacom($eyagkkkqkwcuygso) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($eyagkkkqkwcuygso, ['userName' => $this->amcquiasoqygoyuc(), 'terminalId' => $this->qkgggseyuwcyqouo(), 'userPassword' => $this->iuqugigaawguosig()]); } protected function ussowkigumoaoowo($umwqusowiqmyseom) : array { $ukoikcoywmwowwum = $this->sqmuqsscmimwqoki('SaleReferenceId', null); $this->iwoykscaosqmksku($ukoikcoywmwowwum); $qcakkkwickkwyuck = $this->ewekkueqocsemugs(self::uoewmoeookiweeac); $ouocmikcoimqskck = 0; $iswcokucwmiosiaq = ''; $iueymcwwscwqkiyq = ''; $uamcoiueqaamsqma = ''; $aycegyeagyyeyaqm = $this->sqmuqsscmimwqoki('ResCode', null); if ($aycegyeagyyeyaqm == 0) { $iiwmeimguameeome = ''; if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; } else { $qsmogugokoieokgw = $this->sqmuqsscmimwqoki('SaleOrderId'); $eyagkkkqkwcuygso = $this->ysoiykisqcssuuke($qsmogugokoieokgw); $sogksuscggsicmac = $qcakkkwickkwyuck->call('bpVerifyRequest', $eyagkkkqkwcuygso, self::sweaamyegaowkuiq); if ($qcakkkwickkwyuck->fault) { $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; } else { if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; } else { if ($sogksuscggsicmac == 0) { if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; } else { $eyagkkkqkwcuygso = $this->ysoiykisqcssuuke($qsmogugokoieokgw); $sogksuscggsicmac = $qcakkkwickkwyuck->call('bpInquiryRequest', $eyagkkkqkwcuygso, self::sweaamyegaowkuiq); if ($sogksuscggsicmac == 0) { if ($qcakkkwickkwyuck->fault) { $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; } else { if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; } else { $uqwksweqaawueieq = 1; } } } else { $iiwmeimguameeome = 0; $uqwksweqaawueieq = 0; } } } else { $iiwmeimguameeome = 0; $uqwksweqaawueieq = 0; } } } } if ($uqwksweqaawueieq == 1) { if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { $uqwksweqaawueieq = 0; } else { $qsmogugokoieokgw = $this->sqmuqsscmimwqoki('SaleOrderId'); $eyagkkkqkwcuygso = $this->ysoiykisqcssuuke($qsmogugokoieokgw); $sogksuscggsicmac = $qcakkkwickkwyuck->call('bpSettleRequest', $eyagkkkqkwcuygso, self::sweaamyegaowkuiq); if ($sogksuscggsicmac == 0) { if (!$qcakkkwickkwyuck->fault) { if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; } else { $qiiwsqukiueccuqw = 0; $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; $uqwksweqaawueieq = 1; $ukoikcoywmwowwum = $this->sqmuqsscmimwqoki('SaleReferenceId'); } } else { $uqwksweqaawueieq = 0; } } else { $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; } } } if ($iiwmeimguameeome == 1) { $qsmogugokoieokgw = $this->sqmuqsscmimwqoki('SaleOrderId'); $eyagkkkqkwcuygso = $this->ysoiykisqcssuuke($qsmogugokoieokgw); $sogksuscggsicmac = $qcakkkwickkwyuck->call('bpReversalRequest', $eyagkkkqkwcuygso, self::sweaamyegaowkuiq); if (!$qcakkkwickkwyuck->fault) { if (!$qcakkkwickkwyuck->euekiyuksecoccus()) { $qiiwsqukiueccuqw = $sogksuscggsicmac; $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; if ($sogksuscggsicmac == 0) { $ouocmikcoimqskck = 2; } else { $ouocmikcoimqskck = 1; } } } } if (!in_array($iueymcwwscwqkiyq, [Constants::amcogigwsaqssuai, Constants::moimkuyueiyqwyki], true)) { $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } $aycegyeagyyeyaqm = $this->sqmuqsscmimwqoki('ResCode', null); if ($iueymcwwscwqkiyq == Constants::uasuowkaguiwoouw) { $qiiwsqukiueccuqw = $aycegyeagyyeyaqm; if ($aycegyeagyyeyaqm == 17) { $qiiwsqukiueccuqw = 0; $iueymcwwscwqkiyq = Constants::moimkuyueiyqwyki; } } } else { if ($aycegyeagyyeyaqm == 17) { $qiiwsqukiueccuqw = 0; $iueymcwwscwqkiyq = Constants::moimkuyueiyqwyki; $ukoikcoywmwowwum = $this->sqmuqsscmimwqoki('SaleReferenceId', null); } else { $qiiwsqukiueccuqw = $aycegyeagyyeyaqm; $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; $ukoikcoywmwowwum = $this->sqmuqsscmimwqoki('SaleReferenceId', null); } } $emcqymoquqcysyui = $this->sqmuqsscmimwqoki('SaleOrderId', null); switch ($iueymcwwscwqkiyq) { case Constants::amcogigwsaqssuai: $uamcoiueqaamsqma = sprintf("%s: %s", __('Transaction request number', PR__MDL__WOOCOMMERCE_GATEWAY), $emcqymoquqcysyui); break; case Constants::moimkuyueiyqwyki: if (!isset($qiiwsqukiueccuqw)) { $qiiwsqukiueccuqw = $this->sqmuqsscmimwqoki('ResCode', null); } $uamcoiueqaamsqma = sprintf(__('Transaction canceled because of: %s, resCode: %s', PR__MDL__WOOCOMMERCE_GATEWAY), $this->ueeagokqmgisgauy($qiiwsqukiueccuqw), $aycegyeagyyeyaqm); $iswcokucwmiosiaq = $uamcoiueqaamsqma; switch ($ouocmikcoimqskck) { case 1: $umwqusowiqmyseom->add_order_note(__("The payment amount must be returned to the user's account because a system error occurred while returning the amount.", PR__MDL__WOOCOMMERCE_GATEWAY), 1); break; case 2: $umwqusowiqmyseom->add_order_note(__('The amount paid by the user was returned through the bank.', PR__MDL__WOOCOMMERCE_GATEWAY), 1); break; } break; case Constants::uasuowkaguiwoouw: if (isset($qiiwsqukiueccuqw)) { $iswcokucwmiosiaq = sprintf(__('Transaction failed because of: %s, resCode: %s', PR__MDL__WOOCOMMERCE_GATEWAY), $this->ueeagokqmgisgauy($qiiwsqukiueccuqw), $aycegyeagyyeyaqm); $uamcoiueqaamsqma = $iswcokucwmiosiaq; } break; } $icwicymcioeyeyek = ['sale_order_id' => $emcqymoquqcysyui, self::oyqcukwqaucsgiem => $ukoikcoywmwowwum]; return compact('status', 'transactionId', 'error', 'message', 'data'); } public function ysoiykisqcssuuke($qsmogugokoieokgw) { $ekiiqoqckggacmos = $this->sqmuqsscmimwqoki('SaleReferenceId', null); $emcqymoquqcysyui = $this->sqmuqsscmimwqoki('SaleOrderId', null); return $this->miywwkceumyiacom(['orderId' => $qsmogugokoieokgw, 'saleOrderId' => $emcqymoquqcysyui, 'saleReferenceId' => $ekiiqoqckggacmos]); } protected function auqyiaissiuomqgs() : array { $kqmcoiicsmgwaisg = parent::auqyiaissiuomqgs(); return array_merge($kqmcoiicsmgwaisg, ['sale_order_id' => __('Sale Order ID', PR__MDL__WOOCOMMERCE_GATEWAY)]); } private function ueeagokqmgisgauy($ymacoouqwcqwwagu) { switch ($ymacoouqwcqwwagu) { case 'settle': $uamcoiueqaamsqma = __('Manual Settel operation performed successfully.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case -2: case -1: $uamcoiueqaamsqma = __('Failure in connection with the bank.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 11: $uamcoiueqaamsqma = __('Card number is not valid.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 12: $uamcoiueqaamsqma = __('Inventory is not enough.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 13: $uamcoiueqaamsqma = __('Your second password is incorrect.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 14: $uamcoiueqaamsqma = __('The password enter times is more than threshold.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 15: $uamcoiueqaamsqma = __('The card is not valid.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 16: $uamcoiueqaamsqma = __('Withdraw funds is more than allowed threshold.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 17: $uamcoiueqaamsqma = __('You have stopped transacting.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 18: $uamcoiueqaamsqma = __('The card has expired.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 19: $uamcoiueqaamsqma = __('Amount is more than allowed threshold.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 111: $uamcoiueqaamsqma = __('Invalid card issuer.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 112: $uamcoiueqaamsqma = __('Card issuer switch error has occurred.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 113: $uamcoiueqaamsqma = __('No response was received from the card issuer.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 114: $uamcoiueqaamsqma = __('The cardholder is not allowed to perform this transaction.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 21: $uamcoiueqaamsqma = __('The acceptor is not valid.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 23: $uamcoiueqaamsqma = __('A security error has occurred.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 24: $uamcoiueqaamsqma = __('The user information of the acceptor is not valid.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 25: $uamcoiueqaamsqma = __('The amount is invalid.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 31: $uamcoiueqaamsqma = __('The answer is invalid.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 32: $uamcoiueqaamsqma = __('The format of the entered information is incorrect.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 33: $uamcoiueqaamsqma = __('Invalid account.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 34: $uamcoiueqaamsqma = __('A system error has occurred.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 35: $uamcoiueqaamsqma = __('Invalid date.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 41: $uamcoiueqaamsqma = __('The request number is duplicate.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 42: $uamcoiueqaamsqma = __('There is no such transaction.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 43: $uamcoiueqaamsqma = __('Verify has already been requested.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 44: $uamcoiueqaamsqma = __('Verify request not found.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 45: $uamcoiueqaamsqma = __('The transaction is already Settle.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 46: $uamcoiueqaamsqma = __('The transaction is not Settle.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 47: $uamcoiueqaamsqma = __('Settle transaction not found.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 48: $uamcoiueqaamsqma = __('The transaction has already been reversed.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 49: $uamcoiueqaamsqma = __('Refund transaction not found.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 51: $uamcoiueqaamsqma = __('The transaction is duplicate.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 54: $uamcoiueqaamsqma = __('No reference transaction available.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 55: $uamcoiueqaamsqma = __('The transaction is invalid.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 61: $uamcoiueqaamsqma = __('An error occurred while depositing.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 412: $uamcoiueqaamsqma = __('Invoice ID is incorrect.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 413: $uamcoiueqaamsqma = __('The payment ID is incorrect.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 414: $uamcoiueqaamsqma = __('The issuing organization is not valid.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 415: $uamcoiueqaamsqma = __('Session timeout.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 416: $uamcoiueqaamsqma = __('An error occurred while recording the information.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 417: $uamcoiueqaamsqma = __('Invalid payer ID.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 418: $uamcoiueqaamsqma = __('There was a problem defining the customer information.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 419: $uamcoiueqaamsqma = __('Excessive data entry is allowed.', PR__MDL__WOOCOMMERCE_GATEWAY); break; case 421: $uamcoiueqaamsqma = __('IP is not valid.', PR__MDL__WOOCOMMERCE_GATEWAY); break; default: $uamcoiueqaamsqma = sprintf(__('A system error occurred while paying: %s', PR__MDL__WOOCOMMERCE_GATEWAY), $ymacoouqwcqwwagu); } return $uamcoiueqaamsqma; } }
