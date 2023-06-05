/******************************
	Basic
**********************************/

@font-face {
	font-family: "Montserrat",sans-serif,"Apple Color Emoji","Segoe UI Emoji","NotoColorEmoji","Segoe UI Symbol","Android Emoji","EmojiSymbols";
	/*src: url('<?php echo ossn_theme_url();?>fonts/helvetica.ttf');*/
    src: url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')
}

body {
	font-size: 14px;
	background-color: #222;
	font-family: "Montserrat",sans-serif,"Apple Color Emoji","Segoe UI Emoji","NotoColorEmoji","Segoe UI Symbol","Android Emoji","EmojiSymbols";
	height: 100%;
    letter-spacing: 0.3px;
}

.ossn-required {
	color: #a94442;
}

::-webkit-scrollbar {
	width: 12px;
}

::-webkit-scrollbar-track {
	/*background-color: var(--bg-main);
	border-left: 1px solid var(--bg-main);*/
}

::-webkit-scrollbar-thumb {
	background-color: #555;
}

::-webkit-scrollbar-thumb:hover {
	/*background-color: #aaa;*/
}
*::selection {
    background-color: #8FECC5;
    color: #222;
}
.ossn-form input[type='password'],
.ossn-form text,
.ossn-form select,
.ossn-form textarea,
.ossn-form input[type='text'] {
	width: 100%;
    border: none;
    background: transparent;
    color: #fff;
	outline: none;
	display: block;
	resize: vertical;
    border-radius: 0;
    border-bottom: 1px solid #444;
    line-height: 1.5;
}
.ossn-form select:hover,
.ossn-form textarea:hover,
.ossn-form input[type='text']:hover {
    border-bottom: 1px solid #BC8FEC;
}
.ossn-invite-friends textarea {
    background: #333;
    margin-bottom: 10px;
}
.ossn-invite-friends .btn-primary {
    float: right;
}
.ossn-form textarea[name='feedback'] {
    border-bottom: 1px solid #444;
    margin-bottom: 20px;
}
.ossn-form input[type='submit'] {
	/*margin-top: 5px;
	margin-bottom: 5px;*/
}

.ossn-red-borders {
	border: 1px solid #a94442 !important;
}
.feedback-rate {
    margin: 10px 0 20px 0;
}

.fa {
	margin-right: 5px;
}

.ossn-hidden {
	display: none;
}

p {
	font-size: 17px;
}

.col-center {
	float: none;
	margin: 0 auto;
}

.container-table {
	display: table;
	width: 100%;
}

.center-row {
	display: table-cell;
	text-align: center;
}

.radio-block {
	margin-top: 10px;
	margin-bottom: 10px;
}

.radio-block span {
	display: inline-block;
	margin-right: 10px;
	font-size: 15px;
	font-weight: 500;
	margin-left: 10px;
    color: #aaa;
}

.btn {
	/*border-radius: 2px;*/
}

.btn-primary {
	background: transparent;
}


/************************************
	Layouts
************************************/


/** didn't we have a minimum page height in facebook? #702 **/

.ossn-layout-module,
.ossn-layout-contents,
.ossn-layout-media,
.ossn-layout-newsfeed {
	margin-top: 10px;
	min-height: 400px;
}

.ossn-home-container .ossn-page-contents {
	/*background: rgba(255, 255, 255, 0);*/
	border: none;
}

.ossn-layout-startup {
	/*background: #222 url("<?php echo ossn_theme_url();?>images/home-background.png") repeat-x;*/
}

.ossn-layout-startup footer .ossn-footer-menu a {
	color: #aaa;
}

.ossn-layout-startup .ossn-widget {
	background: none;
}

.ossn-layout-startup .ossn-widget .widget-contents {
	border: none;
}

.ossn-layout-startup .ossn-widget .widget-heading {
	border: 0px;
	padding: 20px 10px 0px;
	font-size: 20px;
	font-weight: 700;
	background: none;
}

.ossn-layout-startup .ossn-form input[type='password'],
.ossn-layout-startup .ossn-form text,
.ossn-layout-startup .ossn-form select,
.ossn-layout-startup .ossn-form textarea,
.ossn-layout-startup .ossn-form input[type='text'] {
	/*border-bottom: #444;*/
	border-radius: 0;
}

.ossn-layout-startup .ossn-form .col-md-6:first-child {
	padding-right: 0px;
}

.ossn-home-container {
	margin-top: 20px;
}

.ossn-layout-newsfeed .newsfeed-right {
	background: #222;
	/*border: 1px solid #444;*/
	padding: 10px;
    margin: 0 auto;
    max-width: 400px;
}

.ossn-page-container {
	overflow-x: hidden;
	min-height: 400px;
}

.ossn-layout-module {
	margin-top: 10px;
	background: #222;
	border: 0px solid #444;
	padding: 10px;
}

.ossn-layout-module .module-title {
	background: #222;
	border: 0px solid #444;
	padding: 10px;
}

.ossn-layout-module .module-contents {
	padding: 10px;
}
.grp_setting_label {
    margin: 20px 0 5px;
}
.ossn-layout-module .module-title .title {
	font-weight: 700;
	display: inline-block;
}

.ossn-layout-module .controls {
	float: right;
	display: inline-table;
}

.ossn-layout-media {
	margin-top: 10px;
}

.ossn-layout-media .like-share,
.ossn-layout-media .comments-list {
	margin-left: -10px;
	margin-right: -10px;
}

.ossn-layout-media .content,
.ossn-page-contents {
	/*background: #333;*/
	padding: 10px;
	border: 0px solid #444;
}
.ossn-page-contents img {
    border-radius: 11px;
}

.opensource-socalnetwork {
	min-height: 500px;
}

.ossn-home-container .row {}

#ossn-signup-errors {
	display: none;
	margin-top: 10px;
}

.ossn-error-page {
	text-align: center;
	padding: 100px;
}

.ossn-error-page .error-heading {
	font-size: 50px;
	font-weight: 700;
}

.ossn-error-page .error-text {
	font-size: 16px;
}

.ossn-error-page .fa-exclamation-triangle {
	font-size: 100px;
}

.ossn-group-members {
	margin-right: 5px;
}


/*******************************
	Topbar	
********************************/

.topbar {
	background-color: #222;
	border-bottom: 1px solid #444;
	/*color: #fff;*/
	z-index: 1;
	position: relative;
}

.topbar .fa {
	font-size: 20px;
	margin-top: 5px;
}

.topbar .site-name a {}

.topbar .site-name a:hover {
	text-decoration: none;
}

.topbar-menu-left {
	position: relative;
	z-index: 1;
}

.topbar-menu-right li,
.topbar-menu-left li {
	display: inline-block;
}

.topbar .fa-sort-desc {
	color: pink;
	margin-top: 2px;
}

.topbar-userdata {
	float: left;
	margin-top: 12px;
}

.topbar-userdata img {
	border-radius: 3px;
	width: 25px;
}

.topbar-userdata .name {
	font-weight: 700;
	font-size: 12px;
	margin-left: 5px;
}

.topbar-menu-right li a,
.topbar-menu-left li a {
	padding: 10px;
	display: block;
	color: #fff;
}

.sitename {
	float: left;
	background: #fff;
	padding: 0px 8px;
	border-radius: 2px;
	margin-top: 10px;
	font-size: 20px;
	font-weight: 700;
	color: red;
}

.topbar-userdata .homelink a {
	font-weight: 700;
	font-size: 12px;
	margin-left: 5px;
	color: #fff;
	margin-left: 20px;
	border-left: 1px solid #444;
	padding-left: 19px;
}

.topbar-menu-right li:hover,
.topbar-menu-left li:hover {
	cursor: pointer;
}

