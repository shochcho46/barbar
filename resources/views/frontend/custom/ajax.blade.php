
@forelse ($timeSlots as $key => $slot )

<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="team-item" >

        <div class="bg-secondary text-center p-4">
            <h5 class="text-uppercase">{{ $date }}, ({{ $slot }})</h5>
            <form  id="{{ $key+1 }}" action="{{ route('home.bookSlot') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row g-3">

                    <div class="col-12">
                        <div class="">
                            <input type="text" class="form-control " name = "name" id="name" placeholder="Name">

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="">
                            <input type="number" class="form-control bg-transparent" name ="name" id="mobile" placeholder="Mobile">
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary btn-sm" type="submit">Book</button>
                    </div>
                </div>
            {{--  </form>  --}}
        </div>
    </div>
</div>

@empty
<h5 class="text-uppercase">No Slot Available</h5>
@endforelse



