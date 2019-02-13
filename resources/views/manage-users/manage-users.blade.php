@extends('layouts.app-element')
@section('content')
<!-- MAIN -->
<div class="main" ng-controller="ManageUsersController" ng-cloak>
			<!-- MAIN CONTENT -->
			<div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                        <h3 class="page-title">จัดการผู้ใช้งาน</h3>
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
                    <div class="panel">
								<div class="panel-body">
									<table  style="width: 100%;">
										<thead>
											<tr  style="height: 50px;border-bottom: 1px solid black;">
												<th style="width: 5%; text-align: center;">ลำดับ</th>
												<th style="width: 10%; text-align: center; ">รหัส</th>
												<th style="width: 15%; text-align: center;">ชื่อผู้ใช้</th>
                                                <th style="width: 10%; text-align: center;">รหัสผ่าน</th>
                                                <th style="width: 15%; text-align: center;">ชื่อ</th>
                                                <th style="width: 15%; text-align: center;">นามสกุล</th>
                                                <th style="width: 5%; text-align: center;">ป้าย</th>
                                                <th style="width: 5%; text-align: center;">ตำแหน่ง</th>
                                                <th style="width: 5%; text-align: center;">แก้ไข</th>
                                                <th style="width: 5%; text-align: center;">ลบ</th>
											</tr>
										</thead>
										<tbody dir-paginate="data in user|itemsPerPage:10">
                                            <tr style="text-align: center;">
                                                <td  style="padding-top: 25px;">@{{data.index}}</td>
                                                <td style="padding-top: 25px;">@{{data.user_id}}</td>
                                                <td style="padding-top: 25px;">@{{data.user_name}}</td>
                                                <td style="padding-top: 25px;">@{{data.user_password}}</td>
                                                <td style="padding-top: 25px;">@{{data.name_user}}</td>
                                                <td style="padding-top: 25px;">@{{data.lastname_user}}</td>
                                                <td style="padding-top: 25px;">@{{data.Position}}</td>
                                                <td style="padding-top: 25px;">@{{data.Level}}</td>
                                                <td style="padding-top: 25px;"> 
                                                    <center><button ng-click="EditUser()" class="edit-button">
                                                        <i><img src="{{asset('storage/img/i-3.png')}}"></i>
                                                    </button></center></td>
                                                <td style="padding-top: 25px;">
                                                    <center><button ng-click="DeleteUser()" class="delete-button">
                                                        <i><img src="{{asset('storage/img/i-2.png')}}"></i>
                                                    </button></center></td>
                                            <tr>
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
            @include('manage-users.Modal.manage-user-Edit')
            @include('modal-center.confirm-Save')

        </div>
        <!-- END MAIN -->
        <script src="{{asset('js/manage/manage-user/form.js')}}"></script>-
	
@endsection
