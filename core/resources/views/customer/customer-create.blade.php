@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="horz-layout-basic">{{$page_title}}</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">

                            <form class="form-horizontal" method="post" role="form">
                                {!! csrf_field() !!}
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">Customer Name</strong></label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input name="name" class="form-control bold" value="{{ old('name') }}" placeholder="Customer Name" required/>
                                                <span class="input-group-addon"><strong><i class="fa fa-file-text-o"></i></strong></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">Father Name</strong></label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input name="fname" class="form-control bold" value="{{ old('fname') }}" placeholder="Father Name" required/>
                                                <span class="input-group-addon"><strong><i class="fa fa-file-text-o"></i></strong></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">CNIC</strong></label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input name="cnic" class="form-control bold" value="{{ old('cnic') }}" placeholder="CNIC" required/>
                                                <span class="input-group-addon"><strong><i class="fa fa-file-text-o"></i></strong></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">Customer Email</strong></label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input name="email" type="email" class="form-control bold" value="{{ old('email') }}" placeholder="Customer Email (optional)"/>
                                                <span class="input-group-addon"><strong><i class="fa fa-envelope"></i></strong></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">Customer Mobile</strong></label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input name="phone" class="form-control bold" value="{{ old('phone') }}" placeholder="Customer Mobile" required/>
                                                <span class="input-group-addon"><strong><i class="fa fa-phone"></i></strong></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">Alternative Phone</strong></label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input name="phone2" class="form-control bold" value="{{ old('phone2') }}" placeholder="Alternative Phone (optional)"/>
                                                <span class="input-group-addon"><strong><i class="fa fa-phone"></i></strong></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">Customer Address </strong></label>
                                        <div class="col-md-12">
                                            <textarea name="address" id="" cols="30" rows="5" class="form-control input-lg" placeholder="Customer Address" required>{{ old('address') }}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg text-uppercase"><i class="fa fa-send"></i> Create Customer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!---ROW-->
@endsection
@section('vendors')
@endsection
@section('scripts')

@endsection