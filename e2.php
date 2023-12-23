<?php
// connect to database
  $conn = mysqli_connect('localhost','root','','scoopworth');

// for checking of connection
  if(!$conn){
    echo'Connection error:' . mysqli_connect_error();
  }
            $id_article = '5';
            $id_author = '5';
            //writing queries
            $title = "SELECT title FROM articles WHERE id_article = $id_article";
            $fname = "SELECT firstname FROM author WHERE id_author = $id_author";
            $lname = "SELECT lastname FROM author WHERE id_author = $id_author";

            // make query and get results
            $result_t = mysqli_query($conn, $title);
            $result_f = mysqli_query($conn, $fname);
            $result_l = mysqli_query($conn, $lname);

            //fetch the resulting rows as an array
            $a_t = mysqli_fetch_all($result_t, MYSQLI_ASSOC);
            $f_t = mysqli_fetch_all($result_f, MYSQLI_ASSOC);
            $l_t = mysqli_fetch_all($result_l, MYSQLI_ASSOC);

            // free result form memory
            mysqli_free_result($result_t);
            mysqli_free_result($result_f);
            mysqli_free_result($result_l);

            // close connection
            mysqli_close($conn);  
?>

<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Enchong Dee shares greatest lesson learned from 15-year show biz career</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include('templates.php')?>
</head>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo"><img src="assets/img/snLogo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">HOME</a></li>
          <li><a class="nav-link scrollto" href="nationGrid.php">NATION</a></li>
          <li><a class="nav-link  scrollto" href="businessGrid.php">BUSINESS</a></li>
          <li><a class="nav-link  scrollto" href="sportsGrid.php">SPORTS</a></li>
          <li><a class="nav-link  scrollto active" href="entertainmentGrid.php">ENTERTAINMENT</a></li>
          <li><a class="nav-link  scrollto" href="lifestyleGrid.php">LIFESTYLE</a></li>
         <li class="dropdown"><a href="#"><span>ABOUT US</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="aboutUs.php">STAFF</a></li>
              <li><a href="aboutUs1.php">CONTACT US</a></li>                                                                    
            </ul>
            </li> 
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  
<script>
  var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
  </script>

