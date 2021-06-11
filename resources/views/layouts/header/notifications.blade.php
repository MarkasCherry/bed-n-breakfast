<div class="toolbar ml-auto">
    @include('layouts.header.mode-switch')

    <div class="toolbar-notifications is-hidden-mobile">
        <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
            <div class="is-trigger" aria-haspopup="true">
                <i data-feather="bell"></i>
                <span class="new-indicator pulsate"></span>
            </div>
            <div class="dropdown-menu" role="menu">
                <div class="dropdown-content">
                    <div class="heading">
                        <div class="heading-left">
                            <h6 class="heading-title">Notifications</h6>
                        </div>
                        <div class="heading-right">
                            <a class="notification-link" href="/admin-profile-notifications.html">See all</a>
                        </div>
                    </div>
                    <ul class="notification-list">
                        <li>
                            <a class="notification-item">
                                <div class="img-left">
                                    <img class="user-photo"
                                         alt="" src="https://via.placeholder.com/150x150"
                                         data-demo-src="https://via.placeholder.com/150x150" />
                                </div>
                                <div class="user-content">
                                    <p class="user-info"><span class="name">Alice C.</span> left a comment.</p>
                                    <p class="time">1 hour ago</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
