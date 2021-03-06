@extends('layouts.app')



@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing <a class="btn btn-dark float-right btn-sm" href="/dashboard">Go Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['action' => ['ListingsController@update', $listing->id],'method' => 'POST']) !!}


                    {{ Form::bsText('name',$listing->name,['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('website',$listing->website,['placeholder'=>'Company Website']) }}
                    {{ Form::bsText('email',$listing->email,['placeholder'=>'Company Email']) }}
                    {{ Form::bsText('phone',$listing->phone,['placeholder'=>'Company Phone']) }}
                    {{ Form::bsText('address',$listing->address,['placeholder'=>'Company Address']) }}
                    {{ Form::bsTextArea('bio',$listing->bio,['placeholder'=>'About This Business']) }}

                    {{Form::hidden('_method','PUT')}}

                    {{ Form::bsSubmit('Submit') }}


                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

@endsection