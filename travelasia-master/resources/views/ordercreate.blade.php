@extends('layouts.admin')

@section('content')
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Захиалга нэмэх</div>
								</div>
								<form action='/admin/order/store'; method='post'>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="id">ID</label>
												<input type="text" class="form-control" id="id" name="id" placeholder="">
					
											</div>
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="name">Хэрэглэгчийн нэр</label>
												<input type="text" class="form-control" id="name" name="name" placeholder="">
					
											</div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
											<div class="form-group">
											<label for="travel">Аялал</label>
											<select class="form-control" id="travel" name="travel">
												<?php foreach ($travel as $c){
													echo "<option value='".$c->id."'>".$c->name."</option>";
												}
												?>
											</select>
										</div>
        
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="price">Тоо</label>
												<input type="text" class="form-control" id="price" name="count" placeholder="">
					
											</div>
										</div>
                                    </div>
                                
            	
								</div>
								<div class="card-action">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
								</form>		
							</div>				
						</div>
@endsection