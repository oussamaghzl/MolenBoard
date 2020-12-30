@extends('frontend.template')

@section('content')

    <div class="row mx-0 pb-4" id="sectionClasse">
        <div class="col-2 text-center">
            <div class=" py-3">
                <a style="text-decoration:none" href="{{ route("eleves") }}">
                    <div class="cardd titre cardd-1 mx-auto d-flex justify-content-center" >
                        <h3>Eleves</h3>
                    </div>
                </a>

                <a style="text-decoration:none" href="{{ route("agenda") }}">
                    <div class="cardd cardd-1 mx-auto d-flex justify-content-center">
                        <h3 >Agenda</h3>
                    </div>
                </a>

                <a style="text-decoration:none" href="{{ route("exercice") }}" >
                    <div class="cardd cardd-1 mx-auto d-flex justify-content-center">
                        <h3>Exercice</h3>
                    </div>
                </a>
                        
            </div>
        </div>

        <div class="col-10 mt-4" >
          <h3 class="page-title">{{ trans('global.systemCalendar') }}</h3>
          <div class="card">
              <div class="card-header">
                  {{ trans('global.systemCalendar') }}
              </div>
              <div class="card-body">
                  <form action="{{ route('admin.systemCalendar') }}" method="GET">
                      Venue:
                      <select name="venue_id">
                          <option value="">-- all venues --</option>
                          @foreach($venues as $venue)
                              <option value="{{ $venue->id }}"
                                      @if (request('venue_id') == $venue->id) selected @endif>{{ $venue->name }}</option>
                          @endforeach
                      </select>
                      <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                      
                  </form>
          
                  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
          
                  <div id='calendar'>
                    
                  </div>

              </div>
          </div>
        </div>
    </div>
  
@endsection
          
    