@extends('layouts.admin')

@section('content')
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Захиалга нэмэх</div>
								</div>
								<form action='/admin/order/{{$travel->id}}/update'; method='post'>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="id">ID</label>
												<input type="text" value=<?php echo "'".$travel->id."'"?> class="form-control" id="id" name="id" placeholder="" disabled>
					
											</div>
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="name">Хэрэглэгчийн нэр</label>
												<input type="text" value=<?php echo "'".$travel->user_username."'"?> class="form-control" id="name" name="name" placeholder="" disabled>
					
											</div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
											    <label for="travel">Аялал</label>
                                                <input type="text" value=<?php echo "'".$travel->name."'"?> class="form-control" id="price" name="count" placeholder="" disabled>
										</div>
        
										</div>
                                        <div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="price">Тоо</label>
												<input type="text" value=<?php echo "'".$travel->traveler_number."'"?> class="form-control" id="price" name="count" placeholder="">
					
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