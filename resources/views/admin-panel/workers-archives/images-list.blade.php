<ul id="lightgallery{{$archiveId}}" class="list-unstyled row lightgallery">
    @foreach($images as $image)
        <li class="col-xs-6 col-sm-6 col-md-6"
            data-responsive="{{asset('storage/' . $image)}}"
            data-src="{{asset('storage/' . $image)}}"
            data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
            <a href="#">
                <img class="img-responsive br-7"
                     src="{{asset('storage/' . $image)}}" alt="Thumb-1">
            </a>
        </li>
    @endforeach
</ul>
