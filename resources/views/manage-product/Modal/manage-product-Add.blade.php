<div class="modal fade" id="modal-manageproduct-Add" >
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มสินค้า</h5>
      </div>
      <div class="modal-body">
        <form >
        {{csrf_field()}}
        <div class="row">
          <div class="col-lg-5" style="padding: 30px;">
          <div class="divcard">
               <img src="{{asset('storage/img/picture.png')}}" id="imgannounce" class="img-responsive" >
            </div>
            <br>
              <input type="file" id="fileUpload" accept="image/png, image/jpeg">
              <button ng-click="addPhotofile()" id="customButton">เลือกไฟล์</button>  
              <span id="fileName">ไม่ได้เลือกไฟล์ใด</span>           
          </div>
          <div class="col-lg-7"  style="padding: 30px;">
            <div class="row">
              <div class="col-lg-12">
              <p class="profiletext">ชื่อสินค้า</p>
              <input class="form-control" type="text" id="productname" >
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col-lg-6">
              <p class="profiletext">คะแนน</p>
              <input class="form-control" type="number" id="productscore" >
              </div>
              <div class="col-lg-6">
              <p class="profiletext">กลุ่มสินค้า</p>
                  <select class="form-control" id="productgroup">
										<option value="คอลลาเจน">คอลลาเจน</option>
										<option value="ดีท็อก">ดีท็อก</option>
									</select>
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col-lg-6">
                <p class="profiletext">ราคาปลีก</p>
                <input class="form-control" type="number" id="retail" >
              </div>
              <div class="col-lg-6">
                <p class="profiletext">ราคาตัวแทน</p>
                <input class="form-control" type="number" id="agle" >
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col-lg-6">
                <p class="profiletext">ชนิดบรรจุภัณฑ์</p>
                  <select class="form-control" id="producttype">
										<option value="กล่อง">กล่อง</option>
										<option value="ขวด">ขวด</option>
									</select>
              </div>
            </div>
            <div class="row" style="text-align: right; padding-right: 20px;margin-top: 10%;">
              <button type="submit" class="btnsave"  href="#modal-2" data-toggle="modal" data-dismiss="modal"><i ><img class="isave" src="{{asset('storage/img/i-save.png')}}"></i>บันทึก</button>
              <button type="button" class="btncancel" data-dismiss="modal"><i><img class="icancel" src="{{asset('storage/img/i-cancel.png')}}"></i>ยกเลิก</button>
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
               <img src="{{asset('storage/img/i-5.png')}}" id="imgannounce" class="img-responsive" >
               <br>
               <p class="profilephoto">ทำรายการสำเร็จ</p>
               <br>
               <button type="button"  ng-click="SavemodalSave()"  class="btnsave" ><i ><img class="isave" src="{{asset('storage/img/i-save.png')}}"></i>ตกลง</button>
            </div>
            </div>
        </div>
    </div>
</div>