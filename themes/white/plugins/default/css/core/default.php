@charset "utf-8";
/******************************
	Basic
**********************************/
:root {
  --main-bg-color: #f0f2f5;
  --main-titles-bg-color: #F6F7F8;
  --main-border-color: #dfdfdf;
  --main-title-color:initial;
  --topbar-bg: #fff;
  --btn-color-bg:#1877F2;
  --bg-inner-containers:#fff;
  --bg-input-bg:#f0f2f5;
  --text-color:#4b4b4b;
  --link-color:#0f3b4a;
  --comment-list-bg:#FBFBFB;
  --comment-input-border:#ccd0d5;
  --comment-item-bg:#ebedf0;
  --bg-image-container:#FBFBFB;
  --topbar-shadow:0px 0px 7px 0px rgb(180 180 180 / 75%);
  --bg-sidebar-icons:#d3d5d9;
  --bg-topbar-icons: #e4e6eb;
  --main-border-color-bit:#eee;
  --sidebar-hover-menu:#E4E6E9;
  --sidebar-hover-menu-border:#E4E6E9;  
  --topbar-icons-hover:#e3e3e3;
  --bg-message-box:#fff;
  --scroll-bg:#eaeaea;
  --scroll-thumb:#ccc;
  --scroll-thumb-hover:#aaa;  
  --link-hover-color:#1767ce;  
  --input-disabled:#dbdbdb;  
  --input-disabled-color:initial;
}
.white-darkmode:root {
  --main-bg-color: #18191a;
  --main-titles-bg-color: #3a3b3c;
  /**--main-border-color: none;**/
  --main-border-color:#3c3c3c;
  --main-title-color:#b0b3b8;
  --topbar-bg: #242526;
  --topbar-shadow:none;
  --btn-color-bg:#1877F2;
  --bg-inner-containers:#242526;
  --bg-input-bg:#3a3b3c;
  --text-color:#ccc;
  --link-color:#ccc;
  --comment-list-bg:#303030;
  --comment-input-border:none;  
  --bg-image-container:#303030;
  --bg-sidebar-icons:#3a3b3c;
  --bg-topbar-icons: var(--bg-sidebar-icons);  
  --comment-item-bg:#454545;
  --main-border-color-bit:#3c3c3c;
  --sidebar-hover-menu:#434343;
  --sidebar-hover-menu-border:434343;    
  --topbar-icons-hover:var(--sidebar-hover-menu);
  --bg-message-box:#323232;
  --scroll-bg:#242526;
  --scroll-thumb:#3a3a3a;
  --scroll-thumb-hover:#474747;
  --link-hover-color:#1767ce;
  --input-disabled:#727272;
}
* {
   /**moz**/
     scrollbar-width: thin; 
}
body {
	font-size: 14px;
	background-color: var(--main-bg-color);
	font-family: 'PT Sans', sans-serif;
	height: 100%;
    color:var(--text-color);
}

.ossn-required {
	color: #a94442;
}

::-webkit-scrollbar {
	width: 12px;
}

::-webkit-scrollbar-track {
	background-color: #eaeaea;
	border-left: 1px solid #ccc;
}

::-webkit-scrollbar-thumb {
	background-color: #ccc;
}

::-webkit-scrollbar-thumb:hover {
	background-color: #aaa;
}

.ossn-form input[type='number'],
.ossn-form input[type='email'],
.ossn-form input[type='password'],
.ossn-form text,
.ossn-form select,
.ossn-form textarea,
.ossn-form input[type='text'] {
	width: 100%;
	background-color: var(--bg-input-bg);
    color:var(--text-color);
	border: 1px solid var(--main-border-color);
	padding: 8px;
	margin-bottom: 5px;
	outline: none;
	display: block;
	resize: vertical;
	border-radius: 5px;
	border-radius: 5px;
	box-shadow: none;
	-webkit-box-shadow: none
}

.ossn-form input[type='number']:focus,
.ossn-form input[type='email']:focus,
.ossn-form input[type='password']:focus,
.ossn-form text:focus,
.ossn-form select:focus,
.ossn-form textarea:focus,
.ossn-form input[type='text']:focus {
	outline: none;
}

.ossn-form input[readonly],
.ossn-form select[readonly],
.ossn-form textarea[readonly]{
	background: var(--input-disabled) !important;
    color: var(--text-color);
}
.ossn-form input::placeholder,
.ossn-form select::placeholder,
.ossn-form textarea::placeholder {
    color: var(--text-color);
}
.ossn-form input[type="file"] {
	display:block;
}
.btn:focus,
.btn:active {
	outline: none !important;
}

.form-control {
	height: initial;
}

.ossn-form-group-half {
	display: inline-block;
	width: calc(50% - 2px);
	float: left;
	box-sizing: border-box;
}

.radio-block-container {
	margin-bottom: 20px;
}

.ossn-form input[type='submit'] {
	margin-top: 5px;
	margin-bottom: 5px;
}

.ossn-red-borders {
	border: 1px solid #a94442 !important;
}

.fa,
.fas,
.far,
.fal,
.fad,
.fab {
	margin-right: 5px;
}


.ossn-hidden {
	display: none;
}

p {
	font-size: 15px;
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
	font-weight: bold;
	margin-left: 10px;
}

.btn {
	border-radius: 5px;
	padding: 4px 8px;
}

.btn-primary {
	background-color: #1877F2;
    border-color:#1877F2;
}
.btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus, .btn-primary:hover, .open>.dropdown-toggle.btn-primary {
    background-color: #1767ce;
}
a {
	color: var(--link-color);
}
a:focus,
a:hover {
	color: var(--link-hover-color);
}


/************************************
	Layouts
************************************/
.ossn-inner-page {
	margin-top:70px;
}
.welcome-text {
	text-align:center;
}
.welcome-text .welcome {
color: #1876f2;
    font-weight: bold;
    font-size: 30px;	
}
.welcome-text p {
    font-weight: bold;
    font-size: 16px;
}
.register-topbar-xs,
.register-topbar,
.home-right-login {
	display:none;	
}
/** didn't we have a minimum page height in goblue? #702 **/

