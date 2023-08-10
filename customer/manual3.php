<!DOCTYPE html>
<html>
<head>
<style>

  @mixin media() {
    @media (min-width: 768px) {
        @content;
    }
}

body, html {
  font-family: 'Vollkorn', serif;
  font-weight: 400;
  line-height: 1.3;
  font-size: 16px;
}

.siteTitle {
  display: block;
  font-weight: 900;
  font-size: 30px;
  margin: 20px 0;
  
  @include media {
    font-size: 60px;
  }
}

header,
main,
footer {
  max-width: 960px;
  margin: 0 auto;
}

.card {
  height: 200px;
  width: 40px
  position: relative;
  padding: 20px;
  box-sizing: border-box;
  display: flex;
  align-items: flex-end;
  text-decoration: none;
  border: 4px solid #215eb0;
  margin-bottom: 20px;

    background-size: cover;
  
  @include media {
    height: 700px;
  }
}

.inner {
  height: 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center; 
  background: white;
  box-sizing: border-box;
  padding: 40px;
  
  @include media {
    width: 50%;
    height: 100%;
  }
}

.title {
  font-size: 24px;
  color: black;  
  text-align: center;
  font-weight: 700;
  color: black;
  text-shadow: 0px 2px 2px #a6f8d5;
  position: relative;
  margin: 0 0 20px 0;
  
  @include media {
    font-size: 30px;
  }
}

.subtitle {
  color: black;
  text-align: center;
}
.siteTitle{
  text-align: center;
}


footer {
  display: flex;
  justify-content: center;
  margin: 40px 0;
}

.footerLink {
  margin-right: 12px;
  color: #181818;
  text-decoration: none;
  position: relative;
  
  &:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 4px;
    background-color: rgba(#b0215e, 0.3);
    left: 0;
    bottom: 0;
  }
  
  &:last-child {
    margin-right: 0;
  }

}


@media(max-width: 750px){

    #page-wrapper{
        position: absolute;
        top: 900px;
        left: 0;
        text-align: center;

    }
    main{
      padding: 20px;
      margin: 10px;
      text-align: center;
      width: 100%;
    }
    main .inner{
      padding: 20px;
      margin-top: 25px; 
      margin-bottom: 30px;
    }

}

</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>customer's Status</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include 'customerheader.php'; 
$username = $_SESSION["customerLogIn"];
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"></h1>
                    
                
                <!-- /. ROW  -->


   <header>
  <span class="siteTitle">
የተጠቃሚዎች
 መመሪያ<span>
</header>

<main>
  <a href="https://google.com" class="card">
      <div class="inner">
        <h1 class="title">የድርጅቱን ደንቦች እና የባንክችን መረጃ ለማገኘት</h1>
       <h3 class="title"> &rarr; ደንቦች የሚለዉን በመጫን ሙሉ መረጃ ያገኛሉ</h3>

      </div>
  </a>
        
  <a href="https://google.com" class="card card2">
      <div class="inner">
        <h1 class="title">ሙሉ የእርሰውን እና የቤተሰበውን መረጃ ለማገኘት</h1>
      <h6 class="title"> &rarr; ማህደር የሚለውን በመጫን ሙሉ መረጃ ያገኛሉ</h6>

      </div>
  </a>

  <a href="https://google.com" class="card card3">
      <div class="inner">
       <h3 class="title">የሚስጥር ቁጥረዎን ለመቀየር</h3>
      <h2 class="title">&rarr; መቸት የሚለዉን በመጫን በመጀመርያም በፊት የሚጠቀሙበትን ሚስጥር ቁጥር በማስገባት ከዝያም ማረጋገጫ የሚለው ላይ ደግመው ያንኑ በማስገባት ከዝያም አድሱን የሚስጥር ቁጥር አድሱን ቁጥረወን አስገቡ የሚለውን ማሰገባት ከዝያም ቀይር ይሚለውን ምልክት ስትጫኑ ማረጋገጫ ይደርሰውታል</h2>
      </div>
  </a>

  <a href="https://google.com" class="card card4">
      <div class="inner">
        <h3 class="title">የድርጂቱን አዳድስ መረጃወች እና አመታዊ የክፍያ ቀኖች ለማግኘት </h3>
      <h2 class="title"> &rarr; አድስ ነገር የሚለዉን በመጫን ሙሉ መረጃ ያግኙ</h2>
      </div>
  </a>

  <a href="https://google.com" class="card card5">
      <div class="inner">
         <h1 class="title">ቅሬታ ለማቅረብ ወይንም አስተያየት ለመስጠት</h1>
      <h2 class="title">&rarr; ቅሬታ የሚለዉን በመጫን ቅሬታውን ማቅረብ ይችላሉ</h2>
      </div>
  </a>

  <a href="https://google.com" class="card card6">
      <div class="inner">
        <h1 class="title">የመለያ ካርደወን ለማግኘት</h1>
      <h2 class="title">&rarr; መታወቂያ ካርድ የሚለዉን በመቻን ያገኛሉ</h2>
      </div>
  </a>

  <a href="https://google.com" class="card card7">
      <div class="inner">
       <h3 class="title">ክፍያወን ለማረጋገጥ </h3>
      <h2 class="title">&rarr; ክፍያ የሚለውን በመጫን ቀጥሎም ይክፍያ ማረጋገጫ ይሚለን ምልክት በመጫን ዎደ ሙሉ የክፍያ<br> ማረጋገጫ የሚል ገጽ ይወስደውታል ከዝያም ሙሉ ይክፍያ መረጃወን ያግኙ የሚለውን በመጫን ዝርዝር መረጃ ያግኙ</h2>
      </div>
  </a>
<main>
                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