<body>
 <main id="main">

  <!-- SHARE CONTENT -->
  <div id="at-custom-sidebar" class="at-custom-sidebar atss-left addthis-animated slideInLeft" style="background-color: rgb(255, 255, 255);">

  <div class="at-custom-sidebar-label at4-hide">
    
  </div>

  <div class="at-custom-sidebar-btns">

  <a role="button" tabindex="0" title="Facebook" class="at-share-btn at-svc-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://entertainment.inquirer.net/425943/enchong-dee-shares-greatest-lesson-learned-from-15-year-show-biz-career?utm_campaign=sharedpost">

  <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" title="Facebook" alt="Facebook" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;" class="at-icon at-icon-facebook">

    <title id="at-svg-facebook-1">Facebook</title>

    <g>

      <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>

    </g>

    </svg>
  </span>
  </a>

    <a role="button" tabindex="0" title="LinkedIn" class="at-share-btn at-svc-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=https://entertainment.inquirer.net/425943/enchong-dee-shares-greatest-lesson-learned-from-15-year-show-biz-career">

      <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-linkedin-3" title="LinkedIn" alt="LinkedIn" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;" class="at-icon at-icon-linkedin">

          <title id="at-svg-linkedin-3">LinkedIn</title>

          <g>

            <path d="M26 25.963h-4.185v-6.55c0-1.56-.027-3.57-2.175-3.57-2.18 0-2.51 1.7-2.51 3.46v6.66h-4.182V12.495h4.012v1.84h.058c.558-1.058 1.924-2.174 3.96-2.174 4.24 0 5.022 2.79 5.022 6.417v7.386zM8.23 10.655a2.426 2.426 0 0 1 0-4.855 2.427 2.427 0 0 1 0 4.855zm-2.098 1.84h4.19v13.468h-4.19V12.495z" fill-rule="evenodd"></path>

          </g>

        </svg>
        </span>
        </a>

    <a role="button" tabindex="0" title="Reddit" class="at-share-btn at-svc-reddit" href="http://www.reddit.com/submit?url=https://entertainment.inquirer.net/425943/enchong-dee-shares-greatest-lesson-learned-from-15-year-show-biz-career">

      <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-reddit-3" title="Reddit" alt="Reddit" class="at-icon at-icon-reddit" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;">

          <title id="at-svg-reddit-4">Reddit</title>

          <g>

            <path d="M27 15.5a2.452 2.452 0 0 1-1.338 2.21c.098.38.147.777.147 1.19 0 1.283-.437 2.47-1.308 3.563-.872 1.092-2.06 1.955-3.567 2.588-1.506.634-3.143.95-4.91.95-1.768 0-3.403-.316-4.905-.95-1.502-.632-2.69-1.495-3.56-2.587-.872-1.092-1.308-2.28-1.308-3.562 0-.388.045-.777.135-1.166a2.47 2.47 0 0 1-1.006-.912c-.253-.4-.38-.842-.38-1.322 0-.678.237-1.26.712-1.744a2.334 2.334 0 0 1 1.73-.726c.697 0 1.29.26 1.78.782 1.785-1.258 3.893-1.928 6.324-2.01l1.424-6.467a.42.42 0 0 1 .184-.26.4.4 0 0 1 .32-.063l4.53 1.006c.147-.306.368-.553.662-.74a1.78 1.78 0 0 1 .97-.278c.508 0 .94.18 1.302.54.36.36.54.796.54 1.31 0 .512-.18.95-.54 1.315-.36.364-.794.546-1.302.546-.507 0-.94-.18-1.295-.54a1.793 1.793 0 0 1-.533-1.308l-4.1-.92-1.277 5.86c2.455.074 4.58.736 6.37 1.985a2.315 2.315 0 0 1 1.757-.757c.68 0 1.256.242 1.73.726.476.484.713 1.066.713 1.744zm-16.868 2.47c0 .513.178.95.534 1.315.356.365.787.547 1.295.547.508 0 .942-.182 1.302-.547.36-.364.54-.802.54-1.315 0-.513-.18-.95-.54-1.31-.36-.36-.794-.54-1.3-.54-.5 0-.93.183-1.29.547a1.79 1.79 0 0 0-.54 1.303zm9.944 4.406c.09-.09.135-.2.135-.323a.444.444 0 0 0-.44-.447c-.124 0-.23.042-.32.124-.336.348-.83.605-1.486.77a7.99 7.99 0 0 1-1.964.248 7.99 7.99 0 0 1-1.964-.248c-.655-.165-1.15-.422-1.486-.77a.456.456 0 0 0-.32-.124.414.414 0 0 0-.306.124.41.41 0 0 0-.135.317.45.45 0 0 0 .134.33c.352.355.837.636 1.455.843.617.207 1.118.33 1.503.366a11.6 11.6 0 0 0 1.117.056c.36 0 .733-.02 1.117-.056.385-.037.886-.16 1.504-.366.62-.207 1.104-.488 1.456-.844zm-.037-2.544c.507 0 .938-.182 1.294-.547.356-.364.534-.802.534-1.315 0-.505-.18-.94-.54-1.303a1.75 1.75 0 0 0-1.29-.546c-.506 0-.94.18-1.3.54-.36.36-.54.797-.54 1.31s.18.95.54 1.315c.36.365.794.547 1.3.547z" fill-rule="evenodd"></path>

          </g>

        </svg>
      </span>
      </a>

      <a role="button" tabindex="0" title="Telegram" class="at-share-btn at-svc-telegram" href="https://telegram.me/share/url?url=https://entertainment.inquirer.net/425943/enchong-dee-shares-greatest-lesson-learned-from-15-year-show-biz-career&text=Enchong Dee shares greatest lesson learned from 15-year show biz career">

      <span class="at-icon-wrapper" style="background-color: rgb(255, 255, 255); line-height: 50px; height: 50px; width: 50px; border-radius: 0%;">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -2 17 20" version="1.1" role="img" aria-labelledby="at-svg-telegram-5" title="Telegram" alt="Telegram" class="at-icon at-icon-telegram" style="fill: rgb(51, 51, 51); width: 32px; height: 32px;">

          <title id="at-svg-telegram-5">Telegram</title>

          <g>

            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" fill-rule="evenodd"></path>

          </g>

        </svg>
      </span>
      </a>

  </div>
