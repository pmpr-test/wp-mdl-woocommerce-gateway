<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106a66118e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceGateway; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Error; class Parsian extends Gateway { const iaiaosyyygyckcwa = 'LoginAccount'; protected ?string $loginAccount = null; public function iqaamssisiamoeky() { return $this->loginAccount; } public function __construct() { $this->method_title = sprintf(__('%s Gateway', PR__MDL__WOOCOMMERCE_GATEWAY), __('Parsian Bank', PR__MDL__WOOCOMMERCE_GATEWAY)); parent::__construct(); } protected function qiccuiwooiquycsg() { $this->loginAccount = $this->get_option(self::iaiaosyyygyckcwa); } private function mwisgqawgigemoyu() : array { return ['encoding' => 'UTF-8', 'cache_wsdl' => $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms('WSDL_CACHE_NONE', 0), 'soap_version' => 'SOAP_1_1']; } protected function aqmwamyiwgeeymqa($umwqusowiqmyseom) { $qcakkkwickkwyuck = $this->ewekkueqocsemugs('https://pec.shaparak.ir/NewIPGServices/Sale/SaleService.asmx?WSDL', $this->mwisgqawgigemoyu()); if ($qcakkkwickkwyuck) { $smowyuyseuwiaiei = $this->imuokicsysisyuge('IRR'); $qookweymeqawmcwo = $this->miywwkceumyiacom(['Amount' => $smowyuyseuwiaiei, 'OrderId' => date('ymdHis'), 'CallBackUrl' => $this->imkwoeqamegcwwoi(), 'AdditionalData' => '']); $sogksuscggsicmac = $qcakkkwickkwyuck->SalePaymentRequest(['requestData' => $qookweymeqawmcwo]); $mgegoogckgsumooq = $sogksuscggsicmac->SalePaymentRequestResult->Token ?? ''; $iueymcwwscwqkiyq = $sogksuscggsicmac->SalePaymentRequestResult->Status ?? '-1'; if ($iueymcwwscwqkiyq == 0 && $mgegoogckgsumooq > 0) { $this->gwqgmkqcgwwmweom("https://pec.shaparak.ir/NewIPG/?Token={$mgegoogckgsumooq}"); $sogksuscggsicmac = true; } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(wpautop(wptexturize($this->sagusgigmkeysock(self::mqcksmagsgegwsks) . '<br/>خطا: ' . $this->ueeagokqmgisgauy($iueymcwwscwqkiyq)))); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Can not load Soap Client', PR__MDL__WOOCOMMERCE_GATEWAY)); } return $sogksuscggsicmac; } protected function ussowkigumoaoowo($umwqusowiqmyseom) : array { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $iswcokucwmiosiaq = ''; $uamcoiueqaamsqma = ''; $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey('Status'); $ukoikcoywmwowwum = $eiicaiwgqkgsekce->yyqgamuwwakgciey('Token'); if (0 == $iueymcwwscwqkiyq && $ukoikcoywmwowwum > 0) { $qcakkkwickkwyuck = $this->ewekkueqocsemugs('https://pec.shaparak.ir/NewIPGServices/Confirm/ConfirmService.asmx?WSDL', $this->mwisgqawgigemoyu()); if ($qcakkkwickkwyuck) { $qookweymeqawmcwo = $this->miywwkceumyiacom(['Token' => $ukoikcoywmwowwum]); $sogksuscggsicmac = $qcakkkwickkwyuck->ConfirmPayment(['requestData' => $qookweymeqawmcwo]); $gcagqkyqyymieuwq = $sogksuscggsicmac->ConfirmPaymentResult->RRN ?? ''; $iueymcwwscwqkiyq = $sogksuscggsicmac->ConfirmPaymentResult->Status ?? '-1'; if ($iueymcwwscwqkiyq == 0 && $gcagqkyqyymieuwq > 0) { $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; $uamcoiueqaamsqma = sprintf("%s: %s", __('Transaction request number', PR__MDL__WOOCOMMERCE_GATEWAY), $ukoikcoywmwowwum); } else { $iswcokucwmiosiaq = $this->ueeagokqmgisgauy($iueymcwwscwqkiyq); $iueymcwwscwqkiyq = self::sockwoyeosqcegek; } } else { $iueymcwwscwqkiyq = self::sockwoyeosqcegek; } } else { $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } return [Constants::uiwqcumqkgikqyue => [self::oyqcukwqaucsgiem => $ukoikcoywmwowwum], Constants::imkacwmiuiykyuim => $iswcokucwmiosiaq, Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, self::oyqcukwqaucsgiem => $ukoikcoywmwowwum]; } protected function eesoqyeieeemqgeg($icwicymcioeyeyek) { $qookweymeqawmcwo = $this->miywwkceumyiacom(['Token' => $icwicymcioeyeyek['transactionId'] ?? '']); $qcakkkwickkwyuck = $this->ewekkueqocsemugs('https://pec.shaparak.ir/NewIPGServices/Reverse/ReversalService.asmx?WSDL', $this->mwisgqawgigemoyu()); if ($qcakkkwickkwyuck) { $sogksuscggsicmac = $qcakkkwickkwyuck->ReversalRequest(['requestData' => $qookweymeqawmcwo]); $mgegoogckgsumooq = $sogksuscggsicmac->ReversalRequestResult->Token ?? ''; $iueymcwwscwqkiyq = $sogksuscggsicmac->ReversalRequestResult->Status ?? '-1'; if ($iueymcwwscwqkiyq == 0 && $mgegoogckgsumooq > 0) { $ksaameoqigiaoigg = true; } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Error on reversal', PR__MDL__WOOCOMMERCE_GATEWAY)); } } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Can not load Soap Client', PR__MDL__WOOCOMMERCE_GATEWAY)); } return $ksaameoqigiaoigg; } protected function qyeykswoowmwqmai() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('account_config')->saemoowcasogykak(IconInterface::iwayyimcuywiagyy)->gswweykyogmsyawy(__('Bank Account Configuration', PR__MDL__WOOCOMMERCE_GATEWAY))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::iaiaosyyygyckcwa)->kqqqugemmqagucuq()->gswweykyogmsyawy(__('Login Account', PR__MDL__WOOCOMMERCE_GATEWAY))->gucwmccyimoagwcm(__('Enter the PIN Code provided by the bank here.', PR__MDL__WOOCOMMERCE_GATEWAY)))); } public function miywwkceumyiacom($eyagkkkqkwcuygso) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($eyagkkkqkwcuygso, ['LoginAccount' => $this->iqaamssisiamoeky()]); } private function ueeagokqmgisgauy($ymacoouqwcqwwagu) { switch ($ymacoouqwcqwwagu) { case '-32768': $uamcoiueqaamsqma = __('An unknown error has occurred', PR__MDL__WOOCOMMERCE_GATEWAY); break; case '-1552': $uamcoiueqaamsqma = __('Transaction reversal is not allowed', PR__MDL__WOOCOMMERCE_GATEWAY); break; case '-1551': $uamcoiueqaamsqma = __('The transaction has already been reversed', PR__MDL__WOOCOMMERCE_GATEWAY); break; case '-1550': $uamcoiueqaamsqma = __('It is not possible to reverse the transaction in the current state', PR__MDL__WOOCOMMERCE_GATEWAY); break; case '-1549': $uamcoiueqaamsqma = 'زمان مجاز برای درخواست برگشت تراکنش به اتمام رسیده است'; break; case '-1548': $uamcoiueqaamsqma = 'فراخوانی سرویس درخواست پرداخت قبض ناموفق بود'; break; case '-1540': $uamcoiueqaamsqma = 'تاييد تراکنش ناموفق مي باشد'; break; case '-1536': $uamcoiueqaamsqma = 'فراخوانی سرویس درخواست شارژ تاپ آپ ناموفق بود'; break; case '-1533': $uamcoiueqaamsqma = 'تراکنش قبلاً تایید شده است'; break; case '1532': $uamcoiueqaamsqma = 'تراکنش از سوی پذیرنده تایید شد'; break; case '-1531': $uamcoiueqaamsqma = 'تراکنش به دلیل انصراف شما در بانک ناموفق بود'; break; case '-1530': $uamcoiueqaamsqma = 'پذیرنده مجاز به تایید این تراکنش نمی باشد'; break; case '-1528': $uamcoiueqaamsqma = 'اطلاعات پرداخت یافت نشد'; break; case '-1527': $uamcoiueqaamsqma = 'انجام عملیات درخواست پرداخت تراکنش خرید ناموفق بود'; break; case '-1507': $uamcoiueqaamsqma = 'تراکنش برگشت به سوئیچ ارسال شد'; break; case '-1505': $uamcoiueqaamsqma = 'تایید تراکنش توسط پذیرنده انجام شد'; break; case '-132': $uamcoiueqaamsqma = 'مبلغ تراکنش کمتر از حداقل مجاز می باشد'; break; case '-131': $uamcoiueqaamsqma = 'Token نامعتبر می باشد'; break; case '-130': $uamcoiueqaamsqma = 'Token زمان منقضی شده است'; break; case '-128': $uamcoiueqaamsqma = 'قالب آدرس IP معتبر نمی باشد'; break; case '-127': $uamcoiueqaamsqma = 'آدرس اینترنتی معتبر نمی باشد'; break; case '-126': $uamcoiueqaamsqma = 'کد شناسایی پذیرنده معتبر نمی باشد'; break; case '-121': $uamcoiueqaamsqma = 'رشته داده شده بطور کامل عددی نمی باشد'; break; case '-120': $uamcoiueqaamsqma = 'طول داده ورودی معتبر نمی باشد'; break; case '-119': $uamcoiueqaamsqma = 'سازمان نامعتبر می باشد'; break; case '-118': $uamcoiueqaamsqma = 'مقدار ارسال شده عدد نمی باشد'; break; case '-117': $uamcoiueqaamsqma = 'طول رشته کم تر از حد مجاز می باشد'; break; case '-116': $uamcoiueqaamsqma = 'طول رشته بیش از حد مجاز می باشد'; break; case '-115': $uamcoiueqaamsqma = 'شناسه پرداخت نامعتبر می باشد'; break; case '-114': $uamcoiueqaamsqma = 'شناسه قبض نامعتبر می باشد'; break; case '-113': $uamcoiueqaamsqma = 'پارامتر ورودی خالی می باشد'; break; case '-112': $uamcoiueqaamsqma = 'شماره سفارش تکراری است'; break; case '-111': $uamcoiueqaamsqma = 'مبلغ تراکنش بیش از حد مجاز پذیرنده می باشد'; break; case '-108': $uamcoiueqaamsqma = 'قابلیت برگشت تراکنش برای پذیرنده غیر فعال می باشد'; break; case '-107': $uamcoiueqaamsqma = 'قابلیت ارسال تاییده تراکنش برای پذیرنده غیر فعال می باشد'; break; case '-106': $uamcoiueqaamsqma = 'قابلیت شارژ برای پذیرنده غیر فعال می باشد'; break; case '-105': $uamcoiueqaamsqma = 'قابلیت تاپ آپ برای پذیرنده غیر فعال می باشد'; break; case '-104': $uamcoiueqaamsqma = 'قابلیت پرداخت قبض برای پذیرنده غیر فعال می باشد'; break; case '-103': $uamcoiueqaamsqma = 'قابلیت خرید برای پذیرنده غیر فعال می باشد'; break; case '-102': $uamcoiueqaamsqma = 'تراکنش با موفقیت برگشت داده شد'; break; case '-101': $uamcoiueqaamsqma = 'پذیرنده اهراز هویت نشد'; break; case '-100': $uamcoiueqaamsqma = 'پذیرنده غیرفعال می باشد'; break; case '-1': $uamcoiueqaamsqma = 'خطای سرور'; break; case '0': $uamcoiueqaamsqma = 'عملیات موفق می باشد'; break; case '1': $uamcoiueqaamsqma = 'صادرکننده ی کارت از انجام تراکنش صرف نظر کرد'; break; case '2': $uamcoiueqaamsqma = 'عملیات تاییدیه این تراکنش قبلا باموفقیت صورت پذیرفته است'; break; case '3': $uamcoiueqaamsqma = 'پذیرنده ی فروشگاهی نامعتبر می باشد'; break; case '5': $uamcoiueqaamsqma = 'از انجام تراکنش صرف نظر شد'; break; case '6': $uamcoiueqaamsqma = 'بروز خطايي ناشناخته'; break; case '8': $uamcoiueqaamsqma = 'باتشخیص هویت دارنده ی کارت، تراکنش موفق می باشد'; break; case '9': $uamcoiueqaamsqma = 'درخواست رسيده در حال پي گيري و انجام است '; break; case '10': $uamcoiueqaamsqma = 'تراکنش با مبلغي پايين تر از مبلغ درخواستي ( کمبود حساب مشتري ) پذيرفته شده است '; break; case '12': $uamcoiueqaamsqma = 'تراکنش نامعتبر است'; break; case '13': $uamcoiueqaamsqma = 'مبلغ تراکنش نادرست است'; break; case '14': $uamcoiueqaamsqma = 'شماره کارت ارسالی نامعتبر است (وجود ندارد)'; break; case '15': $uamcoiueqaamsqma = 'صادرکننده ی کارت نامعتبراست (وجود ندارد)'; break; case '17': $uamcoiueqaamsqma = 'مشتري درخواست کننده حذف شده است '; break; case '20': $uamcoiueqaamsqma = 'در موقعيتي که سوئيچ جهت پذيرش تراکنش نيازمند پرس و جو از کارت است ممکن است درخواست از کارت ( ترمينال) بنمايد اين پيام مبين نامعتبر بودن جواب است'; break; case '21': $uamcoiueqaamsqma = 'در صورتي که پاسخ به در خواست ترمينا ل نيازمند هيچ پاسخ خاص يا عملکردي نباشيم اين پيام را خواهيم داشت '; break; case '22': $uamcoiueqaamsqma = 'تراکنش مشکوک به بد عمل کردن ( کارت ، ترمينال ، دارنده کارت ) بوده است لذا پذيرفته نشده است'; break; case '30': $uamcoiueqaamsqma = 'قالب پیام دارای اشکال است'; break; case '31': $uamcoiueqaamsqma = 'پذیرنده توسط سوئی پشتیبانی نمی شود'; break; case '32': $uamcoiueqaamsqma = 'تراکنش به صورت غير قطعي کامل شده است ( به عنوان مثال تراکنش سپرده گزاري که از ديد مشتري کامل شده است ولي مي بايست تکميل گردد'; break; case '33': $uamcoiueqaamsqma = 'تاریخ انقضای کارت سپری شده است'; break; case '38': $uamcoiueqaamsqma = 'تعداد دفعات ورود رمزغلط بیش از حدمجاز است. کارت توسط دستگاه ضبط شود'; break; case '39': $uamcoiueqaamsqma = 'کارت حساب اعتباری ندارد'; break; case '40': $uamcoiueqaamsqma = 'عملیات درخواستی پشتیبانی نمی گردد'; break; case '41': $uamcoiueqaamsqma = 'کارت مفقودی می باشد'; break; case '43': $uamcoiueqaamsqma = 'کارت مسروقه می باشد'; break; case '45': $uamcoiueqaamsqma = 'قبض قابل پرداخت نمی باشد'; break; case '51': $uamcoiueqaamsqma = 'موجودی کافی نمی باشد'; break; case '54': $uamcoiueqaamsqma = 'تاریخ انقضای کارت سپری شده است'; break; case '55': $uamcoiueqaamsqma = 'رمز کارت نا معتبر است'; break; case '56': $uamcoiueqaamsqma = 'کارت نا معتبر است'; break; case '57': $uamcoiueqaamsqma = 'انجام تراکنش مربوطه توسط دارنده ی کارت مجاز نمی باشد'; break; case '58': $uamcoiueqaamsqma = 'انجام تراکنش مربوطه توسط پایانه ی انجام دهنده مجاز نمی باشد'; break; case '59': $uamcoiueqaamsqma = 'کارت مظنون به تقلب است'; break; case '61': $uamcoiueqaamsqma = 'مبلغ تراکنش بیش از حد مجاز می باشد'; break; case '62': $uamcoiueqaamsqma = 'کارت محدود شده است'; break; case '63': $uamcoiueqaamsqma = 'تمهیدات امنیتی نقض گردیده است'; break; case '65': $uamcoiueqaamsqma = 'تعداد درخواست تراکنش بیش از حد مجاز می باشد'; break; case '68': $uamcoiueqaamsqma = 'پاسخ لازم براي تکميل يا انجام تراکنش خيلي دير رسيده است'; break; case '69': $uamcoiueqaamsqma = 'تعداد دفعات تکرار رمز از حد مجاز گذشته است '; break; case '75': $uamcoiueqaamsqma = 'تعداد دفعات ورود رمزغلط بیش از حدمجاز است'; break; case '78': $uamcoiueqaamsqma = 'کارت فعال نیست'; break; case '79': $uamcoiueqaamsqma = 'حساب متصل به کارت نا معتبر است یا دارای اشکال است'; break; case '80': $uamcoiueqaamsqma = 'درخواست تراکنش رد شده است'; break; case '81': $uamcoiueqaamsqma = 'کارت پذيرفته نشد'; break; case '83': $uamcoiueqaamsqma = 'سرويس دهنده سوئيچ کارت تراکنش را نپذيرفته است'; break; case '84': $uamcoiueqaamsqma = 'در تراکنشهايي که انجام آن مستلزم ارتباط با صادر کننده است در صورت فعال نبودن صادر کننده اين پيام در پاسخ ارسال خواهد شد '; break; case '91': $uamcoiueqaamsqma = 'سيستم صدور مجوز انجام تراکنش موقتا غير فعال است و يا  زمان تعيين شده براي صدور مجوز به پايان رسيده است'; break; case '92': $uamcoiueqaamsqma = 'مقصد تراکنش پيدا نشد'; break; case '93': $uamcoiueqaamsqma = 'امکان تکميل تراکنش وجود ندارد'; break; default: $uamcoiueqaamsqma = 'پرداخت تراکنش به دلیل انصراف در صفحه بانک ناموفق بود'; break; } return $uamcoiueqaamsqma; } }
