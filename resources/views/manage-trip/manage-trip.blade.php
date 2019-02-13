@extends('layouts.app-element')
@section('content')
<!-- MAIN -->
<div class="main" ng-controller="ManageTripController" ng-cloak>
			<!-- MAIN CONTENT -->
			<div class="main-content">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                        <h3 class="page-title2">จัดการโปรโมชั่น/ทริป</h3>
                        </div>
                        <div class="col-md-6">
                        <div class="input-group">
                        <input class="form-control" type="text">
                                <span class="input-group-btn">
                                    <button  ng-click="SearchTrip()" class="edit-button" > <i><img src="{{asset('storage/img/i-1.png')}}"></i></button>
                                </span>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <button ng-click="AddTrip()"  class="add-button" > <i><img src="{{asset('storage/img/add.png')}}" class="imgadd"></i>เพิ่มข่าวสาร</button>
                    </div>
                    <div class="panel">
								<div class="panel-body">
									<table style="width: 100%;">
										<thead>
											<tr style="height: 50px;border-bottom: 1px solid black;">
												<th style="width: 5%; text-align: center;">ลำดับ</th>
												<th style="width: 5%; text-align: center; ">รหัส</th>
                                                <th style="width: 20%; text-align: center;">ชื่อหัวข้อ</th>
                                                <th style="width: 10%; text-align: center;">ประเภท</th>
                                                <th style="width: 20%; text-align: center;">วันที่เริ่มต้นกิจกรรม</th>
                                                <th style="width: 20%; text-align: center;">วันที่สิ้นสุดกิจกรรม</th>
                                                <th style="width: 10%; text-align: center;">คะแนน</th>
                                                <th style="width: 5%; text-align: center;">แก้ไข</th>
                                                <th style="width: 5%; text-align: center;">ลบ</th>
											</tr>
										</thead>
										<tbody dir-paginate="data in tripall|itemsPerPage:10">
                                            <tr style="text-align: center;">
                                                <td style="padding-top: 25px;">@{{data.index}}</td>
                                                <td style="padding-top: 25px;">@{{data.id_trip}}</td>
                                                <td style="padding-top: 25px;">@{{data.titel_trip}}</td>
                                                <td style="padding-top: 25px;">@{{data.promotion_type}}</td>
                                                <td style="padding-top: 25px;">@{{data.datestart_trip}}</td>
                                                <td style="padding-top: 25px;">@{{data.dateend_trip}}</td>
                                                <td style="padding-top: 25px;">@{{data.score_trip}}</td>
                                                <td style="padding-top: 25px;"> 
                                                    <center><button ng-click="EditTrip()" class="edit-button">
                                                        <i><img src="{{asset('storage/img/i-3.png')}}"></i>
                                                    </button></center></td>
                                                <td style="padding-top: 25px;">
                                                    <center><button ng-click="DeleteTrip()" class="delete-button">
                                                        <i><img src="{{asset('storage/img/i-2.png')}}"></i>
                                                    </button></center></td>
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
            @include('manage-trip.Modal.manage-trip-Add')
            @include('manage-trip.Modal.manage-trip-Edit')
            @include('modal-center.confirm-Delete')
		</div>
        <!-- END MAIN -->
        <script src="{{asset('js/manage/manga-trip/form.js')}}"></script>
@endsection

