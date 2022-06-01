<div class="theme-layout">

    <div class="responsive-header">
        <div class="mh-head first Sticky">
            <span class="mh-btns-left">
                <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
            </span>
            <span class="mh-text">
                <a href="newsfeed.html" title=""><img src="<?= asset("images/logo2.png") ?>" alt=""></a>
            </span>
            <span class="mh-btns-right">
                <a class="fa fa-sliders" href="#shoppingbag"></a>
            </span>
        </div>
        <div class="mh-head second">
            <form class="mh-form">
                <input placeholder="search" />
                <a href="#/" class="fa fa-search"></a>
            </form>
        </div>


    </div><!-- responsive header -->

    <div class="topbar stick">
        <div class="logo">
            <a title="" href="newsfeed.html"><img src="<?= asset("images/logo.png") ?>" alt=""></a>
        </div>

        <div class="top-area">




            <ul class="">

                <li>
                    <div class="searched">
                        <ul class="sociaz-media">
                            <li>
                                <a title="" href="/users" class="twitter"> user</a>
                                <a title="" href="/users/create" class="linkedin"> create user</a>
                                <a title="" href="/posts" class="twitter"> post</a>
                                <a title="" href="/posts/create" class="linkedin"> create post</a>
                                <a title="" href="/comments" class="twitter"> comment</a>
                                <a title="" href="/comments/create" class="linkedin"> create comment</a>
                                <a title="" href="/friends" class="twitter"> friends</a>
                                <a title="" href="/friends/create" class="linkedin"> create friends</a>
                                <a title="" href="/chats" class="twitter"> chat</a>
                                <a title="" href="/chats/create" class="linkedin"> create chat</a>
                                <!-- <a title="" href="/users/edit" class="facebook"> go to edit</a> -->
                            </li>

                        </ul>
                    </div>
                </li>



                <li>
                    <a href="index.php" title="Home" data-ripple=""><i class="ti-search"></i></a>
                    <div class="searched">
                        <form method="post" class="form-search">
                            <input type="text" placeholder="Search Friend">
                            <button data-ripple><i class="ti-search"></i></button>
                        </form>
                    </div>
                </li>
                <li><a href="index.php" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
                <li>
                    <a href="#" title="Notification" data-ripple="">
                        <i class="ti-bell"></i><span>20</span>
                    </a>
                    <div class="dropdowns">
                        <span>4 New Notifications</span>

                        <a href="notifications.html" title="" class="more-mesg">view more</a>
                    </div>
                </li>



                <li>
                    <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                    <div class="dropdowns">
                        <span>5 New Messages</span>
                        <ul class="drops-menu">
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="<?= asset("images/resources/thumb-1.jpg") ?>" alt="">
                                    <div class="mesg-meta">
                                        <h6>sarah Loren</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag green">New</span>
                            </li>

                        </ul>
                        <a href="messages.html" title="" class="more-mesg">view more</a>
                    </div>
                </li>
                <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                    <div class="dropdowns languages">
                        <a href="#" title=""><i class="ti-check"></i>English</a>

                    </div>
                </li>


            </ul>
            <div class="user-img">
                <img src="<?= asset("images/resources/admin.jpg") ?>" alt="">
                <span class="status f-online"></span>
                <div class="user-setting">
                    <a href="#" title=""><span class="status f-online"></span>online</a>
                    <a href="#" title=""><i class="ti-power-off"></i>log out</a>
                </div>
            </div>
            <span class="ti-menu main-menu" data-ripple=""></span>
        </div>
    </div><!-- topbar -->