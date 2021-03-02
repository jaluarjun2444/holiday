<div class="row">
    <div class="col-md-12">
        <table class="table tbl table-bordered" style="border:1px solid black;">
            <tr>
                <td>Package Id</td>
                <td>{{ $packageData['id'] }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $packageData['name'] }}</td>
            </tr>
            <tr>
                <td>Region</td>
                <td>{{ $packageData->Region['name'] }}</td>
            </tr>
            <tr>
                <td>Destination</td>
                <td>{{ $packageData->Destination['name'] }}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{!! $packageData->description !!}</td>
            </tr>
            <tr>
                <td>Meta Keyword</td>
                <td>{{ $packageData->meta_key }}</td>
            </tr>
            <tr>
                <td>Meta Description</td>
                <td>{{ $packageData->meta_desc }}</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>{{ $packageData->price }}</td>
            </tr>
            <tr>
                <td>Star Rating</td>
                <td>{{ $packageData->star_rating }}</td>
            </tr>
            <tr>
                <td>Duration Days</td>
                <td>{{ $packageData->duration_day }}</td>
            </tr>
            <tr>
                <td>Duration Night</td>
                <td>{{ $packageData->duration_night }}</td>
            </tr>
            @if(isset($packageData->Inclusion))
            <tr>
                <td colspan="2">
                    <center><b>Inclusion</b></center>
                </td>
            </tr>
            @foreach($packageData->Inclusion as $inclusion)
            <tr>
                <td colspan="2"><i class="fa fa-long-arrow-right"></i> {{ $inclusion->title }}</td>
            </tr>
            @endforeach
            @endif

            @if(isset($packageData->Exclusion))
            <tr>
                <td colspan="2">
                    <center><b>Exclusion</b></center>
                </td>
            </tr>
            @foreach($packageData->Exclusion as $Exclusion)
            <tr>
                <td colspan="2"><i class="fa fa-long-arrow-right"></i> {{ $Exclusion->title }}</td>
            </tr>
            @endforeach
            @endif

            @if(isset($packageData->Itinerary))
            <tr>
                <td colspan="2">
                    <center><b>Itinerary</b></center>
                </td>
            </tr>
            <tr>
                <td>
                    <center><b>Title</b></center>
                </td>
                <td>
                    <center><b>Description</b></center>
                </td>
            </tr>
            @foreach($packageData->Itinerary as $Itinerary)
            <tr>
                <td><i class="fa fa-long-arrow-right"></i> {{ $Itinerary->title }}</td>
                <td>{{ $Itinerary->description }}</td>
            </tr>
            @endforeach
            @endif

            <tr>
                <td>
                    Main Image
                </td>
                <td>
                    <img style="width:150px;" src="{{ url('uploads/packages').'/'.$packageData['main_image'] }}" />
                </td>

            </tr>

            @if(isset($packageData->Images))
            <tr>
                <td colspan="2">
                    <center><b>Images</b></center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    @foreach($packageData->Images as $Images)
                    <img style="width: 25%; " src="{{ url('uploads/packages').'/'.$Images['image'] }}" />
                    @endforeach
                </td>
            </tr>
            @endif

        </table>
    </div>
</div>