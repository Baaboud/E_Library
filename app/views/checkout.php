<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/ar.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="assets/css/steps.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>E-library</title>
</head>

<body>
    <?php require("includes/pop.php"); ?>
    <?php require("includes/header.php"); ?>

    <div class="container items-center">
        <div class="row items-center">
            <h1> <i class="fa fa-shopping-cart"> السلة </i></h1>
            <span> (3 منتجات) </span>
        </div>
    </div>

    <div class="container center row space-between shopping-cart">
        <div class="cart-body">
            <div class="products">
                <div class="product">
                    <div class="product-info row space-between">
                        <div class="row items-center">
                            <img src="assets/images/book.jpg" alt="">
                            <div class="title">
                                <h3>البداية والنهاية الجزء الاول (كتاب الكتروني)</h3>
                                <i>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</i>
                                <div class="note">
                                    <b>ملاحظة: </b><span>هذا المنتج رقمي وسيتم توصيله من خلال بالبريد الالكتروني</span>
                                    <p><a href="">كيفية الحصول على المنتج؟</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="counter-container">
                            <p class="counter-price row items-center"><b class="red-text"> 3.99 </b> ر.س </p>
                            <div>
                                <div class="counter">
                                    <span>1</span>
                                    <div class="counter-btns">
                                        <button>+</button>
                                        <button>-</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p><i class="fa fa-window-close"></i> حذف </p>
                </div>

                <div class="product">
                    <div class="product-info row space-between">
                        <div class="row items-center">
                            <img src="assets/images/book.jpg" alt="">
                            <div class="title">
                                <h3>البداية والنهاية الجزء الاول (كتاب الكتروني)</h3>
                                <i>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</i>
                                <div class="note">
                                    <b>ملاحظة: </b><span>هذا المنتج رقمي وسيتم توصيله من خلال بالبريد الالكتروني</span>
                                    <p><a href="">كيفية الحصول على المنتج؟</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="counter-container">
                            <p class="counter-price row items-center"><b class="red-text"> 3.99 </b> ر.س </p>
                            <div>
                                <div class="counter">
                                    <span>1</span>
                                    <div class="counter-btns">
                                        <button>+</button>
                                        <button>-</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p><i class="fa fa-window-close"></i> حذف </p>
                </div>

                <div class="product">
                    <div class="product-info row space-between">
                        <div class="row items-center">
                            <img src="assets/images/book.jpg" alt="">
                            <div class="title">
                                <h3>البداية والنهاية الجزء الاول (كتاب الكتروني)</h3>
                                <i>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</i>
                                <div class="note">
                                    <b>ملاحظة: </b><span>هذا المنتج رقمي وسيتم توصيله من خلال بالبريد الالكتروني</span>
                                    <p><a href="">كيفية الحصول على المنتج؟</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="counter-container">
                            <p class="counter-price row items-center"><b class="red-text"> 3.99 </b> ر.س </p>
                            <div>
                                <div class="counter">
                                    <span>1</span>
                                    <div class="counter-btns">
                                        <button>+</button>
                                        <button>-</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p><i class="fa fa-window-close"></i> حذف </p>
                </div>
            </div>
        </div>
        <div class="cart-price container">
            <div class="cart-info">
                <div class="top-cart">
                    <div class="row space-between">
                        <span class="bold-text">المجموع</span>
                        <p><b class="bold-text">68.97</b> ر.س </p>
                    </div>
                    <div class="row space-between">
                        <span class="bold-text">تكاليف الشحن</span>
                        <b class="free">مجاني</b>
                    </div>
                    <div class="row space-between">
                        <p><b class="red-text">المجموع الكلي </b><span class="gray"> شامل الضريبة </span></p>
                        <span><b class="red-text">68.97</b> ر.س </span>
                    </div>
                </div>

                <div class="bottom-cart">
                    <p>بالضغط على "انهاء التسوق" فأنت توافق على الشروط والاحكام و سياسة الخصوصية</p>
                    <button id="cart-btn">انهاء التسوق</button>
                </div>
            </div>
        </div>
    </div>


    <div id="front">
        <button id="hideSteps" class="close">X</button>
        <div class="container row">
            <div id="progress" class="progress">
                <div class="circle active">1</div>
                <div class="circle">2</div>
                <div class="circle">3</div>
                <div class="circle">4</div>
                <div id="line"></div>
            </div>
        </div>

        <div class="container mt steps-container">
            <form action="" id="step1" class="steps confirm row">
                <div class="steper-title">البيانات الشخصية</div>
                <input type="text" placeholder="اسم المستخدم">
                <input type="email" name="" id="" placeholder="البريد الالكتروني">
                <input type="tel" placeholder="رقم الهاتف">
                <input type="text" placeholder="العنوان">
            </form>

            <form action="" id="step2" class="steps confirm row mt">
                <div class="steper-title">معلومات الدفع</div>
                <div class="row gap wrap">
                    <label for="">نوع بطاقة الدفع</label>
                    <select name="" id="">
                        <option value="">VISA CARD</option>
                        <option value="">MASTER CARD</option>
                        <option value="">AMERICAN EXPRESS CARD</option>
                        <option value="">PAYPAL CARD</option>
                    </select>
                </div>
                <input type="text" placeholder="رقم بطاقة الدفع">
                <div class="row date">
                    <p>تاريخ الاصدار</p>
                    <input type="date" name="" id="">
                </div>
            </form>

            <div id="step3" class="steps confirm center mt">
                <div class="steper-title">تاكيد الشراء</div>
                <div class="top-cart">
                    <div class="row space-around">
                        <span class="bold-text">المجموع</span>
                        <p><b class="bold-text">68.97</b> ر.س </p>
                    </div>
                    <div class="row space-around">
                        <span class="bold-text">تكاليف الشحن</span>
                        <b class="free">مجاني</b>
                    </div>
                    <div class="row space-around">
                        <p><b class="red-text">المجموع الكلي </b><span class="gray"> شامل الضريبة </span></p>
                        <span><b class="red-text">68.97</b> ر.س </span>
                    </div>
                </div>

                <div class="bottom-cart">
                    <p>بالضغط على "التالي" فسيتم اتمام عملية الشراء وفقا لبيانات المستخدم وبيانات الدفع</p>
                </div>
            </div>

            <div id="step4" class="steps confirm center mt">
                <div class="steper-title">تمت عملية الشراء بنجاح</div>

                <div class="top-cart mt">
                    <b class="free">شكرا على تسوقكم على موقعنا</b>
                    <div class="row space-around">
                        <p><b class="red-text"></b><span class="gray"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt row">
            <button class="btn" id="prev-btn">السابق</button>
            <button class="btn" id="next-btn">التالي</button>
        </div>
    </div>

    <div class="break"></div>


    <?php require("includes/footer.php"); ?>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/steps.js"></script>
</body>

</html>