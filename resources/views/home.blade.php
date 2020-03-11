@extends('template.default')

@section('title','Dashboard')

@section('content')
<div class="container">
    <div class="row-justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">

                        @csrf
                        <input type="hidden" name="item_id" id="itemId">

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Choose Item.." readonly>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#pilihbarang"></button>
                                </div>
                            </div>

                            {{-- modals item choose --}}
                            <div class="modal fade" id="pilihbarang">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Choose Item</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered  table-responsive">
                                                <thead class="thead-inverse">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Item</th>
                                                        <th>Category</th>
                                                        <th>Photo</th>
                                                        <th>Price</th>
                                                        <th>Stock</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($items as $item)
                                                    <tr>
                                                        <td scope="row">{{$loop->iteration}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->category->name}}</td>
                                                        <td>
                                                            <img src="{{asset($item->image)}}" width="50px"
                                                                height="50px">
                                                        </td>
                                                        <td>Rp. {{$item->price}}</td>
                                                        <td>{{$item->stock}}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm primary" data-dismiss="modal" 
                                                            onclick="
                                                                $(#itemId).val('{{ $item->id }}')
                                                                $(#itemName).val('{{ $item->name }}')
                                                                $(#$itemQty).attr('max','{{ $item->stock }}')">Choose</button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div> {{-- end container --}}


@endsection