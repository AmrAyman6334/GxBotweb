<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GX Bot - سياسة الخصوصية</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .privacy-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 8rem 5% 4rem;
        }

        .privacy-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .privacy-header h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #00ffff 0%, #ff007f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .privacy-header p {
            color: #b9bbbe;
            font-size: 1.1rem;
        }

        .privacy-content {
            background: rgba(13, 2, 33, 0.8);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(0, 255, 255, 0.2);
            border-radius: 20px;
            padding: 3rem;
        }

        .privacy-section {
            margin-bottom: 2.5rem;
        }

        .privacy-section h2 {
            color: #00ffff;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
        }

        .privacy-section h3 {
            color: #ff007f;
            font-size: 1.4rem;
            margin: 1.5rem 0 0.8rem;
            text-shadow: 0 0 10px rgba(255, 0, 127, 0.3);
        }

        .privacy-section p {
            color: #b9bbbe;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .privacy-section ul {
            color: #b9bbbe;
            line-height: 1.8;
            margin-right: 2rem;
            margin-bottom: 1rem;
        }

        .privacy-section li {
            margin-bottom: 0.5rem;
        }

        .highlight {
            color: #00ffff;
            font-weight: 600;
        }

        .important-notice {
            background: rgba(255, 0, 127, 0.1);
            border: 2px solid rgba(255, 0, 127, 0.3);
            border-radius: 12px;
            padding: 1.5rem;
            margin: 1.5rem 0;
        }

        .important-notice p {
            color: #ff007f;
            font-weight: 600;
            margin: 0;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
        }

        .data-table th,
        .data-table td {
            border: 1px solid rgba(0, 255, 255, 0.2);
            padding: 1rem;
            text-align: right;
        }

        .data-table th {
            background: rgba(0, 255, 255, 0.1);
            color: #00ffff;
            font-weight: 600;
        }

        .data-table td {
            color: #b9bbbe;
        }

        .last-updated {
            text-align: center;
            color: #b9bbbe;
            font-style: italic;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(0, 255, 255, 0.2);
        }
    </style>

