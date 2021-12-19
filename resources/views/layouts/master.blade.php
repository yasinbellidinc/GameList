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

	<!-- COMMON SCRIPTS -->
   @include('layouts.partials.javascript')
    @yield('scripts')

</body>
</html>