.topbar .right-side-nospace .topbar-menu-right {
	margin-right: 0px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.topbar .right-side-space .topbar-menu-right {
	margin-right: 10px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.topbar .ossn-icons-topbar-friends,
.topbar .ossn-icons-topbar-messages,
.topbar .ossn-icons-topbar-notification i {
	color: #BC8FEC;
}
.topbar .ossn-topbar-dropdown-menu:hover,
.topbar .ossn-icons-topbar-friends:hover,
.topbar .ossn-icons-topbar-messages:hover,
.topbar .ossn-icons-topbar-notification:hover i {
	color: #fff;
}

.topbar .ossn-icons-topbar-friends-new,
.topbar .ossn-icons-topbar-messages-new,
.topbar .ossn-icons-topbar-notifications-new i {
	color: #fff;
}
.topbar .ossn-topbar-dropdown-menu:hover,
.topbar .ossn-notifications-friends:hover,
.topbar .ossn-notifications-notification:hover,
.topbar .ossn-notifications-messages:hover {
	color: #fff !important;
    background: #222 !important;
}
.ossn-topbar-dropdown-menu {
	float: right;
}

.ossn-topbar-dropdown-menu ul li a,
.ossn-topbar-dropdown-menu ul li {
	display: block;
	width: 100%;
	color: #aaa;
}

.ossn-topbar-dropdown-menu .dropdown-menu {
	margin: 1px -120px 0;
}


/***********************************
	Ossn Wall
*************************************/

.ossn-wall {}

.ossn-wall-items {}

.ossn-wall-item {
	/*padding: 15px;
	padding-top: 10px;*/
	/*border: 1px solid #444;*/
	margin: 20px 0;
	/*background-color: #333;*/
	padding-bottom: 0px;
	/*border-top-left-radius: var(--border-radius-11);
	border-top-right-radius: var(--border-radius-11);
    border-radius: var(--border-radius-11);*/
    /*box-shadow: 0px 0px 10px rgb(100 100 100 / 40%);*/
}

.ossn-wall-item:first-child {
    margin: 20px 0;
    border-radius: 35px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}

.ossn-wall-item .friends a {
	text-decoration: none;
}

.ossn-wall-item .friends a:first-child:before {
	content: "-";
	margin-left: 5px;
	margin-right: 5px;
}

.ossn-wall-item .user-img {
	border-radius: 9px;
	display: inline-block;
	float: left;
	margin-right: 10px;
}

.ossn-wall-item .meta {
    padding: 0 10px;
    margin-bottom: 15px;
}

.ossn-wall-item .meta .user {
	margin-top: 0px;
    text-align: left;
}
.post-meta {
    text-align: left;
}
.ossn-wall-item .meta .user a {
	font-weight: 700;
}

.ossn-wall-item .meta .user span {
	color: #555;
}

.ossn-wall-item .post-contents {
	margin: 0 auto;
    
    /*width: calc(100% - 20px);
    color: #aaa !important*/
    backdrop-filter: blur(10px);
    /*box-shadow: 0px 1px 5px 1px #444, 0px -1px 5px 1px #444;*/
    border-radius: 11px;
}
.post-friends {
    margin-top: -10px;
    padding-bottom: 5px;
}
.post-friends i {
    padding-left: 12px;
    margin-right: 0;
    padding-top: 2px;
}
.post-friends-block {
    width: calc(100% - 35px);
    flex-wrap: inherit;
}
.ossn-wall-item .post-contents p {
	/** Incorrect Hyphenation in the theme GoBlue 3.0 #824 **/
	word-break: break-word;
	/*text-align: justify;*/
    font-weight: 500;
    /*background: #333;*/
    color: #aaa;
    padding: 25px 15px;
    margin-bottom: 0;
    border-radius: 11px;
    /*background: url(https://weplay.io/design/img/themes/theme-1/bg-card_theme-1.svg) center top no-repeat #333;
    background-size: cover;
    background: linear-gradient(94.6deg, #333 0%, rgba(34, 34, 34, 0) 88%);*/
    /*border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;*/
}

.ossn-wall-item .post-contents img {
	max-width: 100%;
	border: 0px solid #444;
	display: block;
    border-radius: 11px;
    /*margin-top: -10px;*/
}

.ossn-wall-item .post-contents_combo img {
	max-width: 100%;
	border: 0px solid #444;
	display: block;
    border-radius: 11px;
    /*margin-top: -10px;
    border-top-left-radius: 0px;*/
}
.ossn-wall-item .post-contents_text p {
	/** Incorrect Hyphenation in the theme GoBlue 3.0 #824 **/
	word-break: break-word;
    font-weight: 500;
    color: #aaa;
    padding: 35px 15px;
    margin-bottom: 0;
    border-radius: 11px;
    /*background: linear-gradient(94.6deg, #333 0%, rgba(34, 34, 34, 0) 88%);
    border-bottom-right-radius: 0px;*/
    border-bottom-left-radius: 0px;
}

.ossn-wall-item .meta .post-menu {
	float: right;
}

.ossn-wall-item .meta .post-menu .btn-link {
	font-size: 14px;
}

.ossn-wall-container {
	border-radius: 2px;
	margin-top: -5px;
	margin-bottom: 10px;
	/*border-top-right-radius: var(--border-radius-11);
	border-top-left-radius: var(--border-radius-11);
    padding-right: calc(var(--bs-gutter-x) / 2) !important;
    padding-left: calc(var(--bs-gutter-x) / 2) !important;*/
}

.ossn-wall-container textarea {
	padding: 10px;
	width: 100%;
	border: 0px solid;
	border: 0;
	border-top: 0px;
	resize: none;
	outline: none;
	/*background: var(--bg-card);*/
    color: #fff;
	/*border-radius: 11px;*/
	font-size: 15px;
	resize: vertical;
	margin-left: 0;
    min-height: 100px;
    font-weight: 500;
    border-bottom: 1px solid #444;
}
.ossn-wall-container textarea:hover, .ossn-wall-container textarea:focus, .ossn-wall-container textarea:active {
    border-bottom: 1px solid #BC8FEC;
}
.ossn-wall-container textarea::placeholder {
    color: #555;
}
.ossn-wall-container .controls {
	/*background-color: var(--bg-card);*/
	margin-top: 5px;
	/*border: 0px solid #444;*/
	/*padding: 5px 10px;
	margin-left: -10px;
	margin-right: -10px;*/
	border-left: 0;
	border-right: 0;
    /*border-top: 1px solid #444;*/
    text-align: left;
    display: inline-block;
}

.ossn-wall-container .wall-tabs {
	/*background-color: #444;
	border: 0px solid #444;*/
	margin-top: 5px;
	/*border-top-right-radius: var(--border-radius-11);
	border-top-left-radius: var(--border-radius-11);*/
    padding: 0 15px;
}

.ossn-wall-container .wall-tabs .item {
	padding: 15px;
	display: inline-flex;
	cursor: pointer;
	border-bottom: 2px solid #BC8FEC;
	font-weight: 700;
	font-size: 13px;
    color: #777;
    -webkit-transition: all 0.1s ease-in;
	-moz-transition: all 0.1s ease-in;
	-o-transition: all 0.1s ease-in;
	transition: all 0.1s ease-in;
}

.ossn-wall-container .wall-tabs .item:hover {
	background: #BC8FEC;
    color: #fff;
    border-radius: 3px;
    border-top-left-radius: var(--border-radius-11);
    box-shadow: 0px 1px 10px 1px rgba(188, 143, 236, 0.9), 0px -1px 10px 1px rgba(188, 143, 236, 0.9);
    filter: blur(0.5px);
}

.ossn-wall-container .wall-tabs .item div {
	display: inline-block;
}

.ossn-wall-container .wall-tabs .item .text {
	font-weight: 700;
	margin-top: 1px;
	margin-left: 5px;
	position: absolute;
	font-size: 15px;
}

.ossn-wall-container .tabs-input {
    text-align: left;
}

.ossn-wall-container .controls li {
	padding: 7px;
	background: transparent;
	display: inline-block;
	border-radius: 50%;
	cursor: pointer;
	width: 35px;
	height: 35px;
	text-align: center;
    color: #8FECC5;
}

.ossn-wall-container .controls .ossn-wall-friend,
.ossn-wall-container .controls .ossn-wall-location,
.ossn-wall-container .controls .ossn-wall-photo,
.ossn-wall-container-control-menu-emojii-selector {
	color: #8FECC5;
}

.ossn-wall-container .controls li:hover {
	background: transparent;
    color: #fff
}

.ossn-wall-post-button-container {
	display: inline-table;
	float: right;
}

.ossn-wall-privacy-dummy,
.ossn-wall-privacy {
	margin-left: 7px;
	padding: 10px 0 0;
	/*background: var(--bg-card);
	border-radius: var(--border-radius-11);*/
    color: #8FECC5;
    font-weight: 600;
	cursor: pointer;
	display: inline-block;
	/*margin-top: 10px;*/
    /*line-height: 30px;
    display: flex;*/
}

.ossn-wall-privacy-dummy {
	/*background: #222;*/
	cursor: initial;
	opacity: 0.5;
}

.ossn-wall-privacy:hover {
	background: transparent;
    color: #fff;
}

.ossn-wall-privacy-dummy span>span,
.ossn-wall-privacy span>span {
	margin-left: 5px;
	float: right;
}

.ossn-wall-container input[type='submit'] {
	padding: 5px 25px;
	/*margin-top: 6px;
	margin: 10px auto;*/
	/*border-radius: 11px;*/
}

.ossn-wall-container i {
	font-size: 15px;
	margin-right: 0;
}

.ossn-wall-container-data {
	/*background: #333;*/
	padding: 10px;
    border-top-right-radius: 16px;
	border-bottom-left-radius: 11px;
	border-bottom-right-radius: 11px;
	/*border: 0px solid #444;
	border-width: 0 1px 2px 1px;*/
    margin-bottom: 30px;
}

@media (max-width: 800px) {
    .ossn-wall-container-data {
        border-bottom-left-radius: 11px;
        border-bottom-right-radius: 11px;
    }
    .ossn-wall-container {
        border-top-right-radius: 0px;
        border-top-left-radius: 0px;
    }
    .ossn-wall-container .wall-tabs {
        /*border-top-right-radius: var(--border-radius-11);
        border-top-left-radius: var(--border-radius-11);*/
    }
    .ossn-wall-item {
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        margin: 40px 0;
    }    
}


#ossn-wall-photo {
	/*margin-top: 10px;*/
}
#ossn-wall-photo input[type="file"] {
    padding: 5px 35px 5px 16px;
    height: 40px;
}

