<!--Basic Scripts-->
@section('footer')
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/slimscroll/jquery.slimscroll.min.js")}}"></script>

<!--Beyond Scripts-->
<script src="{{asset("assets/js/beyond.js")}}"></script>


<!--Page Related Scripts-->
<!--Sparkline Charts Needed Scripts-->
<script src="{{asset("assets/js/charts/sparkline/jquery.sparkline.js")}}"></script>
<script src="{{asset("assets/js/charts/sparkline/sparkline-init.js")}}"></script>

<!--Easy Pie Charts Needed Scripts-->
<script src="{{asset("assets/js/charts/easypiechart/jquery.easypiechart.js")}}"></script>
<script src="{{asset("assets/js/charts/easypiechart/easypiechart-init.js")}}"></script>

<!--Flot Charts Needed Scripts-->
<script src="{{asset("assets/js/charts/flot/jquery.flot.js")}}"></script>
<script src="{{asset("assets/js/charts/flot/jquery.flot.resize.js")}}"></script>
<script src="{{asset("assets/js/charts/flot/jquery.flot.pie.js")}}"></script>
<script src="{{asset("assets/js/charts/flot/jquery.flot.tooltip.js")}}"></script>
<script src="{{asset("assets/js/charts/flot/jquery.flot.orderbars.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

@yield('js')
@endsection

