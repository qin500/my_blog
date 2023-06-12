
<div class="container wp">
    <main>
        <div class="artList">
            <h2 class="title">最新文章</h2>
            <ul class="newArticle">
                <li class="item">
                    <a target="_blank" href="#">
                        <i>
                            <img src="images/img.png" alt="laravel分页和安装语言包">
                        </i>
                        <h2>laravel分页和安装语言包</h2>
                    </a>
                    <p>
                        分页
                        自定义分页&nbsp;
                        $posts=Post::where(['uid'=&gt;$blog_user-&gt;id])-&gt;paginate(20);
                        如果你想要把当前所有的请求查询参数添加到分页链接，你可以使用&nbsp;withQueryString&nbsp;方法：
                        $users = User::paginate(15)-&gt;withQueryString();
                        展示分页
                    </p>
                    <div class="article-lists-detail">
                        <span class="date"><i class="iconfont icon-date1"></i>2021-12-21</span>
                        <span class="date"><i class="iconfont icon-eye"></i>521</span>
                        <span class="date"><i class="iconfont icon-folder"></i><a href="#">PHP</a></span>
                    </div>
                    <a target="_blank" href="#" class="article-lists-view">
                        阅读更多
                    </a>
                </li>
                <li class="item">
                    <a target="_blank" href="#">
                        <i>
                            <img src="images/img.png" alt="laravel分页和安装语言包">
                        </i>
                        <h2>laravel分页和安装语言包</h2>
                    </a>
                    <p>
                        分页
                        自定义分页&nbsp;
                        $posts=Post::where(['uid'=&gt;$blog_user-&gt;id])-&gt;paginate(20);
                        如果你想要把当前所有的请求查询参数添加到分页链接，你可以使用&nbsp;withQueryString&nbsp;方法：
                        $users = User::paginate(15)-&gt;withQueryString();
                        展示分页
                    </p>
                    <div class="article-lists-detail">
                        <span class="date"><i class="iconfont icon-date1"></i>2021-12-21</span>
                        <span class="date"><i class="iconfont icon-eye"></i>521</span>
                        <span class="date"><i class="iconfont icon-folder"></i><a href="#">PHP</a></span>
                    </div>
                    <a target="_blank" href="#" class="article-lists-view">
                        阅读更多
                    </a>
                </li>
            </ul>
        </div>
        <div id="paging" class="paging">
            <div class="paging-warp">
                <p class="total">96条</p>
                <ul class="list">
                    <li class="first">&lt;</li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li class="middle">...</li>
                    <li class="last">&gt;</li>
                </ul>
            </div>
        </div>

    </main>
    <aside>
        <?php

        require "template/aside.php";
        //require ;

        ?>


    </aside>

</div>
