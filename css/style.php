<style type="text/css">
html{
	scroll-behavior: smooth;
}

*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif;}

.row{ margin-left: 0!important; margin-right: 0!important;}
.nav_style{
	background-color: #a29bfe!important;
}
.nav_style a{
	color: white;
	
}




.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{
	font-size: 3rem;
}
.leftside img {  animation:  blink 5s linear infinite ;
	
}
@keyframes blink{
	0%
	{
		transform: scale( .75);
	}
	20%
	{
		transform: scale( 1);
	}
	40%
	{
		transform: scale( .75);
	}
	60%
	{
		transform: scale( 1 );
	}
	80%
	{
		transform: scale( .75);
	}
	100%
	{
		transform: scale( .75);
	}
	
}
.corona_rot img{
	height: 50px;
	width: 50px;
	animation: rot 3s linear infinite;
}

@keyframes rot {
	0% {transform: rotate(0);}
	100% {transform: rotate(360deg);}
}
/*********** corona updates ************/
.corona_update{
	margin: 0 0 30px 0;
}
.corona_update h3{
	color: #ff7675;
	text-align: center;
}
.shadow td{
	font-size: 2rem;
	text-align: center;
}
/************** about section **************/
.sub_section{
	background-color: #fbfafd;
}
/****************************upper footer************************/

.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col p{
color: #bbbbbb;	
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}



/***************************lower footer*************************/

.footer_style{
	background-color: #a29bfe!important;
}
.footer_style p{
	margin-bottom: 0!important;
	height:40px;
	padding-top:8px;
}
/************************top scroll***************/
#myBtn {
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}
#myBtn: hover {
	background: #606060;
}
/********************** responsive /////////////*/

@media(max-width: 768px){
	.main_header { height: 700px; text-align: center;}
	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 34px;
	}
	

.count_style{
	display: inline!important;
}
.count_style p{text-align: center;}
.about_res{
	margin-left:0!important;
}


}
</style>