.ossn-wall-container input[type="file"],
.ossn-wall-container input[type="text"] {
	width: 100%;
	/*border-top: 1px dashed #444;
	padding: 5px;
	margin-bottom: 5px;
	margin-top: -5px;*/
	outline: none;
    padding: 10px 35px 10px 16px;
    /*margin-top: 5px;*/
    height: 40px;
}

.ossn-wall-container input[type="file"] {
	/*border: 1px solid #444;
	border-radius: 11px;
	background: #fff;*/
}
.ossn-wall-container input[type="file"]:hover +label {
	border: 1px solid #444;
	border-radius: 11px;
	/*background: green;*/
}

#token-input-ossn-wall-friend-input {
	width: 100% !important;
	padding: 5px 10px;
	/*margin-bottom: 5px;*/
	/*margin-top: -5px;*/
	/*background: #333;*/
	border: 0;
    border-radius: 0px;
}

#ossn-wall-location-input {
	/*background: #222;
	border: 1px solid #444;*/
	border-radius: 11px;
}
input:-internal-autofill-selected {
    box-shadow: 0 2px 2px 30px #222 inset !important;
    color: #fff;
    -webkit-text-fill-color: #8FECC5;
    -webkit-box-shadow: 0 2px 2px 30px #222 inset !important;
}
#token-input-ossn-wall-friend-input::placeholder {
    font-size: 14px;
    line-height: 25px;
    padding: 10px 35px 10px 0px;
    letter-spacing:0.3px;
}
.dropdown-search {
    background: #222;
    color: #777;
    border: 1px solid #222 !important;
    font-weight: 500 !important;
} /* jquery.tokeninput.js */

#ossn-wall-location .ap-input-icon svg {
	top: 15px;
    fill: #8FECC5;
    margin-top: 10px;
}
.ap-dropdown-menu {
    background: red;
    box-shadow: 0 1px 10px rgb(0 0 0 / 20%), 0 2px 4px 0 rgb(0 0 0 / 10%);
}
.algolia-places{
    /*margin-top: 20px;*/
}
.ap-input, .ap-hint {
    height: 40px;
}
#ossn-wall-form .ossn-loading {
	margin: 12px 22px;
}

.ossn-wall-item-type {
	display: inline-block;
}

.ossn-wall-item .friends {
	display: inline-block;
}


/*******************************
	Comments Likes
********************************/

.ossn-comment-menu {
	float: right;
	margin-left: 15px;
    order: -1 !important;
}

.comments-item:hover .ossn-comment-menu {
	display: block;
	/*margin-left: 10px;*/
}

.comments-likes {
	min-height: 50px;
	width: 100%;
    flex-shrink: 0;
    max-width: 100%;
    /*margin-top: 3px;
    --bs-gutter-y: 0;*/
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end !important;
}
.post-control-like {
    float: right;
}
.menu-likes-comments-share li a {
    color: #8FECC5 !important;
}
.menu-likes-comments-share li a:hover {
    color: #fff !important;
}
.menu-likes-comments-share {
	/*margin-bottom: 10px;
    margin: 0 10px;
    display: inline-block;
    float: right;*/
    padding: 3px 20px 3px 0;
    display: inline-block;
    flex: 0 0 auto;
    /*width: 25%;*/
    order: 2 !important;
}

.menu-likes-comments-share li {
	display: block;
    float: right;
    /*min-width: 35px;*/
    text-align: end;
    position: relative;
}
/*
.menu-likes-comments-share li::after {
	content: "-";
	margin-left: 5px;
	margin-right: 5px;
	color: #444;
}
*/
.menu-likes-comments-share li:last-child:after {
	content: " ";
    min-width: 70px
}

.comments-list {
    margin-top: 15px;
    /*padding-left: 20px;
    margin-right: 10px;*/
    flex: 0 0 auto;
    width: 100%;
    order: 3 !important;
}

.comments-list .comments-item {
	padding-top: 15px;
	padding-bottom: 5px;
}

.comments-list .comments-item:first-child {
	margin-top: 0px;
	padding-top: 10px;
}

.comments-list .comments-item:last-child {
	border-bottom: none;
}

.comments-list .comments-item .comment-user-img {
	display: inline-block;
	border-radius: 7px;
    height: 30px;
    float: right;
    margin-right: 15px;
    margin-left: 10px
}


/** UI improvements comments #1524 **/

.comments-list .comments-item .comment-contents {
    display: inline-block;
	/*background-color: #444;*/
	border-radius: 11px;
	width: 100%;
    color: #aaa;
}
.comment-text {
    display: inline-block;
    /*background: #333;*/
    padding: 20px 15px 25px 30px;
    border-radius: 11px;
    width: 100%;
    font-weight: 500;
    /*background: linear-gradient(94.6deg, #333333 0%, #222222 85.73%);*/

}
.comment-text a {
    color: #BC8FEC;
}
.comment-text a:hover {
    color: #8FECC5;
}
.comment-contents span.comment-text  {
    /*background: linear-gradient(94.6deg, #333 0%, rgba(34, 34, 34, 0) 88%);
    box-shadow: 0px 1px 5px 1px #444, 0px -1px 5px 1px #444;*/
    margin-top: 5px;
}
.comment-contents span {
    color: #aaa;
    text-align: start;
}
.comment-contents span.comment-img img  {
    display: block;
	margin-top: 3px;
	/*margin-bottom: 10px;*/
	width: auto;
    max-width: 100%;
    border-radius: 11px;
    margin: 0px 0 0 auto;
    /*border-top-right-radius: 0px;*/
}
.comment-container {
	position: relative;
	z-index: 0;
    /*margin-right: 15px;*/
    margin-top: 5px;
}

.comments-item .col-md-11 {
	padding-left: 0px;
    text-align: left;
}

.comment-metadata .time-created {
	display: inline-block;
    padding-left: 15px;
    line-height: 22px;
}
.comment-metadata a {
	display: inline-block;
    padding-left: 0px;
    padding-right: 10px;
}
.dropdown-menu a {
    padding-left: 10px !important;
}
.comment-contents p {
	margin: 0px;
	word-break: break-word;
	text-align: left;
    /*background: linear-gradient(-94.6deg, #333 0%, rgba(34, 34, 34, 0) 88%);*/
    border-radius: 11px;
}

.comment-contents p img {
	display: block;
	margin-top: 3px;
	/*margin-bottom: 10px;*/
	width: auto;
    max-width: 100%;
    border-radius: 11px;
    /*margin: -10px 0 0 auto;*/
    border-top-right-radius: 0px;
}

