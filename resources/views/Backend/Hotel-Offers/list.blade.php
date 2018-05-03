<h3 class="head text-center">Hotel Offers</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Hotel Offer Title</th>
            <th>Hotel Offer Description</th>
            <th>Hotel Offer Start Date</th>
            <th>Hotel Offer End Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($hotel_offers as $offers)
            <tr>
                <td>{{$offers->offername}}</td>
                <td>{{$offers->description}}</td>
                <td>{{$offers->offer_start_date}}</td>
                <td>{{$offers->offer_end_date}}</td>
                <td>
                  <a href="{{route('HotelsOffer.details',$offers->id)}}"> <span class="label label-info">View</span></a>
                     <a href="{{route('HotelsOffer.edit',$offers->id)}}"><span class="label label-warning">Edit</span></a>
                    <a href="{{route('HotelsOffer.addHotels',$offers->id)}}"> <span class="label label-danger">Add Hotels</span></a>
                    <a href="{{route('HotelsOfferHotels.edit',$offers->id)}}"> <span class="label label-danger">Update Offers-Hotels</span></a>

                </td>
            </tr>
        @empty
            <tr>
                <td>Sorry no Offers have been created please add one</td>

            </tr>
        @endforelse
        </tbody>
    </table>
</div>