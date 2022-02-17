<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					@foreach ($targets as $target)
						
					
					<div class="bgrid stat">

						<div class="icon-part">
							<i class="{{$target->icon}}"></i>
						</div>

						<h3 class="stat-count">
							{{$target->count}}
						</h3>

						<h5 class="stat-title">
							{{$target->title}}
						</h5>

					</div> <!-- /stat -->					
@endforeach

				</div> <!-- /stats-list -->

			</div> <!-- /twelve -->
		</div> <!-- /row -->

	</section> 