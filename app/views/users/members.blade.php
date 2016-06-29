@extends('layouts.front.master')

@section('title', 'Members')

@section('body')

<div id="fh5co-main">
    <aside class="fh5co-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fh5co-section-lead">Members Directory</h2>
                    <h3 class="fh5co-section-sub-lead">Click on profile to see member details</h3>
                </div>
            </div>
        </div>
    </aside>

    <div class="container" id="fh5co-products">
        <div class="row">
            @if($members->count() == 0)
            <div class="col-xxs-12 fh5co-mb30">
                No members yet.
            </div>
            @else
            @foreach($members as $member)
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="fh5co-product">
                    <img src="{{ $member->picture }}" alt="{{ $member->fullName }}" class="img-responsive img-rounded to-animate">
                    <h4>{{ $member->fullName }}</h4>
                    <p>{{ $member->bio }}.</p>
                    <p><a href="{{ url('members/'.$member->id) }}">View Profile</a></p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

</div>

@stop