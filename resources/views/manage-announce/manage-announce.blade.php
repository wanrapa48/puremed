@extends('layouts.app-element')
@section('content')
<!-- MAIN -->
<div class="main" ng-controller="ManageAnnounceController" ng-cloak>
			<!-- MAIN CONTENT -->
			<div class="main-content">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                        <h3 class="page-title2">จัดการข่าวสาร</h3>
                        </div>
                        <div class="col-md-6">
                        <div class="input-group">
                        <input class="form-control" type="text">
                                <span class="input-group-btn">
                                    <button  class="edit-button" > <i><img src="{{asset('storage/img/i-1.png')}}"></i></button>
                                </span>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <button  ng-click="AddAnnounce()" class="add-button" > <i><img src="{{asset('storage/img/add.png')}}" class="imgadd"></i>เพิ่มข่าวสาร</button>
                    </div>
                    <div class="panel">
								<div class="panel-body">
									<table style="width: 100%;">
										<thead>
											<tr style="height: 50px;border-bottom: 1px solid black;">
												<th style="width: 10%; text-align: center;">ลำดับ</th>
												<th style="width: 10%; text-align: center; ">รหัส</th>
												<th style="width: 10%; text-align: center;">ชื่อผู้ใช้</th>
                                                <th style="width: 30%; text-align: center;">ชื่อหัวข้อ</th>
                                                <th style="width: 20%; text-align: center;">วันที่/เวลา</th>
                                                <th style="width: 10%; text-align: center;">แก้ไข</th>
                                                <th style="width: 10%; text-align: center;">ลบ</th>
											</tr>
                                        </thead>
										<tbody dir-paginate="data in announceall|itemsPerPage:10">
                                            <tr style="text-align: center;">
                                                <td style="padding-top: 25px;"><center>@{{data.index}}</center></td>
                                                <td style="padding-top: 25px;"><center>@{{data.id_announce}}</center></td>
                                                <td style="padding-top: 25px;"><center>@{{data.user_name}}</center></td>
                                                <td style="padding-top: 25px;"><center>@{{data.titel_announce}}</center></td>
                                                <td style="padding-top: 25px;"><center>@{{data.date_announce}}</center></td>
                                                <td style="padding-top: 25px;"> 
                                                    <center><button ng-click="EditAnnounce()" class="edit-button">
                                                        <i><img src="{{asset('storage/img/i-3.png')}}"></i>
                                                    </button></center></td>
                                                <td style="padding-top: 25px;">
                                                    <center><button ng-click="DeleteAnnounce()" class="delete-button">
                                                        <i><img src="{{asset('storage/img/i-2.png')}}"></i>
                                                    </button></center></td></td>
                                            </tr>
										</tbody>
                                    </table>
                                </div>
                            </div>
                                <nav aria-label="...">
                                    <ul class="pagination pagination-sm">
                                        <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true" >
                                        </dir-pagination-controls>
                                    </ul>
                                </nav>
                </div>
			</div>
            <!-- END MAIN CONTENT -->
            
            @include('modal-center.confirm-Delete')
            @include('manage-announce.Modal.manage-announce-Add')
            @include('manage-announce.Modal.manage-announce-Edit')
		</div>
        <!-- END MAIN -->
        <script src="{{asset('js/manage/manga-announce/form.js')}}"></script>
@endsection
