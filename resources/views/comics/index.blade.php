@extends('templates.base')

@section('title', 'Comics | All')

@section('mainContent')
   <main>
      <div class="container">
         <div>
            @foreach ($comics as $comic)
               <div class="col">
                  <article class="card mb-3 w-100">
                     <div class="row g-0">

                        <!-- Thumb -->
                        <div class="col-md-2">
                           <a href="{{ route('comics.show', $comic['id']) }}">
                              <img src="{{ $comic['thumb'] }}" class="img-fluid rounded-start" alt="{{ $comic['title'] }}">
                           </a>
                        </div>
                        <!-- / -->

                        <!-- Content -->
                        <div class="col-md-10">
                           <div class="card-body h-100 d-flex flex-column">

                              <!-- Text -->
                              <div>
                                 <h5 class="card-title">
                                       <a href="{{ route('comics.show', $comic['id']) }}">{{ $comic['title'] }}</a>
                                 </h5>
                                 <p class="card-text">{{ $comic['description'] }}</p>
                              </div>
                              <!-- / -->

                              <!-- Price -->
                              <span class="mt-auto d-block"><strong>$ {{ $comic['price'] }}</strong></span>
                              <!-- / -->

                              <hr>

                              <!-- Actions btn -->
                              <div class="d-flex">

                                 <!-- Edit btn -->
                                 <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                                 <!-- / -->

                                 <!-- Popup Trigger -->
                                 <button type="button" data-baseurl="{{ route('comics.index') }}" data-id="{{ $comic->id }}" class="btn btn-danger ms-2 btn-del" data-bs-toggle="modal" data-bs-target="#delPopup">Delete</button>
                                 <!-- / -->

                              </div>
                              <!-- / -->
                           </div>
                        </div>
                        <!-- / -->
                     </div>
                  </article>
               </div>
            @endforeach
         </div>
         {{ $comics->links() }}
      </div>
   </main>

   <!-- Deletion popup -->
   <div class="modal fade" id="delPopup" tabindex="-1" aria-labelledby="delPopup" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="delPopuplLabel">Confirm deletion</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  Do you really want to delete this comic?
            </div>
            <div class="modal-footer">
               <form class="d-inline-block" method="POST" id="indexForm">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" id="btnDel">Yes, delete</button>
               </form>
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, cancel</button>
            </div>
         </div>
      </div>
   </div>
   <!-- / -->
@endsection