.comment-contents .owner-link {
	font-weight: 700;
	padding-right: 20px;
	font-size: 14px;
    color: #fff;
    padding-left: 15px;
    float: right;
    padding: 10px 0px 3px 10px;
}
.comment-contents .owner-link:hover {
    color: #BC8FEC;
}
.user .owner-link {
    color: #BC8FEC;
}
.user .owner-link:hover {
    color: #BC8FEC;
}
.user a {
    color: #fff;
}
.user a:hover {
    color: #BC8FEC;
}
.comment-contents {
	width: 100%;
}

.comment-container span[readonly='readonly'],
.comment-container input[readonly='readonly'] {
	background-color: transparent;
}

.comments-item .comment-metadata {
	margin: 3px 0;
    display: flex;
    position: relative;
    justify-content: flex-start;
    margin-right: 10px;
    flex-direction: row-reverse;
    line-height: 22px;
}

.comment-box {
    width: 91%;
    margin-left: 8.333%;
	padding: 5px 5px 5px 0px;
	outline: none;
	display: block;
	resize: vertical;
	min-height: 30px;
	/*background-color: #222;
	border: 0px solid #444;
	border-radius: 11px;*/
	word-break: break-word;
	text-align: right;
    color: #aaa;
    font-weight: 500;
    border-bottom: 1px solid #444;
}
.comment-box::after {
    background-color: #444;
}
.comment-box:hover, .comment-box:focus, .comment-box:active {
    border-bottom: 1px solid #BC8FEC;
    color: #fff;
}
.comment-box.dva {
	width: 100%;
	outline: none;
	display: block;
	resize: vertical;
	min-height: 0px;
	background-color: #222;
	word-break: break-word;
	text-align: left;
    border-bottom: none;
    padding: 0;
    margin-top: -75px;
}
.dva {
    
}
.dva_position {
    display: flex;
    float: left;
    padding-left: 8.333%;
}
[contentEditable=true]:empty:not(:focus)::before {
	content: attr(placeholder);
    color: #777;
    float: right;
    padding-top: 45px;
}

@media (max-width: 480px) {
    .ossn-wall-item .post-contents p {
        border-radius: 0px;
    }
    .ossn-wall-item .post-contents img {
        border-radius: 0px;
        margin-top: 0px;
    }
    .comment-text {
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    }
    .comment-contents p img {
        border-radius: 0;
        border-top-left-radius: 11px;
        border-bottom-left-radius: 11px;
    }
    .comment-contents p {
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        /*padding-left: 15px;*/
    }
    .comment-contents span.comment-img img  {
        border-bottom-right-radius: 0px;
        border-top-right-radius: 0px;   
    }
}

/*********************************
	Like
************************************/

.like-share {
	/*border-top: 1px solid #444;
	border-bottom: 0px solid #444;
	padding: 10px;*/
	/*margin-top: 10px;
	background-color: var(--bg-card);*/
	/*margin-left: -15px;
	margin-right: -15px;*/
    padding: 3px 10px;
    display: inline-block;
    flex: none;
    /*width: 75%;*/
}

.ossn-like-comment,
.ossn-total-likes {
	margin-left: 10px;
    color: #8FECC5;
    line-height: 22px;
}


/********************************
	Global
***********************************/

.time-created {
	font-size: 14px;
	font-style: italic;
	color: #777;
}

.uinfo {
    text-overflow: ellipsis;
    word-break: break-word;
    white-space: nowrap;
    overflow: hidden;
    display: inline-flex;
    position: relative;
    width: calc(100% - 250px);
    cursor: pointer;
}
/********************************
	Sidebar Nav
*********************************/

.sidebar {
	background-color: #333;
	height: 200px;
	z-index: 1000;
	width: 200px;
	position: absolute;
	height: 100%;
	margin-left: -200px;
	overflow-y: auto;
	overflow-x: hidden;
	color: #fff;
}

