.ossn-polls {}

.ossn-polls-form-questions .progress {
	height: 20px;
	font-weight: bold;
}

.ossn-polls-has-no-progress {
	color: #000;
}

.ossn-polls-form-questions .panel-body {
	padding-top: 0;
	padding-bottom: 0;
}

.ossn-poll-loading-submit {
	margin: 0 auto;
	width: 40px;
	display: none;
}

.ossn-polls-form-questions label.btn span {
	font-size: 1.5em;
}

.ossn-polls-form-questions label input[type="radio"]~i.fa.fa-circle-o {
	color: #c8c8c8;
	display: inline;
}

.ossn-polls-form-questions label input[type="radio"]~i.fa.fa-dot-circle-o {
	display: none;
}

.ossn-polls-form-questions label input[type="radio"]:checked~i.fa.fa-circle-o {
	display: none;
}

.ossn-polls-form-questions label input[type="radio"]:checked~i.fa.fa-dot-circle-o {
	color: #0b769c;
	display: inline;
}

.ossn-polls-form-questions label:hover input[type="radio"]~i.fa {
	color: #0b769c;
}

.ossn-polls-form-questions label input[type="checkbox"]~i.fa.fa-square-o {
	color: #c8c8c8;
	display: inline;
}

.ossn-polls-form-questions label input[type="checkbox"]~i.fa.fa-check-square-o {
	display: none;
}

.ossn-polls-form-questions label input[type="checkbox"]:checked~i.fa.fa-square-o {
	display: none;
}

.ossn-polls-form-questions label input[type="checkbox"]:checked~i.fa.fa-check-square-o {
	color: #0b769c;
	display: inline;
}

.ossn-polls-form-questions label:hover input[type="checkbox"]~i.fa {
	color: #0b769c;
}

.ossn-polls-form-questions div[data-toggle="buttons"] label.active {
	color: #0b769c;
}

.ossn-polls-form-questions div[data-toggle="buttons"] label {
	display: inline-block;
	padding: 6px 12px;
	margin-bottom: 0;
	font-size: 14px;
	font-weight: normal;
	line-height: 2em;
	text-align: left;
	white-space: nowrap;
	vertical-align: top;
	cursor: pointer;
	background-color: none;
	border: 0px solid #c8c8c8;
	border-radius: 3px;
	color: #c8c8c8;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
}

.ossn-polls-form-questions div[data-toggle="buttons"] label:hover {
	color: #0b769c;
}

.ossn-polls-form-questions div[data-toggle="buttons"] label:active,
div[data-toggle="buttons"] label.active {
	-webkit-box-shadow: none;
	box-shadow: none;
}

.ossn-polls-item {
	background: var(--bg-main);
	/*border-top: var(--border-btn) solid var(--clr-border-btn);*/
	padding-top: 5px;
	padding: 5px 10px 10px;
}

.btn-group-vertical {
	margin-top: 10px;
}

.ossn-poll-main {
	background: #fff;
	padding: 15px;
}

.menu-section-polls i:before {
	font-family: 'Font Awesome 5 Free';
	content: "\f080" !important;
}

.menu-section-item-polls-all:before {
	font-family: 'Font Awesome 5 Free';
	content: "\f080" !important;
}

.menu-section-item-polls-all:before {
	font-family: 'Font Awesome 5 Free';
	content: "\f080" !important;
}

.poll-container {
	margin-bottom: 20px;
	background-color: #fff;
	border: 1px solid transparent;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
	box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
	border-color: #ddd;
}

.poll-body {}

.poll-title {
    color: var(--text-header);
	background-color: var(--bg-header);
    border-color: var(--clr-border-btn);
    border-bottom:var(--border-input) solid transparent;
	border-top-left-radius: var(--border-checkbox-radius);
	border-top-right-radius: var(--border-checkbox-radius);	
    /*color: #333;
	background-color: #f5f5f5;
	border-color: #ddd;
	border-bottom: 1px solid transparent;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;*/
    font-size: 16px;
	font-weight: bold;
	padding: 10px 15px;
}

.poll-footer {
	padding: 10px 15px;
	background-color: var(--bg-main);
	border-top: var(--border-btn) solid var(--clr-border-btn);
	border-bottom-right-radius: var(--border-checkbox-radius);
	border-bottom-left-radius: var(--border-checkbox-radius);
}
.poll-votes-total {
    font-size: 13px;
    margin-left: 5px;
    float: right;
}