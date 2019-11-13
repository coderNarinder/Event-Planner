@extends('layouts.admin')
 
@section('content')
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>{{$title}}</h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{ url('master/') }}">Dashboard</a></li>
              <li class="breadcrumb-item "><a href="{{ url($addLink) }}">View</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>


       <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
         @include('admin.error_message')
 
            <div class="card-body">


@php
 $sel_evt= array(); 
 $sel_amenities= array(); 
 $sel_games= array(); 
@endphp

@if(count($category_variation))
@foreach($category_variation as $fillCategory)
@if($fillCategory->type == 'event')
@php $sel_evt[] = $fillCategory->variant_id; @endphp  
@elseif($fillCategory->type == 'amenity')
@php $sel_amenities[] = $fillCategory->variant_id; @endphp
@else
@php $sel_games[] = $fillCategory->variant_id; @endphp
@endif
@endforeach
@endif



  <form role="form" id="formVariations" action="{{ route('category_variations_save', ['slug' => $category->slug]) }}" method="POST" class="row categoryVariants">
      @csrf

        <div class="col-md-6">
                <h3 class="card-title">Choose Events</h3>
                <ul class="unstyled centered">
                  @foreach($events as $event)  
                    <li>
                         <input class="styled-checkbox brand-checkbox" name="events[]" id="styled-checkbox-{{$event->id}}" type="checkbox" value="{{$event->id}}" {{ !empty($sel_evt) && in_array($event->id, $sel_evt) ? 'checked' : '' }}>
                         <label for="styled-checkbox-{{$event->id}}">{{$event->name}}</label>
                    </li>
                  @endforeach
                  
                </ul>
        </div>

        <div class="col-md-6">
                <h3 class="card-title">Choose Amenities</h3>
                <ul class="unstyled centered">
                  @foreach($amenities as $amenity)
  
                    <li>
                         <input class="styled-checkbox brand-checkbox" name="amenities[]" id="styled-checkbox-{{$amenity->id}}" type="checkbox" value="{{$amenity->id}}" {{ !empty($sel_amenities) && in_array($amenity->id, $sel_amenities) ? 'checked' : '' }}>
                         <label for="styled-checkbox-{{$amenity->id}}">{{$amenity->name}}</label>
                    </li>

                  @endforeach
                  
                </ul>
        </div>

        <div class="col-md-6">
                <h3 class="card-title">Choose Games</h3>
                <ul class="unstyled centered">
                  @foreach($games as $game)
  
                    <li>
                         <input class="styled-checkbox brand-checkbox" name="games[]" id="styled-checkbox-{{$game->id}}" type="checkbox" value="{{$game->id}}" {{ !empty($sel_games) && in_array($game->id, $sel_games) ? 'checked' : '' }}>
                         <label for="styled-checkbox-{{$game->id}}">{{$game->name}}</label>
                    </li>

                  @endforeach
                  
                </ul>
        </div>

<div class="col-md-12">
      <div class="card-footer">
          <button type="submit" id="btnVariations" class="btn btn-primary">Submit</button>
        </div>
      </div>
</form>
            
            </div>
          </div>
        </div>
      </div>
    </section>

 
     
@endsection

@section('scripts')
<script src="{{url('/AdminFILE/validations/variationsValidation.js')}}"></script>
@endsection
 
