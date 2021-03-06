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
                                    <button ng-click="SearchCom()"  class="edit-button" > <i><img src="{{asset('storage/img/icon/i-1.png')}}"></i></button>
                                </span>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <button ng-click="AddCom()" class="add-button" > <i><img src="{{asset('storage/img/icon/add.png')}}" class="imgadd"></i>เพิ่มข่าวสาร</button>
                    </div>
                    <div class="panel">
								<div class="panel-body">
									<table style="width: 100%;">
										<thead >
											<tr class="trhead">
												<th style="width: 10%; text-align: center;">ลำดับ</th>
												<th style="width: 20%; text-align: center; ">ระดับ</th>
                                                <th style="width: 50%; text-align: center;">เงื่อนไข</th>
                                                <th style="width: 10%; text-align: center;">แก้ไข</th>
                                                <th style="width: 10%; text-align: center;">ลบ</th>
											</tr>
										</thead>
										<tbody dir-paginate="data in comall|itemsPerPage:10">
                                            <tr style="text-align: center;">
                                                <td style="padding-top: 25px;">@{{data.index}}</td>
                                                <td style="padding-top: 25px;">@{{data.level}}</td>
                                                <td style="padding-top: 25px;">@{{data.detail}}</td>
                                                <td style="padding-top: 25px;"> 
                                                    <button ng-click="EditCom()" class="edit-button">
                                                        <i><img src="{{asset('storage/img/icon/i-3.png')}}"></i>
                                                    </button></td>
                                                <td style="padding-top: 25px;">
                                                    <button ng-click="DeleteCom()" class="delete-button">
                                                        <i><img src="{{asset('storage/img/icon/i-2.png')}}"></i>
                                                    </button></td></td>
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
            @include('manage-com.Modal.manage-com-Add')
            @include('manage-com.Modal.manage-com-Edit')
            @include('modal-center.confirm-Delete')
		</div>
        <!-- END MAIN -->
        <script src="{{asset('js/manage/manga-com/form.js')}}"></script>
@endsection
