<!doctype html>
<html>
<head>
<link rel="shortcut icon"  href="teamplate/ima/icon.jpg">
<link type="text/css" href="teamplate/css/gopy.css" rel="stylesheet">
<script src="teamplate/js/gopy.js"></script>
<meta charset="utf-8">
<title>ICT 36 - Góp ý</title>
</head>

<body bgcolor="#DDDDDD">
<div id="wrap">
<div id="header"> <img src="teamplate/ima/icon.jpg" class="img1"> <br>
  <h2 class="h2">Kiến thức - Kinh nghiệm - Hỏi đáp</h2>
  <!-- <form>
    <select name="nn">
      <option value="Vn">VN</option>
      <option value="ENG">ENG</option>
    </select>
  </form>
 --> <input type="submit" value="">
  <form>
    <input type="text" name="search" placeholder="Tìm bài viết, sản phẩm...">
  </form>
</div>
<div id="menu">
 <div class="ul">
  <ul>
  <h3>
        <li> <a href="{{route('trang-chu')}}" id="a1"> Trang chủ</a></li>
        <li> <a href="{{route('meo-tim-do')}}" id="a1"> Mẹo tìm đồ </a> </li>
        <li> <a href="" id="a1"> Đăng bài </a> </li>
        <li> <a href="{{route('gioi-thieu')}}" id="a1"> Giới thiệu </a> </li>
        <li> <a href="{{route('gop-y')}}" id="a1"> Góp ý</a> </li>
      </h3>
  </ul>
 
</div>  <div class="dk"> <a href="{{route('dang-ky')}}" > Đăng ký</a> ||<a href="{{route('dang-nhap')}}" > Đăng nhập</a> </div>
</div>
<br>
<div id="contend">
  <div id="contend1"> <img src="teamplate/ima/qd.png">
    <h2> QUY ĐỊNH </h2>
    <BR>
    <BR>
    <BR>
    <hr>
    <ul type="disc">
      <a href="#">
      <li> Nội quy website</li></a>
       <a href="#">
      <li> Đăng bài</li></a>
       <a href="#">
      <li> Hướng dẫn</li>
      </a>
    </ul>
    <br>
    <div id="gopy">
    <img src="teamplate/ima/gopy.png" style="margin-left:12px;">
    <h2> GÓP Ý </h2>
   	<BR>
    <BR>
    <BR>
   
    <hr> <br>
    Đăng bài vào khu vực góp ý nếu bạn có sáng kiến xây dựng web ngày càng tốt hơn. Các yêu cầu hỗ trợ và thắc mắc khác xin vui lòng điền vào biểu mẫu bên dưới hoặc gửi thư đến 0306201406@caothang.edu.vn
    </div> </div>
  <div id="contend2"> <img src="teamplate/ima/hd.png">
    <h2> HƯỚNG DẴN SỬ DỤNG</h2>
    <br>
    <br>
    <br>
    <hr>
    <br>
    <b> Đăng kí / Đăng nhập</b>
    <ul type="disc">
      <a href="#">
      <li> Đăng kí tài khoản</li>
      </a> <a href="#">
      <li> Đăng nhập bằng facebook</li>
      </a> <a href="#">
      <li> Quy định và quyền hạn của các nhóm thành viên</li>
      </a> <a href="#">
      <li> Quyền gửi bài vào các Forum</li>
      </a> <a href="#">
      <li> Khôi phục tài khoản khi quên mật khẩu</li>
      </a> <a href="#">
      <li> Vì sao đã đăng ký nhưng không gửi bài được?</li>
      </a>
    </ul>
    <br>
    <b>Viết bài</b>
    <ul type="disc">
      <a href="#">
      <li> Cách tạo chủ đề mới</li>
      </a> <a href="#">
      <li>Cách chèn hình ảnh vào bài viết</li>
      </a> <a href="#">
      <li>Trả lời một bài viết trên diễn đàn</li>
      </a> <a href="#">
      <li> Tính năng Bỏ qua thành viên</li>
      </a> <a href="#">
      <li> Giúp đỡ những thành viên chưa được giúp đỡ: Cách tìm bài chưa được trả lời</li>
      </a>
    </ul>
  </div>
  <div id="contend33">
    <H3> YÊU CẦU HỖ TRỢ</H3>
    <HR>
    <br>
    <form method="post" id="gopy" name="gopy" onSubmit="return kt(">
    <table width="600" border="0" cellpadding="3" cellspacing="10">
      <tr>
        <th>Chủ đề :</th>
        <td><select>
            <option> Diễn đàn</option>
            <option> Mua bán</option>
            <option> Khác</option>
          </select></td>
      </tr>
      <tr>
        <th>Email :</th>
        
        <td><label for="email"></label>
        <textarea cols="65" rows="1" id="email" > </textarea></td>
      </tr>
      <tr>
        <th>Nội Dung : </th>
        <td><label for="nd"></label>
        <textarea cols="65" rows="15" id="ndd">    </textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
        <input type="submit" value="Send to Admin" id="gui" onClick="alert'Ban da gui thanh cong '"></td>
      </tr>
    </table>
    </form>
  </div>
</div>
<div id="footer">
  <div class="divft1">
    <p>&nbsp;</p>
    <p><a href="http://icthdu36.dx.am"> TRANG CHỦ</a></p>
  </div>
  <div class="divft">
    <h4>ICT-HDU </h4>
    <a href="#">Khoa học</a> <br>
    <a href="#">Công nghệ</a> <br>
    <a href="#">Kỹ thuật</a> <br>
    <a href="#">Cuộc sống</a> <br>
    <a href="#">Điện máy</a> </div>
  <div class="divft">
    <h4>FORUM </h4>
    <a href="#">Điện thoại</a> <br>
    <a href="#"><a href="#">Máy tính</a> <br>
    <a href="#">Camera</a> <br>
    <a href="#">Xe</a> <br>
    <a href="#">Phụ kiện</a> </div>
  <div class="divft">
    <h4>LIÊN KẾT </h4>
    <a href="#">Bien99</a> <br>
    <a href="#">Study</a> <br>
    <a href="#">Google</a> </div>
  <div class="divft">
    <h4>VỀ CHÚNG TÔI</h4>
    <a href="#"> Facebook</a> <br>
    <a href="#"> Youtube</a> <br>
    <a href="#"> Google</a> <br>
    <a href="#"> Skype</a> </div>
  <div class="divft2"> <br>
    <hr>
    <br>
    <h4> Chịu trách nhiệm nội dung: Nguyễn Văn Cường <br>
      Giấy phép thiết lập MXH số 19/GP-BTTTT, Ký ngày: 01/01/2019</h4>
  </div>
</div>
</body>
</html>
