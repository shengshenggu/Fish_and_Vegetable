魚菜共生系統
    
    使用Laravel的MVC框架製作網站

    使用前須知:
        
        0. 如果是在unix系統 or RaspberryPi底下clone的, 須先執行以下指令：
            $ chmod -Rf 777 storage  bootstrap/cached
           以防止網站無法正常瀏覽

        1. 先在.env檔設定好DB設置，主要是設定以下三個:
            - DB_DATABASE=資料庫名稱
            - DB_USERNAME=資料庫使用者名稱
            - DB_PASSWORD=資料庫密碼

        2. 在專案的資料夾下開啟終端機, 執行以下指令:
            $ php artisan migrate:refresh
            $ php artisan db:seed
           就會自動在資料庫新增相關資料表與資料 (可再問我)

        3. 之後從瀏覽器開啟該專案的public/即可看到首頁

        4. 記得自己註冊一個使用者帳戶 (~/public/register)

        5. 有問題再討論 (餵魚時間一到怎麼提醒, 可自行設定, 我先暫時用alert跳訊息)
           

    自行開發檔案:

        環境設定
            .env    設定APP、DB相關資料

        Model
            + app/
                - User.php              負責使用者的資料
                - Environment.php       負責PI所記錄的溫度與PH的資料
                - Plant.php             負責植物資訊

        View
            - gulpfile.js               gulp前端壓縮檔的設定
            - public/css/switch.css     製作開關按鈕的CSS
            + resources/
                +views/
                    + assets/
                        - css/
                            - plant.css     前端樣板的css
                            - home.css      前端首頁的css
                            - library.css   前端library的css
                    + layouts/
                        - main.blade.php    製作後端頁面的基本樣板 (可再自改)
                        - plant.blade.php   製作前端頁面的基本樣板
                    - dashboard.blade.php       顯示開關與目前溫度與PH值的頁面
                    - set.blade.php             可以設定溫度與PH上下限的頁面
                    - main_js.blade.php         製作Ajax、鬧鐘提醒、顯示訊息的JS
                    + plant/
                        - home.blade.php    首頁
                        - library.blade.php 顯示每個植物的資訊

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
