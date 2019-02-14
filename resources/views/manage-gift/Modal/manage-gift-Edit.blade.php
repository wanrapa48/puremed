<div class="modal fade" id="modal-managegift-Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูลรางวัล</h5>
      </div>
      <div class="modal-body">
        <form >
        {{csrf_field()}}
        <div class="row" style="padding-left: 40px;">
        <p class="profiletext">รูปภาพ</p>
          <div class="container">
            <img src="{{asset('storage/img/gift/gift1.jpg')}}" style="width: 200px;height: 200px;">
            <button ng-click="Deletephoto('img-1.png')" class="delete-photo">
              <i><img src="{{asset('storage/img/icon/cancelphoto.png')}}"></i>
            </button>
          </div>
          <div class="divphototrip" >
          <input type="file" id="fileUpload" accept="image/png, image/jpeg">
          <img src="{{asset('storage/img/icon/addphoto.png')}}" ng-click="addPhotofile()" id="imgtrip">
          <p class="p-addPhotoptomotion">เพิ่มรูปภาพ</p>
          </div>
        </div>
        <div class="row" style="padding-left: 40px; padding-top: 10px;">
            <div class="col-lg-12">
            <p class="profiletext">ชื่อหัวข้อ</p>
            <input class="form-control" type="text" id="titel" >
            </div>
        </div>
        <div class="row" style="padding-left: 40px; padding-top: 20px;">
            <div class="col-lg-12">
            <p class="profiletext">รายละเอียด</p>
            <textarea class="form-control" rows="4" id="detail"></textarea>
            </div>
        </div>
        <div class="row" style="padding-left: 40px; padding-top: 20px;">
            <div class="col-lg-6">
            <p class="profiletext">วันที่เริ่มต้นกิจกรรม</p>
            <input class="form-control" type="date" id="start" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">วันที่สิ้นสุดกิจกรรม</p>
            <input class="form-control" type="date" id="end" >
            </div>
        </div>
        <div class="row" style="padding-left: 40px; padding-top: 20px;">
            <div class="col-lg-6">
            <p class="profiletext">คะแนน</p>
            <input class="form-control" type="number" id="score" >
            </div>
            <div class="col-lg-6">
            <p class="profiletext">ประเภท</p>
            <select class="form-control" id="selectproductedit">
										<option value="0120">0120-Mini Kito</option>
										<option value="0121">0121-Ruby Kito Collagen</option>
										<option value="0122">0122-Ruby Kito Fiber</option>
										<option value="0123">0123-Fiber Beery</option>
									</select>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <table style="width: 100%;">
              <thead>
                <tr style="height: 50px;border-bottom: 1px solid #D5D5D5;">
                  <th style="width: 15%; text-align: center;">
                    ลำดับ
                  </th>
                  <th style="width: 15%; text-align: center;">
                    รหัส
                  </th>
                  <th style="width: 20%; text-align: center;">
                    ชื่อสินค้า
                  </th>
                  <th style="width: 20%; text-align: center;">
                    กลุ่มสินค้า
                  </th>
                  <th style="width: 20%; text-align: center;">
                    คะแนน
                  </th>
                  <th style="width: 10%; text-align: center;">
                    ลบ
                  </th>
                </tr>                
              </thead>
              <tbody>
                <tr style="text-align: center;">
                  <td style="padding-top: 25px;">
                  1
                  </td>
                  <td style="padding-top: 25px;">
                  0120
                  </td>
                  <td style="padding-top: 25px;">
                  Mini Kito
                  </td>
                  <td style="padding-top: 25px;">
                  กล่อง
                  </td>
                  <td style="padding-top: 25px;">
                  100
                  </td>
                  <td style="padding-top: 25px;">
                    <button ng-click="Delete()" class="delete-button">
                      <i><img src="{{asset('storage/img/icon/i-2.png')}}"></i>
                    </button>
                  </td>
                </tr> 
                <tr style="text-align: center;">
                  <td style="padding-top: 25px;">
                  1
                  </td>
                  <td style="padding-top: 25px;">
                  0121
                  </td>
                  <td style="padding-top: 25px;">
                  Ruby Kito Collagen
                  </td>
                  <td style="padding-top: 25px;">
                  กล่อง
                  </td>
                  <td style="padding-top: 25px;">
                  200
                  </td>
                  <td style="padding-top: 25px;">
                    <button ng-click="Delete()" class="delete-button">
                      <i><img src="{{asset('storage/img/icon/i-2.png')}}"></i>
                    </button>
                  </td>
                </tr> 
              </tbody>
            </table>
          </div>
        </div>
          <div class="row" style="text-align: right; padding-right: 20px;margin-top: 10%;">
              <button type="submit" class="btnsave"  href="#modal-2" data-toggle="modal" data-dismiss="modal"><i ><img class="isave" src="{{asset('storage/img/icon/i-save.png')}}"></i>บันทึก</button>
              <button type="button" class="btncancel" data-dismiss="modal"><i><img class="icancel" src="{{asset('storage/img/icon/i-cancel.png')}}"></i>ยกเลิก</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- #modal 2 -->
  <div class="modal fade" id="modal-2">
<div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
            <div class="divsave">
               <img src="{{asset('storage/img/icon/i-5.png')}}" id="imgannounce" class="img-responsive" >
               <br>
               <p class="profilephoto">ทำรายการสำเร็จ</p>
               <br>
               <button type="button"  ng-click="SavemodalSave()"  class="btnsave" ><i ><img class="isave" src="{{asset('storage/img/icon/i-save.png')}}"></i>ตกลง</button>
            </div>
            </div>
        </div>
    </div>
</div>