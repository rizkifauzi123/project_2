<footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
  <div class="container-fluid">
    <div class="row">
      {{-- <nav class="footer-nav">
        <ul>
          <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
          <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
          <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
        </ul>
      </nav> --}}
      <div class="credits ml-auto">
        <span class="copyright">
          © 2023, made with <i class="fa fa-heart heart"></i> <a href="{{ url('dashboard')}}">by Creative Tim 1 </a>
        </span>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('admin/assets/js/core/jquery.min.js' ) }}"></script>
<script src="{{ asset('admin/assets/js/core/popper.min.js' ) }}"></script>
<script src="{{ asset('admin/assets/js/core/bootstrap.min.js' ) }}"></script>
<script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.jquery.min.js' ) }}"></script>
<!--  Google Maps Plugin    -->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
<!-- Chart JS -->
<script src="{{ asset('admin/assets/js/plugins/chartjs.min.js' ) }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('admin/assets/js/plugins/bootstrap-notify.js' ) }}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('admin/assets/js/paper-dashboard.min.js?v=2.0.1' ) }}" type="text/javascript"></script>
</body>

</html>