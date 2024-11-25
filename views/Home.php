<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WOWBOX SALAD</title>
    <script src="https://kit.fontawesome.com/4e7f123d15.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php
        include ("./assets/css/home.css.php");
        include ("./assets/css/root.css.php");
        // include ("./assets/css/bootstrap5.php");
    ?>
  </head>
  <body>
    <div class="app" >
    <?php
        include("./components/header.php");
    ?>
        <div class="body" onclick="funyFunc()">
          <div class="chaoMung">
           
            <div class="chaoMungToi">
              <div>
                CHÀO MỪNG <br />
                ĐẾN VỚI <br />
                WOWBOX SALAD
              </div>
              <p>
                Sự lựa chọn hoàn hảo cho một bữa ăn lành mạnh. <br />
                Xu hướng mới cho chế độ ăn uống lành mạnh.<br />
                Giàu dinh dưỡng. Thật tươi ngon.<br />
                Hãy thử ngay hôm nay.
              </p>
              <button class="datNgay"><a href="src/html/order.html">ĐẶT NGAY</a></button>
            </div>
            <div class="chaoMungImg">
              <div class="hinhTronLon"></div>
              <div class="diaCom">
                <img srcset="src/img/DiaCom.png 2x" alt="" />
              </div>
            </div>
          </div>
  
          <div class="buaAnLon">
            <div class="buaAn">
              <div class="buaAnImg">
                <img srcset="src/img/salad1.png 2x" alt="" />
              </div>
              <div class="buaAnText">
                <div>
                  BỮA ĂN <br />
                  DINH DƯỠNG
                </div>
                <p>
                  Salad cho tất cả mọi người, nguyên liệu tươi mới bổ dưỡng <br />
                  nhất. Đầy đủ dưỡng chất thiết yếu, đáp ứng nhu cầu của bạn.<br />
                  Tuyệt vời cho ăn kiêng và giảm cân.<br />
                </p>
                <p>
                  Đến với WowBox, mọi khách hàng đã chọn được cho mình <br />
                  chế độ ăn lành mạnh, khoa học hơn một cách dễ dàng. Với<br />
                  bếp trưởng nhiều năm kinh nghiệm, mỗi món salad tại<br />
                  WowBox đều được lựa chọn và chế biến một cách đặc biệt.<br />
                  Xanh. Tươi. Cực ngon.
                </p>
              </div>
            </div>
          </div>
  
          <div class="mess">
            <a onclick="toggleChat()"><img srcset="./src/img/mess.png 2x" alt=""></a>
            <div class="messText" id="hid" style="display: none;">
                <header class="chat-header">
                    <img srcset="./src/img/img/Logo.png 2x">
                    <div>WOWBOX SALAD</div>
                </header>
                <div class="chat-container">
                    <div class="chat-container-hello">WOWBOX XIN CHÀO!</div>
                    <div>Rất vui khi được hỗ trợ bạn</div>
                </div>
                <div class="chat-body">
                    <div>Chào mừng bạn đến với WOWBOX SALAD. <br> Chúng tôi có thể giúp gì cho bạn?</div>
                </div>
                <footer class="chat-footer">
                    <input type="text" placeholder="Gõ vào đây và nhấn 'enter' để chat">
                    <button>GỬI</button>
                </footer>
            </div>
        </div>
        <div class="text">MÓN ĂN NỔI BẬT</div>
  
        <div class="monAnNoiBat">
          <div class="doAn">
            <img class="anhDoAn" srcset="src/img/foodOutstanding.png 2x" alt="" />
            <div class="box">
              <div class="nameDoAn">
                SALAD <br />
                PHÔ MAI FETA
              </div>
              <div class="under">
                <div class="buttonPrice">
                  <div><button>116.000d - 579 Cal</button></div>
                  <div><button>157.000d - 792 Cal</button></div>
                </div>
                <div class="tag"><a href="src/html/orderFoodTraditional.html"><img srcset="src/img/add.png 2x" alt="" /></a></div>
              </div>
            </div>
          </div>
          <div class="doAn">
            <img class="anhDoAn1" srcset="src/img/bo.png 2x" alt="" />
            <div class="box">
              <div class="nameDoAn">
                ITALIAN SALAD <br />
                BÒ TẨM TIÊU
              </div>
              <div class="under">
                <div class="buttonPrice">
                  <div><button>92.000d - 232 Cal</button></div>
                  <div><button>129.000d - 435 Cal</button></div>
                </div>
                <div class="tag"><a href="src/html/orderFoodTraditional.html"><img srcset="src/img/add.png 2x" alt="" /></a></div>
              </div>
            </div>
          </div>
          <div class="doAn">
            <img class="anhDoAn" srcset="src/img/ca.png 2x" alt="" />
            <div class="box">
              <div class="nameDoAn">
                OMELY <br />
                CÁ HỒI XÔNG KHÓI
              </div>
              <div class="under">
                <div class="buttonPrice">
                  <div><button>99.000d - 225 Cal</button></div>
                  <div><button>141.000d - 311 Cal</button></div>
                </div>
                <div class="tag"><a href="src/html/orderFoodTraditional.html"><img srcset="src/img/add.png 2x" alt="" /></a></div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="allMenu">
          <button class="datNgay"><a href="src/html/order.html">XEM TOÀN BỘ MENU</a></button>
        </div>
        <div class="textMenu">
          <p>
            WOWBOX SALAD cung cấp dịch vụ đặc tiệc cho những hội nhóm, gia đình
            hay công ty, doanh nghiệp <br />
            muốn tổ chức các bữa tiệc nhẹ hay các sự kiện gặp mặt. Bạn có thể tham
            khảo thực đơn và gói buffet bên <br />
            dưới và liên hệ với chúng tôi để được phục vụ tốt nhất.
          </p>
        </div>
        <div class="textBook">LIÊN HỆ ĐẶT TIỆC</div>
  
        <div class="imgDatTiec">
          <div><img srcset="src/img/img1DatTiec.png 2x" alt="" /></div>
          <div><img srcset="src/img/img2DatTiec.png 2x" alt="" /></div>
          <div><img srcset="src/img/img3DatTiec.png 2x" alt="" /></div>
        </div>
        <div class="contact">
          <div>GỌI NGAY: 0399 199 324</div>
        </div>
        <div class="map">
          <div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61345.9434639046!2d108.2008651594772!3d16.059185400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f2ced6d8b%3A0xe282c779264f7088!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIE5naOG7gSDEkMOgIE7hurVuZw!5e0!3m2!1svi!2s!4v1727754032718!5m2!1svi!2s"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
        </div>
        
        <?php
        include("./components/footer.php");
        ?>
      
    </div>
    <script src="src/js/main.js"></script>
    
  </body>
</html>
