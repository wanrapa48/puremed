<div class="modal fade" id="modal-manageannounce-Add">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข่าวสาร</h5>
      </div>
    <div class="modal-body">
        <form >
        {{csrf_field()}}
        <div class="row">
          <div class="col-lg-5" style="padding: 30px;">
            <div class="divcard">
               <img src="{{asset('storage/img/icon/picture.png')}}" id="imgannounce" class="img-responsive" >
            </div>
            <br>
              <input type="file" id="fileUpload" accept="image/png, image/jpeg">
              <button ng-click="addPhotofile()" id="customButton">เลือกไฟล์</button>  
              <span id="fileName">ไม่ได้เลือกไฟล์ใด</span>           
          </div>
          <div class="col-lg-7" style="padding: 30px;">
            <div class="row">
              <div class="col-lg-12">
              <p class="profiletext">ชื่อหัวข้อ</p>
              <input class="form-control" type="text" id="titel" >
              </div>
            </div>
            <div class="row" style="margin-top: 10px;">
              <div class="col-lg-12">
              <p class="profiletext">เนื้อหา</p>
              <textarea class="form-control" rows="4" id="detail"></textarea>
              </div>
            </div>
            <br>
            <div class="row" style="text-align: right; padding-right: 20px;margin-top: 10%;">
            <button type="submit" class="btnsave"  href="#modal-2" data-toggle="modal" data-dismiss="modal"><i ><img class="isave" src="{{asset('storage/img/icon/i-save.png')}}"></i>บันทึก</button>
            <!--
          <button type="submit" class="btnsave"  ng-click="Savemodal()"><i ><img class="isave" src="{{asset('storage/img/icon/i-save.png')}}"></i>บันทึก</button>
            -->
          <button type="button" class="btncancel" data-dismiss="modal"><i><img class="icancel" src="{{asset('storage/img/icon/i-cancel.png')}}"></i>ยกเลิก</button>
        </div>
          </div>
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