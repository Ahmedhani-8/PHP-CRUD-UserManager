## Docker Challenge

أكبر مشكلة واجهتني كانت تشغيل تطبيق PHP داخل Docker مع قاعدة بيانات MySQL
موجودة على جهاز المضيف (XAMPP). ظهرت عدة أخطاء مثل عدم توفر mysqli
وأخطاء في الاتصال بقاعدة البيانات.

الحل كان:
- تثبيت امتدادات `mysqli` و `pdo_mysql` داخل الصورة باستخدام `docker-php-ext-install`.
- استخدام `host.docker.internal` بدلاً من `localhost` في ملف `db_conn.php`
  حتى تستطيع الحاوية الاتصال بخادم MySQL على الجهاز.

## Git / GitHub Lesson

تعلمت أهمية:
- استخدام رسائل كومِت واضحة مثل: `feat:`, `docs:`, `docker:`.
- تنظيم المشروع في مجلدات (`src`, `docs`, `docs/screenshots`).
- إضافة README مفصل حتى يستطيع أي مطوّر تشغيل المشروع بسرعة باستخدام Docker.
