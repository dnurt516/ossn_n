.ossn-comment-attach-photo {
    /*width: 30px;
    margin-top: 5px;*/
    width: 100%;
    margin-right: 5px;
}
.comment-box.dva {
    width: 100%;
    outline: none;
    display: block;
    resize: vertical;
    min-height: 0px;
    word-break: break-word;
    text-align: left;
    border-bottom: none;
    padding: 0;
    margin-top: -75px;
}
.ossn-comment-attach-photo .fa-camera, .ossn-comment-attach-photo .fa-face-smile {
    float: right;
    position: relative;
    margin-top: 0px;
    width: 15px;
    height: 15px;
    padding: 5px;
    font-size:16px;
    cursor:pointer;
}
.ossn-comment-attachment {
    width: 115px;
    margin-left: 40px;
    padding-bottom: 10px;
    margin-top: -5px;
	display:none;
}
.ossn-comment-attachment .image-data  {
    /*padding: 6px;
    background: #333;*/
    border: 0px solid #444;
    /*margin-left: 35px;*/
    
    /* Please, check scaling algorithm of comment picture previews #682 */
    /** 
    comments attachment image not responsive #938
    display: flex; **/
    width: 200px;
    max-height: 220px;       
    text-align: center;
}
.ossn-comment-attachment .image-data img {
	width: auto;
	height: 200px;
	border: 0px solid #444;
    border-radius: 11px;
}
.ossn-viewer-comments .ossn-comment-attachment {
	width:115px;
}
.ossn-viewer .comments-item .row {
	margin-left:10px;
    margin-right:10px;
}
.ossn-viewer .comments-item .col-md-1 {
	display:none;
}
.ossn-viewer-comments .comments-likes .ossn-comment-attach-photo .fa-camera {
	float:none;
    margin-right:0px;
    margin-left:10px;
}

.ossn-viewer-comments .ossn-comment-attachment {
    margin-left: 10px;
    padding-bottom: 10px;
    margin-top: 5px;
}
.ossn-viewer-comments .like-share {
	margin-left:0px;
    margin-right:0px;
}
.ossn-form textarea#comment-edit{
    height: 125px;
}
.ossn-delete-comment {}

.ossn-delete-comment:hover {}

.comment-post-btn {
    float: right;
    font-size: 20px;
    right: 0;
    position: relative;
}
.btn-post.ossn-wall-post  {
    margin-top: 3px
}
.btn-post {
    background-position: 0 0;
    padding: 0 !important;
    min-width: 40px;
}
.btn-post:hover, .btn-post:focus, .btn-post:active, .comment-post-btn:hover, .comment-post-btn:focus, .comment-post-btn:active {
}

.comment-contents p span {
    margin: 10px 0 20px 0;
    display: block;
    line-height: 1.5;
}