
@include('public-section.partials._header')
<body>

<!--==========================
Header
============================-->
<!-- #header -->
@include('public-section.partials._navbar')

<!--==========================
  Whole content Section
============================-->

@yield('content')



@include('public-section.partials._footerContactSection')
@include('public-section.partials._footer')
