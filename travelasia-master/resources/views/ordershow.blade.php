@extends('layouts.admin')

@section('content')
<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Add Row</h4>
                                    <a href="/admin/travel/create" class="ml-auto">
                                     <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#addRowModal"> 
                                        <i class="fa fa-plus"></i>
                                        Add Row
                                    </button> </a>
                                </div>
                            </div>
                            <div class="card-body">
                                

                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                
                                                <th>Аялал</th>

                                                
                                                <th style="width: 10%">Үйлдэл</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>                                 
                                                <th>Аялал</th>
                                                                               </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($travel as $c)
                                            <tr>
                                                <td> <a href='/admin/order/show/{{$c->id}}'> <?php echo $c->name ?> </a> </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection