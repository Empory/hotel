<?php include("header.php")?>
            
            <div class="home">
              <h1 style="text-align:center; padding: 35px 0;" >İLETİŞİM FORMU</h1>
              <p style="text-align:center;" >İstek ve Önerilerinizi formu doldurarak bize yazabilirsiniz</p>
              <div class="contacts">
                <div class="contact">
                  <div class="contact-top">
                    <form id="contact-form" 
                      action="" method="POST">
                      <div class="contact-form">
                        <div class="left">
                          <input name="first_name" required class="isim" type="text" placeholder="İsim">
                          <input name="last_name" required  type="text" placeholder="Soyisim">
                          <input name="email" id="email" required class="email" type="email" placeholder="E-posta">
                        </div>
                        <div class="right">
                          <textarea required name="message" placeholder="Mesajınız"id=""
                           cols="40" rows="5"></textarea>
                          <input type="submit" style="border:none; margin-top:8px;padding:13px;background-color:rgb(112,164,119);font-size:15px; color: white;" value="GÖNDER">
                        </div>
                      </div>
                    </form>  
                  </div>
                  <div class="contact-bottom"> 
                    <div class="contact-details">
                      <div class="detail">
                        <img class="icon" src="images/smartphone-call.png" alt="">
                        <p>+90 555 444 11 22</p>
                      </div>
                      <div class="detail">
                        <img class="icon" src="images/old-typical-phone.png" alt="">
                        <p>+90 264 333 33</p>
                      </div>
                      <div class="detail">
                        <img class="icon" src="images/icons8-place-marker-50.png"></a>
                        <p>Sakarya/Adapazarı</p>
                      </div>
                      <div class="detail">
                        <img class="icon" src="images/smartphone-call.png" alt="">
                        <p>hotelname@gmail.com</p>
                      </div>
                    </div>
                  </div>   
                </div> 
                <div class="contact-image">
                  <img src="images/hotel-ring.jpg" alt="">
                </div>  
              </div> 
              
            </div>
            <?php include("footer.php") ?>
    
        </div>    