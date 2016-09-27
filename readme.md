魚菜共生系統
    
    使用Laravel的MVC框架製作網站

    使用前須知:
        
        1. 先在.env檔設定好DB設置，主要是設定以下三個:
            - DB_DATABASE=資料庫名稱
            - DB_USERNAME=資料庫使用者名稱
            - DB_PASSWORD=資料庫密碼

        2. 在專案的資料夾下開啟終端機, 執行以下指令:
            $ php artisan migrate
           就會自動在資料庫新增相關資料表 (可再問我)
           

    自行開發檔案:

        環境設定
            .env    設定APP、DB相關資料

        Model
            + app/
                - User.php              負責使用者的資料
                - Environment.php       負責PI所記錄的溫度與PH的資料

        View
            - public/css/switch.css     製作開關按鈕的CSS
            + resources/views/
                - layouts/main.blade.php    製作頁面的基本樣板
                - home.blade.php            首頁, 顯示開關與目前溫度與PH值
                - set.blade.php             可以設定溫度與PH上下限的頁面
                - main_js.blade.php         製作Ajax、鬧鐘提醒、顯示訊息的JS

        Controller
            - app/Http/Controllers/HomeController.php   負責處理View與Model間的資料，以及接收與回傳Ajax的部分

        Route
            - routes/web.php    設定路由(Url)的檔案

    Laravel內建套件:

        Auth (會員註冊登入系統)

            Model
                - app/User.php

            View
                + resources/views/auth/
                    - register.blade.php    // 登入頁面
                    - login.blade.php       // 註冊頁面
                    + passwords/            // 與重設密碼有關的頁面
                        - email.blade.php
                        - reset.blade.php

            Controller
                + app/Http/Controllers/Auth
                    - ForgotPasswordController.php  // 處理忘記密碼相關的事情
                    - ResetPasswordController.php   // 處理重設密碼相關的事情
                    - LoginController.php           // 處理登入動作
                    - RegisterController.php        // 處理註冊動作