.sidebar-close {
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-open {
	margin-left: 0px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-open-page-container {
	margin-left: 200px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-close-page-container {
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.newseed-uinfo {}

.newseed-uinfo img {
	display: inline-block;
	float: left;
    width: 60px;
    border-radius: 11px;
    margin-bottom: 20px;
}

.newseed-uinfo .name {
	display: inline-block;
	width: 100px;
	margin-left: 10px;
	margin-top: -2px;
}

.newseed-uinfo .name a {
	display: block;
	color: biege;
	font-size: 12px;
}

.newseed-uinfo .name .edit-profile {
	font-weight: inherit;
}

.sidebar-menu-nav {
	overflow: auto;
	font-size: 12px;
	font-weight: 200;
	top: 0px;
	width: 100%;
	height: 100%;
}

.sidebar-menu-nav ul,
.sidebar-menu-nav li {
	list-style: none;
	padding: 0px;
	margin: 0px;
	line-height: 35px;
	cursor: pointer;
}

.sidebar-menu-nav ul:not(collapsed) .arrow:before,
.sidebar-menu-nav li:not(collapsed) .arrow:before {
	font-family: 'Font Awesome 5 Free';
	font-weight: 700;
	content: "\f078";
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
	float: right;
}

.sidebar-menu-nav ul .sub-menu li {}

.sidebar-menu-nav ul .sub-menu li,
.sidebar-menu-nav li .sub-menu li {
	border: none;
	color: #fff;
	line-height: 28px;
	font-size: 13px;
	margin-left: 0px;
}

.sidebar-menu-nav ul .sub-menu li:before,
.sidebar-menu-nav li .sub-menu li:before {
	font-family: 'Font Awesome 5 Free';
	font-weight: 700;
	content: "\f105";
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
    
}

.sidebar-menu-nav li {
	padding-left: 0px;
}

.sidebar-menu-nav li a {
	text-decoration: none;
	color: #777;
	font-size: 12px;
	font-weight: 700;
}

.sub-menu li a {
	font-weight: normal;
	color: aqua;
}

.sidebar-menu-nav li a i {
	padding-left: 10px;
	width: 20px;
	padding-right: 20px;
}

.sidebar-menu-nav li:hover {}

@media (max-width: 767px) {
	.sidebar-menu-nav {
		position: relative;
		width: 100%;
		margin-bottom: 10px;
	}
	.ossn-group-members {
		height: 75px !important;
	}
}


/******************************
	Ossn global css clsses
*******************************/

.right {
	float: right;
}

.left {
	float: left;
}

.text-right {
	text-align: right;
}

.text-left {
	text-align: left;
}

.text-center {
	text-align: center;
    color: #aaa
}

.margin-top-10 {
	margin-top: 10px;
}

.margin-top-20 {
	margin-top: 20px;
}


/************************
	Dropdown
***************************/

.dropdown-submenu {
	position: relative;
}

.dropdown-submenu>.dropdown-menu {
	top: 0;
	left: 100%;
	margin-top: -6px;
	margin-left: -1px;
	-webkit-border-radius: 0 6px 6px 6px;
	-moz-border-radius: 0 6px 6px;
	border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
	display: block;
}

.dropdown-submenu>a:after {
	display: block;
	content: " ";
	float: right;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
	border-width: 5px 0 5px 5px;
	border-left-color: #444;
	margin-top: 5px;
	margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
	border-left-color: #fff;
}

.dropdown-submenu.pull-left {
	float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
	left: -100%;
	margin-left: 10px;
	-webkit-border-radius: 6px 0 6px 6px;
	-moz-border-radius: 6px 0 6px 6px;
	border-radius: 6px 0 6px 6px;
}

.dropmenu-topbar-icons {
	left: inherit;
	right: 0;
}

.dropdown-menu.multi-level.show {
    inset: 0px 0 auto auto !important;
}
.dropdown-menu.show {
    padding: 10px 15px;
}

/******************************************
	Ossn Ads
*******************************************/
.ad-image-container {
    /*background: #333;*/
    padding: 5px;
    border-radius: 11px;
}
.ossn-ad-item {}

.ossn-ad-item .ad-image {
	max-width: 100%;
	margin: 0 auto;
	display: block;
    border-radius: 6px;
}

.ossn-ad-item a {
	text-decoration: none;
	color: #fff;
	cursor: pointer;
}

.ossn-ad-item .ad-title {
	font-weight: 700;
	font-size: 15px;
	margin-bottom: 5px;
}

.ossn-ad-item .ad-link {
	margin-bottom: 5px;
}

.ossn-ad-item p {
	margin-top: 5px;
	text-align: justify;
    padding: 0 10px;
}


/*****************************
	Widgets
******************************/

.ossn-widget {
	margin-bottom: 10px;
	/*background-color: #222;*/
}

.ossn-widget .widget-heading, .widget-heading {
	/*background: var(--bg-main);*/
	border: 0px solid #444;
	padding: 10px;
	font-weight: 600;
    text-align: start;
}
 
.ossn-widget .widget-contents, .widget-contents {
    padding: 20px 15px;
    /*border: 1px solid #444;*/
    color: #aaa;
    /*background: #333;*/
    border-radius: 11px;
}
.ossn-widget .widget-contents img {
    width: 60px;
    height: 60px;
    border-radius: 6px;
    margin-right: 20px;
}

.widget-heading-l {
    border: 0px solid #444;
	padding: 10px;
	font-weight: 600;
    text-align: start;
}

/***********************************
	Ossn Notifications
***************************************/

.ossn-notifications-box .collapsing {
	-webkit-transition: none;
	transition: none;
	display: none;
}

.ossn-notifications-box {
	width: 430px;
	color: #777;
	position: absolute;
	top: 100%;
	right: 20px;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 160px;
	padding: 5px 0;
	margin: 2px 0 0;
	font-size: 14px;
	text-align: left;
	list-style: none;
	background-color: #333;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	border: 1px solid #444;
	border-radius: 4px;
	/*-webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
	box-shadow: 0 6px 12px rgb(0 0 0 / 18%);*/
}

.ossn-notifications-box .notificaton-item {
	border-bottom: 1px solid #444;
}

.ossn-notifications-box .notificaton-item:hover,
.ossn-notifications-box .notificaton-item .active {
	background-color: #444;
}

.ossn-notifications-box .type-name {
	font-size: 13px;
	font-weight: 500;
	padding: 1px 10px 5px 10px;
	color: #777;
	height: 25px;
	border-bottom: 0px solid #444;
}

.ossn-notification-box-loading {
	margin: 0 auto;
	margin-top: 20px;
	margin-bottom: 20px;
}

.ossn-no-notification {
	text-align: center;
	padding: 10px;
}

.ossn-notifications-box .type-name .title {
	display: inline-block;
}

.ossn-notifications-box .type-name .links {
	display: inline-block;
	float: right;
}

.ossn-notifications-box .type-name .links a {
	color: #337ab7;
	display: inline;
	font-weight: normal;
}

.ossn-notifications-box .notification-image,
.ossn-notifications-box .notification-image img {
	width: 50px;
	height: 50px;
	display: inline-block;
}

.ossn-notifications-box .bottom-all a {
	color: #fff;
}
.ossn-notifications-box .bottom-all a:hover {
	color: #BC8FEC;
}
.ossn-notifications-box .notfi-meta strong {
	color: #BC8FEC;
}
.ossn-notifications-box .notfi-meta strong:hover {
	color: #fff;
}
.ossn-notifications-box .notfi-meta {
	width: 330px;
	margin-left: 5px;
	display: inline-block;
	float: right;
	color: #aaa;
}

.ossn-notifications-box .bottom-all a {
	font-weight: 700;
}

.ossn-notifications-box .bottom-all {
	background: #333;
	text-align: center;
	padding: 0px;
	padding-top: 10px;
	display: block;
	height: 40px;
	border-top: 1px solid #444;
}

.ossn-notifications-box .metadata {
	margin-bottom: -5px;
}

.ossn-notifications-box .messages-inner {
	max-height: 400px;
	overflow: hidden;
	overflow-y: scroll;
}

.latest-users img {
	margin-bottom: 5px;
}

.ossn-notification-mark-read {
	float: right;
}

.ossn-notifications-all a {}

.ossn-notifications-all li {
	padding: 10px;
	display: block;
}

.ossn-notifications-all a:hover {
	cursor: pointer;
	background-color: transparent;
	text-decoration: none;
}

.ossn-notifications-box li:hover,
.ossn-notifications-box a:hover,
.ossn-notifications-all a:hover,
.ossn-notifications-all li:hover {
	background: #444;
}

.ossn-notification-container {
	background-color: #dc0d17;
	background-image: -webkit-linear-gradient(#fa3c45, #dc0d17);
	color: #fff;
	min-height: 13px;
	padding: 1px 3px;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, .4);
	-webkit-border-radius: 2px;
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .7);
	-webkit-background-clip: padding-box;
	display: inline-block;
	font-size: 11px;
	line-height: normal;
	position: absolute;
	margin-left: -10px;
	z-index: 1;
}

.notification-friends .image {
	width: 50px;
	height: 50px;
	display: inline-table;
	float: left;
}

.ossn-notifications-friends-inner a {
	color: #fff !important;
	display: inline-block !important;
}

.ossn-notifications-friends-inner {
	padding: 0px 5px;
}
.ossn-notifications-friends-inner img {
	border-radius: 11px
}


.ossn-notifications-friends-inner form {
	display: inline-table;
}

.ossn-notification-page li img {
	display: none;
}

.notification-friends li {
	width: 100%;
	border-bottom: 0px solid #444;
    display: grid;
    padding: 6px 0;
}

.notification-friends .notfi-meta a {
	color: #BC8FEC;
	font-weight: 700;
	display: inline-block;
	width: 200px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

.ossn-notifications-friends-inner .controls {
	/*float: right;
	margin-top: 6px;*/
	display: inline-block;
}

.friends-added-text {
	float: left !important;
	/*margin-top: -18px !important;*/
	display: block !important;
	/*margin-left: 10px;*/
	font-size: 13px;
}

.ossn-notifications-friends-inner .btn {
	padding: 3px 9px;
	border-radius: 1px;
}

.notification-friends {
	max-height: 400px;
}


/*******************************
	Profile
********************************/

.ossn-profile .top-container {
	background: #333;
	/*border: 0px solid #444;
	border-width: 1px 1px 2px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;*/
}

.ossn-profile .top-container .profile-cover {
	height: 200px;
	overflow: hidden;
	opacity: .99;
	background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(1%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, .38)));
	background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#94000000', GradientType=0);
	position: relative;
}

.ossn-profile .top-container .profile-cover img {
	width: auto;
}

.ossn-profile-row {
	margin-bottom: 20px;
}

.profile-hr-menu ul {
	margin-bottom: 0px;
	padding: 0px;
}

.profile-hr-menu ul li {
	display: inline-block;
}

.profile-hr-menu ul li a:not(.dropdown a) {
	display: block;
	padding: 15px;
	margin-right: 5px;
	font-weight: 700;
	/*border-right: 1px solid #444;*/
}

.profile-hr-menu .dropdown-menu {
	margin-left: 0px;
}

.profile-hr-menu .dropdown-menu li {
	display: block;
	border-bottom: 0;
	padding: initial;
	margin: auto;
}

.profile-hr-menu .dropdown a i {
	margin-left: 5px;
}

.profile-hr-menu .dropdown-menu li a {
	border-right: 0px;
	margin-right: 0px;
}

.profile-hr-menu ul li:hover {}

.profile-hr-menu {
	/*border-bottom: 1px solid #444;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;*/
}

.profile-hr-menu ul li:last-child {
	border-right: none;
}

.ossn-profile .profile-photo {
	position: absolute;
	margin-left: 20px;
	margin-top: -190px;
	background-color: #222;
	border: 1px solid #444;
	border-radius: 2px 2px 2px 2px;
	-webkit-border-radius: 2px 2px 2px 2px;
	-moz-border-radius: 2px 2px 2px 2px;
	padding: 2px;
}

.ossn-profile .profile-photo img {}

.ossn-profile .user-fullname {
	color: #FFF;
	font-weight: 700;
	margin-top: -155px;
	font-size: 35px;
	font-size: 2.3vw;
	margin-left: 211px;
	position: absolute;
	/*text-shadow: 0 0 3px #000;*/
	/** overlapping issue with longer names on profile page #630 **/
	max-width: 820px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

.ossn-profile-role {
	font-size: 25px !important;
	margin-top: -105px !important;
}

.btn-standalone-grey {
	color: green;
	font-weight: 700;
	text-decoration: none;
	width: auto;
	margin: 0;
	font-size: 12px;
	line-height: 16px;
	padding: 5px 6px;
	cursor: pointer;
	outline: none;
	text-align: center;
	white-space: nowrap;
	-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #FFF;
	-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.10), inset 0 1px 0 #fff;
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #FFF;
	border: 1px solid #444;
	border-bottom-color: #444;
	background: red;
	background: -webkit-gradient(linear, 0 0, 0 100%, from(brown), to(pink));
	background: -moz-linear-gradient(brown, pink);
	background: -o-linear-gradient(brown, pink);
	background: linear-gradient(brown, pink);
	text-decoration: none;
}

.btn-standalone-grey:active {
	background: blue;
	border-bottom-color: #999;
	box-shadow: none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
}

.btn-standalone-grey:hover {
	color: #aaa;
	text-decoration: none;
}

.profile-cover-controls {
	position: absolute;
	width: 100%;
	margin-right: -32px;
	margin-top: 150px;
	z-index: 1;
}

.change-cover {
	float: right;
	position: relative;
	margin-right: 50px !important;
}

.reposition-cover {
	float: right;
	position: relative;
	margin-right: 5px !important;
}

.profile-menu {
	float: right;
	position: relative;
	margin-top: -40px;
	margin-right: 20px;
}

#cover-menu {
	display: none;
}

.upload-photo {
	background: #222;
	opacity: 0.5;
	width: 170px;
	padding: 10px;
	position: absolute;
	color: #777;
	text-align: center;
	font-size: 15px;
}

.upload-photo span {
	width: 100%;
	padding: 12px;
	text-align: center;
}

.user-cover-uploading {
	opacity: 0.4;
}

.user-photo-uploading {
	height: 100%;
	opacity: 0.8;
	background: #222;
	width: 100%;
	padding: 7px;
	position: absolute;
	border-radius: 2px;
}

.user-photo-uploading span {
	display: none;
}

.ossn-profile-bottom {
	margin-top: 10px;
}

.page-sidebar,
.ossn-profile-sidebar {}

.ossn-layout-media .content {
	/*margin-right: 10px;
	margin-left: 10px;*/
}

.ossn-profile-extra-menu {
	display: inline-block;
}


/*****************************
	Side Menu icons
*******************************/

.menu-section-item-newsfeed:before {
	content: "\f0a1" !important;
}

.menu-section-item-friends:before {
	content: "\f0c0" !important;
}

.menu-section-item-allgroups:before {
	content: "\f0c0" !important;
}

.menu-section-item-photos:before {
	content: "\f03e" !important;
}

.menu-section-item-messages:before {
	content: "\f0e0" !important;
}

.menu-section-item-invite-friends:before {
	content: "\f234" !important;
}

.menu-section-item-addgroup:before {
	content: "\f067" !important;
}

.menu-section-item-groups {
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	width: 200px;
	padding-right: 10px;
}


/******************************
	Search
******************************/

.ossn-menu-search li {
	display: block;
}

.ossn-menu-search li:hover {
	background: #pink;
}

.ossn-menu-search li a {
	display: block;
	width: 100%;
	padding: 5px;
}

.ossn-menu-search li a:hover {
	text-decoration: none;
}

.ossn-menu-search li a .text {
	display: inline-block;
}

.ossn-search-page .ossn-users-list-item {
	margin-left: 0px;
	margin-right: 0px;
}

.ossn-search-page .ossn-users-list-item .uinfo {
	margin-left: 25px;
}

.ossn-menu-search-users .text:before {
	font-family: 'Font Awesome 5 Free';
	font-weight: 700;
	content: "\f007";
	display: absolute;
	padding-right: 10px;
	vertical-align: middle;
	float: left;
}

.ossn-menu-search-groups .text:before {
	font-family: 'Font Awesome 5 Free';
	font-weight: 700;
	content: "\f0c0";
	display: absolute;
	padding-right: 10px;
	vertical-align: middle;
	float: left;
}


/******************************
	Token Input
*******************************/

ul.token-input-list {
	overflow: hidden;
	height: auto !important;
	height: 1%;
	width: 100%;
	cursor: text;
	font-size: 12px;
	min-height: 1px;
	z-index: 999;
	padding: 0;
	margin: 0;
	/*margin-top: -5px;
	background-color: red;*/
	list-style-type: none;
	clear: left;
	color: #aaa;
    line-height: 25px;
	/*border-top: 1px solid #444;
	border-right: 1px solid #444;
	border-left: 1px solid #444;*/
}

li.token-input-token {
	overflow: hidden;
	height: auto !important;
	height: 15px;
	margin: 3px;
	padding: 1px 10px;
	background-color: #333;
	color: #fff;
	cursor: default;
	font-weight: 400;
	border: 1px solid #444;
	font-size: 11px;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	float: left;
	white-space: nowrap;
}

li.token-input-token p {
	display: inline;
	padding: 0;
	margin: 0;
	font-size: 12px;
    color: #fff;
}

li.token-input-token span {
	color: #FA3242;
	margin-left: 5px;
	font-weight: 700;
	cursor: pointer;
}

li.token-input-selected-token {
	background-color: #333;
	border: 1px solid #444;
	color: #777;
	font-weight: 700;
}

li.token-input-input-token {
	float: left;
	margin: 0;
	padding: 0;
	list-style-type: none;
}

div.token-input-dropdown {
	position: absolute;
	width: 400px;
	background-color: #333;
	overflow: hidden;
	border-left: 1px solid #444;
	border-right: 1px solid #444;
	border-bottom: 1px solid #444;
	cursor: default;
	font-size: 11px;
	z-index: 1;
}

div.token-input-dropdown p {
	margin: 0;
	padding: 5px;
}

div.token-input-dropdown ul {
	margin: 0;
	padding: 0;
}

div.token-input-dropdown ul li {
	background-color: #333;
	padding: 3px;
	margin: 0;
	list-style-type: none;
}

div.token-input-dropdown ul li.token-input-dropdown-item {
	background-color: #333;
}

div.token-input-dropdown ul li.token-input-dropdown-item2 {
	background-color: #333;
}

div.token-input-dropdown ul li em {
	font-weight: 700;
	font-style: normal;
}

div.token-input-dropdown ul li.token-input-selected-dropdown-item {
	background-color: #333;
	color: yellow;
	font-weight: 700;
}
.full_name {
    color: #fff;
    font-weight: 700;
    
    
} /* ossn_wall.js */

.full_name_in {
    display: inline-block; 
    padding-left: 10px;
}
.dropdown_full_name li {
    border-radius: 5px !important;
    background-color: orange;
}

/******************************************
		System Messages
*******************************************/

.ossn-system-messages .ossn-system-messages-inner {
	margin-top: 20px;
	margin-bottom: 20px;
	display: none;
}

.ossn-system-messages .ossn-system-messages-inner .alert {
	margin-bottom: 0px;
}


/** v1-v3 compitible **/

.ossn-message-done {
	border: 1px solid #1EB0DF;
	border-width: 1px;
	background-color: #DAF6FF;
	padding: 13px;
	text-align: left;
}


/*************************************
	0ssn modal box
***************************************/

.ossn-halt {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 10000;
	background-color: #222;
	opacity: 0.9;
	cursor: auto;
	height: 100%;
	display: none;
}

.ossn-light {
	opacity: 0.4;
}

.ossn-viewer {
	width: 940px;
	margin: 0 auto;
	position: relative;
}

.ossn-viewer .ossn-container {
	height: 200px;
	position: fixed;
	width: 900px;
	z-index: 10000;
	margin-top: 70px;
	min-height: 515px;
}

.ossn-viewer-loding {
	font-size: 15px;
}

.ossn-viewer .ossn-container .close-viewer {
	float: right;
	cursor: pointer;
	margin-right: 5px;
	font-weight: 700;
	font-size: 13px;
	color: red;
}

.ossn-container tbody {
	background: blue;
}

.ossn-halt {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 10000;
	background-color: #222;
	opacity: 0.9;
	cursor: auto;
	height: 100%;
	display: none;
}

.ossn-viewer .info-block {
	background: #fff;
	height: 100%;
	width: 325px;
	float: right;
	margin-left: -3px;
}

.image-block img {
	max-width: 700px;
}

@media only screen { 
    .ossn-message-box {
        max-width: 600px;
        min-height:200px;
        background: #333;
        border: 0px solid #444;
        position: absolute;
        left: 0px;
        right: 0px;
        z-index: 60000;
        border-radius: 11px;
        display: none;
        margin: 35vh 40vh;
        vertical-align: middle;

    }
}

.ossn-message-box .close-box {
	float: right;
	color: #fff;
	cursor: pointer;
}

.ossn-message-box .title {
	background: #444;
	padding: 11px;
    border-top-left-radius: 11px;
    border-top-right-radius: 11px;
	border-bottom: 0px solid #444;
	color: #aaa;
	font-size: 16px;
	font-weight: 500;
}
.ossn-message-box .title:first-letter {
    text-transform: uppercase;
}
.ossn-message-box .contents {
	padding: 10px;
	min-height: 150px;
	max-height: 420px;
	overflow-x: auto;
	overflow: overlay;
	overflow-x: -moz-hidden-unscrollable;
    overflow-y: clip;
}

.ossn-message-box .control {
	margin: 10px;
    margin-top: 0px;
	border-top: 0px solid #444;
}

.ossn-message-box .control .controls {
	/*float: right;*/
    display: flex;
    justify-content: space-between;
    flex-direction: row-reverse;
}

.ossn-message-box .control .controls .btn {
	padding: 3px 20px;
	border-radius: 2px;
    min-width: 0;
}

.ossn-message-box .contents input[type='text'] {
	border: 1px solid #444;
	width: 292px;
	padding: 7px;
}

.ossn-message-box .contents input[type='text'],
.ossn-message-box .contents label {
	display: inline-table;
}

.ossn-message-box .contents label {
	color: #555;
	font-weight: 700;
	font-size: 13px;
	margin-right: 13px;
    background: #333;
}
input[type="radio" i] {
    background: #555;
}

/*******************************
	Ossn Blocked
*********************************/

.ossn-blocked i {
	font-size: 100px;
}

.ossn-blocked {
	text-align: center;
	padding: 100px;
}

.ossn-blocked div {
	font-size: 50px;
	font-weight: 700;
}

.ossn-blocked p {
	font-size: 16px;
}


/********************************
	Loading Icon
    @source: https://github.com/jlong/css-spinners
*********************************/

@-moz-keyframes three-quarters-loader {
	0% {
		-moz-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-moz-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@-webkit-keyframes three-quarters-loader {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@keyframes three-quarters-loader {
	0% {
		-moz-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-moz-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}


/* :not(:required) hides this rule from IE9 and below */

.ossn-loading:not(:required) {
	-moz-animation: three-quarters-loader 1250ms infinite linear;
	-webkit-animation: three-quarters-loader 1250ms infinite linear;
	animation: three-quarters-loader 1250ms infinite linear;
	border: 8px solid #BC8FEC;
	border-right-color: transparent;
	border-radius: 16px;
	box-sizing: border-box;
	position: relative;
	overflow: hidden;
	text-indent: -9999px;
	width: 24px;
	height: 24px;
}

.ossn-box-loading {
	margin-left: 216px;
	margin-top: 37px;
}


/*******************************
	Buttons
*********************************/

.button-grey,
.btn-action {
	color: #fff;
    font-size: 120%;
    font-weight: 700;
	width: auto;
	margin: 0;
	padding: 5px 20px;
	cursor: pointer;
	outline: none;
	text-align: center;
	white-space: nowrap;
	border: 2px solid #fff;
	background: #222;
	border-radius: 11px;
	text-decoration: none;
}

.button-grey:hover,
.btn-action:hover {
	text-decoration: none;
	background: #fff;
    color: #222;
}


/******************************
	Users List
*******************************/

.ossn-users-list-item .users-list-controls {
	/*margin-top: 20px;*/
}

.ossn-users-list-item .users-list-controls a {
	margin-left: 5px;
}
.ossn-users-list-item .users-list-controls a:hover {
    /*background: #FA3242;*/
    box-shadow: var(--shadow-btn-delete-hover);
    filter: blur(0.6px);
    -webkit-filter: blur(0.6px);
    -moz-filter: blur(0.6px);
    -o-filter: blur(0.6px);
    -ms-filter: blur(0.6px);
}
.ossn-users-list-item .users-list-controls .btn-primary {
    font-size: 14px;
    color: #fff;
}
.ossn-users-list-item .users-list-controls .btn-primary:hover {
    box-shadow: var(--shadow-network-hover);
    filter: blur(0.6px);
    -webkit-filter: blur(0.6px);
    -moz-filter: blur(0.6px);
    -o-filter: blur(0.6px);
    -ms-filter: blur(0.6px);
}
.ossn-users-list-item {
	border: 0px solid #444;
	margin-bottom: 10px;
	/*margin-right: -10px;
	margin-left: -10px;*/
}
.ossn-users-list-item_avatar {
	border-radius: 11px;
	margin-right: 20px;
}
.ossn-users-list-item_avatar img {
	border-radius: 11px;
}
.ossn-users-list-item .uinfo a {
	font-size: 14px;
	font-weight: 700;
	/*margin-top: 20px;*/
	float: left;
	text-overflow: ellipsis;
	/*width: 300px;*/
	white-space: nowrap;
	overflow: hidden;
    cursor: pointer;
}

.ossn-users-list-item .col-md-2 {
	text-align: center;
}


/*********************************
	Footer
**********************************/

footer {
	margin-top: 20px;
	padding-top: 5px;
}

footer .col-md-12 {
	border-top: 1px solid #444;
}

footer .container {}

footer .ossn-footer-menu {
	padding-bottom: 10px;
}

footer .ossn-footer-menu a {
	color: #777;
	font-size: 13px;
}
footer .ossn-footer-menu a:hover {
	color: #fff;
}
footer .ossn-footer-menu a::after {
	content: "|";
	margin-left: 10px;
	margin-right: 10px;
}

footer .ossn-footer-menu a:nth-last-child(2)::after,
footer .ossn-footer-menu a:last-child::after {
	content: "";
}

.menu-footer-powered {
	float: right;
}
.menu-footer-powered:hover {
	color: #fff;
}
.menu-footer-powered:after {
	display: none;
}

.menu-footer-a_copyrights {
	text-transform: uppercase;
}
.footer-contents {
    padding: 0 15px;
}


/****************************
	Home
****************************/

.home-left-contents {}

.home-left-contents .logo {
	text-align: center;
}

.home-left-contents .description {
	font-size: 17px;
	text-transform: uppercase;
	font-weight: 700;
	margin-top: 20px;
	text-align: justify;
	color: #29487d;
}

.home-left-contents .buttons {
	text-align: center;
	margin-top: 10px;
}

#ossn-home-signup p {
	margin-top: 10px;
}


/**************************
	System
***************************/

.ossn-list-users {
	height: 60px;
	border-bottom: 1px solid #444;
	display: block;
	margin-left: 5px;
	margin-bottom: 10px;
}

.ossn-list-users img,
.ossn-list-users .uinfo {
	display: inline-block;
}

.ossn-list-users .uinfo .userlink {
	font-size: 14px;
	font-weight: 700;
	float: right;
	margin-left: 12px;
	text-overflow: ellipsis;
	width: 370px;
	white-space: nowrap;
	overflow: hidden;
}

.ossn-list-users .friendlink {
	float: right;
	margin-top: 10px;
	margin-right: 9px;
	text-overflow: ellipsis;
	width: 280px;
	white-space: nowrap;
	overflow: hidden;
}

.sidebar-menu-nav .sidebar-menu .menu-content {
	display: block;
}

.ossn-box-inner {
	/*width: 446px;*/
}

.home-left-contents .some-icons i {
	font-size: 50px;
}

.home-left-contents .some-icons li {
	display: inline-block;
	color: #fff;
	border: 3px solid #444;
	border-radius: 100%;
	padding: 20px;
	margin-right: 20px;
	margin-bottom: 20px;
	width: 100px;
	height: 100px;
}

.home-left-contents .some-icons {
	margin-top: 10%;
	text-align: center;
}


/**************************
	Similies
**************************/

.ossn-smiley-item {
	display: inline-block !important;
	margin-left: 2px;
	margin-right: 2px;
	width: initial !important;
	margin-bottom: 0px !important;
	margin-top: 0px !important;
	border: 0px !important;
}


/**************************
	Embed
 **************************/

.ossn_embed_video {
	margin-top: 10px;
	margin-bottom: 10px;
	padding-top: 0px;
}


/**************************
	Photos
***************************/

.ossn-photo-viewer .image-block img,
.ossn-photo-viewer {
	max-width: 100% !important;
}


/**************************
	Mobile Layout Settings
***************************/

@media (max-width: 480px) {
	.ossn-profile .top-container {
		border-bottom: 0px;
	}
	.profile-hr-menu {
		padding-bottom: 10px;
		border: 0px;
	}
	/***********************
    	Comments
     ***********************/
	.comments-list .comments-item .comment-user-img {
		/*display: none;*/
	}
	.comments-item .col-md-11 {
		padding-left: 15px;
	}
	/************************
    	Wall
     ************************/
	.ossn-wall-item-type {
		display: block;
	}
	.ossn-wall-item .meta .user {
		width: calc(100% - 130px);
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	.ossn-list-users .uinfo .userlink {
		text-overflow: ellipsis;
		width: 195px;
		white-space: nowrap;
		overflow: hidden;
	}
	.ossn-list-users a.right.btn.btn-primary {
		display: none;
	}
	.ossn-list-users a.right.btn.btn-danger {
		display: none;
	}
	.ossn-message-box .contents {
		/*height: 280px;*/
		overflow-x: auto;
		overflow: overlay;
        overflow-y: clip;
	}
	/***************************
    	Topbar notification box
   *****************************/
	.ossn-notifications-box {
		width: 300px;
	}
	.ossn-notifications-box .notfi-meta {
		width: 230px;
	}
	.notification-friends .notfi-meta a {
		width: 100px;
	}
	.ossn-notifications-box .notfi-meta,
	.ossn-notification-messages .user-item .data {
		width: 215px !important;
	}
	.ossn-notification-messages .user-item .data .name {
		width: 110px !important;
	}
	.ossn-notification-messages .reply-text-from {
		width: 200px !important;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	/******************************
    	Profile
    ********************************/
	.ossn-profile .profile-photo img {
		width: 100px;
		height: 100px;
	}
    .newseed-uinfo {
		display:none;
    }
	.ossn-profile .user-fullname {
		font-size: 16px;
		margin-left: 135px;
		margin-top: -100px;
		width: 140px;
	}
	.ossn-profile .top-container .profile-cover {
		height: 188px;
	}
	.ossn-profile .profile-photo {
		margin-top: -130px;
	}
	.profile-menu {
		float: none;
		margin: 13px;
	}
	.ossn-profile .top-container .profile-cover img {
		width: auto;
	}
	.ossn-group-cover-button,
	.profile-cover-controls {
		/*display: none !important;*/
        margin-top: 55px !important;
	}
	.upload-photo {
		width: 100px;
	}
	.profile-hr-menu ul li {
		display: block;
		text-align: left;
		padding: 10px;
		padding-top: 20px;
		margin-right: 0px;
	}
	.profile-hr-menu ul li a {
		margin-right: 0px;
	}
	.ossn-profile-role {
		display: none;
	}
	/*****************************
     	System
     *****************************/
	.ossn-users-list-item img {
		display: none;
	}
   
        .ossn-users-list-item img {
            display: block !important;
            width: 60px !important;
            height: 60px !important;
        }
    
	.ossn-users-list-item .users-list-controls {
		margin-top: 10px;
		margin-bottom: 10px;
	}
	.ossn-users-list-item .uinfo a {
		margin-top: 10px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		/*width: 90px;*/
        width: calc(100% - 60px);
	}
	.ossn-search-page .ossn-users-list-item .uinfo a {
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		width: 100px;
	}
	.ossn-system-messages {
		padding-left: 15px;
		padding-right: 15px;
	}
	.ossn-users-list-item {
		/*padding-bottom: 10px;*/
        flex-wrap: nowrap;
	}
	.ossn-widget .widget-contents {
		padding: 5px;
	}
	.ossn-message-box {
		min-width: 300px;
		width: 90%;
	}
	.ossn-box-loading {
		margin-left: 150px;
		margin-top: 37px;
	}
	.ossn-message-box .contents input[type="text"] {
		width: 195px;
	}
	.ossn-box-inner {
		/*width: 280px;*/
	}
	footer .ossn-footer-menu a:nth-last-child(2)::after {
		content: "|";
	}
	/**********************
    	Groups
    ************************/
	.ossn-group-cover img {
		top: auto !important;
        width: 480px !important;
        position: inherit !important;
	}
	.ossn-group-cover {
		height: 100px !important;
	}
	.groups-buttons {
		float: none !important;
	}
	.ossn-group-cover-header,
	.ossn-group-profile .profile-header,
	.ossn-group-profile .profile-header .header-bottom {
		height: auto !important;
	}
	.ossn-group-profile .profile-header {
		max-height: inherit !important;
	}
	.groups-buttons {
		/*margin-top: 50px;*/
	}
	.ossn-group-profile .profile-header .group-name {
		float: none !important;
	}
	#group-header-menu li,
	#group-header-menu {
		width: 100% !important;
	}
	#group-header-menu li {
		/*border-bottom: 1px solid #444 !important;*/
	}
	.group-name {
		text-align: left;
		width: 100%;
		border-bottom: 0px solid #444;
	}
	.ossn-group-members {
		margin-left: 15px;
		margin-right: 15px;
	}
	.ossn-group-members .request-controls,
	.ossn-group-members .uinfo {
		display: inline-block;
	}
	.ossn-group-members .uinfo .userlink {
		width: 130px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	.sidebar-menu-nav .sidebar-menu .menu-content {
		display: block;
	}
	.sidebar-hide-contents-xs {
		display: none;
	}
	.home-left-contents .some-icons {
		display: none;
	}
	/**************************
     	Layouts
     ****************************/
	.newsfeed-right {
		display: none;
	}
	.ossn-messages .message-with .user-icon,
	.ossn-messages .messages-recent .messages-from .user-item .image {
		display: none;
	}
	.ossn-messages .message-inner .row {
		margin-left: 0px !important;
	}
    
	/*************************
     	Home Page
     **************************/
	.logo img {
		width: 260px;
	}
	.home-left-contents .description {
		font-size: 16px;
	}
	.home-left-contents {
		margin-bottom: 20px;
	}
	/*****************************
    	Wall Menu
    ******************************/
	.dropdown-menu {
		margin-left: -110px;
	}
	.menu-footer-powered {
		float: none;
	}
}


/***************************************
	Tablets
****************************************/

@media only screen and (max-width: 992px) {
	.ossn-group-cover img {
		top: auto !important;
	}
	.dropdown-menu {
		margin-left: -110px;
	}
	.ossn-profile .user-fullname {
		max-width: 500px;
	}
	/***********************
    	Comments
     ***********************/
	.comments-list .comments-item .comment-user-img {
		/*display: none;*/
	}
	.comments-item .col-md-11 {
		padding-left: 15px;
	}
	/**************************
     	Layouts
     ****************************/
	.newsfeed-right {
		display: none;
	}
	/*******************
     	Messages
     *******************/
	.ossn-messages .message-with .user-icon,
	.ossn-messages .messages-recent .messages-from .user-item .image {
		display: none;
	}
	.ossn-messages .message-inner .row {
		margin-left: 0px !important;
	}
	.sidebar-menu-nav .sidebar-menu .menu-content {
		display: block;
	}
}

@media only screen and (max-width: 1199px) {
	.comments-list .comments-item .col-md-1,
	.comments-list .comments-item .comment-user-img {
		/*display: none;*/
	}
	.comments-list .comments-item .col-md-11 {
		width: 100%;
	}
	.comments-item .col-md-11 {
		padding-left: 15px;
	}
	.group-search-details {
		margin-left: 10px;
	}
	.ossn-search-page .ossn-users-list-item .uinfo {
		margin-left: 35px;
	}
	.ossn-search-page .ossn-users-list-item .uinfo a {
		text-overflow: ellipsis;
		width: 200px;
		white-space: nowrap;
		overflow: hidden;
	}
	.ossn-users-list-item .users-list-controls {
		/*margin-bottom: 10px;*/
	}
	.ossn-profile .user-fullname {
		max-width: 640px;
	}
}

@media only screen and (max-width: 767px) {
	.ossn-profile .user-fullname {
		max-width: 767px;
	}
	.ossn-search-page .ossn-users-list-item .uinfo {
		margin-left: 0;
	}
}

.announcement .alert-danger {
    border-radius: 11px;
}
@media (max-width: 800px) {
    .announcement .alert-danger {
        border-radius: 0px;
    }
}