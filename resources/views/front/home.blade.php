@extends('front.global')



@section('content')

    
   <div class="container">
            <div class="row">
        <div class="col-xs-12 col-md-9 main">
            
            
            <div class="item-list media">

                <a class="pull-left" href="#pablo">
                    <div class="item-thum">
                        <img class=" img-raised" src="{{asset('admin/img/blog-2.jpg')}}" alt="...">
                    </div>
                </a>
                <div class="item-body">
                    <h5 class="item-heading">Chance too good. God level bars. I'm so proud of @LifeOfDesiigner #1 song in the country.
                        <ul class="tag-list">
                        <li><a class="tag badge badge-danger " href="/r/ceping">科技测评</a></li>
                        <li><a class="tag badge badge-danger " href="/r/ceping">科技测评</a></li>
                        <li><a class="tag badge badge-danger " href="/r/ceping">科技测评</a></li>
                        <li><a class="tag badge badge-danger " href="/r/ceping">科技测评</a></li>
                        </ul>
                    </h5>
                    <div class="item-footer">
                        <a class="author text-muted" href="/u/16590">作者</a>
                        <a class="website text-muted" href="/u/16590">umoit.com</a>
                        <a class="coment text-muted" href="/u/16590">评论</a>
                        <small class="text-muted">· 7 minutes ago</small>
                    </div>
                    


                   
                   
                </div>
            </div>



        </div>
        <div class="col-md-3 hidden-xs side">
            <div class="input-group right-box">
                <input type="text" class="form-control" placeholder="Right Nucleo Icon">
                <span class="input-group-addon">
                    <i class="now-ui-search users_single-02"></i>
                </span>
            </div>
            <div class="right-box">
            <h2 class=" right-box-title">热议话题 <a href="/topic" title="更多">»</a></h2>
            <ul class="tag-list">
                <li>
                        <a href="/r/programmer" class="tag badge badge-danger " data-toggle="popover">
                            程序员                        </a>
                                            </li><li class="tagPopup">
                        <a href="/r/tech" class="tag tag-tech" data-toggle="popover">
                            科技                        </a>
                                            </li><li class="tagPopup">
                        <a href="/r/duanzi" class="tag tag-duanzi" data-toggle="popover">
                            段子                        </a>
                                            </li><li class="tagPopup">
                        <a href="/r/videos" class="tag tag-videos" data-toggle="popover">
                            视频                        </a>
                                            </li><li class="tagPopup">
                        <a href="/r/frontend" class="tag tag-frontend" data-toggle="popover">
                            前端开发                        </a>
                                            </li><li class="tagPopup">
                        <a href="/r/movies" class="tag tag-movies" data-toggle="popover">
                            电影                        </a>
                                            </li><li class="tagPopup">
                        <a href="/r/v2ex" class="tag tag-v2ex" data-toggle="popover">
                            V2EX                        </a>
                                            </li><li class="tagPopup">
                        <a href="/r/cnbeta" class="tag tag-cnbeta" data-toggle="popover">
                            cnBeta                        </a>
                                            </li><li class="tagPopup">
                        <a href="/r/chouti" class="tag tag-chouti" data-toggle="popover">
                            抽屉新热榜                        </a>
                                            </li><li class="tagPopup">
                        <a href="/r/bzhanhot" class="tag tag-bzhanhot" data-toggle="popover">
                            B站最热                        </a>
                                            </li>            </ul>
        </div>

        </div>
    </div>

    </div>


@endsection
