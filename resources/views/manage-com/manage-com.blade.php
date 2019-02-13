@extends('layouts.app-element')
@section('content')
<!-- MAIN -->
<div class="main" ng-controller="ManageComController" ng-cloak>
			<!-- MAIN CONTENT -->
			<div class="main-content">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                        <h3 class="page-title2">จัดการคอมมิชชั่น</h3>
                        </div>
                        <div class="col-md-6">
                        <div class="input-group">
                        <input class="form-control" type="text">
                                <span class="input-group-btn">
                                    <button ng-click="SearchCom()"  class="edit-button" > <i><img src="{{asset('storage/img/i-1.png')}}"></i></button>
                                </span>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <button ng-click="AddCom()" class="add-button" > <i><img src="{{asset('storage/img/add.png')}}" class="imgadd"></i>เพิ่มข่าวสาร</button>
                    </div>
                    <div class="panel">
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th style="width: 10%; text-align: center;">ลำดับ</th>
												<th style="width: 20%; text-align: center; ">ระดับ</th>
                                                <th style="width: 50%; text-align: center;">เงื่อนไข</th>
                                                <th style="width: 10%; text-align: center;">แก้ไข</th>
                                                <th style="width: 10%; text-align: center;">ลบ</th>
											</tr>
										</thead>
										<tbody dir-paginate="itemsPerPage:10">
                                            <tr>
                                                <td><center>1</center></td>
                                                <td><center>VIP1</center></td>
                                                <td><center>สิ่งสินค้าครบ 1000 ชิ้น อย่างเดียว X15</center></td>
                                                <td> 
                                                    <center><button ng-click="EditCom()" class="edit-button">
                                                        <i><img src="{{asset('storage/img/i-3.png')}}"></i>
                                                    </button></center></td>
                                                <td>
                                                    <center><button ng-click="DeleteCom()" class="delete-button">
                                                        <i><img src="{{asset('storage/img/i-2.png')}}"></i>
                                                    </button></center></td></td>
                                            </tr>
										</tbody>
                                    </table>
                                </div>
                            </div>
                                <nav aria-label="...">
                                    <ul class="pagination pagination-sm" style="float:right;">
                                        <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true" >
                                        </dir-pagination-controls>
                                    </ul>
                                </nav>
                </div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
        <!-- END MAIN -->
        @include('manage-com.Modal.manage-com-Add')
        @include('manage-com.Modal.manage-com-Edit')
        @include('modal-center.confirm-Delete')
        <script src="{{asset('js/manage/manga-com/form.js')}}"></script>
@endsection