.ossn-layout-module,
.ossn-layout-contents,
.ossn-layout-media,
.ossn-layout-newsfeed {
	margin-top: 10px;
	min-height: 400px;
}

.ossn-home-container,
.ossn-layout-startup {
	min-height: 560px;
}
.ossn-home-container .ossn-page-contents {
	background: rgba(255, 255, 255, 0);
	border: 1px solid rgba(238, 238, 238, 0);
}

.ossn-layout-startup {
	min-height: 560px;
}

.ossn-layout-startup-background {
	min-height: 560px;
}

.ossn-layout-startup .col-md-11 {
	width: 100%;
}

.ossn-layout-startup footer .ossn-footer-menu a {
	color: var(--text-color);
}

.ossn-home-container {
	margin-top: 20px;
}

.ossn-layout-newsfeed .newsfeed-right {}

.ossn-page-container {
	overflow-x: hidden;
	min-height: 400px;
}

.ossn-layout-module {
	margin-top: 10px;
	background: var( --bg-inner-containers);
	border: 1px solid var(--main-border-color-bit);
    border-radius: 10px;    
}

.ossn-layout-module .module-title {
	background: var(--main-titles-bg-color);
    color:var(--main-title-color);
	border: 1px solid var(--main-border-color);
	padding: 10px;
    
	border-top-right-radius: 10px;
    border-top-left-radius: 10px;    
}

.ossn-layout-module .module-contents {
	padding: 10px;
}

.ossn-layout-module .module-title .title {
	font-weight: bold;
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
	background: var(--bg-inner-containers);
	padding: 10px;
	border: 1px solid var(--main-border-color-bit);;
    border-radius:10px;
}

.opensource-socalnetwork {
	min-height: 500px;
}

.ossn-home-container .row {
	margin-right: 10px;
	margin-left: 10px;
}

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
	font-weight: bold;
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

.ossn-page-loading-annimation {
	background: #fff;
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
}

.ossn-page-loading-annimation .ossn-page-loading-annimation-inner {
	width: 24px;
	margin: 0 auto;
	margin-top: 20%;
}

.newsfeed-middle-top {
	display: none;
	background-color: #fff;
	box-shadow: inset 0 0 0 1px rgba(144, 144, 144, 0.25);
	border-radius: 3px;
	margin-top: 2px;
	margin-bottom: 4px;
	padding: 9px;
}


/*******************************
	Topbar	
********************************/
.topbar-menu-right {
	margin:10px 0;
}
.topbar-menu-right > ul {
	padding:0px;
}
.topbar-menu-right .user-image-name:hover{
 	background:#F2F2F2;
    border-radius:20px;
}
.white-darkmode .topbar-menu-right .user-image-name:hover {
 	background:var(--sidebar-hover-menu);
}
.topbar-menu-right .user-image-name {
    padding: 5px 10px;
}
.topbar-menu-right .user-image-name img{
	border-radius: 50%;
}
.topbar-menu-right .user-image-name span {
    color: var(--text-color);
    font-weight: bold;
}
.topbar {
	background: var(--topbar-bg);
    color: #fff;
    z-index: 1000;
    position: fixed;
    height: 60px;
    width: 100%;
    left: 0;
    box-shadow: var(--topbar-shadow);
}
.white-darkmode .topbar {
	border-bottom:1px solid var(--main-border-color-bit);
}
#ossn-notif-homepage a,
.ossn-notifications-notification,
.ossn-notifications-messages,
.ossn-notifications-friends {
    background: var(--bg-topbar-icons);
    color:var(--text-color);
    border-radius: 50%;
    width: 40px;
    height: 40px;
    text-align: center;
}
.topbar .fa {
	font-size: 17px;
}

.topbar .site-name a {
	text-transform: uppercase;
    font-size: 20px;
    margin: 15px;
    color: #1877F2;
    display: block;
    font-weight: bold;
    text-shadow: 0.2px 0.3px 0 #050505;
}

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

.topbar-menu-right li a:not(.dropdown-item) ,
.topbar-menu-left li a:not(.dropdown-item)  {
    padding: 10px;
    display: block;
    color:var(--text-color);
}
.ossn-topbar-dropdown-menu a[role="button"] {
    background: var(--bg-topbar-icons);
    border-radius: 50%;
    width: 40px;
    height: 40px;
    padding: 5px 13px;
}
.ossn-topbar-dropdown-menu a[role="button"] i {
	font-size:23px;
        margin-top: -10px;
}
.topbar-menu-right li:hover,
.topbar-menu-left li:hover {
	cursor: pointer;
}
#ossn-notif-homepage a:hover,
.topbar-menu-right li:hover a[role="button"] {
	    background: var(--topbar-icons-hover);
}
.topbar .right-side-nospace .topbar-menu-right {
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.topbar .right-side-space .topbar-menu-right {
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.topbar .fa,
.topbar .ossn-icons-topbar-friends,
.topbar .ossn-icons-topbar-messages,
.topbar .ossn-icons-topbar-notification i {
	color:var(--text-color);
    margin-right:0;
}
#ossn-notif-friends,
#ossn-notif-messages,
#ossn-notif-notification {
	margin-left:5px;
}

#sidebar-toggle  {
	margin:10px 0;
    float:left;
}
#topbar-search {
	margin:10px 0;
	margin-left:5px;
    float:initial;
}	
.search-topbar-sm {
	display:none;
    text-align:center;
}	
#topbar-search a,
#sidebar-toggle a {
    width: 40px;
    height: 40px;
    padding: 11px;
    background: var(--bg-topbar-icons);
    border-radius: 50%;
    text-align:center;
}
#topbar-search a i,
#sidebar-toggle a i{
	    font-size: 15px;
        margin-right:0;
}
.topbar .ossn-icons-topbar-friends-new,
.topbar .ossn-icons-topbar-messages-new,
.topbar .ossn-icons-topbar-notifications-new i {
	color:var(--text-color);
    margin-right:0px;
}
.topbar-menu-right a[role="button"] {
	text-align:center;
}
.ossn-topbar-dropdown-menu {
	float: right;
        margin-left: 5px;
}

