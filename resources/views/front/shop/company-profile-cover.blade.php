<div class="row">
    <div class="col-md-12">
        <div id="profile" style="background-image:url('{{optional($shop->coverImage)->link('big')}}')">
            <div class="profile-inner">
            </div>   
        </div>
    </div>
    <div class="col-md-12" id="c-info">
        <div class="row">
            <div class="col-md-8 d-flex">
                <div class="logo" style="background-image:url('{{optional($shop->profileImage)->link()}}')"></div>
                <div class="basic">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item name"><a href="{{url('shop/'.str_slug($shop->name,'-').'/'.$shop->id)}}"><span style="color: #fff;">{{$shop->name}}</span></a></li>
                    </ul>
                </div>
            </div>
            <div id="social" class="col-md-4 d-flex justify-content-between">
                <div class="item">
                    <a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&app_id=1622291221319152&sdk=joey&u=''&display=popup&ref=plugin&src=share_button" 
                        onclick="return !window.open(this.href, 'Facebook', 'width=640,height=580')" style="background: #3B5998; width: 100px;" class="btn text-center w-100"><i class="fab fa-facebook-f"></i></a>     
                </div>
                <div class="item"> 
                    <a href="https://twitter.com/intent/tweet?text=" style="background: #55ACEE;" class="btn text-center w-100"
                        onclick="return !window.open(this.href, 'Twitter', 'width=640,height=580')">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div class="item"> 
                    <a href="https://twitter.com/intent/tweet?text=" style="background: #f7f7f7;" class="btn text-center w-100"
                        onclick="return !window.open(this.href, 'Twitter', 'width=640,height=580')"
                        >
                        <i class="fas fa-plus"></i> Follow
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>