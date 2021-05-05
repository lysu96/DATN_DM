    <!-- ------------footer----------- -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Tải xuống ứng dụng của chúng tôi</h3>
                    <p>Tải xuống ứng dụng cho điện thoại di động Android và iOS</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Mục đích của chúng tôi là làm cho nhiều người có thể tiếp cận được niềm vui và lợi ích của thể thao một cách bền vững</p>
                </div>
                <div class="footer-col-3">
                    <h3>Liên kết hữu ích</h3>
                    <ul>
                        <li>Phiếu giảm giá</li>
                        <li>Bài viết trên blog</li>
                        <li>Chính sách hoàn trả</li>
                        <li>Tham gia liên kết</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Theo chúng tôi</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube </li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="Copyright">Bản quyền 2021 - By <a href="https://hmooblee.tk/">Ly A Sú</a></p>
        </div>
    </div>
    <!-- ------------------- js for toggle menu-------------- -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }

    </script>
</body>
</html>