</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Privacy Container -->
    <div class="privacy-container">
        <div class="privacy-header">
            <h1>سياسة الخصوصية 🔒</h1>
            <p>نحن نحترم خصوصيتك ونلتزم بحماية بياناتك الشخصية</p>
        </div>

        <div class="privacy-content">
            <div class="important-notice">
                <p>⚠️ آخر تحديث: 29 سبتمبر 2025 - يرجى مراجعة هذه السياسة بانتظام للاطلاع على أي تغييرات</p>
            </div>

            <div class="privacy-section">
                <h2>1. المقدمة</h2>
                <p>تصف سياسة الخصوصية هذه كيفية قيام <span class="highlight">GX Bot</span> ("نحن" أو "لنا" أو "خاصتنا") بجمع واستخدام وحماية ومشاركة معلوماتك الشخصية عند استخدامك لخدماتنا على Discord.</p>
                <p>باستخدامك لـ GX Bot، فإنك توافق على جمع واستخدام المعلومات وفقاً لهذه السياسة.</p>
            </div>

            <div class="privacy-section">
                <h2>2. المعلومات التي نجمعها</h2>
                
                <h3>2.1 المعلومات التي تقدمها مباشرة</h3>
                <p>عند استخدامك لـ GX Bot، قد نجمع المعلومات التالية:</p>
                <ul>
                    <li><span class="highlight">معرف المستخدم (User ID):</span> معرفك الفريد على Discord</li>
                    <li><span class="highlight">اسم المستخدم:</span> اسمك على Discord</li>
                    <li><span class="highlight">معرف السيرفر (Server ID):</span> معرف السيرفرات التي تستخدم فيها البوت</li>
                    <li><span class="highlight">الأوامر المستخدمة:</span> سجل الأوامر التي تنفذها</li>
                    <li><span class="highlight">الإعدادات:</span> تفضيلاتك وإعدادات السيرفر</li>
                </ul>

                <h3>2.2 المعلومات التي نجمعها تلقائياً</h3>
                <ul>
                    <li>معلومات الاستخدام وأوقات النشاط</li>
                    <li>الرسائل التي يتفاعل معها البوت (للمراقبة والحماية)</li>
                    <li>بيانات الأداء والأخطاء التقنية</li>
                    <li>عنوان IP (للأمان فقط)</li>
                </ul>

                <h3>2.3 البيانات المحفوظة</h3>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>نوع البيانات</th>
                            <th>مدة الحفظ</th>
                            <th>الغرض</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>معلومات المستخدم الأساسية</td>
                            <td>طوال فترة استخدام الخدمة</td>
                            <td>تقديم الخدمة</td>
                        </tr>
                        <tr>
                            <td>سجل الأوامر</td>
                            <td>30 يوماً</td>
                            <td>التحسين والدعم</td>
                        </tr>
                        <tr>
                            <td>إعدادات السيرفر</td>
                            <td>حتى إزالة البوت</td>
                            <td>حفظ التفضيلات</td>
                        </tr>
                        <tr>
                            <td>سجلات الأخطاء</td>
                            <td>90 يوماً</td>
                            <td>الصيانة التقنية</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="privacy-section">
                <h2>3. كيف نستخدم معلوماتك</h2>
                <p>نستخدم المعلومات التي نجمعها للأغراض التالية:</p>
                <ul>
                    <li><span class="highlight">تقديم الخدمة:</span> تشغيل وتحسين وظائف البوت</li>
                    <li><span class="highlight">التخصيص:</span> تقديم تجربة مخصصة بناءً على تفضيلاتك</li>
                    <li><span class="highlight">الأمان:</span> حماية المستخدمين من السبام والمحتوى الضار</li>
                    <li><span class="highlight">التحسين:</span> تحليل الاستخدام لتحسين الميزات</li>
                    <li><span class="highlight">الدعم:</span> الرد على استفساراتك ومساعدتك في حل المشاكل</li>
                    <li><span class="highlight">الامتثال القانوني:</span> الالتزام بالقوانين واللوائح</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>4. مشاركة المعلومات</h2>
                <p>نحن <span class="highlight">لا نبيع</span> معلوماتك الشخصية لأطراف ثالثة. قد نشارك معلوماتك في الحالات التالية فقط:</p>
                
                <h3>4.1 مقدمو الخدمات</h3>
                <p>قد نشارك المعلومات مع مقدمي خدمات موثوقين يساعدوننا في تشغيل الخدمة، مثل:</p>
                <ul>
                    <li>خدمات الاستضافة السحابية</li>
                    <li>خدمات قواعد البيانات</li>
                    <li>خدمات التحليلات</li>
                </ul>

                <h3>4.2 المتطلبات القانونية</h3>
                <p>قد نكشف عن معلوماتك إذا كان ذلك مطلوباً بموجب القانون أو لحماية حقوقنا أو حقوق الآخرين.</p>

                <h3>4.3 Discord</h3>
                <p>نحن نستخدم Discord API ونلتزم بشروط خدمة Discord وسياسة الخصوصية الخاصة بهم.</p>
            </div>

            <div class="privacy-section">
                <h2>5. أمان البيانات</h2>
                <p>نتخذ تدابير أمنية مناسبة لحماية معلوماتك من الوصول غير المصرح به أو التغيير أو الإفصاح أو التدمير:</p>
                <ul>
                    <li>تشفير البيانات أثناء النقل والتخزين</li>
                    <li>التحكم في الوصول والمصادقة</li>
                    <li>المراقبة الأمنية المستمرة</li>
                    <li>النسخ الاحتياطي المنتظم</li>
                    <li>مراجعات الأمان الدورية</li>
                </ul>
                
                <div class="important-notice">
                    <p>⚠️ ملاحظة: لا يمكن ضمان الأمان الكامل عبر الإنترنت، ولكننا نبذل قصارى جهدنا لحماية بياناتك.</p>
                </div>
            </div>

            <div class="privacy-section">
                <h2>6. حقوقك</h2>
                <p>لديك الحقوق التالية فيما يتعلق ببياناتك الشخصية:</p>
                <ul>
                    <li><span class="highlight">الوصول:</span> طلب نسخة من بياناتك الشخصية</li>
                    <li><span class="highlight">التصحيح:</span> طلب تصحيح المعلومات غير الدقيقة</li>
                    <li><span class="highlight">الحذف:</span> طلب حذف بياناتك الشخصية</li>
                    <li><span class="highlight">التقييد:</span> طلب تقييد معالجة بياناتك</li>
                    <li><span class="highlight">الاعتراض:</span> الاعتراض على معالجة بياناتك</li>
                    <li><span class="highlight">النقل:</span> طلب نقل بياناتك إلى خدمة أخرى</li>
                </ul>
                <p>لممارسة أي من هذه الحقوق، يرجى التواصل معنا عبر: <span class="highlight">privacy@gxbot.com</span></p>
            </div>

            <div class="privacy-section">
                <h2>7. الاحتفاظ بالبيانات</h2>
                <p>نحتفظ بمعلوماتك الشخصية فقط طالما كان ذلك ضرورياً للأغراض المذكورة في هذه السياسة. عند:</p>
                <ul>
                    <li>إزالة البوت من السيرفر: يتم حذف إعدادات السيرفر خلال 30 يوماً</li>
                    <li>حذف حسابك: يتم حذف بياناتك الشخصية خلال 90 يوماً</li>
                    <li>طلب الحذف: نقوم بحذف بياناتك خلال 30 يوماً من الطلب</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>8. خصوصية الأطفال</h2>
                <p>خدماتنا غير موجهة للأطفال دون سن 13 عاماً. نحن لا نجمع عن قصد معلومات شخصية من الأطفال. إذا كنت والداً وتعتقد أن طفلك قد قدم لنا معلومات شخصية، يرجى الاتصال بنا.</p>
            </div>

            <div class="privacy-section">
                <h2>9. ملفات تعريف الارتباط (Cookies)</h2>
                <p>نحن نستخدم ملفات تعريف الارتباط والتقنيات المشابهة على موقعنا الإلكتروني لـ:</p>
                <ul>
                    <li>تذكر تفضيلاتك وإعداداتك</li>
                    <li>تحليل استخدام الموقع</li>
                    <li>تحسين تجربة المستخدم</li>
                </ul>
                <p>يمكنك التحكم في ملفات تعريف الارتباط من خلال إعدادات المتصفح الخاص بك.</p>
            </div>

            <div class="privacy-section">
                <h2>10. التغييرات على هذه السياسة</h2>
                <p>قد نقوم بتحديث سياسة الخصوصية هذه من وقت لآخر. سنخطرك بأي تغييرات جوهرية عن طريق:</p>
                <ul>
                    <li>نشر السياسة الجديدة على موقعنا</li>
                    <li>إرسال إشعار عبر Discord</li>
                    <li>إرسال بريد إلكتروني (للمشتركين في Premium)</li>
                </ul>
                <p>ننصحك بمراجعة هذه الصفحة بشكل دوري للاطلاع على أي تحديثات.</p>
            </div>

            <div class="privacy-section">
                <h2>11. النقل الدولي للبيانات</h2>
                <p>قد يتم نقل معلوماتك ومعالجتها في دول أخرى غير بلد إقامتك. نضمن أن جميع عمليات النقل تتم وفقاً للمعايير القانونية المعمول بها.</p>
            </div>

            <div class="privacy-section">
                <h2>12. الاتصال بنا</h2>
                <p>إذا كان لديك أي أسئلة أو مخاوف بشأن سياسة الخصوصية هذه، يمكنك التواصل معنا عبر:</p>
                <ul>
                    <li><span class="highlight">البريد الإلكتروني:</span> privacy@gxbot.com</li>
                    <li><span class="highlight">سيرفر Discord:</span> انضم لسيرفر الدعم الرسمي</li>
                    <li><span class="highlight">الموقع:</span> <a href="support.php" style="color: #00ffff;">صفحة الدعم</a></li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2>13. الموافقة</h2>
                <p>باستخدامك لـ GX Bot، فإنك توافق على جمع واستخدام المعلومات كما هو موضح في هذه السياسة. إذا كنت لا توافق على أي جزء من هذه السياسة، يجب عليك التوقف عن استخدام خدماتنا.</p>
            </div>

            <div class="last-updated">
                آخر تحديث: 29 سبتمبر 2025 | سياسة الخصوصية النسخة 2.0
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>