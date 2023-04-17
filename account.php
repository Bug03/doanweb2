<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendors/css/normalize.css">
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="stylesheet" href="./assest/css/account.css">
    <link rel="stylesheet" href="./assest/images/about/themify-icons-font/themify-icons/themify-icons.css">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>All Products - Ngdank_shop</title>
</head>

<body>
    <?php 
    include 'header.php'
    ?>
    <div class="main">
        <form action="code_login.php" method="POST" class="form" id="form-1">
          <h3 class="heading">Thành viên đăng ký</h3>
          <p class="desc">Đăng kí ngay để trở thành homie của SG4 nào :D</p>
  
          <div class="spacer"></div>
  
          <div class="form-group">
            <label for="fullname" class="form-label">Tên đầy đủ</label>
            <input id="fullname" name="fullname" type="text" placeholder="VD: Nguyễn Danh" class="form-control">
            <span class="form-message"></span>
          </div>
  
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
            <span class="form-message"></span>
          </div>
  
          <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>
          </div>
  
          <div class="form-group">
            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
            <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
            <span class="form-message"></span>
          </div>
  
          <button class="form-submit">Đăng ký</button>
        </form>
  
        <form action="/ngdank_shop/code_login.php" method="post" class="form" id="form-2">
          <h3 class="heading">Đăng nhập</h3>
          <p class="desc">Cùng nhau mua sắm nào ❤️</p>
  
          <div class="spacer"></div>
  
          <div class="form-group">
            <label for="email" class="form-label">Tên đăng nhập</label>
            <input id="email" name="username" type="text" placeholder="VD: hdanh123" class="form-control">
            <span class="form-message"></span>
          </div>
  
          <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>
          </div>
  
          <button type="submit" class="form-submit" name="submit">Đăng nhập</button>
        </form>
  
      </div>
      
    
    <!----------- footer ----------->
    <?php
    include 'footer.php'
    ?>
    <script src="./assest/js/validator.js"></script>
    <!-- ---js for toggle menu ----->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>
    <!-- sticky -->
    <script>
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
        </script>
    <!-- validator -->
      <!-- <script> -->
        <script>
        document.addEventListener('DOMContentLoaded', function () {
          // Mong muốn của chúng ta
          Validator({
            form: '#form-1',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
              Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
              Validator.isEmail('#email'),
              Validator.minLength('#password', 6),
              Validator.isRequired('#password_confirmation'),
              Validator.isConfirmed('#password_confirmation', function () {
                return document.querySelector('#form-1 #password').value;
              }, 'Mật khẩu nhập lại không chính xác')
            ],
            onSubmit: function (data) {
              // Call API
              console.log(data);
            }
          });
  
  
          Validator({
            form: '#form-2',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
              Validator.isEmail('#email'),
              Validator.minLength('#password', 6),
            ],
            onSubmit: function (data) {
              // Call API
              console.log(data);
            }
          });
        });
  
      </script>
</body>

</html>