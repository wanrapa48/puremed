<div class="modal fade" id="modal-managestock-Add" >
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มสต๊อก</h5>
      </div>
      <div class="modal-body">
        <form >
        {{csrf_field()}}
        <div class="row" style="padding: 30px;">
          <div class="col-lg-6">
          <p class="profiletext">ชื่อ</p>
              <input class="form-control" type="text" id="name" >
          </div>
          <div class="col-lg-6">
          <p class="profiletext">นามสกุล</p>
              <input class="form-control" type="text" id="lastname" >
          </div>
        </div>
        <div class="row" style="text-align: right; padding-right: 20px;margin-top: 5%;">
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