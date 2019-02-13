@extends('layouts.app-element')
@section('content')
<!-- MAIN -->
<div class="main" ng-controller="ManageProductController" ng-cloak>
			<!-- MAIN CONTENT -->
			<div class="main-content">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                        <h3 class="page-title2">จัดการสินค้า</h3>
                        </div>
                        <div class="col-md-6">
                        <div class="input-group">
                        <input class="form-control" type="text">
                                <span class="input-group-btn">
                                    <button ng-click="SearcProduct()" class="edit-button" > <i><img src="{{asset('storage/img/i-1.png')}}"></i></button>
                                </span>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <button ng-click="AddProduct()" class="add-button" > <i><img src="{{asset('storage/img/add.png')}}" class="imgadd"></i>เพิ่มสินค้า</button>
                    </div>
                    <div class="panel">
								<div class="panel-body">
									<table style="width: 100%;">
										<thead > 
											<tr style="height: 50px;border-bottom: 1px solid black;">
												<th style="width: 10%; text-align: center;">ลำดับ</th>
												<th style="width: 10%; text-align: center; ">รหัสสินค้า</th>
												<th style="width: 20%; text-align: center;">ชื่อสินค้า</th>
                                                <th style="width: 10%; text-align: center;">คะแนน</th>
                                                <th style="width: 10%; text-align: center;">กลุ่มสินค้า</th>
                                                <th style="width: 10%; text-align: center;">ราคาปลีก</th>
                                                <th style="width: 10%; text-align: center;">ราคาตัวแทน</th>
                                                <th style="width: 10%; text-align: center;">แก้ไข</th>
                                                <th style="width: 10%; text-align: center;">ลบ</th>
											</tr>
										</thead>
										<tbody dir-paginate="data in productall|itemsPerPage:10">
                                            <tr style="text-align: center;">
                                                <td style="padding-top: 25px;">@{{data.index}}</td>
                                                <td style="padding-top: 25px;">@{{data.id_product}}</td>
                                                <td style="padding-top: 25px;">@{{data.name_product}}</td>
                                                <td style="padding-top: 25px;">@{{data.score_product}}</td>
                                                <td style="padding-top: 25px;">@{{data.group_product}}</td>
                                                <td style="padding-top: 25px;">@{{data.preice_retail}}</td>
                                                <td style="padding-top: 25px;">@{{data.price_agle}}</td>
                                                <td style="padding-top: 25px;"> 
                                                   <button ng-click="EditProduct()" class="edit-button">
                                                        <i><img src="{{asset('storage/img/i-3.png')}}"></i>
                                                    </button></td>
                                                <td style="padding-top: 25px;">
                                                    <button ng-click="DeleteProduct()" class="delete-button">
                                                        <i><img src="{{asset('storage/img/i-2.png')}}"></i>
                                                    </button></td>
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
            @include('manage-product.Modal.manage-product-Add')
            @include('manage-product.Modal.manage-product-Edit')
            @include('modal-center.confirm-Delete')
		</div>
        <!-- END MAIN -->
        <script src="{{asset('js/manage/manga-product/form.js')}}"></script>
@endsection
