
</head>
<body>
  <div class="contents">

  <div class="container-fluid">

    
        <div class="posts">
          <main class="post-single">
@yield('header1')
@include('related')

            <article>
              
              @yield('header')    
            </article>
          <div class="get-posts">
            <ul>
@include('header')              
@yield('content')

                
              </ul>
          </div>


          <div style="position:relative;width:100%;display:block;">    </div>
        </main>
      </div>
    </div>
    <div class="clear"></div>


    <div class="footer">

        <footer id="footer">
            <div class="bottom-menu">
@include('footer')
<div class="contents">
                 <div class="container">

    <!-- Social buttons -->
    <ul class="list-inline text-center">
                      @foreach(pages() as $page)
          
        
                        <li class="list-inline-item">
                            <h4><a href="{{ page_url($page) }}">{{ ucwords(str_replace('-', ' ', $page)) }}</a></h4>
                        </li>
              @endforeach
                    </ul>
                </div>
            </div>
            Copyright &copy;
             <a href="{{ home_url() }}">{{ site_name() }}</a>
        </footer>
    </div>

  </div>  
    
</div>

  
</body>

</html>
