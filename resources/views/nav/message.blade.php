<div class="row">
	<div class="col-lg-12">
		@if ($message=Session::get('message'))
          <div class="alert alert-danger">
              <p>{{ $message }}</p>
          </div>
        @endif
	</div>
</div>