<div class="modal fade" id="modal-manageannounce-Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูลข่าวสาร</h5>
      </div>
      <div class="modal-body">
        <form >
        {{csrf_field()}}
        <div class="row">
          <div class="col-lg-5">
            <div>
               <img src="{{asset('storage/img/announce/pic6.jpg')}}" id="imgannounce" class="img-responsive" >
            </div>
            <br>
              <input type="file" id="editfileUpload" accept="image/png, image/jpeg">
              <button ng-click="editPhotofile()" id="customButton">เลือกไฟล์</button>  
              <span id="fileNameedit">ไม่ได้เลือกไฟล์ใด</span>           
          </div>
          <div class="col-lg-7"  style="padding: 20px;">
            <div class="row">
              <div class="col-lg-12">
              <p class="profiletext">ชื่อหัวข้อ</p>
              <input class="form-control" type="text" id="editarea1" >
              </div>
            </div>
            <div class="row" style="margin-top: 10px;">
              <div class="col-lg-12">
              <p class="profiletext">เนื้อหา</p>
              <textarea class="form-control" rows="4" id="editdetail"></textarea>
              </div>
            </div>
            <br>
            <div class="row" style="text-align: right; padding-right: 20px;margin-top: 10%;">
            <button type="submit" class="btnsave"  href="#modal-2" data-toggle="modal" data-dismiss="modal"><i ><img class="isave" src="{{asset('storage/img/icon/i-save.png')}}"></i>บันทึก</button>
          <button type="button" class="btncancel" data-dismiss="modal"><i><img class="icancel" src="{{asset('storage/img/icon/i-cancel.png')}}"></i>ยกเลิก</button>
        </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


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