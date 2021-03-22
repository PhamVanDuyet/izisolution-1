<?php /*Template Name: ve chung toi*/ 
if ( ! defined( 'ABSPATH' )){
	exit;
}
?>
<?php get_header(); ?>
<section>
            <div class="container flex mobile-wrap">
                <div class="w-50 mobile-w100">
                    <div>
                        <h5 class="h5-1001 text-mb-center">GIỚI THIỆU</h5>
                        <h1 class="h1-1001 cl-title-mb">Công ty JinJoo Marketing</h1>
                        <h3 class="h3-1001 mobile-fz-16" style="color: #33CC66;">Giải pháp xây dựng website hiệu quả.</h3>
                        <div>
                            <div class="tab">
                                <button class="tablinks active" onclick="openCity(event, 'tablink-1')">Đôi nét về JinJoo</button><button class="tablinks" onclick="openCity(event, 'tablink-2')">Mục tiêu doanh nghiệp</button><button class="tablinks" onclick="openCity(event, 'tablink-3')">Nhiệm vụ chính</button>
                            </div>

                            <div id="tablink-1" class="tabcontent" style="display: block;">
                                <p>Với đội ngũ thiết kế đồ họa và kỹ sư CNTT trẻ, đầy sáng tạo và năng động, cùng sự góp sức của các chuyên gia dày dặn kinh nghiệm về thiết kế và phát triển ứng dụng Internet.</p>
                                <p>Chúng tôi tạo ra những sản phẩm thiết kế, dịch vụ quảng bá chuyên nghiệp bởi sự kết hợp của kinh nghiệm, trình độ chuyên môn và tư duy sáng tạo!</p>
                            </div>

                            <div id="tablink-2" class="tabcontent">
                                <p>JinJoo mong muốn trở thành tổ chức vững mạnh và được cộng đồng tôn trọng bằng cách nỗ lực áp dụng công nghệ và tri thức, góp phần cùng các tổ chức, doanh nghiệp của Việt Nam phát triển hưng thịnh.</p>
                            </div>

                            <div id="tablink-3" class="tabcontent">
                                <p>JinJoo cam kết liên tục phát triển, cải tiến và nâng cao chất lượng sản phẩm, áp dụng các công nghệ mới, hoàn thiện dịch vụ, tiến đến thỏa mãn các yêu cầu của của khách hàng với chất lượng được mong đợi ở mức độ cao nhất.</p>
                            </div>

                            <script>
                                function openCity(evt, cityName) {
                                    var i, tabcontent, tablinks;
                                    tabcontent = document.getElementsByClassName("tabcontent");
                                    for (i = 0; i < tabcontent.length; i++) {
                                        tabcontent[i].style.display = "none";
                                    }
                                    tablinks = document.getElementsByClassName("tablinks");
                                    for (i = 0; i < tablinks.length; i++) {
                                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                                    }
                                    document.getElementById(cityName).style.display = "block";
                                    evt.currentTarget.className += " active";
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="w-50 mobile-w100">
                    <img width="100%" style="float: right;" src="https://wsu.vn/wp-content/uploads/2020/08/wsu-vechungtoi.png" alt="">
                </div>
            </div>
        </section>
        <section class="pd-t-99">
            <div class="container flex mobile-wrap">
                <div class="w-50 flex mobile-w100" style="flex-wrap: wrap;">
<div class="flex mobile-wrap">
                    <div class="pd-10 w-50 mobile-w100">
                        <div class="class-0010">
                            100% <br />
                            <p class="fz-25 mg-t-0" style="font-weight: 600;">Khách hàng hài lòng</p>
                            <div class="class-0011"></div>
                        </div>
                    </div>
                    <div class="pd-10 w-50 mobile-w100">
                        <div class="class-0010">
                            50+ <br />
                            <p class="fz-25 mg-t-0" style="font-weight: 600;">Website đã thiết kế</p>
                            <div class="class-0011"></div>
                        </div>
                    </div>
</div>
<div class="flex mobile-wrap">
                    <div class="pd-10 w-50 mobile-w100">
                        <div class="class-0010">
                            120+ <br />
                            <p class="fz-25 mg-t-0" style="font-weight: 600;">Website được tối ưu</p>
                            <div class="class-0011"></div>
                        </div>
                    </div>
                    <div class="pd-10 w-50 mobile-w100">
                        <div class="class-0010">
                            700+ <br />
                            <p class="fz-25 mg-t-0" style="font-weight: 600;">Từ khóa được SEO</p>
                            <div class="class-0011"></div>
                        </div>
                    </div>
</div>
                </div>
                <div class="w-50 mobile-w100 pd-l-20">
                    <div>
                        <h5 class="h5-1001 text-mb-center">KHÁCH HÀNG</h5>
                        <h2 class="h2-1002 cl-title-mb">Nói Gì Về Chúng Tôi</h2>
                        <p>Sản phẩm thiết kế của JinJoo Marketing là sự kết hợp hoàn hảo của ngôn ngữ lập trình, mỹ thuật và sự sáng tạo trong thiết kế.</p>
                        <p>Sự kết hợp uyển chuyển giữa thiết kế và lập trình đã tạo nên cho chúng tôi một phong cách thiết kế chuyên nghiệp mà hầu hết các doanh nghiệp đang mong đợi.</p>
                        <p>Điều đặc biệt là chúng tôi đã có cơ chế tối ưu hóa các quy trình giúp cho việc giảm đáng kể chi phí đầu tư ban đầu mà khách hàng vẫn có được sản phẩm hoàn hảo nhất.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container" style="display: block;">
                <div class="w-100">
                    <div style="max-width: 850px; margin-left: auto; margin-right:auto; text-align: center;">
                        <h5 class="h5-1001 text-mb-center">ĐỐI TÁC – KHÁCH HÀNG</h5>
                        <h1 class="h1-1003 cl-title-mb">Các Khách Hàng Của Chúng Tôi</h1>
                    </div>
                </div>
                <div class="class-00017" style="display: flex; flex-wrap: wrap;">
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-1-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-2-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-3-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-4-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-5-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-6-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-7-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-8-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-9-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-10-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-11-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-12-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-13-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-14-min.jpg" /></div>
                    <div class="pd-15" style="width: calc(20% - 30px);"><img class="class-00012" src="https://izisolution.xyz/wp-content/uploads/2021/02/logo-15-min.jpg" /></div>
                </div>
            </div>
        </section>
        <section style="height: 20px;"></section>
        <?php get_footer(); ?>