</div>
</div>
</div>

    <!-- ======= Blog Single ======= -->
    <div class="main-content paddsection">
    <div class="article">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-md-offset-2">
            <div class="row">
              <div class="container-main single-main">
                <div class="col-md-12">
                  <div class="block-main mb-30">
                    <div class="content-main single-post padDiv">
                      <div class="journal-txt">
                      <h2><a href="#"><?php echo htmlspecialchars($a_t[0]['title']);?></a></h2>
                        <div class="post-meta">
                          <ul class="list-unstyled mb-0">
                            <li class="author">by:  <a href="https://entertainment.inquirer.net/425943/enchong-dee-shares-greatest-lesson-learned-from-15-year-show-biz-career">
                            <?php echo htmlspecialchars($f_t[0]['firstname']); echo('&nbsp');echo htmlspecialchars($l_t[0]['lastname']);?>
                            </a></li>
                            <li class="date">date:<a href="#">November 06, 2021</a></li>
                          </ul>
                        </div>
                        <br>
                        <p style="text-align: center;"><img src="Entertainment/entertainment5.png" class="img-responsive" alt="Enchong Dee in MMK�s �Ink of Smile�" ></p>
                      </div>
                      
                       
                    <!-- <p class="mb-30"></p>
                      <p class="mb-30"></p>
                      <blockquote></blockquote> -->
                      
                      <blockquote>"My Plan B has always been to become a business tycoon, never to switch networks," said actor-TV host Enchong Dee 
                      when asked why he chose to remain an ABS-CBN talent for 15 long years. </blockquote>
                      
                      <p class="mb-30"> He claimed there were offers for him to work on projects produced by other companies or networks even before 
                      the pandemichappened or the network shutdown, but he never considered any of them. "I would always say that I've already come 
                      to a point in my life when I only want to keep whatever relationships I've already established. Money, you can always earn it, 
                      although this has never been my goal for working in the industry. I feel like I don't want to start a new relationship 
                      anymore," Enchong explained. </p>
                      
                      <p class="mb-30"> "I feel that I'm still needed here," said Enchong. "Yes, our numbers here are slowly decreasing. I would often
                       hear people leaving. Their reasons for doing this are valid. This is just my opinion-I want to stay a Kapamilya." </p>
                       
                      <h4> Daily Basis </h4>
                       
                       <p class="mb-30"> As to what made him decide to stay in show biz this long, Enchong said: "I had to make that decision on a 
                       daily basis. People in Star Magic know this-I have attempted to retire from acting several times. I would say, 'five or ten 
                       years, I think that's enough.' Tita Monch (Novales), my handler for the last 15 years told me that an actor never retires. 
                       Yes, you can take your sweet time, but if you really love the craft you will eventually come back." </p>
                       
                       <p class="mb-30"> Enchong said spending many years in the biz is "like a medal. It's something you can show your peers and 
                       family. It's proof that I'm still needed, that I can still offer something to people. I'm very humbled to still be working 
                       here. Whenever I pray, it's always to thank the Lord that I have work even at the time of the pandemic, when a lot of people 
                       are becoming poor." </p>
                       
                       <p class="mb-30"> The greatest lesson Enchong said he has learned through those years is this: "I just can't remember from 
                       whom I heard this from-either Nanay Gina (Alajar) or Janice (de Belen) told me that while acting or performing can be learned,
                       the personality of an actor is hard to change. This is why we should first make sure we're good with people. We can always
                       study the craft later. This industry is very small so there is a big chance that you will need the help of people you've 
                       disrespected in the past." </p>
                       
                       <blockquote> He further explained: "I noticed that the actors who have come before us, the senior ones, become more
                       generous in helping and sharing their experiences with us if we treat them well." </p> </blockquote>
                       
                       <h4> Important Lesson </h4>
                       
                       <p class="mb-30"> Enchong will be featured in the longest-running drama anthology "Maalaala Mo Kaya," (MMK) in today's episode
                       titled "Ink of Smile." His episode will tell the story of Edwin Pranada, a cosmetic tattooist who gives free service to people 
                       suffering from alopecia. </p>
                       
                       <p class="mb-30"> "While doing this episode, I got reminded of how much I enjoy working with the whole team-how we would all 
                       get tired together. I like it that we're all called Kapamilya. That�s what I would always look for on the set of whatever 
                       project I'm part of. I treat everyone a Kapamilya, from the cast and the director to the wardrobe, staff and utility," said 
                       Enchong. Enchong is also a cast of the drama series "Huwag Kang Mangamba," which is currently airing its final two weeks. He 
                       is likewise busy making content for his YouTube channel, which, he said, would focus more on educating Filipinos about 
                       financial literacy. </p>
                       
                       <p class="mb-30"> "We have learned an important lesson with the pandemic. We need to be financially independent so that 
                       whatever tragedy would befall us next, hindi tayo naghihikahos. We've heard a lot of sad stories of Filipinos who could no 
                       longer afford to make both ends meet. That's something I want to focus on," Enchong pointed out. "I'm actually enjoying it 
                       that I get to meet a lot of small-scale entrepreneurs. They are those who, even while we're in a pandemic, still fought in 
                       order to save their businesses for the sake of their employees. I realized that they are what I needed to put a spotlight 
                       on." </p>
                      
                      <h4> Expression </h4>
                      
                      <p class="mb-30"> Enchong turned 33 yesterday. As a birthday wish, he said he hoped to "take the time off to learn new things.
                      I want to learn more from business people, to try out their lifestyle. Being in show biz can be a privilege, sometimes. I need
                      to ground myself once in a while," he said. In MMK, Enchong's character, Edwin, first tried to earn money by collecting 
                      garbage. He also resorted to tricking people and selling them drugs. He eventually became a renowned cosmetic tattoo artist.</p>
                      
                      <blockquote>Enchong, however, has no tattoo. "It's a personal choice. I donate blood every three months. If you get a 
                      tattoo, you can't donate blood for a year," he explained. "But for me, it's a form of art. It's an expression of one's self.
                       I know some people would get tattoos for their self-confidence. We try to gain self-confidence in different ways. How you 
                       carry yourself is your choice. You don't have to listen to other people's opinion to be able to express yourself." </blockquote> 
                      
                      <p class="mb-30"> If ever he could get a tattoo, though, it would be a Philippine flag drawn on his chest, near his left 
                      collar bone. "My ultimate dream back then was to compete in the Olympics," said the former member of the national swimming 
                      team. "I used to imagine getting a tattoo of the five rings of the Olympics and the Philippine flag. Now, it will just be the 
                      flag. I just don't understand why I love this country so much." </p>
                      
                      <p class="mb-30"> "MMK" celebrates its 30th anniversary this month with stories of inspiration, hope, and love. Watch MMK 
                      on the Kapamilya Channel and A2Z, Kapamilya Online Live on ABS-CBN Entertainment's YouTube channel and Facebook page, and 
                      iWantTFC.</p>
                      
                    </div>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div><!-- End Blog Single -->
 </main>
<!-- ======= Footer ======= -->
<?php include('footer.php')?>
</html>
