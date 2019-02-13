@extends('layouts.app-element')
@section('content')
<!-- MAIN -->
<div class="main" ng-controller="ManageGiftController" ng-cloak>
			<!-- MAIN CONTENT -->
			<div class="main-content">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                        <h3 class="page-title2">จัดการโปรโมชั่น/รางวัล</h3>
                        </div>
                        <div class="col-md-6">
                        <div class="input-group">
                        <input class="form-control" type="text">
                                <span class="input-group-btn">
                                    <button  ng-click="SearchGitf()" class="edit-button" > <i><img src="{{asset('storage/img/i-1.png')}}"></i></button>
                                </span>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <button ng-click="AddGitf()" class="add-button" > <i><img src="{{asset('storage/img/add.png')}}" class="imgadd"></i>เพิ่มข่าวสาร</button>
                    </div>
                    <div class="panel">
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th style="width: 5%; text-align: center;">ลำดับ</th>
												<th style="width: 5%; text-align: center; ">รหัส</th>
                                                <th style="width: 30%; text-align: center;">ชื่อหัวข้อ</th>
                                                <th style="width: 10%; text-align: center;">ประเภท</th>
                                                <th style="width: 20%; text-align: center;">วันที่เริ่มต้นกิจกรรม</th>
                                                <th style="width: 20%; text-align: center;">วันที่สิ้นสุดกิจกรรม</th>
                                                <th style="width: 10%; text-align: center;">คะแนน</th>
                                                <th style="width: 5%; text-align: center;">แก้ไข</th>
                                                <th style="width: 5%; text-align: center;">ลบ</th>
											</tr>
										</thead>
										<tbody dir-paginate="itemsPerPage:10">
                                            <tr>
                                                <td><center>1</center></td>
                                                <td><center>001</center></td>
                                                <td><center>ทะเลหรรษา</center></td>
                                                <td><center>ทริป</center></td>
                                                <td><center>2018-02-01</center></td>
                                                <td><center>2018-02-31</center></td>
                                                <td><center>50</center></td>
                                                <td> 
                                                    <center><button ng-click="EditGift()" class="edit-button">
                                                        <i><img src="{{asset('storage/img/i-3.png')}}"></i>
                                                    </button></center></td>
                                                <td>
                                                    <center><button ng-click="DeleteGitf()" class="delete-button">
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
        @include('manage-gift.Modal.manage-gift-Add')
        @include('manage-gift.Modal.manage-gift-Edit')
        @include('modal-center.confirm-Delete')
        <script src="{{asset('js/manage/manga-gift/form.js')}}"></script>
@endsection
