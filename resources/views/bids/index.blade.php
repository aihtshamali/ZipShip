@extends('layouts.app')
@section('style')
@endsection

@section('content')
  @php
    $temp='';
  @endphp
  @forelse ($bids as $bid)
    <div class="container profile animate-left"  style="padding:0 0 !important">
        @if ($temp!=$bid->post->title)
          <div class="marginauto border width70  padding1per backgrounwhite clear">
              <a href ="{{route('makeOffer.show',$bid->post->id)}}"> <b><span class="textpurple">{{$bid->post->title}} </span></a> where to buy <i>{{$bid->post->item_url}}</i></b>
              <span class="right boldName grayee" style="line-height:normal">price <span class="black">{{$bid->post->item_price}}$</span></span>
          </div>
          @php $temp=$bid->post->title @endphp
          <div class="padding1per clear width70 marginauto"><b>Bids on this Project</b></div>
        @endif
        <div class="marginauto border width70 padding1per backgrounwhite">
            <b class="paddingLef1per"><span class="black">{{$bid->post->title}}</span><span class="right">{{$bid->amount}}$</span><br/><span class="paddingLef1per" style="font-size:smaller">({{$bid->created_at}})</span></b>
        </div>
    </div>
  @empty
    <div class="container profile animate-left"  style="padding:0 0 !important">
      <div class="marginauto border width70 padding1per backgrounwhite">
          <b class="paddingLef1per"><span class="black">No Bids Found</span></b>
      </div>
    </div>
  @endforelse
@endsection