.ossn-topbar-dropdown-menu ul li a,
.ossn-topbar-dropdown-menu ul li {
	display: block;
	width: 100%;
	color: var(--text-color);
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
	padding: 15px;
	padding-top: 10px;
	border: 1px solid var(--main-border-color);
	margin-top: 20px;
	background-color: var(--bg-inner-containers);
	padding-bottom: 0px;
	border-radius: 10px;
}

.ossn-wall-item:first-child {
	margin-top: 0px;
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
	border-radius: 50px;
	display: inline-block;
	float: left;
	margin-right: 10px;
}

.ossn-wall-item .meta {}

.ossn-wall-item .meta .user {
	margin-top: 3px;
}

.ossn-wall-item .meta .user a {
	font-weight: bold;
    text-decoration:none;
}

.ossn-wall-item .meta .user span {
	color: #999;
}

.ossn-wall-item .post-contents {
	margin-top: 20px;
}

.ossn-wall-item .post-contents p {
	/** Incorrect Hyphenation in the theme GoBlue 3.0 #824 **/
	word-break: break-word;
	text-align: justify;
}
.ossn-wall-item .post-contents img:not(.ossn-photos-wall-item):not(.multiupload-photo-item) {
    max-width: 100%;
    max-height: 400px;
    border: 1px solid var(--main-border-color);
    display: block;
    margin-bottom: 10px;
    margin: 0 auto;
}
.post-share-wall-item .user-img {
    display: none !important;
}
.ossn-photos-wall-item {
	border-radius:10px;
}
.post-contain-image {
    background: var(--bg-image-container);
    border-top: 1px solid var(--main-border-color);
    margin-left: -15px;
    margin-right: -15px;
}
.ossn-wall-item .meta .post-menu {
	float: right;
}

.ossn-wall-container {
	border-radius: 2px;
	margin-top: -5px;
	margin-bottom: 10px;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
}
.ossn-wall-container-data {
	background: var(--bg-inner-containers);
	padding: 10px;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	border: 1px solid var(--main-border-color);
	border-bottom-color: var(--main-border-color);
	border-width: 0 1px 2px 1px;
}
.ossn-wall-container textarea {
	padding: 10px;
	width: 100%;
	border: 1px solid;
	border-left: 0px;
    border-right:0px;
	border-bottom: 0px;
	border-top: 0px;
	resize: none;
	outline: none;
	background: var(--bg-inner-containers);
	border-radius: 0;
}

.ossn-wall-container .controls {
	background-color: var(--main-titles-bg-color);
	border-bottom: 1px solid var(--main-border-color);
	min-height: 40px;
    color:var(--text-color);
    
	margin-top: 5px;
	padding: 5px 10px;
	border-left: 0;
	border-right: 0; 
    
    margin-left: -10px;
    margin-right: -10px;       
}

.ossn-wall-container .wall-tabs {
	border-bottom: 1px solid #E5E5E5;
	background-color: var(--main-titles-bg-color);
	border: 1px solid var(--main-border-color);
	margin-top: 5px;
    
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;    
    
    color:var(--main-title-color);
}

.ossn-wall-container .wall-tabs .item {
	padding: 10px;
	display: inline-flex;
	cursor: pointer;
	border-bottom: 1px solid  1px solid var(--border-color);
	font-weight: bold;
	font-size: 13px;    
}

.ossn-wall-container .wall-tabs .item:hover {
	background: var(--sidebar-hover-menu);
}

.ossn-wall-container .wall-tabs .item div {
	display: inline-block;
}

.ossn-wall-container .wall-tabs .item .text {
	font-weight: bold;
	margin-top: 1px;
	margin-left: 5px;
	position: absolute;
	font-size: 15px;
}

.ossn-wall-container .tabs-input {}

.ossn-wall-container .controls li {
	padding: 7px;
	background: #e5e5e5e0;
	display: inline-block;
	border-radius: 50%;
	cursor: pointer;
	width: 35px;
	height: 35px;
	text-align: center;
}

.ossn-wall-container .controls li:hover {
	background: var(--sidebar-hover-menu);
}

.ossn-wall-privacy-dummy,
.ossn-wall-privacy {
	margin-right: 5px;
	padding: 5px 10px;
	background: #e5e5e5e0;
	border-radius: 10px;
	cursor: pointer;
	display: inline-block;
	margin-top: 10px;
}
.ossn-wall-privacy-dummy {
    background: var(--bg-input-bg);
    color: var(--text-color);
    cursor:initial;
    opacity: 0.5;
}
.ossn-wall-privacy:hover {
	background: #eeeeee8c;
}
.ossn-wall-privacy-dummy span > span,
.ossn-wall-privacy span>span {
	margin-left: 5px;
	float: right;
}
.ossn-wall-privacy span>span {
	margin-left: 5px;
	float: right;
}
.group-wall .ossn-wall-post-button-container {
	margin-top:5px;
}
.ossn-wall-container input[type='submit'] {
	padding: 3px 20px;
	display: block;
	margin:6px auto;
}
.ossn-wall-post-button-container {
    display: inline-table;
    float: right;
}

.ossn-wall-container i {
	font-size: 15px;
    margin-right:0px;
}

.ossn-wall-container input[type="file"] {
    border: 1px solid var(--main-border-color-bit);
    border-radius: 10px;
    background: #fff;
}

.ossn-wall-container input[type="file"],
.ossn-wall-container input[type="text"] {
	width: 100%;
	border-top: 1px dashed var(--main-border-color-bit);
	padding: 5px;
	margin-bottom: 5px;
	margin-top: -5px;
	outline: none;
}

#token-input-ossn-wall-friend-input {
	width: 100% !important;
	border-top: 1px dashed #EEE;
	padding: 7px;
	margin-bottom: 5px;
	margin-top: -5px;
	background: #fff;
	border: 0;
}

#ossn-wall-location-input {
    background: #fff;
    border: 1px solid var(--main-border-color-bit);
    border-radius: 10px;    
}

#ossn-wall-form .ossn-loading {
	margin: 7px;
}

.ossn-wall-item-type {
	display: inline-block;
    color:var(--text-color);
}

.ossn-wall-item .friends {
	display: inline-block;
}
.white-darkmode .ossn-wall-privacy,
.white-darkmode .ossn-wall-container .controls li {
		background:#575757e0;
}
.white-darkmode ul.token-input-list {
	    border-bottom: 1px solid var(--main-border-color-bit);
}

