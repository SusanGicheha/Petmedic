<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pet Medic Vet Clinic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-repeat: no-repeat;
                background-image: url("/image/doggo.png");
                background-size: 1500px;
            }
            .header{
               
                height: 70px;
                width: 100%;
                background-color:transparent;
                
            }
           .main{
            font-family: 'Montserrat', sans-serif;
            width: 700px;
	        height: 350px;
            line-height: 1rem;
           
            border-width: 2px;
            border-style: double;
            border-color:white;
            text-align: center;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin:auto;
            color: black;
            
          
        }
        .title
        {
            padding-top: 1.75rem;
        }
        .text
        {
            font-weight: 600;
            padding-top: 2rem;
            margin: 2.5rem;
        }
        .text1
        {
            margin: 2.5rem;
            
            font-weight: 600;

        }
        .subtitle
        {
            font-style: italic;
            font-weight: 600;
        }
        .action
        {
            font:bold ;
            background: transparent;
            color: black;
            height: 40px;

            border-color: gray;
            border-style: round;
            border-width: 2px;

        }
        .auth
        {
            font-style: normal;
            font-weight: 800;
            margin-left: 1rem;
            margin-right: 1rem;
        }
        footer
        {
         display:block;
        }
        .col_white_amrc { color:#FFF;}
footer
 { 
    width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;
}
.pt2
 {
     padding-top:40px ; margin-bottom:0px ;
}
footer p
 { 
     font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;
}
.mb10
 { 
    
    padding-bottom:15px ;
}
.footer_ul_amrc 
{ 
    
    margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; 
}
.footer_ul_amrc li
 {
     padding:0px 0px 5px 0px;
    }
.footer_ul_amrc li a
{ 
    color:#CCC;
}
.footer_ul_amrc li a:hover
{
     color:#fff; text-decoration:none;
}
.fleft
 { 
     float:left;
    }
.padding-right

{ 
    
    padding-right:10px; 
}

.footer_ul2_amrc
 {
     margin:0px; list-style-type:none; padding:0px;
    }
.footer_ul2_amrc li p 
{ 
    display:table; 
}
.footer_ul2_amrc li a:hover 
{ 
    text-decoration:none;
}
.footer_ul2_amrc li i 
{ margin-top:5px;
}

.bottom_border
 { 
     border-bottom:1px solid #323f45; padding-bottom:20px;
    }
.foote_bottom_ul_amrc {
	list-style-type:none;
	padding:0px;
	display:table;
	margin-top: 10px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
}
.foote_bottom_ul_amrc li 
{
     display:inline;
}
.foote_bottom_ul_amrc li a 
{
     color:#999; margin:0 12px;
    }

.social_footer_ul 
{
     display:table; margin:15px auto 0 auto; list-style-type:none; 
     }
.social_footer_ul li
 {
      padding-left:20px; padding-top:10px; float:left; 
    }
.social_footer_ul li a
 {
     color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;
    }
.social_footer_ul li i
 {  width:20px; height:20px; text-align:center;

}
       
         
        </style>

    </head>
    <body>
        
    <header class = "header">
    
        <div class="" >
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 flex  ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-white  underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="auth text-lg ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="auth text-lg ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
           

                </div>
        </header>
        <div class="main">
            <h1 class="title">Pet Medic Medical Diary</h1>
            <p class="subtitle">Your pets medical diary</p>
            <p class="text">This is a platform that makes it easy for you to keep your pets medical records just at the tap of a button.</p>
            <p class="text1">Book appointments and stay on your pet's vaccination schedule at the comfort of your home</p>
    
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        

        <footer class="footer">
        <div class="container bottom_border">
        <div class="row">
        <div class=" col-sm-4 col-md col-sm-4  col-12 col">
        <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>

        <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <p><i class="fa fa-location-arrow"></i>Nairobi,Kenya</p>
        <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
        <p><i class="fa fa fa-envelope"></i> petmedic@logistics.com  </p>

      


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Remove Background</a></li>
<li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
<li><a href="http://webenlance.com">Logo Design</a></li>
<li><a href="http://webenlance.com">Vectorization</a></li>
<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
<li><a href="http://webenlance.com">Image Cropping</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Follow us on Twitter<a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a><p>Follow us on Instagram<a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-quora fleft padding-right"></i> </a><p>Follow us on Quora<a href="#">https://www.lipsum.com/</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="http://webenlance.com">Home</a></li>
<li><a href="http://webenlance.com">About</a></li>
<li><a href="http://webenlance.com">Services</a></li>
<li><a href="http://webenlance.com">Pricing</a></li>
<li><a href="http://webenlance.com">Blog</a></li>
<li><a href="http://webenlance.com">Contact</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2021 | Designed With KS technologies by <a href="#">Pet medic Limited</a></p>

<ul class="social_footer_ul">
<li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Crédit to https://bootsnipp.com/snippets/bxDBA -->


</div>

        
        

        
    </body>
</html>
