<?php

$lng = array();
$js_phrases = array();

//-------------------------- language info ----------------------------//
$lng['langname'] = 'Arabic';
$lng['langcode'] = 'ar';
$lng['dir'] = 'rtl';

//---------------------------------------------------------------------//

$lng['registertit'] = 'التسجيل';
$lng['logintit'] = 'الدخول';

$lng['welcometit'] = 'رسالة الترحيب';
$lng['advtit'] = 'اعلان النظام';

$lng['noplugins'] = 'عفواً, لا يوجد اضافات مفعلة';

$lng['home'] = 'الرئيسية';

//-------------------------- User phrases ----------------------------//

$lng['maininfo'] = 'المعلومات الرئيسية';
$lng['profile'] = 'الملف الشخصي';
$lng['settings'] = 'الاعدادات';

$lng['name'] = 'الاسم';
$lng['email'] = 'البريد الإلكتروني';
$lng['username'] = 'اسم المستخدم';
$lng['displayname'] = 'اسم العرض';
$lng['gender'] = 'النوع';
$lng['male'] = 'ذكر';
$lng['female'] = 'انثى';

$lng['password'] = 'كلمة المرور';
$lng['cpassword'] = 'تأكيد كلمة المرور';
$lng['country'] = 'الدولة';
$lng['citystate'] = 'الولاية/المدينة';
$lng['refresh'] = 'تحديث';
$lng['tos'] = 'اتفاقية الاستخدام " ايضاً يمكنك الاطلاع على  ';
$lng['link'] = 'الرابط';
$lng['tosagree'] = 'الموافقة على اتفاقية الخدمة';

$lng['biography'] = 'السيرة الذاتية';
$lng['profilepic'] = 'صورة الملف الشخصي';
$lng['profileedit'] = 'تعديل الملف الشخصي';
$lng['registerdate'] = 'تاريخ التسجيل';

$lng['passwordmail'] = 'كلمة المرور والبريد';
$lng['passwordedit'] = 'تعديل كلمة المرور';
$lng['emailedit'] = 'تعديل البريد الإلكتروني';
$lng['cemail'] = 'تأكيد البريد الإلكتروني';
//-------------------------- Social ----------------------------//
$lng['facebook'] = 'فيسبوك';
$lng['twitter'] = 'تويتر';
$lng['google'] = 'جوجل بلص';
$lng['linkedin'] = 'لينكدان';
$lng['website'] = 'الموقع';
$lng['skype'] = 'سكايب';
$lng['yahoo'] = 'ياهو';
$lng['pinterest'] = 'بنتريست';
$lng['youtube'] = 'يوتيوب';

//-------------------------- Menus ----------------------------//
$lng['hello'] = 'مرحبا,';
$lng['editprofilesettings'] = 'تعديل الملف الشخصي';
$lng['editpasswordemail'] = 'تعديل كلمة المرور والبريد';
$lng['usercp'] = 'لوحة تحكم العضو';
$lng['logout'] = 'تسجيل الخروج';

$lng['notifications'] = 'التنبيهات';
$lng['messages'] = 'الرسائل';

//-------------------------- Buttons ----------------------------//
$lng['submitregister'] = 'تسجيل';
$lng['submitedit'] = 'تعديل';
$lng['reset'] = 'اعادة ضبط';

//-------------------------- Comapny profile ----------------------------//
$lng['comp_fullname'] = 'الاسم الكامل للشركة/الموقع';
$lng['comp_manname'] = 'اسم المدير';
$lng['comp_mantit'] = 'لقب المدير';
$lng['comp_comlice'] = 'رقم السجل التجاري';
$lng['comp_activities'] = 'أنشطة الشركة/الموقع';
$lng['comp_mainbrabadd'] = 'عنوان الفرع الرئيسي';
$lng['comp_mainlandlinephone'] = 'رقم الهاتف الأرضي الاساسي';
$lng['comp_mainmobilephone'] = 'رقم الهاتف المحمول الرئيسي';
$lng['comp_mainfax'] = 'رقم الفاكس الرئيسي';
$lng['comp_compskype'] = 'رقم/حساب السكايب';
$lng['comp_mainemail'] = 'البريد الإلكتروني الأساسي';

//-------------------------- Js response phrases ----------------------------//
//login
$js_phrases['successlogin'] = 'تم تسجيل الدخول بنجاح، مرحبا بك مرة اخرى';
$js_phrases['checkbruteforce'] = 'لقد تجاوزت العدد المسموح به من مرات الدخول الخاطئ';
$js_phrases['errorlogin'] = 'اسم المستخدم و/أو كلمة المرور غير صحيحة، فضلاً اعادة المحاولة';
$js_phrases['logoutsuccess'] = 'تم تسجيل الخروج بنجاح <br><br> جاري الأن توجيهك ....!';

//Register and profile
$js_phrases['successregister'] = 'تم التسجيل بنجاح !';
$js_phrases['errorregister'] = 'حدث خطأ ما، فضلاً المحاولة مرة اخرى';
$js_phrases['notvalidemail'] = 'البريد الإلكتروني الذي تم ادخاله غير صحيح';
$js_phrases['passlenth'] = 'كلمة المرور المُدخلة قصيرة جداً';
$js_phrases['passismissing'] = 'كلمة المرور المُدخلة غير صالحة';
$js_phrases['passdonotmatch'] = 'تأكيد كلمة المرور غير صحيح';
$js_phrases['notvalidusername'] = 'اسم المستخدم المُدخل غير صالح';
$js_phrases['emailalreadyexist'] = 'البريد الإلكتروني المُدخل مستخدم مسبقاً<br><br>اذا كنت قد نسيت كلمة المرور, <a href=\'forgetpass.php\'>اضغط هنا</a>';
$js_phrases['useralreadyexist'] = 'اسم المستخدم المُدخل مستخدم مسبقاً<br><br>اذا كنت قد نسيت كلمة المرور, <a href=\'forgetpass.php\'>اضغط هنا</a>';
$js_phrases['maxsize'] = 'الصورة التي تحاول رفعها تتجاوز الحجم المسموح به';
$js_phrases['invalidfile'] = 'الصورة التي تحاول رفعها غير صحيحة';
$js_phrases['databaseerror'] = 'يوجد مشكلة بقواعد البياات';
$js_phrases['missingfields'] = '<i class=\'glyphicon glyphicon-info-sign\'></i> عفواً، يوجد حقول لم يتم تعبئتها';
$js_phrases['captchawrong'] = '<i class=\'glyphicon glyphicon-info-sign\'></i> رمز التحقق البشري غير صحيح';

$js_phrases['updateprofile'] = 'جاري تحديث الملف الشخصي ...';
$js_phrases['updateprofilesuccess'] = '<br><br>تم تحديث الملف الشخصي بنجاح!';

//header

$lng['menuheader'] = 'القائمة الرئيسية';


?>