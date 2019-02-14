<div class="modal fade" id="modal-manageuser-Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูลผู้ใช้งาน</h5>
      </div>
      <div class="modal-body">
        <form >
        {{csrf_field()}}
        <div class="row">
          <div class="col-lg-5">
          <p class="profilephoto">รูปโปรไฟล์</p>
          <img src="{{asset('storage/img/user/pic2.png')}}" id="Photouser" class="img-responsive" >
          <br>
          <!--<input ng-click="addPhotofile()" type="file" id="files">-->
          <input type="file" id="fileUpload" accept="image/png, image/jpeg">
          <button ng-click="addPhotofile()" id="customButton">เลือกไฟล์</button>  
          <span id="fileName">ไม่ได้เลือกไฟล์ใด</span>
          </div>
          <div class="col-lg-7">
            <div class="row">
            <div class="col-lg-6">
            <p class="profiletext">Username</p>
            <input class="form-control" type="text" id="username" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">Password</p>
            <input class="form-control" type="text" id="pasword" >
            </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-lg-6">
            <p class="profiletext">ชื่อ-นามสกุล</p>
            <input class="form-control" type="text" id="lastname" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">ชื่อเล่น</p>
            <input class="form-control" type="text" id="nickname" >
            </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-lg-6">
            <p class="profiletext">เพศ</p>
            <input class="form-control" type="text" id="gender" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">เลขที่บัตรประชาชน</p>
            <input class="form-control" type="text" id="idcard" >
            </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-lg-6">
            <p class="profiletext">ป้าย</p>
            <input class="form-control" type="text" id="gender" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">ตำแหน่ง</p>
            <input class="form-control" type="text" id="idcard" >
            </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-lg-12">
            <p class="profiletext">พื้นที่</p>
            <input class="form-control" type="text" id="area1" >
            </div>
          </div>
          <div class="row" style="margin-top: 10px;">
            <div class="col-lg-12">
            <p class="profiletext">พื้นที่2</p>
            <input class="form-control" type="text" id="area2" >
            </div>
          </div>
          <div class="row" style="margin-top: 10px;">
              <div class="col-lg-6">
              <p class="profiletext">วันที่ลงทะเบียน</p>
              <input class="form-control" type="text" id="datebegin" disabled>
              </div>
            </div>
          </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-5">
            <p class="profilephoto">รูปบัตรประจำตัว</p>
          <img src="{{asset('storage/img/user/card.png')}}" id="Photocard" class="img-responsive" >
          <br>
          <input type="file" id="filecardUpload" accept="image/png, image/jpeg">
          <button ng-click="addPhotocardfile()" id="customButton">เลือกไฟล์</button>  
          <span id="fileNamecard">ไม่ได้เลือกไฟล์ใด</span>
          </div>
          <div class="col-lg-7">
            <div class="row">
            <p class="profiletext">ข้อมูลการติดต่อ</p>
            </div>
            <div class="row" >
            <div class="col-lg-6">
            <p class="profiletext">เบอร์โทรศัพท์</p>
            <input class="form-control" type="text" id="phone" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">E-mail</p>
            <input class="form-control" type="text" id="email" >
            </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-lg-6">
            <p class="profiletext">Line</p>
            <input class="form-control" type="text" id="line" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">Facebook</p>
            <input class="form-control" type="text" id="facebook" >
            </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-lg-6">
            <p class="profiletext">Instagram</p>
            <input class="form-control" type="text" id="instagram" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">Twitter</p>
            <input class="form-control" type="text" id="twitter" >
            </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-lg-12">
            <p class="profiletext">ที่อยู่</p>
            <textarea class="form-control" rows="4" id="address"></textarea>
            </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-lg-12">
            <p class="profiletext">จังหวัด</p>
            <input class="form-control" list="city" name="city">
            <datalist id="city">
              <option value="กรุงเทพมหานคร"></option>
              <option value="กระบี่"></option>
              <option value="กาญจนบุรี"></option>
              <option value="กาฬสินธุ์"></option>
              <option value="กำแพงเพชร"></option>
              <option value="ขอนแก่น"></option>
              <option value="จันทบุรี"></option>
              <option value="ฉะเชิงเทรา"></option>
              <option value="ชลบุรี"></option>
              <option value="ชัยนาท"></option>

              <option value="ชัยภูมิ"></option>
              <option value="ชุมพร"></option>
              <option value="เชียงราย"></option>
              <option value="เชียงใหม่"></option>
              <option value="ตรัง"></option>
              <option value="ตราด"></option>
              <option value="ตาก"></option>
              <option value="นครนายก"></option>
              <option value="นครปฐม"></option>
              <option value="นครพนม"></option>

              <option value="นครราชสีมา"></option>
              <option value="นครศรีธรรมราช"></option>
              <option value="นครสวรรค์"></option>
              <option value="นนทบุรี"></option>
              <option value="นราธิวาส"></option>
              <option value="น่าน"></option>
              <option value="บึงกาฬ"></option>
              <option value="บุรีรัมย์"></option>
              <option value="ปทุมธานี"></option>
              <option value="ประจวบคีรีขันธ์"></option> 

              <option value="ปราจีนบุรี"></option>
              <option value="ปัตตานี"></option>
              <option value="พระนครศรีอยุธยา"></option>
              <option value="พังงา"></option>
              <option value="พัทลุง"></option>
              <option value="พิจิตร"></option>
              <option value="พิษณุโลก"></option>
              <option value="เพชรบุรี"></option>
              <option value="เพชรบูรณ์"></option>
              <option value="แพร่"></option>    

              <option value="พะเยา"></option>
              <option value="ภูเก็ต"></option>
              <option value="มหาสารคาม"></option>
              <option value="มุกดาหาร"></option>
              <option value="แม่ฮ่องสอน"></option>
              <option value="ยะลา"></option>
              <option value="ยโสธร"></option>
              <option value="ร้อยเอ็ด"></option>
              <option value="ระนอง"></option>
              <option value="ระยอง"></option>                                                                                                                                  

              <option value="ราชบุรี"></option>
              <option value="ลพบุรี"></option>
              <option value="ลำปาง"></option>
              <option value="ลำพูน"></option>
              <option value="เลย"></option>
              <option value="ศรีสะเกษ"></option>
              <option value="สกลนคร"></option>
              <option value="สงขลา"></option>
              <option value="สตูล"></option>
              <option value="สมุทรปราการ"></option>  

              <option value="สมุทรสงคราม"></option>
              <option value="สมุทรสาคร"></option>
              <option value="สระแก้ว"></option>
              <option value="สระบุรี"></option>
              <option value="สิงห์บุรี"></option>
              <option value="สุโขทัย"></option>
              <option value="สุพรรณบุรี"></option>
              <option value="สุราษฎร์ธานี"></option>
              <option value="สุรินทร์"></option>
              <option value="หนองคาย"></option>     

              <option value="หนองบัวลำภู"></option>
              <option value="อ่างทอง"></option>
              <option value="อุดรธานี"></option>
              <option value="อุทัยธานี"></option>
              <option value="อุตรดิตถ์"></option>
              <option value="อุบลราชธานี"></option>
              <option value="อำนาจเจริญ"></option>                                 
            </datalist>
            </div>
            </div>
            <br>
            <div class="row">
            <p class="profiletext">บัญชี</p>
            </div>
            <div class="row" >
            <div class="col-lg-6">
            <p class="profiletext">ชื่อเจ้าของชื่อบัญชี</p>
            <input class="form-control" type="text" id="accountname" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">ชื่อธนาคาร</p>
            <input class="form-control"list="bankname" name="bankname" >
            <datalist id="bankname">
              <option value="Internet Explorer">
              <option value="Firefox">
              <option value="Chrome">
              <option value="Opera">
              <option value="Safari">
            </datalist>
            </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-lg-6">
            <p class="profiletext">เลขบัญชี</p>
            <input class="form-control" type="text" id="bankid" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">ประเภทบัญชี</p>
            <input class="form-control"list="banktype" name="banktype" >
            <datalist id="banktype">
              <option value="Internet Explorer">
              <option value="Firefox">
              <option value="Chrome">
              <option value="Opera">
              <option value="Safari">
            </datalist>
            </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-lg-6">
            <p class="profiletext">สาขา</p>
            <input class="form-control" id="bankbranch" >
            </div>
            </div>
          <div>
        </div>
        <br>
        <div class="row" style="text-align: right; padding-right: 20px;">
          <button type="submit" class="btnsave"  ng-click="Savemodal()" ><i ><img class="isave" src="{{asset('storage/img/icon/i-save.png')}}"></i>บันทึก</button>
          <button type="button" class="btncancel" data-dismiss="modal"><i><img class="icancel" src="{{asset('storage/img/icon/i-cancel.png')}}"></i>ยกเลิก</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
