<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title>পেমেন্ট করুন</title>
  <link rel="stylesheet" href="Payment.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div id="nav-bar">
    <nav>
      <a href="index.html"><img src="Ispat.png" width="225" height="72"></a>
      <ul>
          <li class="searchli">
                <div>
              <input type="text" class="search" placeholder="খুঁজুন...">
              <button class="button"><i class="fas fa-search"></i> </button>
           </div>
          </li>
        <li><i class="fas fa-home"></i><a href="index.html">হোম</a></li>
                <li><i class="fas fa-user-tie"></i><a href="login.php">অ্যাকাউন্ট</a></li>
      </ul>
    </nav>
  </div>
  
  <div class="paymentbody">
    <div class="row">
      <div class="col-75">
        <div class="container">
          <form action="Delv_page.php" method="POST">

            <div class="row">
              <div class="col-50">
                <h3>পন্য ডেলিভারির বিস্তারিত</h3>
                <label for="fname"><i class="fa fa-user"></i> পূর্ণ নাম</label>
                <input type="text" id="fname" name="firstname" placeholder="">
                <label for="email"><i class="fa fa-envelope"></i> ই-মেইল</label>
                <input type="text" id="email" name="email" placeholder="">
                <label for="adr"><i class="fa fa-address-card-o"></i> ঠিকানা</label>
                <input type="text" id="adr" name="address" placeholder="">
                <label for="city"><i class="fa fa-institution"></i> শহর</label>
                <input type="text" id="city" name="city" placeholder="">

                <div class="row">
                  <div class="col-50">
                    <label for="state">দেশ</label>
                    <input type="text" id="state" name="state" placeholder="">
                  </div>
                  <div class="col-50">
                    <label for="zip">জিপ নাম্বার</label>
                    <input type="text" id="zip" name="zip" placeholder="">
                  </div>
                </div>
              </div>

              <div class="col-50">
                <h3>পেমেন্ট</h3>
                <label for="fname">গ্রহণযোগ্য কার্ড</label>
                <div class="icon-container">
                  <i class="fa fa-cc-visa" style="color:navy;"></i>
                  <i class="fa fa-cc-amex" style="color:blue;"></i>
                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                  <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>
                <label for="cname">কার্ড হোল্ডারের নাম</label>
                <input type="text" id="cname" name="cardname" placeholder="">
                <label for="ccnum">ক্রেডিট কার্ডের নাম্বার</label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="">
                <label for="expmonth">মেয়াদ উত্তীর্ণের তারিখ</label>
                <input type="text" id="expmonth" name="expmonth" placeholder="">
                <div class="row">
                  <div class="col-50">
                    <label for="expyear">মেয়াদ উত্তীর্ণের বছর</label>
                    <input type="text" id="expyear" name="expyear" placeholder="">
                  </div>
                  <div class="col-50">
                    <label for="cvv">সি ভি ভি</label>
                    <input type="text" id="cvv" name="cvv" placeholder="">
                  </div>
                </div>
              </div>

            </div>
            <label>
              
            <input type="submit" onclick="window.location.href='Delv_page.php'" value="পেমেন্ট সম্পূর্ণ করুন" class="btn">

          </form>
        </div>
      </div>
    </div>
    </div>
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f5d04de4704467e89ee6d2d/1ei1ne9hq';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>