/*******************************
	Comments Likes
********************************/

.ossn-comment-menu {
	float: right;
	margin-left: 10px;
}

.comments-item:hover .ossn-comment-menu {
	display: block;
	margin-left: 10px;
}

.comments-likes {
	width: 100%;
}

.menu-likes-comments-share {
    margin-bottom: 10px;
    border-top: 1px solid var(--main-border-color-bit);
    margin-left: -15px;
    margin-right: -15px;
    padding-left: 15px;
    padding-top: 10px;
}
.menu-likes-comments-share a {
    color: var(--text-color);
}

.menu-likes-comments-share li {
	display: inline-block;
}

.menu-likes-comments-share li::after {
	content: "-";
	margin-left: 5px;
	margin-right: 5px;
	color: #ccc;
}

.menu-likes-comments-share li:last-child:after {
	content: " ";
}

.comments-list {
	background-color: var(--comment-list-bg);
	margin-left: -15px;
	margin-right: -15px;
	padding-left: 10px;
	padding-right: 10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;    
}

.comments-list .comments-item {
	padding-top: 10px;
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
	border-radius: 32px;
}


/** UI improvements comments #1524 **/

.comments-list .comments-item .comment-contents {
	display: inline-block;
	margin-top: -3px;
	background-color: var(--comment-item-bg);
	border-radius: 18px;
	width: auto;
	line-height: 16px;
	padding: 6px 12px 7px 12px;
    color:var(--text-color);
}

.comment-container {
	position: relative;
	z-index: 0;
}

.comments-item .col-md-11 {
	padding-left: 0px;
}
.comment-metadata {
	margin-top:5px;
}
.comment-metadata .time-created,
.comment-metadata a {
	display: inline-block;
}

.comment-contents p {
	margin: 0px;
	word-break: break-word;
	text-align: left;
}

.comment-contents p img {
	display: block;
	margin-top: 10px;
	margin-bottom: 10px;
	max-width: 100%;
}

.comment-contents .owner-link {
	font-weight: bold;
	margin-right: 5px;
	font-size: 14px;
}

.comment-contents {
	width: 100%;
}

.comment-container span[readonly='readonly'],
.comment-container input[readonly='readonly'] {
	background: #eee;
}

.comment-box {
	width: 100%;
	padding: 6px 65px 6px 12px !important;
	margin-bottom: 5px;
	outline: none;
	display: block;
	resize: vertical;
	min-height: 32px;
	background-color: var(--bg-input-bg);
	border: 1px solid var(--comment-input-border);
	border-radius: 15px;
	word-break: break-word;
	text-align: left;
    color:var(--text-color);
}

[contentEditable=true]:empty:not(:focus)::before {
	content: attr(placeholder);
}


/*********************************
	Like
************************************/

.like-share {
	border-top: 1px solid var( --main-border-color);
	border-bottom: 1px solid var( --main-border-color);
	padding: 10px;
	margin-top: 10px;
	background-color: var(--comment-list-bg);
	margin-left: -15px;
	margin-right: -15px;
	padding-left: 20px;
	padding-right: 20px;
    color:var(--text-color);
}

.ossn-like-comment,
.ossn-total-likes {
	margin-left: 10px;
}


/********************************
	Global
***********************************/

.time-created {
	font-size: 14px;
	font-style: italic;
	color: #999;
}


/********************************
	Sidebar Nav
*********************************/

