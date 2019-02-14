<div class="modal fade" id="modal-managestock-Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูลสต๊อก</h5>
      </div>
      <div class="modal-body">
        <form >
        {{csrf_field()}}
        <div class="row" style="padding: 20px 30px 0px 30px;">
          <div class="col-lg-12">
          <p class="profiletext">ชื่อสินค้า</p>
              <input class="form-control" type="text" id="productname" >
          </div>
        </div>
        <div class="row" style="padding: 20px 30px 0px 30px;">
        <div class="col-lg-12">
          <p class="profiletext">ราคาสินค้า</p>
              <input class="form-control" type="text" id="price_agle" >
          </div>
        </div>
        <div class="row" style="padding: 20px 30px 0px 30px;">
        <div class="col-lg-12">
          <p class="profiletext">จำนวน</p>
              <input class="form-control" type="number" id="amount" >
          </div>
        </div>
        <div class="row" style="padding: 20px 30px 0px 30px;">
        <div class="col-lg-12">
          <p class="profiletext">คะแนน</p>
              <input class="form-control" type="number" id="score" >
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