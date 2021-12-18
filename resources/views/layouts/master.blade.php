<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.header')
@yield('styles')

	<!-- /header -->
	<main>
        @yield('content')
	</main>
	<!-- /main -->

	@include('layouts.partials.footer')
	<!--/footer-->
	</div>
	<!-- page -->

	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>@lang('system_translate.front.sign_in')</h3>
		</div>
		<div class="sign-in-wrapper">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-owner" role="tab" aria-controls="nav-home" aria-selected="true">@lang('system_translate.front.company_owner')</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-guest" role="tab" aria-controls="nav-profile" aria-selected="false">@lang('system_translate.front.visitor')</a>
				</div>
			</nav>
		</div>
</div>
	<!-- /Sign In Popup -->

	<!-- <div id="toTop"></div>< Back to top button -->

	<!-- COMMON SCRIPTS -->
   @include('layouts.partials.javascript')
    @yield('scripts')

</body>
</html>