.sidebar {
	background-color: var(--main-bg-color);
	height: 200px;
	z-index: 1000;
	width: 300px;
	position: fixed;
	height: 90vh;
	margin-left: -300px;
	overflow-y: auto;
	overflow-x: hidden;
	color: #fff;
    margin-top: 60px;
}
.sidebar a {
	color: var(--text-color);
    font-size: 15px;
    text-decoration: none;
    font-family: Segoe UI Historic, Segoe UI, Helvetica, Arial, sans-serif;
    font-weight: bold;

    /**moz**/
     scrollbar-width: thin;    
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

.sidebar-open-no-annimation {
	margin-left: 0px;
}

.sidebar-open-page-container {
	margin-left: 300px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-open-page-container-no-annimation {
	margin-left: 300px;
}

.sidebar-close-page-container {
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.newseed-uinfo {
	padding: 10px;
}

.newseed-uinfo img {
	display: inline-block;
	border-radius: 50px;
	float: left;
}

.newseed-uinfo .name {
	display: inline-block;
	margin-left: 10px;
     margin-top: 5px;
}

.newseed-uinfo .name a {
display: inline-block;
    margin-left: 10px;
    margin-top: -2px;
    font-size: 15px;
    color: var(--text-color);
}

.newseed-uinfo .name .edit-profile {
	font-weight: inherit;
}

.sidebar-menu-nav {
	overflow: auto;
	font-family: verdana;
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
.sidebar-menu-nav li {
	margin-top:5px;
}

.sidebar-menu-nav ul:not(collapsed) .arrow:before,
.sidebar-menu-nav li:not(collapsed) .arrow:before {
	font-family: 'Font Awesome 5 Free';
	content: "\f078";
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
	float: right;
}

.sidebar-menu-nav ul .sub-menu li {
	padding-left: 20px;
}

.sidebar-menu-nav ul .sub-menu li,
.sidebar-menu-nav li .sub-menu li {
    border: none;
    line-height: 36px;
    border-radius: 6px;
        margin-top: 5px;
    margin-left: 0px;
}

.sidebar-menu-nav ul .sub-menu li:hover,
.sidebar-menu-nav li .sub-menu li:hover {
	background-color: var(--sidebar-hover-menu);
}

.sidebar-menu-nav ul .sub-menu li:before,
.sidebar-menu-nav li .sub-menu li:before {
	font-family: 'Font Awesome 5 Free';
    font-weight:900;
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
    background: var(--bg-sidebar-icons);
    margin-right: 5px;
    border-radius: 50%;
    color: var(--text-color);
     width: 36px;
    height: 36px;
    text-align: center;   
}


.sidebar-menu-nav li {
	padding-left: 0px;
}

.sidebar-menu-nav li a {
    line-height: 36px;
    border-radius: 6px;
	color: var(--text-color);
    font-size: 15px;
    text-decoration: none;
    font-family: Segoe UI Historic, Segoe UI, Helvetica, Arial, sans-serif;
    font-weight: bold;
}

.sidebar-menu-nav li a i {
	padding-left: 10px;
	width: 20px;
	padding-right: 25px;
}

.sidebar-menu-nav li:hover {
	border-left: 3px solid var(--sidebar-hover-menu-border);
	background-color: var(--sidebar-hover-menu);
        border-radius: 6px;
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-o-transition: all 1s ease;
	-ms-transition: all 1s ease;
	transition: all 1s ease;
}

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
	border-left-color: #ccc;
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


/******************************************
	Ossn Ads
*******************************************/
.ad-image-container {
    background: var(--bg-input-bg);
    padding: 5px;
    border: 1px solid var(--main-border-color);
}
.ossn-ad-item {}

.ossn-ad-item .ad-image {
	max-width: 200px;
	margin: 0 auto;
	display: block;
}

.ossn-ad-item a {
	text-decoration: none;
	color: #000;
	cursor: pointer;
}

.ossn-ad-item .ad-title {
	font-weight: bold;
	font-size: 15px;
	margin-bottom: 5px;
}

.ossn-ad-item .ad-link {
	margin-bottom: 5px;
}

.ossn-ad-item p {
	margin-top: 10px;
	text-align: justify;
}


/*****************************
	Widgets
******************************/

.ossn-widget {
	margin-bottom: 10px;
	background-color: var(--bg-inner-containers);
	border-top-left-radius: 10px;
    border-top-right-radius: 10px;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
}

.ossn-widget .widget-heading {
	background: var(--main-titles-bg-color);
    color:var(--main-title-color);
	border: 1px solid var(--main-border-color);
	padding: 10px;
	font-weight: bold;
	border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.ossn-widget .widget-contents {
	padding: 10px;
	border-bottom: 1px solid var(--main-border-color);
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
}
.ossn-layout-startup .ossn-widget {
    box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
}

.ossn-privacy .radio-block {
	margin-bottom: 0;
	margin-top: 0;
	display: flex;
}

.ossn-privacy label {
	margin-bottom: 0px;
}

.ossn-privacy .radio-block span {
	font-weight: normal;
	width: 85%;
	margin-top: 7px;
}

.group-add-privacy .radio-block span {
	margin-top: 5px;
}

.group-add-privacy .radio-block .ossn-radio-input {
	float: left;
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
	color: var(--text-color);
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
	background-color: var(--bg-inner-containers);
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	border: 1px solid #ccc;
	border: 1px solid rgba(0, 0, 0, .15);
	border-radius: 4px;
	-webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
	box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
}

.ossn-notifications-box .notificaton-item {
	border-bottom: 1px solid #eee;
}

.ossn-notifications-box .notificaton-item:hover,
.ossn-notifications-box .notificaton-item .active {
	background-color: #F9F9F9;
}

.ossn-notifications-box .type-name {
	font-size: 13px;
	font-weight: bold;
	padding: 1px 10px 5px 10px;
	color: var(--text-color);
	height: 25px;
	border-bottom: 1px solid var(--main-border-color-bit);
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

.ossn-notifications-box .bottom-all a,
.ossn-notifications-box .notfi-meta strong {
	color: #337ab7;
}

.ossn-notifications-box .notfi-meta {
	width: 330px;
	margin-left: 5px;
	display: inline-block;
	float: right;
	color: color:var(--text-color);
}

.ossn-notifications-box .bottom-all a {
	font-weight: bold;
}

.ossn-notifications-box .bottom-all {
	background: #F7F7F7;
	text-align: center;
	padding: 0px;
	padding-top: 10px;
	display: block;
	height: 40px;
	border-top: 1px solid #eee;
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
	background: var(--sidebar-hover-menu);
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

.ossn-notifications-friends-inner {
	padding: 0 5px;
}

.ossn-notifications-friends-inner form {
	display: inline-table;
}

.ossn-notification-page li img {
	display: none;
}

.notification-friends li {
	margin-bottom: 5px;
	width: 100%;
	border-bottom: 1px solid var(--main-border-color-bit);
}

.notification-friends .notfi-meta a {
	color: #337ab7;
	font-weight: bold;
	display: inline-block;
	width: 200px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

.ossn-notifications-friends-inner .controls {
	float: right;
	margin-top: 6px;
	display: inline-block;
}

.ossn-notifications-friends-inner .btn {
	padding: 3px 9px;
	border-radius: 1px;
}
.notification-friends {
	max-height: 400px;
}
.friends-added-text {
    float: none !important;
    margin-top: -15px !important;
    display: block !important;
    margin-left: 10px;
    font-size: 13px;
}
/*******************************
	Profile
********************************/

.ossn-profile .top-container {
	background: var(--bg-inner-containers);
	border: 1px solid var(--main-border-color);
	border-width: 1px 1px 2px;
	border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;  

    border-top-left-radius: 10px;
    border-top-right-radius: 10px;      
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
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;    
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
    margin: 5px 0;

    padding-top: 5px;
}

.profile-hr-menu ul li a {
	display: block;
	padding: 15px;
	margin-right: 5px;
	font-weight: bold;
	padding: 10px 15px;
    color: #65676b;   
    text-decoration:none;
     
}
.profile-hr-menu ul li a:hover {
    border-radius: 20px;
    background:#F2F2F2;
}
.profile-hr-menu .dropdown-menu {
	margin-left: 0px;
}

.profile-hr-menu .dropdown-menu li {
	display: block;
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
    border-bottom: 1px solid var(--main-border-color-bit);
    border-top: 1px solid var(--main-border-color-bit);
        margin-top: 10px;
border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;        
}

.profile-hr-menu ul li:last-child {
	border-right: none;
}

/**.ossn-profile .profile-photo {
	position: absolute;
	margin-left: 20px;
	margin-top: -190px;
	background-color: #fff;
	border: 1px solid #CCC;
	border-radius: 2px 2px 2px 2px;
	-webkit-border-radius: 2px 2px 2px 2px;
	-moz-border-radius: 2px 2px 2px 2px;
	padding: 2px;
}**/
.profile-photo-name-container {
	text-align:center;
}
.ossn-profile .profile-photo {
    margin-left: 20px;
    width: 170px;
    height: 170px;
    margin: -150px auto auto;
    position: relative;
    border-radius: 50%;
}
.ossn-profile .profile-photo img {
border-radius: 50%;
    border: 5px solid #fff;
}

.ossn-profile .user-fullname {
    color: var(--text-color);
    font-weight: bold;
    font-size: 35px;
    font-size: 2.0vw;
    text-shadow: 0 0 0.2px var(--text-color);
}

.ossn-profile-role {
	font-size: 15px !important;
}

.btn-standalone-grey {
	color: #333;
	font-weight: bold;
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
	border: 1px solid #999;
	border-bottom-color: #888;
	background: #EEE;
	background: -webkit-gradient(linear, 0 0, 0 100%, from(#F5F6F6), to(#E4E4E3));
	background: -moz-linear-gradient(#f5f6f6, #e4e4e3);
	background: -o-linear-gradient(#f5f6f6, #e4e4e3);
	background: linear-gradient(#F5F6F6, #E4E4E3);
	text-decoration: none;
}

.btn-standalone-grey:active {
	background: #ddd;
	border-bottom-color: #999;
	box-shadow: none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
}

.btn-standalone-grey:hover {
	color: #333;
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
.profile-menu .btn-action {
	margin-right:5px;
}
#cover-menu {
	display: none;
}

.upload-photo {
    width: 170px;
    padding: 10px;
    position: absolute;
    color: #FFF;
    bottom: 0;
    margin-left: 65px;
    text-align: center;
    font-size: 15px;
    display:block;
}
.upload-photo span i{
	margin-right:0px;
}
.upload-photo span {
    width: 100%;
    padding: 12px;
    text-align: center;
    background: #eee;
    color: #000;
    border-radius: 50%;
}

.user-cover-uploading {
	opacity: 0.4;
}

.user-photo-uploading {
	height: 100%;
	opacity: 0.8;
	background: #fff;
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
	margin-right: 10px;
	margin-left: 10px;
}

.ossn-profile-extra-menu {
	display: inline-block;
}


/*****************************
    Groups
*****************************/

.ossn-group-cover img {
	width: auto;
}
.ossn-group-cover {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
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

li[class^="menu-section-item-"] {
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	/**width: 200px; **/
	padding-right: 10px;
}


/******************************
	Search
******************************/

.ossn-menu-search li {
	display: block;
}

.ossn-menu-search li:hover {
	background: #F9F9F9;
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
	content: "\f007";
	padding-right: 10px;
	vertical-align: middle;
    font-weight:900;
	float: left;
}

.ossn-menu-search-groups .text:before {
	font-family: 'Font Awesome 5 Free';
	content: "\f0c0";
	padding-right: 10px;
    font-weight:900;    
	vertical-align: middle;
	float: left;
}


/******************************
	Token Input
*******************************/

ul.token-input-list {
    overflow: hidden;
    height: auto !important;
    width: 100%;
    cursor: text;
    font-size: 12px;
    font-family: Verdana;
    min-height: 1px;
    margin: 0;
    z-index: 999;
    background-color: #fff;
    list-style-type: none;
    clear: left;
    color: #2B5470;
    border-top: 1px dashed #EEE;
    border-right: 1px solid #EEE;
    border-left: 1px solid #EEE;
    border-bottom: 1px solid #eee;
    padding: 5px 0 0;
    border-radius: 10px;
}

li.token-input-token {
	overflow: hidden;
	height: auto !important;
	height: 15px;
	margin: 3px;
	padding: 1px 3px;
	background-color: #eff2f7;
	color: #2B5470;
	cursor: default;
	font-weight: bold;
	border: 1px solid #ccd5e4;
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
}

li.token-input-token span {
	color: #a6b3cf;
	margin-left: 5px;
	font-weight: bold;
	cursor: pointer;
}

li.token-input-selected-token {
	background-color: #F9F9F9;
	border: 1px solid #eee;
	color: #2B5470;
	font-weight: bold;
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
	background-color: #fff;
	overflow: hidden;
	border-left: 1px solid #ccc;
	border-right: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	cursor: default;
	font-size: 11px;
	font-family: Verdana;
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
	background-color: #fff;
	padding: 3px;
	margin: 0;
	list-style-type: none;
}

div.token-input-dropdown ul li.token-input-dropdown-item {
	background-color: #fff;
}

div.token-input-dropdown ul li.token-input-dropdown-item2 {
	background-color: #fff;
}

div.token-input-dropdown ul li em {
	font-weight: bold;
	font-style: normal;
}

div.token-input-dropdown ul li.token-input-selected-dropdown-item {
	background-color: #F9F9F9;
	color: #2B5470;
	font-weight: bold;
}


/******************************************
		System Messages
*******************************************/

.ossn-system-messages .ossn-system-messages-inner {
	margin-top: 20px;
	margin-bottom: 20px;
	display: none;
	padding-left: 15px;
	padding-right: 15px;
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
	background-color: #656565;
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
	font-weight: bold;
	font-size: 13px;
	color: #ccc;
}

.ossn-container tbody {
	background: #000;
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

.ossn-message-box {
	width: 470px;
	min-width: 470px;
	min-height: 96px;
	background: var(--bg-message-box);
	border: 1px solid var(--main-border-color-bit);
	position: fixed;
	top: 0px;
	left: 0px;
	right: 0px;
	margin-left: auto;
	margin-right: auto;
	z-index: 60000;
	margin-top: 100px;
	border-radius: 10px;
	display: none;
	box-shadow: 0 2px 26px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(0, 0, 0, 0.1);   
}

.ossn-message-box .close-box {
	float: right;
	color: #ccc;
	cursor: pointer;
}

.ossn-message-box .title {
	background: var(--main-titles-bg-color);
	padding: 11px;
	border-radius: 3px;
	border-bottom: 1px solid var(--main-border-color-bit);
	color: var(--text-color);
	font-size: 14px;
	font-weight: bold;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;    
}

.ossn-message-box .contents {
	padding: 10px;
	min-height: 150px;
	max-height: 420px;
	overflow-x: auto;
	overflow: overlay;
	overflow-x: -moz-hidden-unscrollable    
}

.ossn-message-box .control {
	margin-left: 10px;
	margin-right: 10px;
	height: 45px;
	padding: 10px;
	border-top: 1px solid var(--main-border-color-bit);
}

.ossn-message-box .control .controls {
	float: right;
}

.ossn-message-box .control .controls .btn {
	padding: 2px 13px;
	border-radius: 4px;
}

.ossn-message-box .contents input[type='text'] {
	border: 1px solid var(--main-border-color-bit);
	width: 292px;
	padding: 7px;
    color:var(--text-color);
}

.ossn-message-box .contents input[type='text'],
.ossn-message-box .contents label {
    color:var(--text-color);
	display: inline-table;
}

.ossn-message-box .contents label {
	color: #666;
	font-weight: bold;
	margin-right: 13px;
}

.ossn-form input[type=radio] {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	display: inline-block;
	position: relative;
	background-color: #ececec;
	color: #666;
	top: 5px;
	height: 20px;
	width: 20px;
	border: 0;
	border-radius: 50px;
	cursor: pointer;
	margin-right: 7px;
	outline: none;
}

.ossn-form input[type=radio]:checked::before {
	position: absolute;
	font: 9px/1 'Open Sans', sans-serif;
	left: 7px;
	top: 5px;
	content: '\02143';
	transform: rotate(40deg);
}

.ossn-form input[type=radio]:hover {
	background-color: #f7f7f7;
}

.ossn-form input[type=radio]:checked {
	background-color: #1876f2;
	color: #fff;
	font-weight: bold;
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
	font-weight: bold;
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
	border: 8px solid #38e;
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
	color: #333;
	font-weight: bold;
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
	border: 1px solid #ccc;
	background: -webkit-gradient(linear, 0 0, 0 100%, from(#F5F6F6), to(#E4E4E3));
	background: -moz-linear-gradient(#f5f6f6, #e4e4e3);
	background: -o-linear-gradient(#f5f6f6, #e4e4e3);
	background: linear-gradient(#F5F6F6, #E4E4E3);
	border-radius: 4px;
	text-decoration: none;
}

.button-grey:hover,
.btn-action:hover {
	text-decoration: none;
	background: -webkit-gradient(linear, 0 0, 0 100%, from(#E4E4E3), to(#F5F6F6));
	background: -moz-linear-gradient(#E4E4E3, #F5F6F6);
	background: -o-linear-gradient(#E4E4E3, #F5F6F6);
	background: linear-gradient(#E4E4E3, #F5F6F6);
}


/******************************
	Users List
*******************************/

.ossn-users-list-item .users-list-controls {
	margin-top: 20px;
}

.ossn-users-list-item .users-list-controls a {
	margin-left: 5px;
}

.ossn-users-list-item {
	border: 1px solid #E9EAED;
	margin-bottom: 10px;
	margin-right: -10px;
	margin-left: -10px;
}

.ossn-users-list-item .uinfo a {
	font-size: 14px;
	font-weight: bold;
	margin-top: 20px;
	float: left;
	text-overflow: ellipsis;
	max-width: 300px;
	white-space: nowrap;
	overflow: hidden;
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

footer .col-md-11 {
	border-top: 1px solid var(--main-border-color-bit);
}

footer .container {}

footer .ossn-footer-menu {
	padding-bottom: 10px;
}

footer .ossn-footer-menu a {
	color: #807D7D;
	font-size: 13px;
}

footer .ossn-footer-menu a::after {
	content: "|";
	margin-left: 10px;
	margin-right: 10px;
}

footer .menu-footer-powered::after {
	content: "";
}

.menu-footer-powered {
	float: right;
}

.menu-footer-powered:after {

	display: none;
}

.menu-footer-a_copyrights {
	text-transform: uppercase;
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
	font-weight: bold;
	margin-top: 20px;
	text-align: justify;
	color: #000;
}

.home-left-contents .buttons {
	text-align: center;
	margin-top: 10px;
}

#ossn-home-signup p {
	margin-top: 10px;
}

#ossn-home-signup .radio-block {
	margin-top: 0;
	margin-bottom: 0;
}

#ossn-home-signup .ossn-form-group-half:last-child {
	float: right;
}

#ossn-home-signup .form-group {
	margin-bottom: 0px;
}


/**************************
	System
***************************/

.ossn-list-users {
	height: 60px;
	border-bottom: 1px solid #E9EAED;
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
	font-weight: bold;
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
	width: 446px;
}

.home-left-contents .some-icons i {
    font-size: 35px;
    margin-right: 0px;
    color: #1c1e21;
}

.home-left-contents .some-icons li {
	display: inline-block;
	color: #1c1e21;
	border: 3px solid #1c1e21;
	border-radius: 100%;
	padding: 20px;
	margin-right: 20px;
	margin-bottom: 20px;
	width: 80px;
	height: 80px;
}

.home-left-contents .some-icons {
	margin-top: 10%;
	text-align: center;
    display:none;
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

.ui-draggable {
	opacity: 0.7;
}


/**************************
	Mobile Layout Settings
***************************/
@media only screen and (max-width: 1366px) {
	.ossn-users-list-item .uinfo a {
    	max-width: 200px;
    }
	.sidebar {
		width: 200px;
	}
	.sidebar-open-page-container-no-annimation,
	.sidebar-open-page-container { 
		margin-left:200px;
	}
}
@media (max-width: 480px) {
	#ossn-notif-homepage a, .ossn-notifications-notification, .ossn-notifications-messages, .ossn-notifications-friends {
    	width: 35px;
    	height: 35px;
    }
    .ossn-topbar-dropdown-menu a[role="button"] {
    	width: 35px;
    	height: 35px;
            padding: 2px 11px;    
    }
    #topbar-search a, #sidebar-toggle a {
        width: 35px;
    height: 35px;
    padding: 8px 0;
    }
    .site-logo {
    	width: 350px !important;
    	height: initial !important;
    }
    .topbar-menu-right li a, .topbar-menu-left li a {
    	padding: 8px 9px !important;
    }
	.ossn-wall-privacy {
		float: none;
		margin-right: 0;
	}
	.ossn-wall-container .controls {
		height: auto;
	}
    .topbar:not(.site-name-sm) {
    	margin-top:60px;
        box-shadow: 0px 0px 2px 0px rgb(180 180 180 / 75%);
    }
    .topbar-menu-right {}
    .topbar .right-side-nospace .topbar-menu-right {
    	margin:10px 0;
    }
    .site-name-sm {
    	
    }
    .ossn-inner-page {
    	margin-top:130px;
    }
	/***********************
    	Comments
     ***********************/
	.comments-list .comments-item .comment-user-img {
		display: none;
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
		height: 280px;
		overflow-x: auto;
		overflow: overlay;
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
		width: 150px;
		height: 150px;
	}
    .user-fullname .verified-title {
		font-size: 18px;
	}
	.ossn-profile .user-fullname {
		font-size: 20px;
		margin-top: 0px;
	}
	.ossn-profile .top-container .profile-cover {
		height: 188px;
	}
	.ossn-profile .profile-photo {
		margin-top: -130px;
        width:150px;
        height:150px;
	}
	.profile-menu {
		float: right;
		margin-right: 10px;
	}
	.ossn-profile .top-container .profile-cover img {
		width: auto;
	}
	.ossn-group-cover-button,
	.profile-cover-controls {
		display: none !important;
	}
	.upload-photo {
		width: 100px;
	}
	.profile-hr-menu ul li {
		display: block;
		margin-right: 0px;
	}
    .sidebar {
    	    margin-top: 120px;    
    }
	.ossn-users-list-item .uinfo a {
    	max-width:300px;
    }
	.sidebar {
		width: 300px;
	}
	.sidebar-open-page-container-no-annimation,
	.sidebar-open-page-container { 
		margin-left:300px;
	}	
    .sidebar-open {
    		width: 100%;
			    height: 500px;
    }
	.profile-hr-menu ul li a {
		margin-right: 0px;
		padding: 10px;
	}
	.ossn-profile-role {
		
	}
    .profile-hr-menu ul li a:hover {
    	background:none;
    }
    .profile-hr-menu ul li{
    	margin-top:0px;
    }
	/*****************************
     	System
     *****************************/
	.ossn-users-list-item img {
		display: none;
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
		max-width: 90px;
	}
	.ossn-search-page .ossn-users-list-item .uinfo a {
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		max-width: 100px;
	}
	.ossn-system-messages {
		padding-left: 15px;
		padding-right: 15px;
	}
	.ossn-users-list-item {
		padding-bottom: 10px;
	}
	.ossn-widget .widget-contents {
		padding: 5px;
	}
	.ossn-message-box {
		min-width: 300px;
		width: 300px;
	}
	.ossn-box-loading {
		margin-left: 150px;
		margin-top: 37px;
	}
	.ossn-message-box .contents input[type="text"] {
		width: 195px;
	}
	.ossn-box-inner {
		width: 280px;
	}
	footer .ossn-footer-menu a:nth-last-child(2)::after {
		content: "|";
	}
	/**********************
    	Groups
    ************************/
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

	.ossn-group-profile .profile-header .group-name {
          font-size:20px !important;
	}
	#group-header-menu li,
	#group-header-menu {
		width: 100% !important;
	}
	#group-header-menu li {
		border-bottom: 1px solid #EEE !important;
	}
	.group-name {
		text-align: center;
        margin-top:10px;
	}
    .groups-buttons {
    	text-align:center;
        margin:10px 0px !important;
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
	.newsfeed-middle-top {
		display: block;
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
		display: none;
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
	.newsfeed-middle-top {
		display: block;
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
		display: none;
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
		margin-bottom: 10px;
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
/*****************************************************
		Adding icons for some 3rd party components
******************************************************/

.sidebar-menu-nav ul .sub-menu li:before {
	font-family: 'Font Awesome 5 Free';
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
}

.menu-section-item-groups:before {
	content: "\f07b" !important
}

@media screen and (min-width:1500px) {
	.ossn-wall-container .wall-tabs i {
		margin-top: 3px;
	}
}
.site-logo-logged {
    width: 400px;
    height:60px;
}
.site-logo {
    float: left;
    width: 400px;
    height:60px;
}
.register-topbar,
.login-topbar {
	float: right;
    margin: 15px;
}
.dropdown-menu {
	background:var(--bg-inner-containers);
}
.white-darkmode .dropdown-menu>li>a:focus, 
.white-darkmode .dropdown-menu>li>a:hover {
	background:var(--topbar-icons-hover);
    color:var(--text-color);
}	
.white-darkmode  .ossn-notification-messages .fa-reply, 
.white-darkmode  .ossn-messages .messages-recent .messages-from .user-item .reply .fa-reply,
.white-darkmode .ossn-notification-messages .reply-text, 
.white-darkmode .ossn-notification-messages .reply-text-from,
.white-darkmode .ossn-notification-messages .user-item-inner .time,
.white-darkmode .ossn-notification-messages .user-item .data .name {
	color:var(--text-color);
}
.white-darkmode .ossn-notifications-box .bottom-all a:hover,
.white-darkmode .ossn-notifications-box .bottom-all a {
    color:var(--text-color);
    text-decoration:none;
    background:none;
}
.white-darkmode .ossn-notifications-box .bottom-all {
	background:var(--topbar-icons-hover);
    color:var(--text-color);
    border-top:1px solid var(--main-border-color-bit);
}
.white-darkmode .ossn-notification-messages .user-item {
    border-bottom:1px solid var(--main-border-color-bit);
}
.white-darkmode .ossn-notification-messages .user-item:hover {
	background:var(--topbar-icons-hover);
}
.menu-topbar-dropdown-darkmode[data-type="1"]:after {
	content: "\f204";
    font-family: 'Font Awesome 5 Free';
    padding-left: 10px;
    font-weight:900;
}
.menu-topbar-dropdown-darkmode[data-type="0"]:after {
	content: "\f205";
    font-family: 'Font Awesome 5 Free';
    padding-left: 10px;
    font-weight:900;
    color: blue;    
}
.gdpr p {
	margin-top:0 !important;
}