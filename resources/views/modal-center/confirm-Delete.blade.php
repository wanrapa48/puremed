<div class="modal fade" id="modal-confirm-Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="divsave">
               <img src="{{asset('storage/img/icon/i-4.png')}}" id="imgannounce" class="img-responsive" >
               <br>
               <p class="profilephoto">คุณต้องการลบข้อมูล ใช่หรือไม่</p>
               <br>
               <button type="submit" class="btnsave"  ng-click="SavemodalDelete()" ><i ><img class="isave" src="{{asset('storage/img/icon/i-save.png')}}"></i>บันทึก</button>
              <button type="button" class="btncancel" data-dismiss="modal"><i><img class="icancel" src="{{asset('storage/img/icon/i-cancel.png')}}"></i>ยกเลิก</button>
            </div>
            </div>
        </div>
    </div>
</div>

