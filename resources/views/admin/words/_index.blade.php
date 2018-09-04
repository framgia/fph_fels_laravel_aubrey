<div>
	<ul class="list-group">
		@foreach($category->words as $word)
			<div class="panel-default">
				<div class="col-sm-12">
					{{ csrf_field() }}
					<li class="list-group-item d-flex justify-content-between align-items-center"> 
						<a href="#"> <h5> {{ $word->word }} </h5> </a>
					</li>
				</div>
			</div>
    	@endforeach
    </ul>
</div>