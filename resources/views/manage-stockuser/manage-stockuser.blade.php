@extends('layouts.app-element')
@section('content')
<!-- MAIN -->
<div class="main" ng-controller="ManageStockUserController" ng-cloak>
			<!-- MAIN CONTENT -->
			<div class="main-content">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                        <h3 class="page-title2">จัดการสต๊อก/สต๊อกผู้ใช้งาน</h3>
                        </div>
                        <div class="col-md-6">
                        <div class="input-group">
                        <input class="form-control" type="text">
                                <span class="input-group-btn">
                                    <button ng-click="SearchStock()" class="edit-button" > <i><img src="{{asset('storage/img/icon/i-1.png')}}"></i></button>
                                </span>
                        </div>
                        </div>
                    </div>
                    <div class="panel">
								<div class="panel-body">
                                <table style="width: 100%;">
										<thead>
											<tr class="trhead">
												<th style="width: 10%; text-align: center;">ลำดับ</th>
												<th style="width: 10%; text-align: center; ">รหัสผู้ใช้</th>
												<th style="width: 15%; text-align: center;">ชื่อผู้ใช้</th>
                                                <th style="width: 15%; text-align: center;">นามสกุล</th>
                                                <th style="width: 10%; text-align: center;">จำนวน</th>
                                                <th style="width: 20%; text-align: center;">วัน/เวลาที่ฝาก</th>
                                                <th style="width: 10%; text-align: center;">รายละเอียด</th>
											</tr>
										</thead>
										<tbody dir-paginate="data in stockuserall|itemsPerPage:10">
                                            <tr style="text-align: center;">
                                                <td style="padding-top: 25px;">@{{data.index}}</td>
                                                <td style="padding-top: 25px;">@{{data.iduser}}</td>
                                                <td style="padding-top: 25px;">@{{data.nameuser}}</td>
                                                <td style="padding-top: 25px;">@{{data.lastname}}</td>
                                                <td style="padding-top: 25px;">@{{data.amounttotal}}</td>
                                                <td style="padding-top: 25px;">@{{data.datetime}}</td>
                                                <td style="padding-top: 25px;"> 
                                                    <a href="/ManageStockUserDetail" class="edit-button">
                                                        <i><img src="{{asset('storage/img/icon/i-6.png')}}"></i>
                                                    </a></td>
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
        <script src="{{asset('js/manage/manga-stockuser/form.js')}}"></script>
@endsection
