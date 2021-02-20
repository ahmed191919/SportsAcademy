<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
      <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
      <?php $segments = ''; ?>
      @foreach (Request::segments() as $segment)
        <?php $segments .= '/'.$segment ?>
        <li class="breadcrumb-item"><a href="{{$segments}}">{{Str::ucfirst($segment)}}</a></li> 
      @endforeach
    </ol>
  </nav>